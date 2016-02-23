<?php
/*
Template Name: Events Page
*/
?>
<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 id="menu-pages-heading-with-search"><?php the_title();?></h3>
						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
							<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for Events" id="search-input" name="s" value="" />
							<?php #echo bp_search_form_type_select() ?>
							<input type="hidden" name="post_type" value="events" />
							<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
							<?php wp_nonce_field( 'bp_search_form' ) ?>
						</form><!-- #search-form -->
					<div class="clear"></div>
				</div>
			</div>
			<a href="<?php echo bp_get_loggedin_user_link()."events";?>" class="create-event">Create an event</a>
			<br />
			<br />
			<? $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php $allpost = query_posts(array('post_type'=>'events', 'posts_per_page' => 25, 'order' => 'DESC' ,'orderby' => 'post_date' ,'paged'=>$paged));
				foreach($allpost as $post){
					?>
					<div class="clear">&nbsp;</div>					
					<div class="custom-post-type-content">
						<a href="<?php echo get_permalink($post->ID)?>"><span class="event_image"></span></a>
						<a href="<?php echo get_permalink($post->ID)?>" class="chants-listing"><h4><span class="custom-post-type-content-title"><?php echo $post->post_title;?></span></h4></a>
					</div>
						
				<?php	
				}
			?>
			<?php the_theme_pagination(); ?>

		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>

