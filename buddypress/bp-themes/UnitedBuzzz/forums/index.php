<?php get_header('main') ?>
<?php get_sidebar('left')?>
	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
		

					<h3  id="menu-pages-heading-with-search"><?php _e( 'Forums', 'buddypress' ) ?></h3>
					
					<?php do_action( 'bp_before_directory_forums_content' ) ?>

					<div id="forums-dir-search" class="dir-search">
						<form action="" method="get" id="search-forums-form">
							<label><input type="text" name="s" class="menu-pages-heading-search-input input-placeholder" id="forums_search" placeholder="Search in Forums"/></label>
							<input type="submit" id="forums_search_submit" class="menu-pages-heading-search-submit" name="forums_search_submit" value="<?php _e( 'Go', 'buddypress' ); ?>" />
						</form>
					</div>
					<div class="clear"></div>
				</div>
			</div>


		<?php if ( is_user_logged_in() ) : ?> &nbsp;<a class="button new-topic-ajax-button" href="#new-topic" id="new-topic-button"><?php _e( 'New Topic', 'buddypress' ) ?></a><?php endif; ?>
		<div id="new-topic-post">
			<?php if ( is_user_logged_in() ) : ?>

				<?php if ( bp_has_groups( 'user_id=' . bp_loggedin_user_id() . '&type=alphabetical&max=100&per_page=100' ) ) : ?>

					<form action="" method="post" id="forum-topic-form" class="standard-form">

						<?php do_action( 'groups_forum_new_topic_before' ) ?>

						<a name="post-new"></a>
						<h5><?php _e( 'Post a New Topic:', 'buddypress' ) ?></h5>
						
						<label><?php _e( 'Title:', 'buddypress' ) ?></label>
						<input type="text" name="topic_title"  class="post-new-forum-topic-title r-form-text-input" id="topic_title" value="" />
						<div class="clear"></div>
						<label><?php _e( 'Content:', 'buddypress' ) ?></label>
						<textarea name="topic_text" class="post-new-forum-topic-textarea r-form-text-input" id="topic_text"></textarea>
						<div class="clear"></div>
						<label><?php _e( 'Tags (comma separated):', 'buddypress' ) ?></label>
						<input type="text" name="topic_tags" class="post-new-forum-topic-tags r-form-text-input" id="topic_tags" value="" />
						<div class="clear"></div>
						<label><?php _e( 'Post In Group Forum:', 'buddypress' ) ?></label>
						<select id="topic_group_id" class="post-new-forum-select" name="topic_group_id">

							<option value="">Select a Group Forum</option>

							<?php while ( bp_groups() ) : bp_the_group(); ?>

								<?php if ( bp_group_is_forum_enabled() && 'public' == bp_get_group_status() ) : ?>

									<option value="<?php bp_group_id() ?>"><?php bp_group_name() ?></option>

								<?php endif; ?>

							<?php endwhile; ?>

						</select><!-- #topic_group_id -->

						<?php do_action( 'groups_forum_new_topic_after' ) ?>
						
						<div class="submit post-new-forum-submit-div">
							<input type="submit" name="submit_topic" class="new-topic-ajax-button" id="submit" value="<?php _e( 'Post Topic', 'buddypress' ) ?>" />
							<input type="button" name="submit_topic_cancel" class="new-topic-ajax-button" id="submit_topic_cancel" value="<?php _e( 'Cancel', 'buddypress' ) ?>" />
						</div>

						<?php wp_nonce_field( 'bp_forums_new_topic' ) ?>

					</form><!-- #forum-topic-form -->

				<?php else : ?>

					<div id="message" class="info">
						<p><?php printf( __( "You are not a member of any groups so you don't have any group forums you can post in. To start posting, first find a group that matches the topic subject you'd like to start. If this group does not exist, why not <a href='%s'>create a new group</a>? Once you have joined or created the group you can post your topic in that group's forum.", 'buddypress' ), site_url( BP_GROUPS_SLUG . '/create/' ) ) ?></p>
					</div>

				<?php endif; ?>

			<?php endif; ?>
		</div><!-- #new-topic-post -->
		
		
		
		
		<form action="" method="post" id="forums-directory-form" class="dir-form common-directory-form">

			<div class="item-list-tabs">
				<ul>
					<li class="selected" id="forums-all"><a href="<?php bp_root_domain() ?>"><?php printf( __( 'All Topics (%s)', 'buddypress' ), bp_get_forum_topic_count() ) ?></a></li>

					<?php if ( is_user_logged_in() && bp_get_forum_topic_count_for_user( bp_loggedin_user_id() ) ) : ?>
						<li id="forums-personal"><a href="<?php echo bp_loggedin_user_domain() . BP_GROUPS_SLUG . '/' ?>"><?php printf( __( 'My Topics (%s)', 'buddypress' ), bp_get_forum_topic_count_for_user( bp_loggedin_user_id() ) ) ?></a></li>
					<?php endif; ?>

					<?php do_action( 'bp_forums_directory_group_types' ) ?>

					<li id="forums-order-select" class="last filter common-order-select">

						<?php _e( 'Order By:', 'buddypress' ) ?>
						<select class="post-new-forum-select">
							<option value="active"><?php _e( 'Last Active', 'buddypress' ) ?></option>
							<option value="popular"><?php _e( 'Most Posts', 'buddypress' ) ?></option>
							<option value="unreplied"><?php _e( 'Unreplied', 'buddypress' ) ?></option>

							<?php do_action( 'bp_forums_directory_order_options' ) ?>
						</select>
					</li>
					<div class="clear"></div>
				</ul>
				<div class="clear"></div>
			</div>

			<div id="forums-dir-list" class="forums dir-list">
				<?php locate_template( array( 'forums/forums-loop.php' ), true ) ?>
			</div>

			<?php do_action( 'bp_directory_forums_content' ) ?>

			<?php wp_nonce_field( 'directory_forums', '_wpnonce-forums-filter' ) ?>

			<?php do_action( 'bp_after_directory_forums_content' ) ?>

		</form>

		</div><!-- #content -->
	</div><!-- #content-container -->

	<?php locate_template( array( 'sidebar.php' ), true );

	get_sidebar('right');
get_footer();
