<?php
/*
*Template Name: Lost Password
*/
?>
<?php get_header('login'); ?>

<div id="registration_page_content_wrapper">
	<div class="clear">&nbsp;</div>
			 
	<form name="lostpasswordform" id="lostpasswordform" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" method="post">
		<center><h2><?php _e('Forgot your password?') ?><h2></center>
		
		<div id="f-form-content">
			<p>
				<center>
					<label><?php _e('Username or E-mail:') ?><br />
					<input type="text" name="user_login" id="user_login" class="input r-form-text-input" value="<?php echo esc_attr($user_login); ?>" size="20" tabindex="10" /></label>
				</center>
			</p>
			<?php do_action('lostpassword_form'); ?>
			<input type="hidden" name="redirect_to" value="<?php bloginfo('url'); ?>/login?msg=success" />
			<center><input type="submit" name="wp-submit" id="wp-submit" class="button-primary l-buttons f-submit" value="<?php esc_attr_e('Get New Password'); ?>" tabindex="100" /></center>
			<center>
				<a href="<?php bloginfo('url')?>/login" class="f-form-a">Login</a>&nbsp;&nbsp;
				<a href="<?php bloginfo('url')?>/register" class="f-form-a">Sign Up</a>
			</center>
			<br>
		</div>
		
		<?php 	if ($_GET['err'] == "wronginput"){ 
					echo "<div id='l-error-div' class='f-error-div'>ERROR: The entered username or email is invalid.</div>";
				} 
		?>
	</form>
	<div class="clear">&nbsp;</div>
</div>
<?php get_footer();?>
<style>
	#footer-wrapper{
		margin-bottom:0px !important;
		position:fixed;
		bottom:0px;
	}
</style>
