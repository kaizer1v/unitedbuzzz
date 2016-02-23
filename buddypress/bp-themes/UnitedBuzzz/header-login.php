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
        <?php wp_head(); ?>
             <script src="<?php bloginfo('template_url')?>/js/jquery.defaultvalue.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/registration-page.js"></script>
    </head>
    
    <body>
    
    <div class="container">
        
        <?php // do_action( 'bp_before_header' ) ?>
        
        <div id="registration-header">
			<div id="registration-header-content">
				<div id="r-l-header-football">&nbsp;</div>
				<div id="r-utd-logo">&nbsp;</div>
				<div id="r-utd-info">
					<a href="<?php bloginfo('url'); ?>" tabindex="-1">
						<div id="r-logo-text">
							<img src="<?php bloginfo('template_url')?>/images/logo-text.png" alt="<?php bloginfo('name') ?>" tabindex="1"></img>
						</div>
					</a>
					<div id="r-disc-text"><?php bloginfo('description') ?></div>
				</div>
				<form name="login-form" id="r-login-form" class="standard-form" action="" method="post">
					<br />
					<div class="twitterFBLogin">
						<?php do_shortcode("[fb_login size='medium' connect_text='Connect With Facebook' login_text='Connect With Facebook' logout_text='Sign Out']"); ?>
						<!-- Begin Twit Connect -->
						<?php if(function_exists('twit_connect')){twit_connect();} ?>
						<!-- End Twit Connect -->
					</div>
				</form>
				
				
			</div>
		</div>
        <div id="header_shadow"></div>
        
        <?php do_action( 'bp_after_header' ) ?>
        
        <?php do_action( 'bp_before_container' ) ?>

<div id="fb-root"></div>
<!--DO NOT REMOVE: FOR FACEBOOK LOGIN-->
<script type="text/javascript">
jQuery(document).ready(function(){
	FB.init({appId: '289830621027464', status: true, cookie: true, xfbml: true});
});
</script>
