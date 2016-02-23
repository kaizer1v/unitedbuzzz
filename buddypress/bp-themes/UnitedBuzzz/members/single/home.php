<?php
do_action( 'bp_before_member_body' );
global $bp;
if ( bp_is_user_profile() && !bp_is_my_profile() ) {
	update_option('profile_redirect', 'true');
	header('Location:'. get_site_url(). '/members/' . $bp->displayed_user->userdata->user_nicename);	
}
if ( bp_is_user_profile() && bp_is_my_profile() ) {
	update_option('profile_redirect', 'true');
}

 get_header('main'); ?>
<?php get_sidebar('pleft'); ?>
	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" class="member-page-content-div">
		
			<?php do_action( 'bp_before_member_home_content' ) ?>

			<div id="item-header" class="clearfix">
				<?php locate_template( array( 'members/single/member-header.php' ), true ) ?>
			</div><!-- #item-header -->

			<div id="item-body">
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
				
				
					if ( $check_string == 'not_friends' ||  $check_string == 'pending' ) {
						locate_template( array( 'members/single/profile/profile-loop.php' ), true ); 
					}else{
				?>
				
				
				<?php do_action( 'bp_before_member_body' ) ?>

				<?php if ( bp_is_user_activity() || !bp_current_component() ) : ?>
					<?php update_option('profile_redirect', 'false'); ?>
					<?php locate_template( array( 'members/single/activity.php' ), true ) ?>

				<?php elseif ( bp_is_user_blogs() ) : ?>
					<?php locate_template( array( 'members/single/blogs.php' ), true ) ?>

				<?php elseif ( bp_is_user_friends() ) : ?>
					<?php locate_template( array( 'members/single/friends.php' ), true ) ?>

				<?php elseif ( bp_is_user_groups() ) : ?>
					<?php locate_template( array( 'members/single/groups.php' ), true ) ?>
					
				<?php elseif ( bp_is_user_forums() ) : ?>
					<?php locate_template( array( 'members/single/forums.php'    ), true ); ?>

				<?php elseif ( bp_is_user_messages() ) : ?>
					<?php locate_template( array( 'members/single/messages.php' ), true ) ?>

				<?php elseif ( bp_is_user_profile() ) : ?>
					
					<?php locate_template( array( 'members/single/profile.php' ), true ) ?>
					
				<?php elseif ( bp_is_user_settings() ) : ?>
					<?php locate_template( array( 'members/single/settings.php'  ), true ); ?>

				<?php else : ?>
					<?php
						/* If nothing sticks, just load a member front template if one exists. */
						locate_template( array( 'members/single/front.php' ), true );
					?>
				<?php endif; ?>

				<?php do_action( 'bp_after_member_body' ) ?>
				<?php } ?>
			</div><!-- #item-body -->

			<?php do_action( 'bp_after_member_home_content' ) ?>
			
		</div><!-- #content -->
	</div><!-- #content-container -->
<?php 
if ( bp_is_user_profile() && bp_is_my_profile() ) {
	update_option('profile_redirect', 'true');?>
	<script>
		jQuery("#main-menu-wrapper > div > ul > li > a:contains('Profile')").parent().addClass("current-menu-item")
	</script>
<?php 
}elseif(bp_is_my_profile() && bp_is_user_activity()){?>
	<script>
		jQuery("#main-menu-wrapper > div > ul > li > a:contains('Home')").parent().addClass("current-menu-item")
	</script>
<?php 
}
	
get_sidebar('pright'); ?>
<?php get_footer(); ?>
