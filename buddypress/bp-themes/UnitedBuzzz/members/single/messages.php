<div class="item-list-tabs no-ajax activity-tabs" id="subnav">
	<ul>
		<?php bp_get_options_nav() ?>
	</ul>
</div><!-- .item-list-tabs -->
<div class="clear">&nbsp;</div>
<?php if ( 'compose' == bp_current_action() ) : ?>
	<?php locate_template( array( 'members/single/messages/compose.php' ), true ) ?>

<?php elseif ( 'view' == bp_current_action() ) : ?>
	<?php locate_template( array( 'members/single/messages/single.php' ), true ) ?>

<?php else : ?>

	<?php do_action( 'bp_before_member_messages_content' ) ?>

	<div class="messages">
		<?php if ( 'notices' == bp_current_action() ) : ?>
			<?php locate_template( array( 'members/single/messages/notices-loop.php' ), true ) ?>

		<?php else : ?>
			<?php locate_template( array( 'members/single/messages/messages-loop.php' ), true ) ?>

		<?php endif; ?>
	</div><!-- .messages -->

	<?php do_action( 'bp_after_member_messages_content' ) ?>

<?php endif; ?>
