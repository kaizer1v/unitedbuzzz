<?php
/*
Template Name: News Page
*/
?>
<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 id="menu-pages-heading-with-search">News</h3>
						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
							<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for News" id="search-input" name="s" value="" />
							<?php #echo bp_search_form_type_select() ?>
							<input type="hidden" name="post_type" value="news" />
							<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
							<?php wp_nonce_field( 'bp_search_form' ) ?>
						</form><!-- #search-form -->
					<div class="clear"></div>
				</div>
			</div>
			
			<?php wp_reset_query(); 
				query_posts( array('post_type'=>'News', 'posts_per_page'=>15, 'paged'=>$paged ));
				
				while ( have_posts() ) : the_post();
			?>
				<div class="clear">&nbsp;</div>					
				<div class="custom-post-type-content">
					
					<div class="current-squad-preview-player-image-wrapper news-featured-image-wrapper">
						<div class="news-featured-image">
							<?php if ( has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
									<img src="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id() ); ?>" width="105px" height="90px" />
								</a>	
							<?php endif; ?>
						</div>
					</div>
					
					<div class="news-content-wrapper">
						<h4><a href="<?php echo get_permalink()?>"><span class="custom-post-type-content-title news-title"><?php the_title();?></span></a></h4>
						<div class="news-metadata"><?php the_time('F j Y');?></div>
						<div class="news-excerpt"><?php the_excerpt();?></div>
					</div>
					<div class="clear">&nbsp;</div>
				</div>
					
			<?php	
				endwhile;
			?>
			<?php the_theme_pagination(); ?>
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>

