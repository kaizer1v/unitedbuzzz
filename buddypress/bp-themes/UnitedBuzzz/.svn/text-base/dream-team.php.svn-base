<?php
/*
Template Name: Dream Team
*/
?>
<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 id="dream-team-heading">My Dream Team</h3>
					<?php $formations = array('5-4-1', '4-4-2', '3-4-3', '3-5-2', '4-3-3', '4-5-1', '5-3-2', '3-3-4'); ?>
					
					<div id="formation-select-wrapper">
						<select id="formation-select">
						<?php foreach($formations as $formation) {
							$expFormation = explode('-', $formation);
						?>
							<option id="option<?php echo $expFormation[0].$expFormation[1].$expFormation[2] ?>">
								<?php echo $formation; ?>
							</option>
						<?php } ?>
						</select>
					</div>
					
					
					<?php
						global $current_user;
						get_currentuserinfo();
 						
						if(is_user_logged_in()) {
							global $wpdb;
							$query = "SELECT * FROM user_dreamteam WHERE user_id=".$current_user->ID;
							$dtData = $wpdb->get_results($query);

							if(!empty($dtData)) {
	
								$usPlayerPos = unserialize($dtData[0]->dt_players);
								foreach($usPlayerPos as $playerPos => $playerID) {
									//array_push($playerIDs, $playerID);
									$image = wp_get_attachment_image_src(get_post_thumbnail_id($playerID));
									$playerDetails = get_post($playerID);

									if(!empty($image)) {
										$player[$playerPos] = array(
											'playerID' => $playerID,
											'playerDP' => $image[0],
											'playerName' => $playerDetails->post_title
										);
									}	
									else {
										$player[$playerPos] = array(
											'playerID' => $playerID,
											'playerDP' => "",
											'playerName' => $playerDetails->post_title
										);
									}
								}

								$players = json_encode($player);
								$allPossiblePlayers = json_encode($allPossiblePlayers);
								$formation = array();
								$formation[0] = substr($dtData[0]->dt_formation, 0, 1);
								$formation[1] = substr($dtData[0]->dt_formation, 1, 1);
								$formation[2] = substr($dtData[0]->dt_formation, -1);
						?>
							<script>
								myObj.prevSelectedFormation = <?php echo $formation[0].$formation[1].$formation[2]; ?>;
								myObj.playersWithPositions = <?php echo $players; ?>;
								myObj.currentPage = 'dream-team';
							</script>
						<?php
							} #END !empty($dtData)
							else {
						?>
								<script>
									myObj.formationToShow = '';
									myObj.playersWithPositions = '';
								</script>
						<?php
							}
						} #END IF USER LOGGED IN
					?>


					<div class="clear">&nbsp;</div>
				</div>
			</div>
			
			<div id="dream-team-wrapper">
				<div id="dream-team-content">
					<div id="dt-ground" class="footballFieldBig">
					
					
					
					
					<?php foreach($formations as $formation) { ?>
						<?php $expformation = explode('-', $formation); ?>
						<div id="f<?php echo $expformation[0].$expformation[1].$expformation[2]; ?>">
						<?php
							$row = 0;
							foreach($expformation as $f) {
								$row++;
								$oe = $f%2 == 0 ? "even" : "odd";
						?>
							<div class="r<?php echo $row; ?>" id="r<?php echo $row; ?>-f<?php echo $expformation[0].$expformation[1].$expformation[2]; ?>">
							<?php for($i=1; $i<=$f; $i++) { ?>
								<div class="for<?php echo $i.'-'.$oe.$f; ?> player" id="p<?php echo $i; ?>-r<?php echo $row; ?>">
									<!--<button class="addPlayer" id="btn_p<?php echo $i; ?>-r<?php echo $row; ?>">+</button>-->
								</div>
							<?php } ?>
							</div>
						<?php } #END foreach?>
							<div class="goalkeeper player" id="goalkeeper-<?php echo $expformation[0].$expformation[1].$expformation[2]; ?>"></div>
						</div><!--END .formationFull -->
					<?php } ?>
					<?php
						$args = array(
							'post_type' => 'player',
							'player_taxonomy' => array('first-team', 'squad', 'legends-icons'),
							'numberposts' => '5000',
							#'post__not_in' => $playerIDs
						);
						$dtPlayers = get_posts($args);
						$allpp = array();
					?>
						<div class="dropdown-div">
							<ul>
							<?php
								foreach($dtPlayers as $dtp) {
									$playerCustom = get_post_custom($dtp->ID);
							?>
								<li id="player-<?php echo $dtp->ID; ?>">
									<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($dtp->ID)); ?>
									<input type="radio" id="dtplayers" name="dtplayers" value="<?php echo $image[0]; ?>" title="<?php echo $dtp->post_title ?>" />
									<?php echo $dtp->post_title; ?><br />
								</li>
							<?php
									$allpp[$dtp->ID] = array(
										'player_img' => $image[0],
										'player_name' => $dtp->post_title,
										'player_position' => $playerCustom['player_position'][0]
									);
								}
								$allPossiblePlayers = json_encode($allpp);
							?>
							</ul>
							<div class="dt-player-operations">
								<input type="text" id="dream-team-player-search" placeholder='Search'/>
								<div class="clear"></div>
								<a class="dt-player-done">Done</a>
								<a class="dt-player-cancel">Cancel</a>
							</div>
						</div>
						<script>
							myObj.allPossiblePlayers = <?php echo $allPossiblePlayers; ?>;
						</script>
												
					</div><!--END #dt-ground-->
					<input type="button" id="saveFormation" value="save"></input>
				</div>
			</div>
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
