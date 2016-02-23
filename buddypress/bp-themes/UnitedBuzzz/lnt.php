<?php
/*
Template Name: Leagues & Tournaments
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
					<li><a class="activePage" href="<?php echo get_permalink($lntPage->ID); ?>?lnt_type_slug=<?php echo $lntType; ?>"><?php echo $faCupTerm->name; ?></a></li>
					<li><a href="<?php echo get_tag_link($faCupTerm->term_id).'?type=lnt&postType=news&playerID='.$faCupTerm->term_id; ?>">News</a></li>
					<li><a href="<?php echo get_tag_link($faCupTerm->term_id).'?type=lnt&postType=post&playerID='.$faCupTerm->term_id; ?>">Blog Posts</a></li>.
					<li><a href="<?php echo bloginfo('url'); ?>/top-scorers-<?php echo $lntType; ?>?lnt_type_slug=<?php echo $lntType; ?>">Top Scorers</a></li>
					<?php $lntSlugArray = array('uefa-champions-league','barclays-premiere-league');
						if(in_array($lntType,$lntSlugArray)){ ?>
						<li><a href="<?php echo bloginfo('url'); ?>/table-<?php echo $lntType; ?>?lnt_type_slug=<?php echo $lntType; ?>">Table</a></li>
					<?php }?>
				</ul>
			</div><!--END #player-tabs-->
			<div id="menu-pages-heading-wrapper">
			<?php

				#Gets "All" "Unique" "FA Cup" "Parent" Posts
				global $wpdb;
				global $table_prefix;
				$query = "SELECT * 
							FROM ".$table_prefix."posts lt, ".$table_prefix."term_relationships tr
							WHERE lt.post_type='leagues_tournaments'
								AND lt.post_status='publish'
								AND lt.post_parent = 0
								AND lt.ID = tr.object_id
								AND tr.term_taxonomy_id=".$faCupTerm->term_taxonomy_id."
							GROUP BY lt.post_title ORDER BY lt.post_title DESC";

				$uniqueParentFaCupPosts = $wpdb->get_results($query);
				#print_R($uniqueParentFaCupPosts);
			?>
				<div id="menu-pages-heading">
					<h3><?php echo $faCupTerm->name; ?></h3>
				</div>
			</div><!--END #menu-pages-heading-wrapper -->
		
			<span>Season:&nbsp;</span>
			<select class="lnt-select" id="type-<?php echo $_GET['lnt_type_slug']; ?>">
			<?php foreach($uniqueParentFaCupPosts as $uniqueParentFaCupPost) { ?>
				<option title="<?php echo $faCupTerm->term_taxonomy_id; ?>" id="post-<?php echo $uniqueParentFaCupPost->ID; ?>">
					<?php echo $uniqueParentFaCupPost->post_title; ?>
				</option>
			<?php } ?>
			</select>

			<?php
				$query = "SELECT * 
					FROM ".$table_prefix."posts lt, ".$table_prefix."term_relationships tr
					WHERE lt.post_type='leagues_tournaments'
						AND lt.post_status='publish'
						AND lt.post_parent = ".$uniqueParentFaCupPosts[0]->ID."
						AND lt.ID = tr.object_id
						AND tr.term_taxonomy_id=".$faCupTerm->term_taxonomy_id."
					GROUP BY lt.post_title ORDER BY lt.menu_order";
				#echo $query;
				$data['childPosts'] = $wpdb->get_results($query);
				#print_r($data['childPosts']);
				if(empty($data['childPosts'])) {
			?>
					<h3>Coming Soon</h3>
			<?php
				}

				if($_GET['lnt_type_slug'] != 'barclays-premiere-league') {
			?>
					<ul id="child-leagues-tournaments">
					<?php foreach($data['childPosts'] as $childPosts) { ?>
						<li class="lnt-rounds" id="<?php echo $childPosts->ID ?>">
							<div class="lnt-back-triangle"></div>
							<div class="single-child-title">
								<span><?php echo $childPosts->post_title; ?></span>
							</div>
							<div class="lnt-front-triangle"></div>
						</li>
					<?php } ?>
					</ul><!--END #player-tabs -->
			<?php
				}#END if league type != barclays-premiere-league 
				else {
			?>
					<select id="child-leagues-tournaments-dropdown">
						<?php foreach($data['childPosts'] as $childPosts) { ?>
							<option id="<?php echo $childPosts->ID ?>">
								<?php echo $childPosts->post_title; ?>
							</option>
						<?php } ?>
					</select><!--END #player-tabs -->
			<?php
				}
			?>
			
			
			<div class="clear"></div>
			<div id="lnt-content">
				<h3><?php echo $data['childPosts'][0]->post_title; ?></h3>
				<?php echo $data['childPosts'][0]->post_content; ?>
			</div>
			
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 style="margin-top:30px;">Top Scorers For This Season</h3>
				</div>
			</div>
			<div class="clear"></div>
			
			
			<?php
				$postCustom = get_post_custom($uniqueParentFaCupPosts[0]->ID);
				if(!empty($postCustom)) {
			?>
				<div id="lnt-top-scorer">
					<table>
					<?php for($i=1;$i<=3;$i++) { ?>
						<tr>
							<td><?php echo $postCustom['player_lnt_top_scorer_name_'.$i][0]; ?></td>
							<td><?php echo $postCustom['player_lnt_top_scorer_goals_'.$i][0]; ?></td>
						</tr>
					<?php } ?>
					</table>
				</div>
				<div class="clear"></div>
			<?php } ?>
			
			
			

			<?php
				$newsForTag = new WP_Query('post_type=news&tag='.$_GET['lnt_type_slug']);
				if(!empty($newsForTag->posts)) {
			?>
				<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3>News</h3>
					</div>
				</div>
			<?php foreach($newsForTag->posts as $newsForTag) { ?>
				<div class="custom-post-type-content">
					<div class="clear">&nbsp;</div>					
					<div class="custom-post-type-content">
						<div class="current-squad-preview-player-image-wrapper news-featured-image-wrapper">
							<div class="news-featured-image">
							<?php #echo get_post_thumbnail_id($newsForTag->ID); ?>
							<?php if(has_post_thumbnail($newsForTag->ID)) : ?>
								<a href="<?php echo get_permalink($newsForTag->ID); ?>" title="<?php echo $newsForTag->post_title; ?>" >
									<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($newsForTag->ID)); ?>
									<img src="<?php echo $image[0]; ?>" width="105px" height="90px"></img>
								</a>	
							<?php endif; ?>
							</div>
						</div>
						<div class="news-content-wrapper">
							<h4>
								<a href="<?php echo get_permalink($newsForTag->ID); ?>">
									<span class="custom-post-type-content-title news-title"><?php echo $newsForTag->post_title; ?></span>
								</a>
							</h4>
							<div class="news-metadata"><?php echo date('F j Y', strtotime($newsForTag->post_date)); ?></div>
							<div class="news-excerpt"><?php echo $newsForTag->post_excerpt; ?></div>
						</div>
						<div class="clear">&nbsp;</div>
					</div>
				</div>
			<?php } } ?>
			
		</div><!--END #center-content-div -->
	</div><!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>

