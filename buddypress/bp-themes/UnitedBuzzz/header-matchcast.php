<?php if ( !is_user_logged_in() && !isset($_GET['twc_oauth_start'])) {
		header('Location:'.get_site_url().'/register');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php echo get_trimmed_excerpt() ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
        
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>">
		<?php do_action( 'bp_head' ) ?>
        <?php wp_head(); ?>
        <script src="<?php bloginfo('template_url')?>/js/jquery.defaultvalue.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/main.js"></script>
    </head>
    
    <body>
    
    <div class="container">
        <?php
        	global $current_user;
        	get_currentuserinfo();
        ?>
        <?php // do_action( 'bp_before_header' ) ?>
        <div id="index-header">
			<div id="index-header-layer1-wrapper">
				<div id="index-header-layer1">
					<?php if ( is_user_logged_in() ) : ?>
						<div id="sidebar-me">
							<span id="hey-user" class="header-layer1-hyperlinks-position"><?php _e( 'Hi ', 'buddypress' ) ?><?php echo bp_core_get_userlink( bp_loggedin_user_id() ); ?></span>
							<?php if(is_super_admin()){?>
								<a id="admin-panel" class="header-layer1-hyperlinks-position" href="<?php bloginfo('url')?>/wp-admin"><span>Admin Panel</span></a>&nbsp;&nbsp;
								<?php }?>
							<ul id="notification-main-ul">
								<?php bp_adminbar_notifications_menu() ?>
							</ul>
							<a id="header-logout" class="button logout header-layer1-hyperlinks-position" href="<?php echo wp_logout_url( bp_get_root_domain() ) ?>"><?php _e( 'Log Out', 'buddypress' ) ?></a>
						</div>
						
						
						<?php if ( function_exists( 'bp_message_get_notices' ) ) : ?>
							<?php bp_message_get_notices(); /* Site wide notices to all users */ ?>
						<?php endif; ?>

					<?php else : ?>

						
					
					<div id="index-header-login-wrapper">
						<form name="login-form" id="i-h-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ) ?>" method="post">
							<div id="input-boxes">
								<input type="text" name="log" id="i-h-user-login-input" placeholder="Username or Email" tabindex="2" class="input i-h-header-login-text-input input-placeholder" tabindex="97" />
								<input type="password" name="pwd" id="i-h-user-pass-input" tabindex="3" class="input i-h-header-login-text-input input-placeholder" placeholder="Password" tabindex="98" />
							</div>
							
							<span class="forgetmenot i-h-rememberme-chkbox"><label><input name="rememberme" type="checkbox" tabindex="4" id="sidebar-rememberme" value="forever" tabindex="99" /></label></span>
							<label class="i-h-login-form-text"><?php _e( 'Remember me', 'buddypress' ) ?></label>
							<a href="<?php echo site_url( 'lostpassword', 'login_post' ) ?>" id="i-h-forgot-pass" class="i-h-login-form-text" tabindex="6"><?php _e( 'Forgot your password?', 'buddypress' ) ?></a>
							
							<input type="submit" name="wp-submit" class="i-h-login-submit" id="r-header-login-submit" tabindex="5" value="<?php _e('Login'); ?>" tabindex="100" />

							<input type="hidden" name="testcookie" value="1" />
							<span id="hide-me">Hide</span>

						</form>
						<div class="clear">&nbsp;</div>
					</div>
					<div id="header-login-option">
						<span id="index-header-layer1-signup"><a href="<?php bloginfo('siteurl');?>/register">Sign Up!</a></span>
						<span id="index-header-layer1-login">Login</span>
					</div>
						

					<?php endif; ?>
				</div>
			</div>

			<div id="index-header-layer2-wrapper">
				<div id="header-football">
					<div id="index-header-layer2">
						<div id="utd-logo">&nbsp;</div>
						
						<div id="utd-info">
							<a href="<?php bloginfo('url'); ?>" tabindex="-1">
								<div id="r-logo-text">
									<img src="<?php bloginfo('template_url')?>/images/logo-text.png" alt="<?php bloginfo('name') ?>" tabindex="1"></img>
								</div>
							</a>
							<div id="r-disc-text"><?php bloginfo('description') ?></div>
						</div>
						
						
						<div id="header-search-wrapper">
							<?php locate_template( array( 'searchform.php' ), true ) ?>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="index-header-layer3-wrapper">
				<div id="index-header-layer3-child-wrapper">
					<div id="index-header-layer3">
						<div id="background-shade-div"></div>
						<div id="main-menu-wrapper">
							<?php wp_nav_menu( array( 'menu_class' => 'menu-header' ) ); ?>
						</div>
					</div>
				</div>
				<div id="index-header-shadow"></div>
			</div>
						

		</div>
        	

        <?php do_action( 'bp_after_header' ) ?>
        
        <?php do_action( 'bp_before_container' ) ?>
        <div class="clear">&nbsp;</div>
		<div id="main-container-matchcast">
