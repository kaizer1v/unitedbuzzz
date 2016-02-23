<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3><?php the_title(); ?></h3>
					<div class="news-metadata news-single-metadata"><?php the_time('F j Y');?></div>
				</div>
			</div>
			<div class="clear">&nbsp;</div>	
			<div class="custom-post-type-content">
				<span id="chant-lyrics"><?php the_content();?></span>
				<br><br>
				<?php $videoPage = get_page_by_title('Videos');?>
				<a href="<?php echo get_permalink($videoPage->ID);?>" id="chant-page-back-link">Back to Videos</a>
			</div>
			<div class="clear">&nbsp;</div>
			<?php comments_template('', true); ?>
			
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<div class="clear">&nbsp;</div>
<?php get_footer(); ?>

