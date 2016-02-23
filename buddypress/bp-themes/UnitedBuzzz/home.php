<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper">

		<!-- loop
		<div id="content">
			<?// get_template_part( 'loop', 'home' ); ?>
		</div>-->
		<div id="history-preview">
			<?php
			 	$page = get_page_by_title( 'History' ); 
			 	$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID));
			?>
			<div id="history-preview-image-div">
				<img src="<?php echo $featured_image[0]; ?>" width="145px"></img>
			</div>
			<div id="history-preview-content-div">
				<table>
					<tr>
						<th>Founded</th>
						<td><?php echo get_option('founded')?></td>
					</tr>
					<tr>
						<th>Manager</th>
						<td><?php echo get_option('manager')?></td>
					</tr>
					<tr id="last-tr-history-preview">
						<th>Official Website</th>
						<td><a href="<?php echo get_option('official_website')?>"><?php echo get_option('official_website')?></a></td>
					</tr>
				</table>
				<div id="history-preview-content">
					<?php echo $page->post_excerpt; ?>
					<a id="history-more" href="<?php echo get_permalink($page->ID) ?>">More...</a>
				</div>
			</div>
		</div>
		
		<div class="clear">&nbsp;</div>
		
		<div id="current-squad-preview">
			<div id="current-squad-preview-h3-wrapper">
				<div id="current-squad-preview-h3">
					<h3><?php _e( 'CURRENT SQUAD', 'buddypress' ) ?></h3>
				</div>
			</div>
			<ul>
			<?php
				$totalPosts = wp_count_posts('player');
				$args = array(
					'post_type' => 'player',
					'player_category' => 'first-team',
					'numberposts' => $totalPosts->publish
				);
				$players = get_posts($args);
				$firstTeamPlayers = array();
				foreach($players as $firstTeamPlayer) {
					$firstTeamPlayersSelected = get_post_custom($firstTeamPlayer->ID);
					if(isset($firstTeamPlayersSelected['player_show_on_squad_page'][0])){
						if($firstTeamPlayersSelected['player_show_on_squad_page'][0] == "on") {
							array_push($firstTeamPlayers, $firstTeamPlayer);
						}
					}
				}
				foreach($firstTeamPlayers as $firstTeamPlayer) {
			?>
				<li>
					<div class="current-squad-preview-player-image-wrapper squad-player-image-index">
						<div class="current-squad-preview-player-image">
							<!--image content should be added here and this 'li' must run is a loop for 5 times. The 6th 'li' has a custom design.-->
							<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($firstTeamPlayer->ID)); ?>
							<a href="<?php echo get_permalink($firstTeamPlayer->ID); ?>" title="<?php echo $firstTeamPlayer->post_title; ?>" rel="bookmark">
								<img src="<?php echo $image[0]; ?>" width="75" height="65" />
								<!--<?php echo get_the_post_thumbnail($firstTeamPlayer->ID, 'player_small_image'); ?>-->
							</a>
						</div>
					</div>
					<?php $playerName = explode(" ", $firstTeamPlayer->post_title); ?>
					<div class="current-squad-preview-player-name">
						<a href="<?php echo get_permalink($firstTeamPlayer->ID); ?>">
							<?php echo substr($playerName[0], 0, 1); ?>.&nbsp;<?php echo trim((isset($playerName[1])?$playerName[1]:'')." ".(isset($playerName[2])?$playerName[2]:'')." ".(isset($playerName[3])?$playerName[3]:'')); ?>
						</a>
					</div>
					<?php $customFirstTeamPlayer = get_post_custom($firstTeamPlayer->ID); ?>
					<div class="current-squad-preview-player-position"><?php echo (isset($customFirstTeamPlayer['squad_position'][0])?$customFirstTeamPlayer['squad_position'][0]:''); ?></div>
				</li>
			<?php
				}
			?>
				<!-- Custom li -->
				<li id="current-squad-preview-more">
					<a href="<?php bloginfo('url')?>/squad"><img src="<?php bloginfo('template_url')?>/images/more-squad.png"></img></a>
				</li>
			</ul>
		</div>
		
		<div class="clear"></div>
		<!--News Div Starts-->
		<div id="main-page-hot-news-div-wrapper">
			<div id="main-page-hot-news-div">
				<h3 id="hot-news-title"><?php _e( 'HOT NEWS', 'buddypress' ) ?></h3>
			</div>
		</div>
		<div class="center-content-div-menu-pages">
			<div id="how-news-content" >
				<div id="hot-news-slider-wrapper">
					<div id="hot-news-slider">
						<div id="slideshow">
							<?php $my_query = new WP_Query(( array('post_type'=>'News','posts_per_page' => 8)));
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
				<?php echo $nextThreeNews ;?>
				<a id="index-page-more-news-link"  href="<?php echo get_permalink(get_page_by_title('News'));?>">More News</a>
				<div class="clear">&nbsp;</div>
			</div>
		</div> <!--News Div Ends-->
		
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<div class="clear">&nbsp;</div>
<?php get_footer(); ?>
