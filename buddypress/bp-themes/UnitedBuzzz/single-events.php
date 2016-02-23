<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 class="chants-single-title"><?php the_title(); ?></h3>
					<div class="news-metadata news-single-metadata"><?php echo get_post_meta(get_the_ID(), 'When', true);?> Time <?php echo get_post_meta(get_the_ID(), 'Time', true);?></div>
				</div>
			</div>
			
			<div class="clear">&nbsp;</div>					
			
			<div class="custom-post-type-content">
				<div class="news-metadata news-single-metadata">Venue:&nbsp;<?php echo get_post_meta(get_the_ID(), 'Where', true);?></div>
				<div id="events-content"><?php the_content();?></div>
				<?php 
				global $bp;
				if($bp->loggedin_user->id == get_the_author_meta('ID')){ ?>
					<a href="<?php echo bp_get_loggedin_user_link().'events?edit=y&id='.get_the_ID()?>">Edit</a>
				<?php }?>	
				<br><br>
				<a href="<?php echo get_permalink(get_page_by_title('Events'));?>" id="chant-page-back-link">Back to Events</a>
			</div>
			
			<?php comments_template(); ?>
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>

