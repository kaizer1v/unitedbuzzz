<div class="item-list-tabs no-ajax" id="subnav">
	<div class="activity-tabs">
		<ul>
			<?php if ( bp_is_my_profile() ) : ?>
				<?php bp_get_options_nav() ?>
			<?php endif; ?>
		</ul>
	</div>
	

	<div id="members-order-select" class="last filter">

		<?php _e( 'Order By:', 'buddypress' ) ?>
		<select id="members-all" class="post-new-forum-select">
			<option value="active"><?php _e( 'Last Active', 'buddypress' ) ?></option>
			<option value="newest"><?php _e( 'Newest Registered', 'buddypress' ) ?></option>
			<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ) ?></option>

			<?php do_action( 'bp_member_blog_order_options' ) ?>
		</select>
	</div>

	<div class="clear">&nbsp;</div>
</div>
<div class="group-item-body">
<?php if ( 'requests' == bp_current_action() ) : ?>
	<?php locate_template( array( 'members/single/friends/requests.php' ), true ) ?>

<?php else : ?>

	<?php do_action( 'bp_before_member_friends_content' ) ?>
	
		<div class="members friends">
			<?php locate_template( array( 'members/members-loop.php' ), true ) ?>
		</div><!-- .members.friends -->
	
	<?php do_action( 'bp_after_member_friends_content' ) ?>

<?php endif; ?>
</div>