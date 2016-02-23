<?php do_action( 'bp_before_group_header' ) ?>
<div class="group-header-content-wrapper">
	<div class="group-header-content">
		<div id="item-header-avatar">
			<a href="<?php bp_group_permalink() ?>" title="<?php bp_group_name() ?>">
				<?php bp_group_avatar('height=63&width=70&type=full'); ?>
			</a>
		</div><!-- #item-header-avatar -->
		<div id="item-header-content">
			<h2><a href="<?php bp_group_permalink() ?>" title="<?php bp_group_name() ?>"><?php bp_group_name() ?></a></h2>
			<span class="highlight"><?php bp_group_type() ?></span> <span class="activity"><?php printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?></span>

			<?php do_action( 'bp_before_group_header_meta' ) ?>

			
		</div><!-- #item-header-content -->
		<div class="clear"></div>
		<div id="item-meta">
			<?php bp_group_description() ?>

			<div id="item-buttons">

				<?php do_action( 'bp_group_header_actions' ); ?>

			</div><!-- #item-buttons -->

			<?php do_action( 'bp_group_header_meta' ) ?>
		</div>
	</div>

	<div class="group-admins-mods">
		<div id="item-actions">
			<?php if ( bp_group_is_visible() ) : ?>

				<h3><?php _e( 'Group Admins & Mods', 'buddypress' ) ?></h3>
				<?php bp_group_list_admins() ?>

				<?php do_action( 'bp_after_group_menu_admins' ) ?>

				<?php if ( bp_group_has_moderators() ) : ?>
					<?php do_action( 'bp_before_group_menu_mods' ) ?>

					<?php bp_group_list_mods() ?>

					<?php do_action( 'bp_after_group_menu_mods' ) ?>
				<?php endif; ?>

			<?php endif; ?>
		</div><!-- #item-actions -->
	</div>


<div class="clear"></div>
<?php do_action( 'bp_after_group_header' ) ?>

<?php do_action( 'template_notices' ) ?>
</div>
