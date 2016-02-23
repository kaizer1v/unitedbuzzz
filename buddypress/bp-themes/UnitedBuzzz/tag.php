<?php get_header('main') ?>
<?php get_sidebar('left') ?>
<?php
	$playerID = $_GET['playerID'];
	$currentTag = get_query_var('tag');
	$tagTerm = get_term_by('slug', $currentTag, 'post_tag');
	$newsForTag = new WP_Query('post_type='.$_GET['postType'].'&tag='.$currentTag);
	$playerPost = get_post($playerID);
	$faCupTerm = get_term_by('slug', $currentTag, 'leagues_tournaments_category');
	if($_GET['postType'] == 'news') {
		$newsActivePage = "activePage";
		$blogActivePage = '';
	}
	if($_GET['postType'] == 'post') {
		$blogActivePage = "activePage";
		$newsActivePage = '';
	}
	if($_GET['postType'] == 'transfer') {
		$transferActivePage = "activePage";
		$newsActivePage = '';
	}
	//print_r($faCupTerm);
?>

<div id="center-content-div-wrapper">

	<div id="center-content-div" class="player-page-content-wraper">
	<?php if(!empty($_GET) && isset($_GET['playerID'])) { ?>
		<div id="player-tabs">
			<ul>
			<?php if( (isset($_GET['type'])) && ($_GET['type']=="lnt") ){ 
					$lntPage = get_page_by_title('LNT');
				?>
			
					<li><a href="<?php echo get_permalink($lntPage->ID); ?>?lnt_type_slug=<?php echo $currentTag; ?>"><?php echo $faCupTerm->name; ?></a></li>
					<li><a class="<?php echo $newsActivePage; ?>" href="<?php echo get_tag_link($faCupTerm->term_id).'?type=lnt&postType=news&playerID='.$faCupTerm->term_id; ?>">News</a></li>
					<li><a class="<?php echo $blogActivePage; ?>" href="<?php echo get_tag_link($faCupTerm->term_id).'?type=lnt&postType=post&playerID='.$faCupTerm->term_id; ?>">Blog Posts</a></li>
					<li><a href="<?php echo bloginfo('url'); ?>/top-scorers-<?php echo $currentTag; ?>?lnt_type_slug=<?php echo $currentTag; ?>">Top Scorers</a></li>
					<?php $lntSlugArray = array('uefa-champions-league','barclays-premiere-league');
						if(in_array($currentTag,$lntSlugArray)){ ?>
						<li><a href="<?php echo bloginfo('url'); ?>/table-<?php echo $currentTag; ?>?lnt_type_slug=<?php echo $currentTag; ?>">Table</a></li>
					<?php }?>
									
					
			<?php }else { ?>
					<?php $playerPost = get_post($playerID); ?>
					<li><a href="<?php echo get_permalink($playerID); ?>"><?php echo $playerPost->post_title; ?></a></li>
					<?php $playerBiographyPage = get_page_by_title('PlayerBiography'); ?>
					<li><a href="<?php echo get_permalink($playerBiographyPage->ID).'?playerID='.$playerID.'&termID='.$tagTerm->term_id; ?>">Information</a></li>
					<li><a class="<?php echo $blogActivePage; ?>" href="<?php echo get_tag_link($tagTerm->term_id).'?postType=post&playerID='.$playerID; ?>">Blog Posts</a></li>
					<li><a class="<?php echo $newsActivePage; ?>" href="<?php echo get_tag_link($tagTerm->term_id).'?postType=news&playerID='.$playerID; ?>">News</a></li>
					<?php $playerFans = get_page_by_title('PlayerFans'); ?>
					<li><a href="<?php echo get_permalink($playerFans->ID).'?playerID='.$playerID.'&termID='.$tagTerm->term_id; ?>">Fans</a></li>
			<?php } ?>
			</ul>
		</div><!--END #player-tabs -->
	<?php } ?>
	
		
		<?php if (!empty($newsForTag)) : foreach($newsForTag->posts as $postForTag) { ?>
			<div class="clear">&nbsp;</div>					
			<div class="custom-post-type-content">
				<div class="current-squad-preview-player-image-wrapper news-featured-image-wrapper">
					<div class="news-featured-image">
					<?php echo get_post_thumbnail_id($postForTag->ID); ?>
						<?php if(has_post_thumbnail()) : ?>
							<a href="<?php get_permalink($postForTag->ID); ?>" title="<?php echo $postForTag->post_title; ?>" >
								<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($postForTag->ID)); ?>
								<img src="<?php echo $image[0]; ?>" width="105px" height="90px"></img>
							</a>	
						<?php endif; ?>
					</div>
				</div>
				<div class="news-content-wrapper">
					<h4>
						<a href="<?php echo get_permalink($postForTag->ID); ?>">
							<span class="custom-post-type-content-title news-title"><?php echo $postForTag->post_title; ?></span>
						</a>
					</h4>
					<div class="news-metadata"><?php echo date('F j Y', strtotime($postForTag->post_date)); ?></div>
					<div class="news-excerpt"><?php echo $postForTag->post_excerpt; ?></div>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		<?php } endif; ?>
			
	</div> <!-- #content -->

</div> <!-- #content-container -->

<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
