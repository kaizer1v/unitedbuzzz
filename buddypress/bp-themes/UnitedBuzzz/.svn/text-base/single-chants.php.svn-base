
<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 class="chants-single-title"><?php the_title(); ?></h3>
				</div>
			</div>
			
			<div class="clear">&nbsp;</div>					
			<div class="custom-post-type-content">
				<span id="chant-lyrics"><?php the_content();?></span>
				<br><br>
				<?php $chantpage = get_page_by_title('Chants');?>
				<a href="<?php echo get_permalink($chantpage->ID);?>" id="chant-page-back-link">Back to Chants</a>
			</div>
			
			
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>

