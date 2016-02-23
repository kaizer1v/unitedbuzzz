<?php get_header('main') ?>
<?php get_sidebar('left') ?>

<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
	<div id="center-content-div" >
	
    <?php do_action( 'bp_before_archive' ) ?>
    
        <?php if ( have_posts() ) the_post(); ?>
        <h1 class="page-title">
            <?php if ( is_day() ) : ?>
            	<?php printf( "Daily Archives: <span>%s</span>", get_the_date() ); ?>
            <?php elseif ( is_month() ) : ?>
            	<?php printf( "Monthly Archives: <span>%s</span>", get_the_date('F Y') ); ?>
            <?php elseif ( is_year() ) : ?>
            	<?php printf( "Yearly Archives: <span>%s</span>", get_the_date('Y') ); ?>
            <?php else : ?>
            	Blog Archives
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
