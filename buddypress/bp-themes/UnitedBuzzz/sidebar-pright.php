<div class="sidebar-wrapper">
    <div class="sidebar" id="sidebar-right">
		<!-- Dream team -->
		<?php 
		//echo get_option('profile_redirect')."check";
		if(get_option('profile_redirect') == 'true')		
		{ 
			update_option('profile_redirect', 'false');
			?>
			<div class="sidebar-inner-wrapper">
				<div id="sidebar-fixtures-scores">
					<h3><span>Dream Team</span></h3>
					<div id="sidebar-content-design-div" class="sidebar-f-s-div">
						
						
						<?php
							global $bp;
							get_currentuserinfo();
							global $wpdb;
							$query = "SELECT * FROM user_dreamteam WHERE user_id=".$bp->displayed_user->id;
							$dtData = $wpdb->get_results($query);
							
							if(!empty($dtData)) {
								$formations = array('5-4-1', '4-4-2', '3-4-3', '3-5-2', '4-3-3', '4-5-1', '5-3-2', '3-3-4');
						?>
						
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
								$usPlayerPos = unserialize($dtData[0]->dt_players);
							
								foreach($usPlayerPos as $playerPos => $playerID) {
									//$player
									$playerName = get_post($playerID);
									$image = wp_get_attachment_image_src(get_post_thumbnail_id($playerID));
									if(!empty($image)) {
										$player[$playerPos] = array('playerID' => $playerID, 'playerDP' => $image[0], 'playerName' => $playerName->post_title);
									}
									else
										$player[$playerPos] = array('playerID' => $playerID, 'playerDP' => "", 'playerName' => $playerName->post_title);
								}
								
								$players = json_encode($player);
								$formation = array();
								$formation[0] = substr($dtData[0]->dt_formation, 0, 1);
								$formation[1] = substr($dtData[0]->dt_formation, 1, 1);
								$formation[2] = substr($dtData[0]->dt_formation, -1);
						?>
								<script>
									myObj.prevSelectedFormation = <?php echo $formation[0].$formation[1].$formation[2]; ?>;
									myObj.playersWithPositions = <?php echo $players; ?>;
									myObj.currentPage == 'dream-team';
								</script>
								
								<div id="dt-ground" class="footballFieldSmall">

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
											<div class="for<?php echo $i.'-'.$oe.$f; ?> sidebar-player" id="p<?php echo $i; ?>-r<?php echo $row; ?>">
												<!--<button class="addPlayer" id="btn_p<?php echo $i; ?>-r<?php echo $row; ?>">+</button>-->
											</div>
										<?php } ?>
										</div>
									<?php } #END foreach?>
										<div class="sidebar-goalkeeper sidebar-player" id="goalkeeper-<?php echo $expformation[0].$expformation[1].$expformation[2]; ?>"></div>
									</div><!--END .formationFull -->
								<?php } ?>
								<?php
									$args = array(
										'post_type' => 'player',
										'player_taxonomy' => array('first-team,', 'squad', 'legends-icons'),
										'numberposts' => '5000'
									);
									$dtPlayers = get_posts($args);
								?>
									<div class="dropdown-div">
										<ul>
										<?php foreach($dtPlayers as $dtp) { ?>
											<li id="player-<?php echo $dtp->ID; ?>">
												<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($dtp->ID)); ?>
												<input type="radio" id="dtplayers" name="dtplayers" value="<?php echo $image[0]; ?>" title="<?php echo $dtp->post_title ?>" /><?php echo $dtp->post_title; ?><br />
											</li>
										<?php } ?>
										</ul>
										<div class="dt-player-operations">
											<a class="dt-player-done">Done</a>
											<a class="dt-player-cancel">Cancel</a>
										</div>
									</div>
													
								</div><!--END #dt-ground-->
						<?php
							} #END !empty($dtData)
							else {
						?>
								<script>
									myObj.formationToShow = '';
									myObj.playersWithPositions = '';
								</script>
								<h3><span><?php echo $bp->displayed_user->fullname; ?>&nbsp;&nbsp;DOESN'T HAVE A DREAM TEAM YET</span></h3>
						<?php
							}
						?>
					
					
					
					</div>
				</div>
			</div>
			
			
			
			<!--Events-->
			<div class="sidebar-inner-wrapper">
				<div id="sidebar-fixtures-scores">
					<h3><span>Events</span></h3>
					<div id="sidebar-content-design-div" class="sidebar-f-s-div">
						<?php $allpost = query_posts(array('post_type'=>'events', 'posts_per_page' => 3, 'order' => 'DESC' ,'orderby' => 'post_date' ,'paged'=>$paged));
							if(sizeOf($allpost)==0){
								echo "<div class='custom-post-type-content events-sidebar-listing-wrapper'>";
								echo "No Events.";
								echo "</div>";
							}else{
								foreach($allpost as $post){?>
									<div class="clear">&nbsp;</div>					
									<div class="custom-post-type-content events-sidebar-listing-wrapper">
										<a href="<?php echo get_permalink($post->ID)?>"><span class="event_image_sidebar"></span></a>
										<a href="<?php echo get_permalink($post->ID)?>" class="events-listing-sidebar"><h4><span><?php echo $post->post_title;?></span></h4></a>
									</div>
									<div class="clear"></div>
							<?php } 
							}
							?>
					</div>
					<?php $eventspage = get_page_by_title('Events'); ?>
					<a href="<?php echo get_permalink($eventspage->ID); ?>" class="sidebar-more">More</a>
				</div>
			</div>
			
			
			
			<!-- Friends -->
		
			<div class="sidebar-inner-wrapper">
				<div id="mutual-friends">
					<?php
					global $bp;
					$loggedin_user_id = $bp->loggedin_user->userdata->ID;
					$other_user_id = $bp->displayed_user->id ;
					
					if($loggedin_user_id == $other_user_id){
						$check_string = 'its_me' ;
					}
					else{
						$check_string = friends_check_friendship_status( $loggedin_user_id,$other_user_id);
					}
					 ?>
					<h3 id="sidebar-l-t-h3">
						<span>
							<?php if($check_string == 'its_me'){ 
								echo "My Friends";
							}else{
								echo $bp->displayed_user->userdata->display_name."'s Friends";
							}?>
						</span>
					</h3>
					<div id="sidebar-content-design-div">
						<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : 
							$mutual_friend_count=0;
							$more="";
							$flag=false;
						?>
							<ul id="single-members-list" class="item-list mutual-friend-listing">
							<?php while ( bp_members() ) : bp_the_member(); 
							if($flag==false){
								if($mutual_friend_count < 6){
							?>
								<li>
									<div class="item-avatar single-members-listing">
										<a href="<?php bp_member_permalink() ?>"><?php bp_member_avatar('width=40&height=40') ?></a>
									</div>
								</li>
								
							<?php 
								}else{
									$more = "<a href=".get_site_url(). '/members/' . $bp->displayed_user->userdata->user_nicename.'/friends'." class='sidebar-more'>More</a>";
									$flag=true;
								}
								$mutual_friend_count++;
							}
							endwhile; ?>
							<div class="clear">&nbsp;</div>
							</ul>
						<?php else: ?>

							<div id="message" class="info group-forum-loop-pagination">
								<p><?php _e( "Sorry, no members were found.", 'buddypress' ) ?></p>
							</div>

						<?php endif; ?>
					</div>
					<?php echo $more;?>
				</div>
			</div>	
				
				
			<!-- Mutual Friends -->			
			<?php	
			if($check_string != 'its_me'){ ?>
				<div class="sidebar-inner-wrapper">
					<div id="mutual-friends">	
						<h3 id="sidebar-l-t-h3"><span>Mutual Friends</span></h3>
						<div id="sidebar-content-design-div">
							<?php 
								global $members_template; 
								$junkflag = false;
								$junk = "<ul id='single-members-list' class='item-list fancy-friends-listing'>";
								if ( bp_has_members('user_id='.$loggedin_user_id) ) : 
								$loggedin_user_friends_array = array(); 
								while ( bp_members() ) : bp_the_member(); 
									array_push($loggedin_user_friends_array, $members_template->member->id);
									
								endwhile; 
								endif;
							?>
							<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : 
								$mutual_friend_count=0;
								?>
								<ul id="single-members-list" class="item-list mutual-friend-listing">
								<?php while ( bp_members() ) : bp_the_member(); 
									if($mutual_friend_count < 6){
										if(in_array($members_template->member->id , $loggedin_user_friends_array)){										
								?>
										<li>
											<div class="item-avatar single-members-listing">
												<a href="<?php bp_member_permalink() ?>"><?php bp_member_avatar('width=40&height=40') ?></a>
											</div>
										</li>
										
								<?php 
										}
									}else{ 
										$junkflag = true;
										$junk .= "<li><div class='item-avatar single-members-listing'><a href=".bp_get_member_permalink().">";
										$junk .= bp_get_member_avatar()."</a></div>";
										$junk .= "<div class='mutual-friend-name'>";
										$junk .= "<a href=".bp_get_member_permalink().">".bp_get_member_name()."</a></div>";
										$junk .= "<div class='clear'>&nbsp;</div></li>";
										
									 }
									$mutual_friend_count++;
								endwhile; 
								$junk .= "</ul>";
								?>
								
								<div class="clear">&nbsp;</div>
								</ul>
								<?php if($junkflag == true){?>
									<a id="fancy_more" class="sidebar-more">More</a>
									<div class="list-lightbox mutual-friends-lightbox"><?php echo $junk; ?></div>
									<div class="overlay"></div>
								<?php } ?>
						
							<?php else: ?>

								<div id="message" class="info group-forum-loop-pagination">
									<p><?php _e( "You have no mutual friends.", 'buddypress' ) ?></p>
								</div>

							<?php endif; ?>
						</div>
					</div>
				</div>	
				
		<?php }	?>
			
	<?php }else{?>
		<!--CountDown Timer-->
			<div class="sidebar-inner-wrapper">
				<div id="sidebar-fixtures-scores">
					<div id="countdown-timer-wrapper" class="sidebar-f-s-div">
						<div id="between"><?php echo get_option('between'); ?></div>
						<?php 
							$target = mktime( get_option('hours'), get_option('minutes'), get_option('seconds'), get_option('month'), get_option('day'), get_option('year'));
							$today = time(); 
							$time_parameters= days_hours_minutes_seconds($today, $target);
							$days = $time_parameters['days'];
							$hrs = $time_parameters['hours'];
							$min = $time_parameters['minutes'];
							$sec = $time_parameters['seconds'];
						?>
						<div id='clock_text'>
							<div>
								<span id='days'><?php echo $days ?></span>
							</div>
							<div>
								<span id='hrs'><?php echo $hrs ?></span> 
							</div>
							<div>
								<span id='min'><?php echo $min ?></span>  
							</div>
							<div>
								<span id='sec'><?php echo $sec?></span>
							</div>
							<span>DAYS</span>  
							<span>HOURS</span> 
							<span>MINS</span>
							<span id="c_sec">SEC</span>
						</div>
					</div>
				</div>
			</div>


			<div class="sidebar-inner-wrapper">
				<div id="sidebar-fixtures-scores">
					<h3><span>Fixtures & Results</span></h3>
					<div id="sidebar-content-design-div" class="sidebar-f-s-div">
						<?php #dynamic_sidebar( $sidebar ); ?>
						<?php dynamic_sidebar('Right Fixures'); ?>
					</div>
					<?php $fixturesPage = get_page_by_title('Fixtures'); ?>
					<a href="<?php echo get_permalink($fixturesPage->ID); ?>" class="sidebar-more">More</a>
				</div>
			</div>
				
			<div class="sidebar-inner-wrapper">
				<div id="sidebar-fixtures-scores">			
					<h3><span>League Table</span></h3>
					<div id="sidebar-content-design-div" class="sidebar-f-s-div">
						<?php #dynamic_sidebar( $sidebar ); ?>
						<?php dynamic_sidebar('Leagues'); ?>
					</div>
				</div>
			</div>
	<?php } ?>
		
		
			
			
		
		<!--Invite Others-->
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-fixtures-scores">
				<h3><span>Invite Others</span></h3>
				<div id="sidebar-content-design-div" class="sidebar-f-s-div inviteOthers">
					<?php #dynamic_sidebar('Invite Others'); ?>
					<input type="text" id="txt_inviteUserEmail" name="inviter_email_box" class="r-header-login-text-input" placeholder="Email" />
					<input type="password" id="txt_inviteUserPwd" name="inviter_password_box" class="r-header-login-text-input" placeholder="Password" />
					
					<?php $services = array('Gmail', 'Yahoo!', 'Hotmail', 'AOL', 'Aussiemail', 'FastMail', 'Freemail', 'IndiaTimes', 'KataMail', 'OperaMail'); ?>
					<select id="sel_inviteService">
					<?php foreach($services as $service) { ?>
						<option value="<?php echo strtolower($service); ?>"><?php echo $service; ?></option>
					<?php } ?>
					</select>
					<button class="btn_inviteOthers" id="btn_inviteSubmit">Invite Others</button>
				</div>
			</div>
		</div>
		
		
		
		
		
    </div>
</div>
<div class="clear">&nbsp;</div>
