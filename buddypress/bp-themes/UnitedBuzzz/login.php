<?php
/*
Template Name: Login Page
*/
?>
<?php if ( is_user_logged_in() ) : 
	header( 'Location:'.get_site_url().'' ) ;
endif; ?>
<?php 
	get_header('login');
?>
<div id="registration_page_content_wrapper">
	<div id="main-page-content-slider-wrapper">
				<div id="previous-image"></div>
				<div id="main-page-content-slider">
					<div id="r-slideshow">
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/1.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>Contest</h3>5 users with biggest active friend network as on Nov 23 will get a United jersey.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/2.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>Man Utd Features on UnitedBuzzz</h3>Fixtures, History, Twitter Feed by all players Statistics & much more.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/3.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>Connect & Chat</h3>Make new connections with MUFC fans and chat with friends.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/4.jpg"></img>
							<div class="registration-page-images-text">
								
								<span><h3>Chants</h3>Listen to a huge list of available songs and sing along during the match.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/5.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>MatchCast</h3>State of the Art MatchCast - Comment, Like and listen to MUFC chants.</span>
							</div>
						</div>
						<div class="slideshow-inactive">
							<img class="registration-page-images" src="<?php bloginfo('template_url')?>/images/registration-images/6.jpg"></img>
							<div class="registration-page-images-text">
								<span><h3>CHAMP19NS</h3>Join the CHAMP19NS, Be a Part of the MUFC Family.</span>
							</div>
						</div>
					</div>	
				</div>
				<div id="next-image"></div>
				<div class="clear">&nbsp;</div>
				<div id="main-page-content-slider-shadow"></div>
				<div id="registration-slider-dots-wrapper">
					<div class="registration-slider-dots r-slider-inactive r-slider-active selected"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
					<div class="registration-slider-dots r-slider-inactive"></div>
				</div>
			</div>
	<div id="login-page-content">
		
		<?php if ( is_user_logged_in() ) : ?>
			<div id="sidebar-me">
				<a href="<?php echo bp_loggedin_user_domain() ?>">
					<?php bp_loggedin_user_avatar( 'type=thumb&width=40&height=40' ) ?>
				</a>
				<h4><?php echo bp_core_get_userlink( bp_loggedin_user_id() ); ?></h4>
				<a class="button logout" href="<?php echo wp_logout_url( bp_get_root_domain() ) ?>"><?php _e( 'Log Out', 'buddypress' ) ?></a>
			</div>
			<?php if ( function_exists( 'bp_message_get_notices' ) ) : ?>
				<?php bp_message_get_notices(); /* Site wide notices to all users */ ?>
			<?php endif; ?>
			
		<?php else : ?>
		<form name="login-form" id="l-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ) ?>" method="post">
			<h2 id="signup_heading"><?php _e( 'LOGIN', 'buddypress' ) ?></h2>
			<div id="r-form-content">
				<table id="l-form-table">
					<tr>
						<td class="r-form-label-text"><label><?php _e( 'Username or Email :', 'buddypress' ) ?></label></td>
						<td><input type="text" name="log" id="l-user-login-input" tabindex="2" class="input r-form-text-input" value="" tabindex="97" /></td>
					</tr>
					<tr>	
						<td class="r-form-label-text"><label><?php _e( 'Password :', 'buddypress' ) ?></label></td>
						<td><input type="password" name="pwd" id="l-user-pass-input" tabindex="3" class="input r-form-text-input" value="" tabindex="98" /></td>
					</tr>
				</table>	
				<div id="l-rememberme-div">
					<span class="forgetmenot l-rememberme-chkbox"><label><input name="rememberme" type="checkbox" tabindex="4" id="sidebar-rememberme" value="forever" tabindex="99" /></label></span>
					<label class="l-login-form-text l-rememberme_text"><?php _e( 'Remember me', 'buddypress' ) ?></label>
				</div>
				<div id="l-forgot-pass-div"><a href="<?php echo site_url( 'lostpassword', 'login_post' ) ?>" id="l-forgot-pass" class="l-login-form-text" tabindex="6"><?php _e( 'Forgot your password?', 'buddypress' ) ?></a>	</div>
			</div>
			<div class="clear">&nbsp;</div>
			<div id="l-buttons-div">
				<input type="submit" name="wp-submit" class="l-buttons" id="l-login-submit" tabindex="5" value="<?php _e('LOGIN'); ?>" tabindex="100" />
				<a href="<?php bloginfo('url')?>/register" class="l-buttons" id="l-register" ><input type="button" class="l-buttons" tabindex="7" value="SIGN UP"></input></a>
			</div>
			<div class="clear">&nbsp;</div>
			<input type="hidden" name="testcookie" value="1" />
			<?php 	if(isset($_GET['err'])){
						if ($_GET['err'] == "loginfailed"){ 
							echo "<div id='l-error-div'>ERROR: The entered username or password is incorrect.</div>";
						} 
					}
					if(isset($_GET['err'])){
						if ($_GET['err'] == "not-activated"){ 
							echo "<div id='l-error-div'>ERROR: Your account has not been activated. Check your email for the activation link.</div>";
						} 
					}
			 ?>
			<?php 	if(isset($_GET['msg'])){
						if ($_GET['msg'] == "success"){ 
							echo "<div id='l-success-div'>Check your e-mail for the confirmation link.</div>";
						} 
					}
			 ?>
		</form>
	<?php endif; ?>
	<div class="clear">&nbsp;</div>
</div>


<a href="<?php echo site_url( 'wp-login.php?action=lostpassword', 'login_post' ) ?>"></a>
<div class="clear">&nbsp;</div>
		<div id="registration-globe">
			<ul>
				<li>
					<h3>Connect</h3>
					<span>Connect with your friends and other ManUtd fans</span>
				</li>
				<li>
					<h3>Explore</h3>
					<span>Receive personalised news, Players & Staff Info</span>
				</li>
				<li>
					<h3>Share</h3>
					<span>The latest blogs, media, transfers and forum topics</span>
				</li>
			</ul>
			<div id="world-map"></div>
			<div class="clear">&nbsp;</div>
		</div>
		<div class="clear">&nbsp;</div>
<?php get_footer();?>
<style>
	#footer-wrapper{
		margin-bottom:0px !important;
	}
</style>
