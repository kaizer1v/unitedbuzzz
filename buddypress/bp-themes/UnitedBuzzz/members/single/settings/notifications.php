<?php get_header('main')?>
<?php get_sidebar('left')?>
	<div id="center-content-div-wrapper">
		<div id="center-content-div">

			<?php do_action( 'bp_before_member_settings_template' ); ?>

			<div id="item-header">

				<?php locate_template( array( 'members/single/member-header.php' ), true ); ?>

			</div><!-- #item-header -->

		
			<div id="item-body" role="main">

				<?php do_action( 'bp_before_member_body' ); ?>

				<div class="item-list-tabs no-ajax activity-tabs" id="subnav">
					<ul>

						<?php bp_get_options_nav(); ?>

						<?php do_action( 'bp_member_plugin_options_nav' ); ?>

					</ul>
				</div><!-- .item-list-tabs -->
				<div class="clear">&nbsp;</div>
				
				<div class="group-item-body account-setting-padding">
					<h3><?php _e( 'Email Notification', 'buddypress' ); ?></h3>

					<?php do_action( 'bp_template_content' ) ?>

					<form action="<?php echo bp_displayed_user_domain() . bp_get_settings_slug() . '/notifications'; ?>" method="post" class="standard-form" id="settings-form">
						<p><?php _e( 'Send a notification by email when:', 'buddypress' ); ?></p>

						<?php do_action( 'bp_notification_settings' ); ?>

						<?php do_action( 'bp_members_notification_settings_before_submit' ); ?>

						<div class="submit">
							<input type="submit" name="submit" value="<?php _e( 'Save Changes', 'buddypress' ); ?>" id="submit" class="auto new-topic-ajax-button" />
						</div>

						<?php do_action( 'bp_members_notification_settings_after_submit' ); ?>

						<?php wp_nonce_field('bp_settings_notifications'); ?>

					</form>

					<?php do_action( 'bp_after_member_body' ); ?>
				</div>
			</div><!-- #item-body -->

			<?php do_action( 'bp_after_member_settings_template' ); ?>

		</div><!-- .padder -->
	</div><!-- #content -->

<?php get_sidebar('right')?>
<?php get_footer() ?>
