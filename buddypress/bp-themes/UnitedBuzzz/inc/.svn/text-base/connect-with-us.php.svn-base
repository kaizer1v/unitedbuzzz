<?php

function unitedbuzzz_admin_enqueue_scripts( $hook_suffix ) {
	wp_enqueue_style( 'unitedbuzzz-theme-options', get_template_directory_uri() . '/inc/theme-options.css', false, '2011-04-28' );
	wp_enqueue_script( 'unitedbuzzz-theme-options', get_template_directory_uri() . '/inc/theme-options.js', array( 'farbtastic' ), '2011-06-10' );
	wp_enqueue_style( 'farbtastic' );
}
add_action( 'admin_print_styles-appearance_page_theme_options', 'unitedbuzzz_admin_enqueue_scripts' );




function unitedbuzzz_theme_options_init() {

	// If we have no options in the database, let's add them now.
	if ( false === unitedbuzzz_get_theme_options() )
		add_option( 'unitedbuzzz_theme_options', unitedbuzzz_get_default_theme_options() );

	register_setting(
		'unitedbuzzz_options',       // Options group, see settings_fields() call in theme_options_render_page()
		'unitedbuzzz_theme_options' // Database option, see unitedbuzzz_get_theme_options()
	);
	register_setting( 'unitedbuzzz_options', 'facebook_url');
	register_setting( 'unitedbuzzz_options', 'twitter_url');
}


add_action( 'admin_init', 'unitedbuzzz_theme_options_init' );




 
 
function unitedbuzzz_theme_options_add_page() {
	$theme_page = add_theme_page(
		__( 'Connect With Us', 'unitedbuzzz' ),   // Name of page
		__( 'Connect With Us', 'unitedbuzzz' ),   // Label in menu
		'edit_theme_options',                    // Capability required
		'connect-with-us',                         // Menu slug, used to uniquely identify the page
		'unitedbuzzz_theme_options_render_page' // Function that renders the options page
	);

	if ( ! $theme_page )
		return;


}
add_action( 'admin_menu', 'unitedbuzzz_theme_options_add_page' );



function unitedbuzzz_default_schemes() {
	$default_scheme_options = array(
		'Default_theme' => array(
			'value' => 'Default_theme',
			'label' => __( 'Default_theme', 'unitedbuzzz' ),
			'thumbnail' => get_template_directory_uri() . '/inc/images/unitedbuzzz.png',
			'facebook_url' => '',
			'twitter_url' => '',
		),
		
	);

	return apply_filters( 'unitedbuzzz_default_schemes', $default_scheme_options );
}



function unitedbuzzz_get_default_theme_options() {
	$default_theme_options = array(
		'default_scheme' => 'Default_theme',
		'facebook_url' => unitedbuzzz_get_default_facebook_url( 'Default_theme' ),
		'twitter_url'  => unitedbuzzz_get_default_twitter_url( 'Default_theme' ),
	);
	return apply_filters( 'unitedbuzzz_default_theme_options', $default_theme_options );
}



function unitedbuzzz_get_default_facebook_url( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['facebook_url'];
}


function unitedbuzzz_get_default_twitter_url( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['twitter_url'];
}



function unitedbuzzz_get_theme_options() {
	return get_option( 'unitedbuzzz_theme_options', unitedbuzzz_get_default_theme_options() );
}

function unitedbuzzz_theme_options_render_page() {
	?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2><?php printf( __( '%s Theme Options', 'unitedbuzzz' ), get_current_theme() ); ?></h2>
		<?php settings_errors(); ?>
		<hr>
		
		<div id="theme_option_main">
					
			<h2>Social Network</h2>
			<form method="post" enctype="multipart/form-data" action="options.php">
			<?php
					 
				settings_fields( 'unitedbuzzz_options' );
				$options = unitedbuzzz_get_theme_options();
				$default_options = unitedbuzzz_get_default_theme_options();
				do_settings_sections('facebook_url');
				do_settings_sections('twitter_url');

				                                                                             
			?>
			
				<table class="form-table">
					<tr>
						<th scope="row"><?php _e( "(Use ' http:// ' for Hyperlinks)", 'unitedbuzzz' ); ?></th>
						<td>
							<fieldset>
							</fieldset>
						</td>
					</tr>
					<tr>
						<th scope="row"><?php _e( 'Facebook Profile Url', 'unitedbuzzz' ); ?></th>
						<td>
							<fieldset><legend class="screen-reader-text"><span><?php _e( 'Facebook Url', 'unitedbuzzz' ); ?></span></legend>
								<input type="text" name="facebook_url" id="facebook_url" class="textbox" value="<?php echo get_option('facebook_url'); ?>"></input>
							</fieldset>
						</td>
					</tr>
					<tr>
						<th scope="row"><?php _e( 'Twitter Profile Url', 'unitedbuzzz' ); ?></th>
						<td>
							<fieldset><legend class="screen-reader-text"><span><?php _e( 'Twitter Url', 'unitedbuzzz' ); ?></span></legend>
								<input type="text" name="twitter_url" id="twitter_url" class="textbox" value="<?php echo get_option('twitter_url'); ?>"></input>
							</fieldset>
						</td>
					</tr>
			
				</table>
				<?php submit_button(); ?>
			</form>
			
			
			
		</div>
	</div>	
			
	<?php
}
