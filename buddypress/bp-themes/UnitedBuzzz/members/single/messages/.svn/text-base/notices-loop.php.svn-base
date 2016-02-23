<?php do_action( 'bp_before_notices_loop' ) ?>
<div class="group-item-body">
<?php if ( bp_has_message_threads() ) : ?>

	<div class="pagination group-forum-loop-pagination" id="user-pag">

		<div class="pag-count" id="messages-dir-count">
			<?php bp_messages_pagination_count() ?>
		</div>

		<div class="pagination-links" id="messages-dir-pag">
			<?php bp_messages_pagination() ?>
		</div>

	</div><!-- .pagination -->

	<?php do_action( 'bp_after_notices_pagination' ) ?>
	<?php do_action( 'bp_before_notices' ) ?>
	<div class="clear">&nbsp;</div>
	<table id="message-threads" class="zebra notice-loop-table">
		<?php while ( bp_message_threads() ) : bp_message_thread(); ?>
		<div class="clear">&nbsp;</div>
			<tr>
				<td width="1%">
				</td>
				<td width="36%">
					<strong><?php bp_message_notice_subject() ?></strong>
					<?php bp_message_notice_text() ?>
				</td>
				<td width="21%">
					<strong><?php bp_message_is_active_notice() ?></strong>
					<span class="activity"><?php _e("Sent:", "buddypress"); ?> <?php bp_message_notice_post_date() ?></span>
				</td>

				<?php do_action( 'bp_notices_list_item' ) ?>

				<td width="12%" class="notices-button">
					<a class="button delete-message-button" href="<?php bp_message_notice_delete_link() ?>" class="confirm" title="<?php _e( "Delete Message", "buddypress" ); ?>"></a>
					<a class="button" href="<?php bp_message_activate_deactivate_link() ?>" class="confirm"><?php bp_message_activate_deactivate_text() ?></a>
				</td>
			</tr>
		<?php endwhile; ?>
		<div class="clear">&nbsp;</div>
	</table><!-- #message-threads -->

	<?php do_action( 'bp_after_notices' ) ?>

<?php else: ?>

	<div id="message" class="info group-forum-loop-pagination">
		<p><?php _e( 'Sorry, no notices were found.', 'buddypress' ); ?></p>
	</div>

<?php endif;?>
</div>
<?php do_action( 'bp_after_notices_loop' ) ?>
