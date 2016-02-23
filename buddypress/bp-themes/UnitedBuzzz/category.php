<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
	<div id="center-content-div">
		
		
		<div id="menu-pages-heading-wrapper">
			<div id="menu-pages-heading">
				<h3><? printf( "Category Archives: %s", '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h3>
			</div>
		</div>		
        
	    <?php
	    	$category_description = category_description();
	    	if ( ! empty( $category_description ) )
	    		echo '<div class="category-description">' . $category_description . '</div>';
	    ?>
        <div class="custom-post-type-content">
	        <? get_template_part( 'loop', 'home' ); ?>
		</div>


	</div><!--END #center-content-div-->
</div><!-- #content-container -->

<?php get_sidebar('right'); ?>
<div class="clear">&nbsp;</div>
<?php get_footer(); ?>
