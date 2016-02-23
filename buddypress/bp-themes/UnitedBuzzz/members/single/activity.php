<?php if ( is_user_logged_in() && bp_is_my_profile()){
		update_option('profile_redirect', 'true');
}else{
	update_option('profile_redirect', 'true');
	
}?>
<?php do_action( 'bp_before_member_activity_post_form' ) ?>

<!-- if ( is_user_logged_in() && bp_is_my_profile() && ( '' == bp_current_action() || 'just-me' == bp_current_action() ) ) : -->
	<?php locate_template( array( 'activity/post-form.php'), true ) ?>
<!-- endif; -->

<?php do_action( 'bp_after_member_activity_post_form' ) ?>

<?php 
	global $bp;
	$loggedin_user_id = $bp->loggedin_user->userdata->ID;
	$other_user_id = $bp->displayed_user->id ;
	
	if($loggedin_user_id == $other_user_id){
		$check_string = 'its_me' ;
	}
	else{
		$check_string = friends_check_friendship_status( $loggedin_user_id,$other_user_id);
	}
?>
<?php if ( $check_string == 'its_me' ) { ?>
<div id="main-page-hot-news-div-wrapper" class="profile-not-news-main-wrapper">
	<div id="main-page-hot-news-div-trans">
		<h3 id="hot-news-title"><?php _e( 'HOT NEWS', 'buddypress' ) ?></h3>
	</div>
</div>
<div class="user-homepage-hotnews-slider">
	<div id="how-news-content">
		<div id="hot-news-slider-wrapper">
			<div id="hot-news-slider">
				<div id="slideshow">
					<?php $my_query = new WP_Query(( array('post_type'=>'News','posts_per_page' => 5)));
					 while ($my_query->have_posts()) : $my_query->the_post();
					$do_not_duplicate[] = $post->ID ?>
					
						<?php if ( has_post_thumbnail()) : ?>
						<div  class="slideshow-inactive">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<?php the_post_thumbnail('hot_news'); ?>
							</a>	
							<div class="hot-news-slideshow-content ">
								<div>
									<a href="<?php the_permalink(); ?>" ><h3><?php the_title();?></h3></a>
									<a href="<?php the_permalink(); ?>" ><?php the_excerpt();?></a>
								</div>
							</div>
						</div>
							
						<?php endif; ?>
						
					<?php	
						endwhile;
						wp_reset_query();
					?>
			<!--		<img class="active" src="image1.jpg" alt="Slideshow Image 1" />
					<img src="image2.jpg" alt="Slideshow Image 2" />
					<img src="image3.jpg" alt="Slideshow Image 3" />
					<img src="image4.jpg" alt="Slideshow Image 4" />
					<img src="image5.jpg" alt="Slideshow Image 5" />  -->
				</div>
			</div>
		</div>
		<div id="hot-news-slider-wrapper-shadow"></div>
		<div id="slider-dots-wrapper">
			<div class="slider-dots slider-inactive slider-active selected"></div>
			<div class="slider-dots slider-inactive"></div>
			<div class="slider-dots slider-inactive"></div>
			<div class="slider-dots slider-inactive"></div>
			<div class="slider-dots slider-inactive"></div>
			
		</div>
	</div>	
</div>

<?php } ?>

	<h3 id="friends-feed-heading"><?php _e( 'FRIENDS FEED', 'buddypress' ) ?></h3>


<div class="activity-tabs-bg">
	<div class="activity-tabs">

		<div class="item-list-tabs no-ajax" id="subnav">
			<ul>
				<?php bp_get_options_nav() ?>

				<li id="activity-filter-select" class="last">
					<select class="post-new-forum-select  activity-tabs-select-filter">
						<option value="-1"><?php _e( 'No Filter', 'buddypress' ) ?></option>
						<option value="activity_update"><?php _e( 'Show Updates', 'buddypress' ) ?></option>

						<?php if ( 'groups' != bp_current_action() ) : ?>
							<?php if ( bp_is_active( 'blogs' ) ) : ?>
								<option value="new_blog_post"><?php _e( 'Show Blog Posts', 'buddypress' ) ?></option>
								<option value="new_blog_comment"><?php _e( 'Show Blog Comments', 'buddypress' ) ?></option>
							<?php endif; ?>

							<?php if ( bp_is_active( 'friends' ) ) : ?>
								<option value="friendship_accepted,friendship_created"><?php _e( 'Show Friendship Connections', 'buddypress' ) ?></option>
							<?php endif; ?>
						<?php endif; ?>

						<?php if ( bp_is_active( 'forums' ) ) : ?>
							<option value="new_forum_topic"><?php _e( 'Show New Forum Topics', 'buddypress' ) ?></option>
							<option value="new_forum_post"><?php _e( 'Show Forum Replies', 'buddypress' ) ?></option>
						<?php endif; ?>

						<?php if ( bp_is_active( 'groups' ) ) : ?>
							<option value="created_group"><?php _e( 'Show New Groups', 'buddypress' ) ?></option>
							<option value="joined_group"><?php _e( 'Show New Group Memberships', 'buddypress' ) ?></option>
						<?php endif; ?>

						<?php do_action( 'bp_member_activity_filter_options' ) ?>
					</select>
				</li>
				<div class="clear"></div>
			</ul>
		</div><!-- .item-list-tabs -->
		<div class="clear"></div>
	</div>





	<?php do_action( 'bp_before_member_activity_content' ) ?>

	<div class="activity">
		<?php locate_template( array( 'activity/activity-loop.php' ), true ) ?>
	</div><!-- .activity -->

	<?php do_action( 'bp_after_member_activity_content' ) ?>
</div>
