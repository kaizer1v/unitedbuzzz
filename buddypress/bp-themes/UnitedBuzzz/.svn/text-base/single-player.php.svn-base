<?php get_header('main') ?>
<?php get_sidebar('left') ?>
<div id="center-content-div-wrapper" class="margin-below center-content-div-menu-pages" >

	<div id="content">
		<?php
			global $playerID;
			$playerCustom = get_post_custom($playerID);

			$playerID = get_the_ID();
			
			$selectedTerms = get_the_terms($playerID, 'player_category');

			$relatedPlayers = array();
			$termss="";
			foreach($selectedTerms as $selectedTerm) {
				$termss .= $selectedTerm->slug.", ";
			}
			$relatedPlayers = get_posts(array(
				'player_category' => $termss,
				'post_type' => 'player',
				'numberposts' => 50
			));
		?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php
			#Gets the slug from of the post within the default Loop
			$slug = basename(get_permalink());
			$slugTerm = get_term_by('slug', $slug, 'post_tag');
		?>

		<div id="center-content-div" class="player-page-content-wraper">
			<div id="player-tabs">
				<ul>
					<li><a class="activePage" href="<?php echo get_permalink($playerID); ?>"><?php the_title(); ?></a></li>
					<?php $playerBiographyPage = get_page_by_title('PlayerBiography'); ?>
					<li><a href="<?php echo get_permalink($playerBiographyPage->ID).'?playerID='.$playerID.'&termID='.$slugTerm->term_id; ?>">Information</a></li>
					<li><a href="<?php echo get_tag_link($slugTerm->term_id).'?postType=post&playerID='.$playerID; ?>">Blog Posts</a></li>.
					<li><a href="<?php echo get_tag_link($slugTerm->term_id).'?postType=news&playerID='.$playerID; ?>">News</a></li>
					<?php $fansPage = get_page_by_title('PlayerFans'); ?>
					<li><a href="<?php echo get_permalink($fansPage->ID).'?playerID='.$playerID.'&termID='.$slugTerm->term_id; ?>">Fans</a></li>
				</ul>
			</div><!--END #player-tabs-->
			
				<div class="squad-player-image-wrapper" id="player-dp">
					<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID())); ?>
					<!--<img src="<?php echo $image[0]; ?>" width="200" height="250" />-->
						<?php the_post_thumbnail('player_big_image'); ?>
					
					<?php
						global $wpdb;
						global $current_user;
						$query = "SELECT * FROM player_user_fans WHERE player_id=".$playerID." AND user_id=".$current_user->ID." LIMIT 1";
						$result = $wpdb->get_results($query, ARRAY_A);
						if(empty($result)) {
					?>
							<input type="button" value="Become A Fan" class="btn_becomeFan" id="player-<?php echo $playerID; ?>" />
					<?php
						}
						else {
					?>
							<input type="button" value="Remove From Fans" class="btn_becomeFan i_am_fan" id="player-<?php echo $playerID; ?>" />
					<?php
						}
					?>
					
				</div>
				<!--
				<div id="player-info">
					<h1 class="title"><?php the_title(); ?></h1>
				</div>
				-->
				<div id="player-info" cellspacing="0" cellpadding="0">
					<table>
					<!--
						<tr>
							<th>Fans</th>
							<td>1235</td>
						</tr>
						<tr>
							<th>Team</th>
							<td>Manchester United</td>
						</tr>
					-->
						<tr>
							<th>Nationality</th>
							<td><?php echo $playerCustom['player_nationality'][0]; ?></td>
						</tr>
						<tr>
							<th>Position</th>
							<td><?php echo $playerCustom['player_position'][0]; ?></td>
						</tr>
						<tr>
							<th>Date of Birth</th>
							<td><?php echo $playerCustom['player_dob'][0]; ?></td>
						</tr>
						<tr>
							<th>Goals</th>
							<td><?php echo $playerCustom['player_goals'][0]; ?></td>
						</tr>
						<tr>
							<th>Appearances</th>
							<td><?php echo $playerCustom['player_appearances'][0]; ?></td>
						</tr>
						<tr>
							<th>United Debut</th>
							<td><?php echo $playerCustom['player_debut'][0]; ?></td>
						</tr>
						<tr>
							<th>Jersey Number</th>
							<td><?php echo $playerCustom['player_jersey_number'][0]; ?></td>
						</tr>
						<tr>
							<th>Joining Date</th>
							<td><?php echo $playerCustom['player_joined_on'][0]; ?></td>
						</tr>
					</table>
				</div>
				<div class="clear"></div>
				<div id="player-excerpt">
					<p><?php echo $playerCustom['player_excerpt'][0]; ?>&nbsp;<a href="<?php echo get_permalink($playerBiographyPage->ID).'?playerID='.$playerID; ?>">more</a></p>
				</div>
				<div id="player-stats-goals" class="player-stats-table">
					<?php if(!empty($playerCustom['player_match_goals_one_matchDate'][0])) { ?>
					<h4>Latest Goals</h4>
					<table>
						<tr>
							<th></th>
							<th></th>
							<th style="width: 100px;"></th>
							<th style="width: 200px;"></th>
							<th style="width: 30px;"><img src="<?php echo bloginfo('template_url'); ?>/images/goals.gif" /></th>
							<th><img src="<?php echo bloginfo('template_url'); ?>/images/time.gif" /></th>
						</tr>
						<tr>
							<td><?php echo $playerCustom['player_match_goals_one_matchDate'][0]; ?></td>
							<td>vs.</td>
							<td><?php echo $playerCustom['player_match_goals_one_againstTeam'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_one_matchType'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_one_numberGoals'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_one_goalMinutes'][0]; ?></td>
						</tr>
					<?php } if(!empty($playerCustom['player_match_goals_two_matchDate'][0])) { ?>
						<tr>
							<td><?php echo $playerCustom['player_match_goals_two_matchDate'][0]; ?></td>
							<td>vs.</td>
							<td><?php echo $playerCustom['player_match_goals_two_againstTeam'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_two_matchType'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_two_numberGoals'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_two_goalMinutes'][0]; ?></td>
						</tr>
					<?php } if(!empty($playerCustom['player_match_goals_three_matchDate'][0])) { ?>
						<tr>
							<td><?php echo $playerCustom['player_match_goals_three_matchDate'][0]; ?></td>
							<td>vs.</td>
							<td><?php echo $playerCustom['player_match_goals_three_againstTeam'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_three_matchType'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_three_numberGoals'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_goals_three_goalMinutes'][0]; ?></td>
						</tr>
					<?php } ?>
					</table>
				</div>
				<div id="player-stats-bookings" class="player-stats-table">
					<?php if(!empty($playerCustom['player_match_booking_one_matchDate'][0])) { ?>
					<h4>Latest Bookings</h4>
					<table>
						<tr>
							<th></th>
							<th></th>
							<th style="width: 100px;"></th>
							<th style="width: 200px;"></th>
							<th style="width: 30px;"><img src="<?php echo bloginfo('template_url'); ?>/images/card.gif" /></th>
							<th><img src="<?php echo bloginfo('template_url'); ?>/images/time.gif" /></th>
						</tr>
						<tr>
							<td><?php echo $playerCustom['player_match_booking_one_matchDate'][0]; ?></td>
							<td>vs.</td>
							<td style="width: 100px;"><?php echo $playerCustom['player_match_booking_one_againstTeam'][0]; ?></td>
							<td style="width: 200px;"><?php echo $playerCustom['player_match_booking_one_matchType'][0]; ?></td>
						<?php if($playerCustom['player_match_booking_one_card'][0] == 'yellow') { ?>
							<td><img src="<?php echo bloginfo('template_url'); ?>/images/card-yellow.gif" /></td>
						<?php } if($playerCustom['player_match_booking_one_card'][0] == 'red') { ?>
							<td><img src="<?php echo bloginfo('template_url'); ?>/images/card-red.gif" /></td>
						<?php } ?>
							<td><?php echo $playerCustom['player_match_booking_one_cardMinute'][0]; ?></td>
						</tr>
					<?php } if(!empty($playerCustom['player_match_booking_two_matchDate'][0])) { ?>
						<tr>
							<td><?php echo $playerCustom['player_match_booking_two_matchDate'][0]; ?></td>
							<td>vs.</td>
							<td style="width: 100px;"><?php echo $playerCustom['player_match_booking_two_againstTeam'][0]; ?></td>
							<td style="width: 200px;"><?php echo $playerCustom['player_match_booking_two_matchType'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_booking_two_card'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_booking_two_cardMinute'][0]; ?></td>
						</tr>
					<?php } if(!empty($playerCustom['player_match_booking_two_matchDate'][0])) { ?>
						<tr>
							<td><?php echo $playerCustom['player_match_booking_three_matchDate'][0]; ?></td>
							<td>vs.</td>
							<td style="width: 100px;"><?php echo $playerCustom['player_match_booking_three_againstTeam'][0]; ?></td>
							<td style="width: 200px;"><?php echo $playerCustom['player_match_booking_three_matchType'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_booking_three_card'][0]; ?></td>
							<td><?php echo $playerCustom['player_match_booking_three_cardMinute'][0]; ?></td>
						</tr>
					<?php } ?>
					</table>
				</div>
		</div><!--END .post-->

		<?php endwhile; else: ?>

			<p><?php _e( 'Sorry, Player Not Found.', 'buddypress' ) ?></p>

		<?php endif; ?>

		<?php do_action( 'bp_after_blog_single_post' ) ?>
		
		
		<!--
		<h3 class="relatedPlayers-h3">Other Players</h3>
		<div id="current-squad-preview">
		<?php if(!empty($relatedPlayers)) { ?>
			<ul>
		<?php
				foreach($relatedPlayers as $relatedPlayer) {
				if($playerID != $relatedPlayer->ID) {
		?>
				<li>
					<div class="current-squad-preview-player-image-wrapper squad-player-image-index">
						<div class="current-squad-preview-player-image">
							<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($relatedPlayer->ID)); ?>
							<a href="<?php echo get_permalink($relatedPlayer->ID); ?>" title="<?php echo $relatedPlayer->post_title; ?>" rel="bookmark">
								<img src="<?php echo $image[0]; ?>" width="75" height="65" />
							</a>
						</div>
					</div>
					<?php $playerName = explode(" ", $relatedPlayer->post_title); ?>
					<div class="current-squad-preview-player-name">
						<a href="<?php echo get_permalink($relatedPlayer->ID); ?>">
							<?php echo substr($playerName[0], 0, 1); ?>.&nbsp;<?php echo trim($playerName[1]." ".$playerName[2]." ".$playerName[3]); ?>
						</a>
					</div>
				</li>
		<?php
				}#endForLoop
				}#endIF
		?>
			</ul>
		<?php
			}
		?>
		</div><!--END #relatedPlayers
		-->
		<div class="clear"></div>
		<?php #if (function_exists('post_from_site')) {post_from_site();} ?>

	</div> <!-- #content -->

</div> <!-- #content-container -->

<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
