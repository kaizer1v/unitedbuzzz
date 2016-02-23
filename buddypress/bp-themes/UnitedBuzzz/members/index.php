<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>
	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 id="menu-pages-heading-with-search"><?php _e( 'Members Directory', 'buddypress' ) ?></h3>
					<div id="members-dir-search" class="dir-search">
						<?php bp_directory_members_search_form() ?>
					</div><!-- #members-dir-search -->
					<div class="clear"></div>
				</div>
			</div>
		<form action="" method="post" id="members-directory-form" class="dir-form">
			
			

			<?php do_action( 'bp_before_directory_members_content' ) ?>

			

			<div class="item-list-tabs activity-tabs">
				<ul>
					<li class="selected" id="members-all"><a href="<?php bp_root_domain() ?>"><?php printf( __( 'All Members (%s)', 'buddypress' ), bp_get_total_member_count() ) ?></a></li>

					<?php if ( is_user_logged_in() && function_exists( 'bp_get_total_friend_count' ) && bp_get_total_friend_count( bp_loggedin_user_id() ) ) : ?>
						<li id="members-personal"><a href="<?php echo bp_loggedin_user_domain() . BP_FRIENDS_SLUG . '/my-friends/' ?>"><?php printf( __( 'My Friends (%s)', 'buddypress' ), bp_get_total_friend_count( bp_loggedin_user_id() ) ) ?></a></li>
					<?php endif; ?>

					<?php do_action( 'bp_members_directory_member_types' ) ?>

					<li id="members-order-select" class="last filter">

						<?php _e( 'Order By:', 'buddypress' ) ?>
						<select class="post-new-forum-select">
							<option value="active"><?php _e( 'Last Active', 'buddypress' ) ?></option>
							<option value="newest"><?php _e( 'Newest Registered', 'buddypress' ) ?></option>

							<?php if ( bp_is_active( 'xprofile' ) ) : ?>
								<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ) ?></option>
							<?php endif; ?>

							<?php do_action( 'bp_members_directory_order_options' ) ?>
						</select>
					</li>
				</ul>
			</div><!-- .item-list-tabs -->
			<div class="clear"></div>
		<div class="group-item-body">
			<div id="members-dir-list" class="members dir-list">
				<?php locate_template( array( 'members/members-loop.php' ), true ) ?>
			</div><!-- #members-dir-list -->
			<div class="clear"></div>
			<?php do_action( 'bp_directory_members_content' ) ?>

			<?php wp_nonce_field( 'directory_members', '_wpnonce-member-filter' ) ?>

			<?php do_action( 'bp_after_directory_members_content' ) ?>
		</div>
		</form><!-- #members-directory-form -->

		</div><!-- #content -->
	</div><!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer() ?>
