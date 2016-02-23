<div class="group-item-body">
<form action="<?php bp_messages_form_action('compose') ?>" method="post" id="send_message_form" class="standard-form">

	<?php do_action( 'bp_before_messages_compose_content' ) ?>

	<label for="send-to-input" id="send-message-username"><?php _e("Send To (Username or Friend's Name)", 'buddypress') ?> &nbsp; <span class="ajax-loader"></span></label>
	<ul class="first acfb-holder">
		<li>
			<?php bp_message_get_recipient_tabs() ?>
			<input type="text" name="send-to-input" class="send-to-input inputbox-common-class" id="send-to-input" /><br />
		</li>
	</ul>
	<div class="clear">&nbsp;</div>
	<?php if ( is_super_admin() ) : ?>
		<input type="checkbox" id="send-notice" class="inputbox-common-class" name="send-notice" value="1" /> <?php _e( "This is a notice to all users.", "buddypress" ) ?><br />
	<?php endif; ?>
	<div class="clear">&nbsp;</div>
	<label for="subject"><?php _e( 'Subject', 'buddypress') ?></label>
	<input type="text" name="subject" id="subject" class="inputbox-common-class message-subject-input" value="<?php bp_messages_subject_value() ?>" /><br />
	<br />
	<label for="content" id="send-message-label"><?php _e( 'Message', 'buddypress') ?></label>
	<textarea name="content" class="inputbox-common-class" id="message_content" rows="15" cols="40"><?php bp_messages_content_value() ?></textarea><br />

	<input type="hidden" name="send_to_usernames" id="send-to-usernames" value="<?php bp_message_get_recipient_usernames(); ?>" class="inputbox-common-class <?php bp_message_get_recipient_usernames() ?>" /><br />

	<?php do_action( 'bp_after_messages_compose_content' ) ?>

	<div class="submit send-message-submit-wrapper">
		<input type="submit" class="new-topic-ajax-button" value="<?php _e( "Send Message", 'buddypress' ) ?>" name="send" id="send" />
		<span class="ajax-loader"></span>
	</div>

	<?php wp_nonce_field( 'messages_send_message' ) ?>
</form>
</div>
<script type="text/javascript">
	document.getElementById("send-to-input").focus();
</script>

