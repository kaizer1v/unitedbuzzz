<?php
/*
Template Name: Current Squad
*/
?>
<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>
<?php
	/*
	$termsToShow = "squad";
	$args = array(
		'post_type' => 'player',
		'player_category' => $termsToShow,
		'numberposts' => 5000
	);
	$players = get_posts($args);
	*/
	global $table_prefix;
	$squadTerm = get_term_by('slug', 'squad', 'player_category');
	$query = "SELECT *
				FROM ".$table_prefix."posts p, ".$table_prefix."postmeta pm, ".$table_prefix."term_relationships tr, ".$table_prefix."term_taxonomy tt, ".$table_prefix."terms t
				WHERE p.post_type='player'
				  AND p.post_status='publish'
				  AND p.ID=tr.object_id
				  AND tt.term_taxonomy_id=tr.term_taxonomy_id
				  AND t.term_id=tt.term_id
				  AND t.term_id=".$squadTerm->term_id."
				  AND p.ID=pm.post_id
				  AND pm.meta_key='player_position'
				ORDER BY field(pm.meta_value, 'Goalkeeper', 'Defender', 'Left Back', 'Right Back', 'Full Back', 'Wing Back', 'Inside Right', 'Inside Left', 'Midfielder', 'Winger', 'Forward' )";
	global $wpdb;
	$players = $wpdb->get_results($query, OBJECT);
	#print_r($players);
?>
	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div">
			<div id="submenu-page-heading-div-wrapper">
				<div id="submenu-page-heading-div">
					<h2 class="submenu-page-heading">Current Squad</h2>
				</div>
			</div>
			<div id="squad-table-div">
				<table border="0px" cellspacing="0">
					<tbody>
						<tr>
							<th id="squad-player-heading">Player</th>
							<th id="squad-position-heading">Position</th>
							<th id="squad-age-heading">Age</th>
							<th id="squad-nationality-heading">Nationality</th>
						</tr>
						<?php #if(have_posts($squad)) : while(have_posts($squad)) : the_post(); ?>
						<?php
							if(!empty($players)) : foreach($players as $player) {
								$playerCustom = get_post_custom($player->ID);
						?>
						<tr>
							<td class="squad-player squad-table-first-td">
								<div class="squad-player-image-wrapper" id="allsquad-player-image">
									<div class="squad-player-image">
										<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($player->ID), array('10','10')); ?>
										<a href="<?php echo get_permalink($player->ID); ?>">
											<img src="<?php echo $image[0]; ?>" width="82" height="71" />
											<!--<?php echo get_the_post_thumbnail($player->ID, 'player_small_image'); ?>-->
										</a>
									</div>
								</div>
								<span class="squad-player-name">
									<a href="<?php echo get_permalink($player->ID); ?>"><?php echo $player->post_title; ?></a>
								</span>
							</td>
							<td class="squad-position"><?php echo $playerCustom['player_position'][0]; ?></td>
							<td class="squad-age">
								<?php
									if($playerCustom['player_dob'][0] != "") {
										$yeardiff = date('Y') - substr($playerCustom['player_dob'][0], 6, strlen($playerCustom['player_dob'][0]));
										$monthdiff = date('m') - substr($playerCustom['player_dob'][0], 0, 2);
										$daydiff = date('d') - substr($playerCustom['player_dob'][0], 3, 2);

										if(date('m') >= substr($playerCustom['player_dob'][0], 0, 2)) {
											if(date('d') < substr($playerCustom['player_dob'][0], 3, 2))
												$age = intval(intval($yeardiff)-1);
											else
												$age = $yeardiff;
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
							<td class="squad-nationality"><?php echo $playerCustom['player_nationality'][0]; ?></td>
						</tr>
						<?php } endif; ?>
					</tbody>	
				</table>
			</div>
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<div class="clear">&nbsp;</div>
<?php get_footer(); ?>
