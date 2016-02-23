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

			<?php if ( has_post_thumbnail()) : ?>
				<div class="current-squad-preview-player-image-wrapper news-image-wrapper">
					<div class="news-image">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('hot_news');?>
						</a>
					</div>
				</div>
			<?php endif; ?>
			<div class="clear">&nbsp;</div>	
			<div class="custom-post-type-content">
				<span id="chant-lyrics"><?php the_content();?></span>
				<br><br>
				<?php $chantpage = get_page_by_title('News');?>
				<a href="<?php echo get_permalink($chantpage->ID);?>" id="chant-page-back-link">Back to News</a>
			</div>
			<div class="clear">&nbsp;</div>
			<br />
			<?php comments_template('', true); ?>
			
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<div class="clear">&nbsp;</div>
<?php get_footer(); ?>

