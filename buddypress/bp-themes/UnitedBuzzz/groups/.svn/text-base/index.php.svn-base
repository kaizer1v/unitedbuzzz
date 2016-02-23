<?php get_header('main') ?>
<?php get_sidebar('left')?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
		
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					
					<h3  id="menu-pages-heading-with-search"><?php _e( 'Groups', 'buddypress' ) ?></h3>
					<?php do_action( 'bp_before_directory_groups_content' ) ?>
					<div id="group-dir-search" class="dir-search">
						<form action="" method="get" id="search-groups-form">
							<label><input type="text" name="s" class="menu-pages-heading-search-input input-placeholder" id="groups_search" placeholder="Search in Groups" /></label>
							<input type="submit" id="groups_search_submit" class="menu-pages-heading-search-submit" name="groups_search_submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
						</form>
					</div><!-- #group-dir-search -->
					
					<div class="clear"></div>
				</div>
			</div>
			
		<?php if ( is_user_logged_in() ) : ?> &nbsp;<a class="button new-topic-ajax-button" href="<?php echo bp_get_root_domain() . '/' . BP_GROUPS_SLUG . '/create/' ?>"><?php _e( 'Create a Group' ); ?></a><?php endif; ?>
		<form action="" method="post" id="groups-directory-form" class="dir-form common-directory-form">
			
			<div class="item-list-tabs">
				<ul>
					<li class="selected" id="groups-all"><a href="<?php echo bp_get_root_domain() . '/' . BP_GROUPS_SLUG ?>"><?php printf( __( 'All Groups (%s)', 'buddypress' ), bp_get_total_group_count() ) ?></a></li>

					<?php if ( is_user_logged_in() && bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) : ?>
						<li id="groups-personal"><a href="<?php echo bp_loggedin_user_domain() . BP_GROUPS_SLUG . '/my-groups/' ?>"><?php printf( __( 'My Groups (%s)', 'buddypress' ), bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) ?></a></li>
					<?php endif; ?>

					<?php do_action( 'bp_groups_directory_group_types' ) ?>

					<li id="groups-order-select" class="last filter common-order-select">

						<?php _e( 'Order By:', 'buddypress' ) ?>
						<select class="post-new-forum-select">
							<option value="active"><?php _e( 'Last Active', 'buddypress' ) ?></option>
							<option value="popular"><?php _e( 'Most Members', 'buddypress' ) ?></option>
							<option value="newest"><?php _e( 'Newly Created', 'buddypress' ) ?></option>
							<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ) ?></option>

							<?php do_action( 'bp_groups_directory_order_options' ) ?>
						</select>
					</li>
					<div class="clear"></div>
				</ul>
				<div class="clear"></div>
			</div><!-- .item-list-tabs -->
			
			<div id="groups-dir-list" class="groups dir-list">
				<?php locate_template( array( 'groups/groups-loop.php' ), true ) ?>
			</div><!-- #groups-dir-list -->

			<?php do_action( 'bp_directory_groups_content' ) ?>

			<?php wp_nonce_field( 'directory_groups', '_wpnonce-groups-filter' ) ?>

		</form><!-- #groups-directory-form -->

		<?php do_action( 'bp_after_directory_groups_content' ) ?>

		</div><!-- #content -->
	</div><!-- #content-container -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

<?php get_sidebar('right')?>
<?php get_footer() ?>
