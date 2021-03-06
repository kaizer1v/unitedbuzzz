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
					<h3><?php _e( 'Delete Account', 'buddypress' ); ?></h3>

					<form action="<?php echo bp_displayed_user_domain() . bp_get_settings_slug() . '/delete-account'; ?>" name="account-delete-form" id="account-delete-form" class="standard-form" method="post">

						<div id="message" class="info">
							<p><?php _e( 'WARNING: Deleting your account will completely remove ALL content associated with it. There is no way back, please be careful with this option.', 'buddypress' ); ?></p>
						</div>

						<input type="checkbox" name="delete-account-understand" id="delete-account-understand" value="1" onclick="if(this.checked) { document.getElementById('delete-account-button').disabled = ''; } else { document.getElementById('delete-account-button').disabled = 'disabled'; }" /> <?php _e( 'I understand the consequences of deleting my account.', 'buddypress' ); ?>

						<?php do_action( 'bp_members_delete_account_before_submit' ); ?>

						<div class="submit">
							<input type="submit" disabled="disabled" value="<?php _e( 'Delete My Account', 'buddypress' ) ?>" id="delete-account-button" name="delete-account-button" class="new-topic-ajax-button" />
						</div>

						<?php do_action( 'bp_members_delete_account_after_submit' ); ?>

						<?php wp_nonce_field( 'delete-account' ); ?>
					</form>

					<?php do_action( 'bp_after_member_body' ); ?>
				</div>
			</div><!-- #item-body -->

			<?php do_action( 'bp_after_member_settings_template' ); ?>

		</div><!-- .padder -->
	</div><!-- #content -->

<?php get_sidebar('right')?>
<?php get_footer() ?>
