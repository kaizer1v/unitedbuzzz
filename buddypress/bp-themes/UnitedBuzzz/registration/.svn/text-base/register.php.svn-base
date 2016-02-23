<?php
	get_header('register');
?>
	<script>
		myObj.currentPage = 'register';
	</script>
	<div id="registration_page_content_wrapper">
		<div class="page" id="register-page">
			<div id="main-page-content-slider-wrapper">
				<div id="previous-image"></div>
				<div id="main-page-content-slider">
					<div id="r-slideshow">
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/1.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>Contest</h3>5 users with biggest active friend network as on Nov 23 will get a United jersey.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/2.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>Man Utd Features on UnitedBuzzz</h3>Fixtures, History, Twitter Feed by all players Statistics & much more.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/3.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>Connect & Chat</h3>Make new connections with MUFC fans and chat with friends.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/4.jpg"></img>
							<div class="registration-page-images-text">
								
								<span><h3>Chants</h3>Listen to a huge list of available songs and sing along during the match.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/5.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>MatchCast</h3>State of the Art MatchCast - Comment, Like and listen to MUFC chants.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/6.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>CHAMP19NS</h3>Join the CHAMP19NS, Be a Part of the MUFC Family.</span>
							</div>
						</div>
					</div>	
				</div>
				<div id="next-image"></div>
				<div class="clear">&nbsp;</div>
				<div id="main-page-content-slider-shadow"></div>
				<div id="registration-slider-dots-wrapper">
					<div class="registration-slider-dots r-slider-inactive r-slider-active selected"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
				</div>
			</div>
			<form action="" name="signup_form" id="signup_form" class="standard-form" method="post" enctype="multipart/form-data">

			<?php if ( 'request-details' == bp_get_current_signup_step() ) : ?>

				<h2 id="signup_heading"><?php _e( 'SIGN UP', 'buddypress' ) ?></h2>
				<div id="r-form-content">
				<div id="signup_desc"><?php _e( 'Its easy and simple', 'buddypress' ) ?></div>

					<?php /***** Basic Account Details ******/ ?>
					<table id="r-form-table">
						<tr>
							<td class="r-form-label-text"><label for="signup_username"><?php _e( 'Username :', 'buddypress' ) ?></label></td>
							<td><input type="text" class="r-form-text-input" tabindex="8" name="signup_username" id="signup_username" value="<?php bp_signup_username_value() ?>" /><?php do_action( 'bp_signup_username_errors' ) ?></td>
						</tr>
						<tr>
							<td class="r-form-label-text"><label for="signup_email"><?php _e( 'Email Address :', 'buddypress' ) ?></label></td>
							<td><input type="text" class="r-form-text-input" tabindex="9" name="signup_email" id="signup_email" value="<?php bp_signup_email_value() ?>" /><?php do_action( 'bp_signup_email_errors' ) ?></td>
						</tr>
						<tr>
							<td class="r-form-label-text"><label for="signup_password"><?php _e( 'Password :', 'buddypress' ) ?></label></td>
							<td><input type="password" class="r-form-text-input" tabindex="10" name="signup_password" id="signup_password" value="" /><?php do_action( 'bp_signup_password_errors' ) ?></td>
						</tr>
						<tr>
							<td class="r-form-label-text"><label for="signup_password_confirm"><?php _e( 'Confirm Password :', 'buddypress' ) ?></label></td>
							<td><input type="password" class="r-form-text-input" tabindex="11" name="signup_password_confirm" id="signup_password_confirm" value="" /><?php do_action( 'bp_signup_password_confirm_errors' ) ?></td>
						</tr>
					</table>
				<?php if ( bp_is_active( 'xprofile' ) ) : ?>

					<?php do_action( 'bp_before_signup_profile_fields' ) ?>

					<div class="register-section" id="profile-details-section">

						<?php /* Use the profile field loop to render input fields for the 'base' profile field group */ ?>
						<?php if ( function_exists( 'bp_has_profile' ) ) : if ( bp_has_profile( 'profile_group_id=1' ) ) : while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

					
						<?php while ( bp_profile_fields() ) : bp_the_profile_field(); ?>

							<div class="editfield">

								<?php if ( 'textbox' == bp_get_the_profile_field_type() ) : ?>
									<table id="r-name-section">
										<tr>
											<td class="r-form-label-text"><label for="<?php bp_the_profile_field_input_name() ?>"><?php bp_the_profile_field_name() ?><?php _e( ':', 'buddypress' ) ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php endif; ?></label></td>
											<td><input type="text" class="r-form-text-input" tabindex="7" name="<?php bp_the_profile_field_input_name() ?>" id="<?php bp_the_profile_field_input_name() ?>" value="<?php bp_the_profile_field_edit_value() ?>" /><?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ) ?></td>
										</tr>
									</table>
								<?php endif; ?>

								<?php if ( 'radio' == bp_get_the_profile_field_type() ) : ?>

									<div class="radio">
										<table id="r-gender-section">
											<tr>
												<td class="r-form-label-text"><span class="label"><?php bp_the_profile_field_name() ?><?php _e( ':', 'buddypress' ) ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php endif; ?></span></td>
												<td id="r-radio-button" ><?php bp_the_profile_field_options() ?><?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ) ?></td>
												
												<?php if ( !bp_get_the_profile_field_is_required() ) : ?>
													<a class="clear-value" href="javascript:clear( '<?php bp_the_profile_field_input_name() ?>' );"><?php _e( 'Clear', 'buddypress' ) ?></a>
												<?php endif; ?>
												
											</tr>
										</table>
									</div>

								<?php endif; ?>

								<?php do_action( 'bp_custom_profile_edit_fields' ) ?>

								

							</div>
						<?php endwhile; ?>
						<input type="hidden" name="signup_profile_field_ids" id="signup_profile_field_ids" value="<?php bp_the_profile_group_field_ids() ?>" />
						<input type="hidden" name="first_login" id="first_login" value="true" />
						<?php endwhile; endif; endif; ?>

						</div><!-- #profile-details-section -->

					<?php do_action( 'bp_after_signup_profile_fields' ) ?>

				<?php endif; ?>
				
				<?php do_action( 'bp_before_registration_submit_buttons' ) ?>

				<div class="submit" id="signup-submit">
					<input type="submit" name="signup_submit" id="signup_submit" value="<?php _e( 'SIGN UP', 'buddypress' ) ?>" />
				</div>
				
					
				
				
				<?php do_action( 'bp_after_registration_submit_buttons' ) ?>

				<?php wp_nonce_field( 'bp_new_signup' ) ?>

			<?php endif; // request-details signup step ?>

			<?php if ( 'completed-confirmation' == bp_get_current_signup_step() ) : ?>

				<h2 id="signup-complete-h2"><?php _e( 'SIGN UP COMPLETE!', 'buddypress' ) ?></h2>

				<?php do_action( 'template_notices' ) ?>

				<?php if ( bp_registration_needs_activation() ) : ?>
					<p class="signup-complete-p"><?php _e( 'You have successfully created your account! To begin using this site you will need to activate your account via the email we have just sent to your address.', 'buddypress' ) ?></p>
				<?php else : ?>
					<p class="signup-complete-p"><?php _e( 'You have successfully created your account! Please log in using the username and password you have just created.', 'buddypress' ) ?></p>
				<?php endif; ?>
				<!--<a href="<?php// bloginfo('url')?>/login" class="l-buttons" id="r-success-page-login"  ><input type="button" class="l-buttons" tabindex="" value="LOGIN"></input></a>-->
			<?php endif; // completed-confirmation signup step ?>
			
					
			
			<?php do_action( 'bp_custom_signup_steps' ) ?>
			</div>
			</form>
			<div class="clear">&nbsp;</div>
			
			<div id="registration-globe">
				<ul>
					<li>
						<h3>Connect</h3>
						<span>Connect with your friends and other ManUtd fans</span>
					</li>
					<li>
						<h3>Explore</h3>
						<span>Receive personalised news, Players & Staff Info</span>
					</li>
					<li>
						<h3>Share</h3>
						<span>The latest blogs, media, transfers and forum topics</span>
					</li>
				</ul>
				<div id="world-map"></div>
				<div class="clear">&nbsp;</div>
			</div>
			<div class="clear">&nbsp;</div>
		</div>
		

	</div><!-- #registration_page_content_wrapper end -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

	<?php do_action( 'bp_after_directory_activity_content' ) ?>
	<script src="<?php bloginfo('template_url')?>/js/jquery.defaultvalue.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		jQuery(document).ready( function() {
			jQuery('.input-placeholder').defaultValue();
			
				
			if(jQuery("#r-name-section td div").hasClass('error')){
				jQuery("#r-name-section").css('top','35px');
			}
		
		
		});
		
	</script>
<?php get_footer();?>
<style>
	#footer-wrapper{
		margin-bottom:0px !important;
	}
</style>
