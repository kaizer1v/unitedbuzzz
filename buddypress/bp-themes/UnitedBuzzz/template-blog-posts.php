<?php
/*
*Template Name: All Blog Posts
*/
?>
<?php get_header('main') ?>
<?php get_sidebar('left') ?>

<div id="center-content-div-wrapper-blog" class="center-content-div-menu-pages">
	<div id="center-content-div">

	<?php
		$args = array('post_type' => 'post');
		query_posts($args);
	?>
	
	 <?php do_action( 'bp_before_archive' ) ?>
    
        <?php if ( have_posts() ) the_post(); ?>
        <h1 class="page-title">
            <?php if ( is_day() ) : ?>
            	<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3><?php printf( "Daily Archives: <span>%s</span>", get_the_date() ); ?></h3>
					</div>
				</div>
            <?php elseif ( is_month() ) : ?>
            	<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3><?php printf( "Monthly Archives: <span>%s</span>", get_the_date('F Y') ); ?></h3>
					</div>
				</div>
            <?php elseif ( is_year() ) : ?>
				<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3><?php printf( "Yearly Archives: <span>%s</span>", get_the_date('Y') ); ?></h3>
					</div>
				</div>
            <?php else : ?>
            	<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3 id="menu-pages-heading-with-search">Blog Posts</h3>
						<?php if ( bp_search_form_enabled() ) : ?>
						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
							<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for Blog Posts" id="search-input" name="s" value="" />
							<?php echo bp_search_form_type_select() ?>
							<input type="hidden" name="post_type" value="post" />
							<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
							<?php wp_nonce_field( 'bp_search_form' ) ?>
						</form><!-- #search-form -->
						<div class="clear"></div>
					<?php endif; ?>
					</div>
				</div>
				<?php if(function_exists('post_from_site')) { ?><div id="new-blog-post"><?php post_from_site(); ?></div><?php } ?>
            <?php endif; ?>
		</h1>
        <?php rewind_posts(); ?>
        
        <?php get_template_part( 'loop', 'home' ); ?>

    <?php do_action( 'bp_after_archive' ) ?>
    
	</div><!--END #center-content-div-->
</div><!--END #center-content-div-wrapper-->
<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
