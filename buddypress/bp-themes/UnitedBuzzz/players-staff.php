<?php
/*
Template Name: Players & Staff Page
*/
?>
<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			<div class="player-staff-tabs">
				<div id="">
					<?php wp_nav_menu( array( 'theme_location' => 'players-staff-tabs') ); ?>
				</div>
				<!--<ul>
					<?php 
					//	$terms = get_terms('player_category','hide_empty=0');
					//	foreach ( $terms as $term ) { 
					//		if($term->slug == 'squad'){ }else{ ?>
					//		<li><a href="<?php bloginfo('site_url')?>/players-staff?show=<?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
						<?php// }	}
					?>
				</ul>-->
			</div>
			<div class="clear">&nbsp;</div>
			<div class="player-staff-content-wrapper">
				
				<div id="squad-table-div">
						<table border="0px" cellspacing="0">
							<tbody>
								<?php 
								$show = (isset($_GET['show'])?$_GET['show']:'');
								if($show == ""){ 
									$args=array('post_type' => 'player', 'taxonomy' => 'player_category', 'term' => 'first-team', 'posts_per_page' => 50);
									$new = new WP_Query($args); ?>
									<tr>
										<th id="squad-player-heading">Player</th>
										<th id="squad-position-heading">Position</th>
										<th id="squad-age-heading">Age</th>
										<th id="squad-nationality-heading">Nationality</th>
									</tr>
								<?php
									while ($new->have_posts()) : $new->the_post();
								?>
									
									<tr>
										<td class="squad-player squad-table-first-td">
											<div class="squad-player-image-wrapper" id="allsquad-player-image">
												<div class="squad-player-image">
													<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), array('10','10')); ?>
													<a href="<?php echo get_permalink(); ?>">
														<img src="<?php echo $image[0]; ?>" width="82" height="71" />
													</a>
												</div>
											</div>
											<span class="squad-player-name">
												<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
										</td>
										<?php $playerCustom = get_post_custom(get_the_ID()); ?>
										<td class="squad-position"><?php echo $playerCustom['player_position'][0]; ?></td>
										<td class="squad-age">
											<?php $age = intval(date('Y') - substr($playerCustom['player_dob'][0], 6, strlen($playerCustom['player_dob'][0]))); 
											if($playerCustom['player_dob'][0] != "") {
												$yeardiff = date('Y') - substr($playerCustom['player_dob'][0], 6, strlen($playerCustom['player_dob'][0]));
												$monthdiff = date('m') - substr($playerCustom['player_dob'][0], 0, 2);
												$daydiff = date('d') - substr($playerCustom['player_dob'][0], 3, 2);

												if(date('m') >= substr($playerCustom['player_dob'][0], 0, 2)) {
													if(date('d') < substr($playerCustom['player_dob'][0], 3, 2)){
														$age = intval(intval($yeardiff)-1);
													}
													else{
														$age = $yeardiff;
													}
												}
												elseif(date('m') < substr($playerCustom['player_dob'][0], 0, 2)) {
													$age = intval(intval($yeardiff)-1);
												}
												echo $age;
											}
											else
												echo " - ";
											?>
										</td>
										<td class="squad-nationality"><?php  echo $playerCustom['player_nationality'][0]; ?></td>
									</tr>
							
				
								<?php 
									endwhile;
														
								}
								elseif ($show == "legends-icons") {
									$args=array('post_type' => 'player', 'taxonomy' =>'player_category', 'term' => 'legends-icons', 'posts_per_page' => 50 );
									$new = new WP_Query($args); ?>
									<tr>
										<th id="squad-player-heading">Player</th>
										<th id="squad-position-heading">Position</th>
										<th id="squad-age-heading">DOB</th>
										<th id="squad-nationality-heading">Nationality</th>
									</tr>					
								<?php
									while ($new->have_posts()) : $new->the_post();
								?>
								
									<tr>
										<td class="squad-player squad-table-first-td">
											<div class="squad-player-image-wrapper" id="allsquad-player-image">
												<div class="squad-player-image">
													<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), array('10','10')); ?>
													<a href="<?php echo get_permalink(); ?>">
														<img src="<?php echo $image[0]; ?>" width="82" height="71" />
													</a>
												</div>
											</div>
											<span class="squad-player-name">
												<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
										</td>
										<?php $playerCustom = get_post_custom(get_the_ID()); ?>
										<td class="squad-position"><?php echo $playerCustom['player_position'][0]; ?></td>
										<td class="squad-age">
										<?php
											if(empty($playerCustom['player_dob'][0]))
												echo " - ";
											else {
												$timedt = strtotime($playerCustom['player_dob'][0]);
												echo date('d M Y', $timedt);
											}
										?>
										</td>
										<td class="squad-nationality"><?php  echo $playerCustom['player_nationality'][0]; ?></td>
									</tr>
							
				
								<?php 
									endwhile;
									
								}
								else{
								$args=array('post_type' => 'player', 'taxonomy' =>'player_category', 'term' => $show, 'posts_per_page' => 50 );
								$new = new WP_Query($args); ?>
								<tr>
									<th id="squad-player-heading">Player</th>
									<th id="squad-position-heading">Position</th>
									<th id="squad-age-heading">Age</th>
									<th id="squad-nationality-heading">Nationality</th>
								</tr>
								<?php
									while ($new->have_posts()) : $new->the_post();
								?>
								
								<tr>
									<td class="squad-player squad-table-first-td">
										<div class="squad-player-image-wrapper" id="allsquad-player-image">
											<div class="squad-player-image">
												<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), array('10','10')); ?>
												<a href="<?php echo get_permalink(); ?>">
													<img src="<?php echo $image[0]; ?>" width="82" height="71" />
												</a>
											</div>
										</div>
										<span class="squad-player-name">
											<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
									</td>
									<?php $playerCustom = get_post_custom(get_the_ID()); ?>
									<td class="squad-position"><?php echo $playerCustom['player_position'][0]; ?></td>
									<td class="squad-age">
										<?php $age = intval(date('Y') - substr($playerCustom['player_dob'][0], 6, strlen($playerCustom['player_dob'][0]))); 
											if($playerCustom['player_dob'][0] != "") {
												$yeardiff = date('Y') - substr($playerCustom['player_dob'][0], 6, strlen($playerCustom['player_dob'][0]));
												$monthdiff = date('m') - substr($playerCustom['player_dob'][0], 0, 2);
												$daydiff = date('d') - substr($playerCustom['player_dob'][0], 3, 2);

												if(date('m') >= substr($playerCustom['player_dob'][0], 0, 2)) {
													if(date('d') < substr($playerCustom['player_dob'][0], 3, 2)){
														$age = intval(intval($yeardiff)-1);
													}
													else{
														$age = $yeardiff;
													}
												}
												elseif(date('m') < substr($playerCustom['player_dob'][0], 0, 2)) {
													$age = intval(intval($yeardiff)-1);
												}
												echo $age;
											}
											else
												echo " - ";
										?>
									</td>
									<td class="squad-nationality"><?php  echo $playerCustom['player_nationality'][0]; ?></td>
								</tr>
							
				
							<?php 
									endwhile;
								}
							?>		
						</tbody>	
					</table>
				</div>
			</div>
			
		

			
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
