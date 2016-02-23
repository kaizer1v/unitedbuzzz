<div class="sidebar-wrapper">
    <div class="sidebar" id="sidebar-left">
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-profile">
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
				<h3 id="sidebar-l-p-h3">
					<span><?php
						if ( $check_string == 'its_me' ) {
							echo "Your";
						}else{
							echo $bp->displayed_user->fullname."'s";
						} ?>
					 <br />Profile</span>
				</h3>
				<div class="clear"></div>
				<div id="sidebar-l-profile-image-wrapper">
					<div id="sidebar-l-profile-image">
						<?php $arr = array(
							'type'=>'full',
							'width'=>'100',
							'height'=>'100',
							'html'=>true,
							'alt'=>''
						);?>
						<?php bp_displayed_user_avatar( $arr) ?>
					</div>
				</div>
				<div class="clear">&nbsp;</div>
				<?php if ( is_user_logged_in() ) {?>
					<div id="sidebar-l-profile-links">
						<?php if ( $check_string == 'its_me' ) { ?>
							<a href="<?php bp_loggedin_user_link()?>profile/edit">Edit</a>
							<a href="<?php bp_loggedin_user_link()?>profile/change-avatar">Change Avatar</a>
							<a href="<?php bp_loggedin_user_link()?>profile">View</a>
						<?php }else{ ?>
						<!--	<a href="<?php //$bp->displayed_user->domain."profile"?>profile">View</a>-->
						<?php }?>
					</div>
				<?php } ?>
				<div id="p-add-friend-div">
					<?php
						
							
							if ( $check_string == 'not_friends' ||  $check_string == 'pending' ) {
								if ( function_exists( 'bp_add_friend_button' ) ) : 
									bp_add_friend_button() ;
								endif; 
							}
				
					?>
				</div>
			</div>
		</div>
		<div class="sidebar-inner-wrapper">
			<div id="profile-detail-links">
				<div class="profile-detail-links-list-tabs no-ajax" id="object-nav">
					<ul>
						<li><a href="<?php echo bp_get_displayed_user_link().'profile/profile-info' ?>">Profile Info</a></li>
						<?php  bp_get_displayed_user_nav() ?>
						<div class="clear"></div>
						
						<?php do_action( 'bp_member_options_nav' ) ?>
						<?php if ( $check_string == 'its_me' ) {  ?>
							<li><?php if(function_exists('post_from_site')) { post_from_site(); } ?></li>
						<?php } ?>
						<?php $dreamTeamPage = get_page_by_title("Dream Team"); ?>
						<?php #wp_nav_menu( array( 'theme_location' => 'sidebar-pleft-profile') ); ?>
						<?php if($check_string == 'its_me' ||  $check_string == 'is_friend') { ?>
							<li><a href="<?php echo get_permalink($dreamTeamPage->ID); ?>">My Dream Team</a></li>
						<?php } ?>
						<div id="p-cancel-friend-div">
							<?php
								if ( $check_string == 'is_friend' ) { 
									if ( function_exists( 'bp_add_friend_button' ) ) : 
										bp_add_friend_button() ;
									endif; 
					
								}
							?>
						</div>
					</ul>
				</div>
			</div>
		</div>
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-leagues-tournaments">
				<h3 id="sidebar-l-t-h3"><span>Leagues & </span><br><span id="sidebar-tournaments-text">Tournaments</span></h3>
				<div id="sidebar-content-design-div">
					<div id="l-t-menu-wrapper">
						<?php  wp_nav_menu( array( 'theme_location' => 'sidebar-l-t') ); ?>
					</div>
				</div>
			<!--	<a href="" class="sidebar-more">More</a>	--><!--Might Be Required later-->
			</div>
		</div>	
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-groups">
				<?php dynamic_sidebar( 'Left' ) ?>
				<a href="<?php bloginfo('site-url')?>/groups" class="sidebar-more">More</a>
			</div>
		</div>
    </div>
    
</div>
