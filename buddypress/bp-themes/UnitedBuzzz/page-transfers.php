<?php get_header('main') ?>
<?php get_sidebar('left') ?>
<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
	<div id="main-page-hot-news-div-wrapper">
		<div id="main-page-hot-news-div-trans">
			<h3 id="hot-news-title"><?php _e( 'HOT NEWS (Transfers)', 'buddypress' ) ?></h3>
		</div>
	</div>
	<div class="center-content-div-menu-pages">
		<div id="how-news-content" >
			<div id="hot-news-slider-wrapper">
				<div id="hot-news-slider">
					<div id="slideshow">
						<?php $my_query = new WP_Query(( array('post_type'=>'News','tag'=>'transfers,Transfers,TRANSFERS,transfer,Transfer,TRANSFER','posts_per_page' => 8)));
						$cnt=0;
						$nextThreeNews = "";
						 while ($my_query->have_posts()) : $my_query->the_post();
						$do_not_duplicate[] = $post->ID ?>
						<?php if ($cnt < 5 ) {?>
							<?php if ( has_post_thumbnail()) : ?>
							<div  class="slideshow-inactive">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
									<?php the_post_thumbnail('hot_news'); ?>
								</a>	
								<div class="hot-news-slideshow-content ">
									<div>
										<a href="<?php the_permalink(); ?>" ><h3><?php the_title();?></h3></a>
										<a href="<?php the_permalink(); ?>" ><?php the_excerpt();?></a>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<?php }
						else{  
							
							
							$nextThreeNews .= "<div class='clear'>&nbsp;</div>"	;				
							$nextThreeNews .= "<div class='custom-post-type-content'>";
							$nextThreeNews .= "<div class='current-squad-preview-player-image-wrapper news-featured-image-wrapper'>";
							$nextThreeNews .= "<div class='news-featured-image'>";
											 if ( has_post_thumbnail()) : 
							$nextThreeNews .= "<a href=".get_permalink()." title=".get_the_title()." >";
										$nextThreeNews .= "<img src=".wp_get_attachment_thumb_url( get_post_thumbnail_id() )." width='105px' height='90px'></img>";
							$nextThreeNews .= "</a>";	
											endif; 
							$nextThreeNews .= "</div></div>";
							$nextThreeNews .= "<div class='news-content-wrapper'>";
							$nextThreeNews .= "<h4><a href=".get_permalink()."><span class='custom-post-type-content-title news-title'>".get_the_title()."</span></a></h4>";
							$nextThreeNews .= "<div class='news-metadata'>".get_the_time('F j Y')."</div>";
							$nextThreeNews .= "<div class='news-excerpt'>".get_the_excerpt()."</div>";
							$nextThreeNews .= "</div><div class='clear'>&nbsp;</div></div>";
							
							} 
							$cnt++;
						?>	
							
						<?php	
							endwhile;
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
			<div id="hot-news-slider-wrapper-shadow"></div>
			<div id="slider-dots-wrapper">
				<div class="slider-dots slider-inactive slider-active selected"></div>
				<div class="slider-dots slider-inactive"></div>
				<div class="slider-dots slider-inactive"></div>
				<div class="slider-dots slider-inactive"></div>
				<div class="slider-dots slider-inactive"></div>
				
			</div>
			<?php echo $nextThreeNews ;
				$transferTag = get_term_by('name', 'Transfers', 'post_tag');
			?>
			<a id="index-page-more-news-link"  href="<?php echo get_tag_link($transferTag->term_id).'?postType=news';?>">More News</a>
			<div class="clear">&nbsp;</div>
		</div>
	</div> <!--News Div Ends-->
	<div id="center-content-div" >

		<?php do_action( 'bp_before_blog_page' ) ?>
		<div class="page" id="blog-page" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!--<h2 class="pagetitle"><?php the_title(); ?></h2>-->
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry">
						<?php the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) ); ?>
					</div>
				</div>
			<?php endwhile; endif; ?>

			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading" class="transfer-news-heading">
					<!--<h3>HOT NEWS</h3>-->
				</div>
			</div>
			<!--
			<?php
				$transferNews = new WP_Query('post_type=news&tag=transfers&showposts=3');
				#print_r($transferNews);
				foreach($transferNews->posts as $news) {
			?>
					<div class="clear">&nbsp;</div>					
					<div class="custom-post-type-content">
						<div class="current-squad-preview-player-image-wrapper news-featured-image-wrapper">
							<div class="news-featured-image">
							<?php #if(has_post_thumbnail()) : ?>
								<a href="<?php echo get_permalink($news->ID); ?>" title="<?php echo $news->post_title; ?>" >
									<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($news->ID)); ?>
									<img src="<?php echo $image[0]; ?>" width="105px" height="90px"></img>
								</a>
							<?php #endif; ?>
							</div>
						</div>
						<div class="news-content-wrapper">
							<h4>
								<a href="<?php echo get_permalink($news->ID); ?>">
									<span class="custom-post-type-content-title news-title"><?php echo $news->post_title; ?></span>
								</a>
							</h4>
							<div class="news-metadata"><?php echo date('F j Y', strtotime($news->post_date)); ?></div>
							<div class="news-excerpt"><?php echo $news->post_excerpt; ?></div>
						</div>
						<div class="clear">&nbsp;</div>
					</div>
			<?php
				}
			?>
			-->
		</div><!-- .page -->
		<?php do_action( 'bp_after_blog_page' ) ?>
		
	</div><!--END #center-content-div-->
</div><!--END #center-content-div-wrapper-->

<?php #dynamic_sidebar('right-sidebar'); ?>
<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
