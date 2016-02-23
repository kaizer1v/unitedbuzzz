<div class="custom-post-type-content">
	<div class="activity-tabs">
		<ul>
			<li><a href="<?php bloginfo('site_url')?>/blogz?sortby=recent">Most Recent</a></li>
			<li><a href="<?php bloginfo('site_url')?>/blogz?sortby=most-popular">Most Popular</a></li>
		</ul>
	</div>
	<div class="clear">&nbsp;</div>
	
	<?php
		#query_posts(array('posts_per_page'=>15, 'paged'=>$paged ));
		if(isset($_GET['sortby'])){
			if($_GET['sortby'] == 'most-popular') {
				query_posts(array('posts_per_page'=>15, 'paged'=>$paged, 'orderby' => 'comment_count', 'order' => 'DESC' ));
			}
		}
		#$popular_posts = $wpdb->get_results("SELECT id, post_title, comment_count FROM {$wpdb->prefix}posts WHERE post_type='post' ORDER BY comment_count DESC LIMIT 15");
	?>

	<?php #wp_reset_query(); ?>
	<div id="recent_blog_posts_wrapper" class="common-blog-posts-display group-item-body">
		<div id="recent_blog_posts">
			
			<?php if ( have_posts() ) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<?php do_action( 'bp_before_blog_post' ) ?>
					
					<!--<div class="post" id="post-<?php the_ID(); ?>">-->
						
						<?php if (has_post_thumbnail()) : ?>		
							<div class="current-squad-preview-player-image-wrapper news-featured-image-wrapper">
								<div class="news-featured-image">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<img src="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id() ); ?>" width="105px" height="90px"></img>
									</a>
								</div>
							</div><!--END .current-squad-preview-player-image-wrapper -->
						<?php endif; ?>
						
						
						<div class="blog-content-wrapper">
							<h4>
								<a href="<?php echo get_permalink()?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<span class="custom-post-type-content-title news-title"><?php the_title();?></span>
								</a>
							</h4>
							<div class="news-metadata"><?php the_time('F j Y');?></div>
							<div class="news-excerpt"><?php the_excerpt();?></div>
							<div class="clear"></div>
							
							<div>
							<!--<div class="metadata">-->
								<p class="date"><?php #the_time('l, j F Y'); ?> by <?php the_author_posts_link(); #echo bp_core_get_userlink($post->post_author); ?></p>
								<p class="categories">Categories:&nbsp;<?php the_category(', ') ?></p>
								<p class="tags">Tags:&nbsp;<?php the_tags('', ', ', ''); ?></p>
								<p class="comments"><?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?></p>
							</div>
							<div class="clear"></div>
							
						</div><!--END .news-content-wrapper-->
						<div class="clear">&nbsp;</div>
						
						<br /><br />

					<!--</div>--> <!--END .post -->

					<?php do_action( 'bp_after_blog_post' ) ?>
					
				<?php endwhile; ?>
				
				<?php the_theme_pagination(); ?>
				
			<?php else : ?>
			
				<div class="not-found">
					<h2>Not Found</h2>
					<p>Sorry, but you are looking for something that isn't here.</p>
				</div>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>

</div><!--END .custom-post-type-content-->
