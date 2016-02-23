<div class="item-list-tabs no-ajax" id="subnav">
	<div class="activity-tabs" id="single-user-group">
		<ul>
			<?php if ( bp_is_my_profile() ) : ?>
				<?php bp_get_options_nav() ?>
			<?php endif; ?>
		</ul>
	</div>	

	<div id="members-order-select" class="last filter">

		<label for="forums-order-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>
		<select id="forums-order-by" class="post-new-forum-select">
			<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
			<option value="popular"><?php _e( 'Most Posts', 'buddypress' ); ?></option>
			<option value="unreplied"><?php _e( 'Unreplied', 'buddypress' ); ?></option>

			<?php do_action( 'bp_forums_directory_order_options' ); ?>

		</select>
	</div>
	<div class="clear">&nbsp;</div>
</div><!-- .item-list-tabs -->


<div class="group-item-body">
<?php

if ( bp_is_current_action( 'favorites' ) ) :
	locate_template( array( 'members/single/forums/topics.php' ), true );

else :
	do_action( 'bp_before_member_forums_content' ); ?>

	<div class="forums myforums">

		<?php locate_template( array( 'forums/forums-loop.php' ), true ); ?>

	</div>

	<?php do_action( 'bp_after_member_forums_content' ); ?>

<?php endif; ?>
</div>
