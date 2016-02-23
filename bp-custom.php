<?php 
define("BP_LOGIN_SLUG","login");
function bl_setup_component(){
		bp_core_add_root_component( BP_LOGIN_SLUG );
	}
add_action( 'bp_setup_root_components', 'bl_setup_component', 2 );

//handle the screen
function bl_screen_handler(){
global $bp;
if ( $bp->current_component != BP_LOGIN_SLUG) 
        return;//return the control back

if(is_user_logged_in())
 bp_core_redirect(bp_get_root_domain());

//load template
bp_core_load_template("/registration/login",true);
}
add_action("wp","bl_screen_handler",3);



/*Gravatar*/
define( 'BP_AVATAR_DEFAULT', get_stylesheet_directory_uri() .'/images/profile-avatar.png' );






// replacement for regular login - gets rif of wp-login.php page
function bp_authenticate_username_password($user, $username, $password) {
	if ( is_a($user, 'WP_User') ) { return $user; }

	if ( empty($username) || empty($password) ) {
		bp_core_add_message( __('ERROR: Empty Username field or empty Password field. See the sidebar for log in support.', 'buddypress') , 'error' );
		wp_redirect(get_option('siteurl').'/login?err=loginfailed');
		return false;
	}

	$userdata = get_userdatabylogin($username);
	
	if ( !$userdata ) {
//		bp_core_add_message( __('ERROR: Incorrect Username. See the sidebar for log in support.', 'buddypress') , 'error' );
		wp_redirect(get_option('siteurl').'/login?err=loginfailed');
		return false;
	}

	$userdata = apply_filters('wp_authenticate_user', $userdata, $password);

	if ( is_wp_error($userdata) ) {
		bp_core_add_message( __('ERROR: Invalid username or incorrect password.. See the sidebar for log in support.', 'buddypress') , 'error' );
		wp_redirect(get_option('siteurl').'/login?err=loginfailed');
		return false;
	}

	if ( !wp_check_password($password, $userdata->user_pass, $userdata->ID) ) {
//		bp_core_add_message( __('ERROR: Incorrect Password. See the sidebar for log in support.', 'buddypress') , 'error' );
		wp_redirect(get_option('siteurl').'/login?err=loginfailed');
		return false;
	}

	$user =  new WP_User($userdata->ID);
	return $user;
}

add_filter('authenticate', 'bp_authenticate_username_password', 10, 3);
remove_filter('authenticate', 'wp_authenticate_username_password', 20, 3);


// replacement for lost password - gets rif of wp-login.php page

function bp_authenticate_username_email($user, $username, $email) {
	if ( is_a($user, 'WP_User') ) { return $user; }

	if ( empty($username) || empty($email) ) {
		bp_core_add_message( __('ERROR: Empty Username field or empty Password field. See the sidebar for log in support.', 'buddypress') , 'error' );
		wp_redirect(get_option('siteurl').'/lostpassword?err=wronginput');
		return false;
	}
	

	$userdata = get_userdatabylogin($username);

	if ( !$userdata ) {
		bp_core_add_message( __('ERROR: Incorrect Username. See the sidebar for log in support.', 'buddypress') , 'error' );
		wp_redirect(get_option('siteurl').'/lostpassword?err=wronginput');
		return false;
	}

	$userdata = apply_filters('wp_authenticate_user', $userdata, $email);

	if ( is_wp_error($userdata) ) {
		bp_core_add_message( __('ERROR: Invalid username or incorrect password.. See the sidebar for log in support.', 'buddypress') , 'error' );
		wp_redirect(get_option('siteurl').'/lostpassword?err=wronginput');
		return false;
	}

	
	$user =  new WP_User($userdata->ID);
	return $user;
}

add_filter('lostpassword_redirect', 'bp_authenticate_username_email', 10, 4);
remove_filter('lostpassword_redirect', 'wp_authenticate_username_email', 20, 4);





//=Redirect to User's Profile Page after Login
function rt_login_redirect($redirect_to, $set_for, $user){
	$redirect_to = bp_core_get_user_domain($user->id);
	return $redirect_to;
}
add_filter('login_redirect', 'rt_login_redirect', 20, 3);
