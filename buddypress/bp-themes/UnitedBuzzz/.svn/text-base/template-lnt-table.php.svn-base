<?php
/*
Template Name: Table LnT
*/
?>
<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>
	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div">
		<?php
			global $lntType;
			$lntType = $_GET['lnt_type_slug'];
			$faCupTerm = get_term_by('slug', $lntType, 'leagues_tournaments_category');
			$lntPage = get_page_by_title('LNT');
			
			$lntTag = get_term_by('slug', $lntType, 'post_tag');
		//	print_r($lntTag);
			//echo get_tag_link($lntTag->term_id);
		?>
			<div id="player-tabs">
				<ul>
					<li><a href="<?php echo get_permalink($lntPage->ID); ?>?lnt_type_slug=<?php echo $lntType; ?>"><?php echo $faCupTerm->name; ?></a></li>
					<li><a href="<?php echo get_tag_link($faCupTerm->term_id).'?type=lnt&postType=news&playerID='.$faCupTerm->term_id; ?>">News</a></li>
					<li><a href="<?php echo get_tag_link($faCupTerm->term_id).'?type=lnt&postType=post&playerID='.$faCupTerm->term_id; ?>">Blog Posts</a></li>.
					<li><a href="<?php echo bloginfo('url'); ?>/top-scorers-<?php echo $lntType; ?>?lnt_type_slug=<?php echo $lntType; ?>">Top Scorers</a></li>
					<?php $lntSlugArray = array('uefa-champions-league','barclays-premiere-league');
						if(in_array($lntType,$lntSlugArray)){ ?>
						<li><a class="activePage" href="<?php echo bloginfo('url'); ?>/table-<?php echo $lntType; ?>?lnt_type_slug=<?php echo $lntType; ?>">Table</a></li>
					<?php }?>
				</ul>
			</div><!--END #player-tabs-->
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 class="chants-single-title"><?php the_title(); ?></h3>
				</div>
			</div>
			<?php the_content(); ?>
		</div><!--END #center-content-div -->
	</div><!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
