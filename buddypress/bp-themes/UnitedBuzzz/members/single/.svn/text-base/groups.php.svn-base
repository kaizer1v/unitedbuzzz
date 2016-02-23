<div class="item-list-tabs no-ajax" id="subnav">
	<div class="activity-tabs" id="single-user-group">
		<ul>
			<?php if ( bp_is_my_profile() ) : ?>
				<?php bp_get_options_nav() ?>
			<?php endif; ?>
		</ul>
	</div>	
	<?php if ( 'invites' != bp_current_action() ) : ?>
	<div id="members-order-select" class="last filter">

		<?php _e( 'Order By:', 'buddypress' ) ?>
		<select id="groups-sort-by" class="post-new-forum-select">
			<option value="active"><?php _e( 'Last Active', 'buddypress' ) ?></option>
			<option value="popular"><?php _e( 'Most Members', 'buddypress' ) ?></option>
			<option value="newest"><?php _e( 'Newly Created', 'buddypress' ) ?></option>
			<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ) ?></option>

			<?php do_action( 'bp_member_group_order_options' ) ?>
		</select>
	</div>
	<?php endif; ?>
	<div class="clear">&nbsp;</div>

</div><!-- .item-list-tabs -->


<div class="group-item-body">
<?php if ( 'invites' == bp_current_action() ) : ?>
	<?php locate_template( array( 'members/single/groups/invites.php' ), true ) ?>

<?php else : ?>

	<?php do_action( 'bp_before_member_groups_content' ) ?>

	<div class="groups mygroups" id="single-groups-loop-wrapper">
		<?php locate_template( array( 'groups/groups-loop.php' ), true ) ?>
	</div>

	<?php do_action( 'bp_after_member_groups_content' ) ?>

<?php endif; ?>
</div>
