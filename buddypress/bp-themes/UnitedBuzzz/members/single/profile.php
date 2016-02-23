<?php do_action( 'bp_before_profile_content' ) ?>
<div class="profile" role="main">

	<?php
		// Profile Edit
		if ( bp_is_current_action( 'edit' ) ){			
			locate_template( array( 'members/single/profile/edit.php' ), true );
		}
		// Change Avatar
		elseif ( bp_is_current_action( 'change-avatar' ) ){
			locate_template( array( 'members/single/profile/change-avatar.php' ), true );
		}
		elseif ( bp_is_current_action( 'profile-info' ) ){
			locate_template( array( 'members/single/profile/profile-info.php' ), true );
		}
		// Display XProfile
		elseif ( bp_is_active( 'xprofile' ) ){
			global $bp;
			$loggedin_user_id = $bp->loggedin_user->userdata->ID;
			$displayed_user_id = $bp->displayed_user->id ;
			
			if($loggedin_user_id == $displayed_user_id){
				$check_string = 'its_me' ;
			}
			else{
				$check_string = friends_check_friendship_status( $loggedin_user_id,$displayed_user_id);
			}
		?>
			<div class="clear"></div>

		
			<?php if ( is_user_logged_in() && function_exists( 'bp_send_public_message_link' ) ) : ?>
				<div class="generic-button" id="post-mention">
					<?php if(!bp_is_my_profile()){ ?>
							<a href="<?php bp_send_public_message_link() ?>" title="<?php _e( 'Mention this user in a new public message, this will send the user a notification to get their attention.', 'buddypress' ) ?>" class="new-topic-ajax-button"><?php _e( 'Mention this User', 'buddypress' ) ?></a>
					<?php }else{ ?>
							<a href="<?php bp_loggedin_user_link() ?>" title="<?php _e( 'Mention myself in a new public message.', 'buddypress' ) ?>" class="new-topic-ajax-button"><?php _e( 'Post an update', 'buddypress' ) ?></a>	
					<?php } ?>
				</div>
			<?php endif; ?>
			

			<?php if ( $check_string == 'not_friends' ||  $check_string == 'pending' ) {  ?>
				<?php locate_template( array( 'members/single/profile/profile-loop.php' ), true ); ?>
			<?php } else{ ?>
			<!--Profile Activity Loop-->
			<div class="activity">
				<?php /* Querystring is set via AJAX in _inc/ajax.php - bp_dtheme_activity_loop() */ ?>

				<?php do_action( 'bp_before_activity_loop' ) ?>

				<?php if ( bp_has_activities( bp_ajax_querystring( 'activity' ).'&per_page=5' ) ) : ?>

					<?php /* Show pagination if JS is not enabled, since the "Load More" link will do nothing */ ?>
					<noscript>
						<div class="pagination">
							<div class="pag-count"><?php bp_activity_pagination_count() ?></div>
							<div class="pagination-links"><?php bp_activity_pagination_links() ?></div>
						</div>
					</noscript>

					<?php if ( empty( $_POST['page'] ) ) : ?>
						<ul id="activity-stream" class="activity-list item-list">
					<?php endif; ?>

					<?php while ( bp_activities() ) : bp_the_activity(); ?>

						<?php include( locate_template( array( 'activity/entry.php' ), false ) ) ?>

					<?php endwhile; ?>

					<?php if ( bp_get_activity_count() == bp_get_activity_per_page() ) : ?>
						<li class="load-more a-load-more">
							<a href="#more"><?php _e( 'Load More', 'buddypress' ) ?></a> &nbsp; <span class="ajax-loader"></span>
						</li>
					<?php endif; ?>

					<?php if ( empty( $_POST['page'] ) ) : ?>
						</ul>
					<?php endif; ?>

				<?php else : ?>
					<div id="message" class="info">
						<p><?php _e( 'Sorry, there was no activity found. Please try a different filter.', 'buddypress' ) ?></p>
					</div>
				<?php endif; ?>

				<?php do_action( 'bp_after_activity_loop' ) ?>

				<form action="" name="activity-loop-form" id="activity-loop-form" method="post">
					<?php wp_nonce_field( 'activity_filter', '_wpnonce_activity_filter' ) ?>
				</form>

			</div><!-- .activity -->

			<?php
			}
		}
		// Display WordPress profile (fallback)
		else {
			locate_template( array( 'members/single/profile/profile-wp.php' ), true );
		?>
			<div class="clear"></div>

			<?php if ( is_user_logged_in() && !bp_is_my_profile() && function_exists( 'bp_send_public_message_link' ) ) : ?>
				<div class="generic-button" id="post-mention">
					<a href="<?php bp_send_public_message_link() ?>" title="<?php _e( 'Mention this user in a new public message, this will send the user a notification to get their attention.', 'buddypress' ) ?>" class="new-topic-ajax-button"><?php _e( 'Mention this User', 'buddypress' ) ?></a>
				</div>
			<?php endif; ?>


			<!--Profile Activity Loop-->
			<div class="activity">
				<?php /* Querystring is set via AJAX in _inc/ajax.php - bp_dtheme_activity_loop() */ ?>

				<?php do_action( 'bp_before_activity_loop' ) ?>

				<?php if ( bp_has_activities( bp_ajax_querystring( 'activity' ).'&per_page=5' ) ) : ?>

					<?php /* Show pagination if JS is not enabled, since the "Load More" link will do nothing */ ?>
					<noscript>
						<div class="pagination">
							<div class="pag-count"><?php bp_activity_pagination_count() ?></div>
							<div class="pagination-links"><?php bp_activity_pagination_links() ?></div>
						</div>
					</noscript>

					<?php if ( empty( $_POST['page'] ) ) : ?>
						<ul id="activity-stream" class="activity-list item-list">
					<?php endif; ?>

					<?php while ( bp_activities() ) : bp_the_activity(); ?>

						<?php include( locate_template( array( 'activity/entry.php' ), false ) ) ?>

					<?php endwhile; ?>

					<?php if ( bp_get_activity_count() == bp_get_activity_per_page() ) : ?>
						<li class="load-more a-load-more">
							<a href="#more"><?php _e( 'Load More', 'buddypress' ) ?></a> &nbsp; <span class="ajax-loader"></span>
						</li>
					<?php endif; ?>

					<?php if ( empty( $_POST['page'] ) ) : ?>
						</ul>
					<?php endif; ?>

				<?php else : ?>
					<div id="message" class="info">
						<p><?php _e( 'Sorry, there was no activity found. Please try a different filter.', 'buddypress' ) ?></p>
					</div>
				<?php endif; ?>

				<?php do_action( 'bp_after_activity_loop' ) ?>

				<form action="" name="activity-loop-form" id="activity-loop-form" method="post">
					<?php wp_nonce_field( 'activity_filter', '_wpnonce_activity_filter' ) ?>
				</form>

			</div><!-- .activity -->

			<?php } ?>

</div><!-- .profile -->


<?php do_action( 'bp_after_profile_content' ) ?>
