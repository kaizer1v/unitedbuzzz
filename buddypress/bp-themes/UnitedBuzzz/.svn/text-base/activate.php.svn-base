<?php
/*
Template Name: Activate Page
*/
?>
<?php /* This template is only used on multisite installations */ ?>
<?php get_header('login'); ?>

<div id="registration_page_content_wrapper">
	<div class="clear">&nbsp;</div>

		<div id="activation-content">

		<?php do_action( 'bp_before_activation_page' ) ?>

		<div class="page" id="activate-page">

			<?php do_action( 'template_notices' ) ?>

			<?php if ( bp_account_was_activated() ) : ?>
			
				<center>
					<div id="activation-form" class="activation-form-div-for-padding">
					<h2 class="widgettitle"><?php _e( 'Account Activated', 'buddypress' ) ?></h2>

					<?php do_action( 'bp_before_activate_content' ) ?>

					<?php if ( isset( $_GET['e'] ) ) : ?>
						<p><?php _e( 'Your account was activated successfully! Your account details have been sent to you in a separate email.', 'buddypress' ) ?></p>
					<?php else : ?>
						<p><?php _e( 'Your account was activated successfully! You can now log in with the username and password you provided when you signed up.', 'buddypress' ) ?></p><br>
						<a href="<?php bloginfo('url')?>/login" class="l-buttons" id="activation-login"  ><input type="button" class="l-buttons activation-login-button-success" tabindex="" value="LOGIN"></input></a>
					<?php endif; ?>
					</div>
				<center>
			<?php else : ?>

				<?php do_action( 'bp_before_activate_content' ) ?>

				
				
					<form action="" method="get" class="standard-form" id="activation-form">
						<div id="f-form-content">
							<center>
								<h2><?php _e('Activate Your Account') ?></h2>
								<p><?php _e( 'Please provide a valid activation key.', 'buddypress' ) ?></p>
								
								<label for="key"><?php _e( 'Activation Key:', 'buddypress' ) ?></label>
								<input type="text" name="key" class="r-form-text-input" id="key" value="" />

								
								<p class="submit">
									<input type="submit" name="submit" class="l-buttons" value="<?php _e( 'Activate', 'buddypress' ) ?>" />
								</p>
							</center>
						</div>
					</form>
				
			<?php endif; ?>

			<?php do_action( 'bp_after_activate_content' ) ?>

		</div><!-- .page -->

		<?php do_action( 'bp_after_activation_page' ) ?>

		</div><!-- #content -->
	<div class="clear">&nbsp;</div>
</div>


<?php get_footer();?>
<style>
	#footer-wrapper{
		margin-bottom:0px !important;
		position:fixed;
		bottom:0px;
	}
</style>
