<?php

function unitedbuzzz_admin_enqueue_scripts_utd_history( $hook_suffix ) {
	wp_enqueue_style( 'unitedbuzzz-theme-options_utd-history', get_template_directory_uri() . '/inc/theme-options.css', false, '2011-04-28' );
	wp_enqueue_script( 'unitedbuzzz-theme-options_utd-history', get_template_directory_uri() . '/inc/theme-options.js', array( 'farbtastic' ), '2011-06-10' );
	wp_enqueue_style( 'farbtastic' );
}
add_action( 'admin_print_styles-appearance_page_theme_options', 'unitedbuzzz_admin_enqueue_scripts_utd_history' );




 
//This function is attached to the admin_init action hook.
function unitedbuzzz_theme_options_init_utd_history() {
     // If we have no options in the database, let's add them now.
     if ( false === unitedbuzzz_get_theme_options() )
           add_option( 'unitedbuzzz_theme_options_utd_history', unitedbuzzz_get_default_theme_options() );

     register_setting(
          'unitedbuzzz_options_utd_history',       // Options group, see settings_fields() call in theme_options_render_page()
          'unitedbuzzz_theme_options_utd_history' // Database option, see unitedbuzzz_get_theme_options()
     );
     register_setting( 'unitedbuzzz_options_utd_history', 'UB_fans');
     register_setting( 'unitedbuzzz_options_utd_history', 'founded');
     register_setting( 'unitedbuzzz_options_utd_history', 'manager');
     register_setting( 'unitedbuzzz_options_utd_history', 'official_website');
     
   
}
add_action( 'admin_init', 'unitedbuzzz_theme_options_init_utd_history' ); 



//This function is attached to the admin_menu action hook.
function unitedbuzzz_theme_options_add_page_utd_history() {
    $theme_page = add_theme_page(
        __( 'United History', 'unitedbuzzz' ),   // Name of page
        __( 'United History', 'unitedbuzzz' ),   // Label in menu
        'edit_theme_options',                    // Capability required
        'utd_history',                         // Menu slug, used to uniquely identify the page
        'unitedbuzzz_theme_options_render_page_utd_history' // Function that renders the options page
    );
    if ( ! $theme_page )
        return;
}
add_action( 'admin_menu', 'unitedbuzzz_theme_options_add_page_utd_history' );



function unitedbuzzz_default_schemes_utd_history() {
     $default_scheme_options = array(
          'Default_theme' => array(
          'value' => 'Default_theme',
          'label' => __( 'Default_theme', 'unitedbuzzz' ),
          'thumbnail' => get_template_directory_uri() . '/inc/images/unitedbuzzz.png',
          'UB_fans' => '',
          'founded' => '',
          'manager' => '',
          'official_website' => '',
         ),
     );
     return apply_filters( 'unitedbuzzz_default_schemes_utd_history', $default_scheme_options );
}



function unitedbuzzz_get_default_theme_options_utd_history() {
     $default_theme_options = array(
        'color_scheme' => 'Default_theme',
		'UB_fans' => unitedbuzzz_get_default_utd_history_UB_fans( 'Default_theme' ),
		'founded' => unitedbuzzz_get_default_utd_history_founded( 'Default_theme' ),
		'manager' => unitedbuzzz_get_default_utd_history_manager( 'Default_theme' ),
		'official_website' => unitedbuzzz_get_default_utd_history_official_website( 'Default_theme' ),
     );
     return apply_filters( 'unitedbuzzz_default_theme_options_utd_history', $default_theme_options );
}



function unitedbuzzz_get_default_utd_history_UB_fans( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_utd_history();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_utd_history();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['UB_fans'];
}

function unitedbuzzz_get_default_utd_history_founded( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_utd_history();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_utd_history();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['founded'];
}

function unitedbuzzz_get_default_utd_history_manager( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_utd_history();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_utd_history();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['manager'];
}

function unitedbuzzz_get_default_utd_history_official_website( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_utd_history();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_utd_history();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['official_website'];
}

function unitedbuzzz_theme_options_render_page_utd_history() { ?>
     <div class="wrap">
          <?php screen_icon(); ?>
          <h2><?php printf( __( "%s - Manchester United's History", 'unitedbuzzz' ), get_current_theme() ); ?></h2>
          <?php settings_errors(); ?>
          <hr>

          <div id="theme_option_main">

          <h2>Manchester United&#39;s History</h2>
          <form method="post" enctype="multipart/form-data" action="options.php">
          <?php
             settings_fields( 'unitedbuzzz_options_utd_history' );
             $options = unitedbuzzz_default_schemes_utd_history();
             $default_options = unitedbuzzz_get_default_theme_options_utd_history();
             do_settings_sections('UB_fans'); 
             do_settings_sections('founded'); 
             do_settings_sections('manager'); 
             do_settings_sections('official_website'); 
             
          ?>
               <table class="form-table">
                  <tr>
                     <th scope="row"><?php _e( "(Use ' http:// ' for Urls)", 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset></fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'UnitedBuzzz Fans :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'UB_fans', 'unitedbuzzz' ); ?></span></legend>
					    <input type="text" name="UB_fans" id="UB_fans" class="textbox" value="<?php echo get_option('UB_fans'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'Founded :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'founded', 'unitedbuzzz' ); ?></span></legend>
                           <input type="text" name="founded" id="founded" class="textbox" value="<?php echo get_option('founded'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'Manager :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'manager', 'unitedbuzzz' ); ?></span></legend>
                           <input type="text" name="manager" id="manager" class="textbox" value="<?php echo get_option('manager'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'Official Website :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'official_website', 'unitedbuzzz' ); ?></span></legend>
                           <input type="text" name="official_website" id="official_website" class="textbox" value="<?php echo get_option('official_website'); ?>"></input>
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