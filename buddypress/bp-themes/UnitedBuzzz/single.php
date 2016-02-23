<?php get_header('main') ?>
<?php get_sidebar('left') ?>

<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
	<div id="center-content-div" >
    
    	<?php do_action( 'bp_before_blog_single_post' ) ?>
    
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	
    		<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3><?php the_title(); ?></h3>
					<div class="news-metadata news-single-metadata"><?php the_time('F j Y');?></div>
				</div>
			</div>
    	
    	
    		<?php if (has_post_thumbnail()) : ?>		
				<div class="current-squad-preview-player-image-wrapper news-featured-image-wrapper">
					<div class="news-featured-image">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<img src="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id() ); ?>" width="105px" height="90px"></img>
						</a>
					</div>
				</div><!--END .current-squad-preview-player-image-wrapper -->
			<?php endif; ?>
			
			
			<div class="news-content-wrapper blog-post-wrapper">
				<span id="chant-lyrics"><?php the_content(); ?></span>
			</div>
	    	<div class="clear"></div>
	    	
    		<?php wp_link_pages(); ?>
    		
    		<div>
    			<p class="date">by <?php echo bp_core_get_userlink( $post->post_author )?></p>
    		    <p class="categories">Categories:&nbsp;<?php the_category(', ') ?></p>
    		    <p class="tags">Tags:&nbsp;<?php the_tags('', ', ', ''); ?></p>
    		</div>
    		<div class="clear"></div>
        
    	<?php comments_template(); ?>
    
    	<?php endwhile; else: ?>
    
    		<p><?php _e( 'Sorry, no posts matched your criteria.', 'buddypress' ) ?></p>
    
    	<?php endif; ?>
    
    	<?php do_action( 'bp_after_blog_single_post' ) ?>
    
    </div><!--END #center-content-div-->
</div><!--END #center-content-div-wrapper-->
<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
