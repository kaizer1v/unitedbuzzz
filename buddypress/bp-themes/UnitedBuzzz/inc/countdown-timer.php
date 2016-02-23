<?php

function unitedbuzzz_admin_enqueue_scripts_countdown_timer( $hook_suffix ) {
	wp_enqueue_style( 'unitedbuzzz-theme-options_countdown-timer', get_template_directory_uri() . '/inc/theme-options.css', false, '2011-04-28' );
	wp_enqueue_script( 'unitedbuzzz-theme-options_countdown-timer', get_template_directory_uri() . '/inc/theme-options.js', array( 'farbtastic' ), '2011-06-10' );
	wp_enqueue_style( 'farbtastic' );
}
add_action( 'admin_print_styles-appearance_page_theme_options', 'unitedbuzzz_admin_enqueue_scripts_countdown_timer' );




 
//This function is attached to the admin_init action hook.
function unitedbuzzz_theme_options_init_countdown_timer() {
     // If we have no options in the database, let's add them now.
     if ( false === unitedbuzzz_get_theme_options() )
           add_option( 'unitedbuzzz_theme_options_countdown_timer', unitedbuzzz_get_default_theme_options() );

     register_setting(
          'unitedbuzzz_options_countdown_timer',       // Options group, see settings_fields() call in theme_options_render_page()
          'unitedbuzzz_theme_options_countdown_timer' // Database option, see unitedbuzzz_get_theme_options()
     );
     register_setting( 'unitedbuzzz_options_countdown_timer', 'between');
     register_setting( 'unitedbuzzz_options_countdown_timer', 'day');
     register_setting( 'unitedbuzzz_options_countdown_timer', 'month');
     register_setting( 'unitedbuzzz_options_countdown_timer', 'year');
     register_setting( 'unitedbuzzz_options_countdown_timer', 'hours');
     register_setting( 'unitedbuzzz_options_countdown_timer', 'minutes');
     register_setting( 'unitedbuzzz_options_countdown_timer', 'seconds');
     
   
}
add_action( 'admin_init', 'unitedbuzzz_theme_options_init_countdown_timer' ); 



//This function is attached to the admin_menu action hook.
function unitedbuzzz_theme_options_add_page_countdown_timer() {
    $theme_page = add_theme_page(
        __( 'CountDown Timer', 'unitedbuzzz' ),   // Name of page
        __( 'CountDown Timer', 'unitedbuzzz' ),   // Label in menu
        'edit_theme_options',                    // Capability required
        'countdown_timer',                         // Menu slug, used to uniquely identify the page
        'unitedbuzzz_theme_options_render_page_countdown_timer' // Function that renders the options page
    );
    if ( ! $theme_page )
        return;
}
add_action( 'admin_menu', 'unitedbuzzz_theme_options_add_page_countdown_timer' );



function unitedbuzzz_default_schemes_countdown_timer() {
     $default_scheme_options = array(
          'Default_theme' => array(
          'value' => 'Default_theme',
          'label' => __( 'Default_theme', 'unitedbuzzz' ),
          'thumbnail' => get_template_directory_uri() . '/inc/images/unitedbuzzz.png',
          'between' => '',
          'day' => '',
          'month' => '',
          'year' => '',
          'hours' => '',
          'minutes' => '',
          'seconds' => '',
         ),
     );
     return apply_filters( 'unitedbuzzz_default_schemes_countdown_timer', $default_scheme_options );
}



function unitedbuzzz_get_default_theme_options_countdown_timer() {
     $default_theme_options = array(
        'color_scheme' => 'Default_theme',
        'between' => unitedbuzzz_get_default_countdown_timer_between( 'Default_theme' ),
		'day' => unitedbuzzz_get_default_countdown_timer_day( 'Default_theme' ),
		'month' => unitedbuzzz_get_default_countdown_timer_month( 'Default_theme' ),
		'year' => unitedbuzzz_get_default_countdown_timer_year( 'Default_theme' ),
		'hours' => unitedbuzzz_get_default_countdown_timer_hours( 'Default_theme' ),
		'minutes' => unitedbuzzz_get_default_countdown_timer_minutes( 'Default_theme' ),
		'seconds' => unitedbuzzz_get_default_countdown_timer_seconds( 'Default_theme' ),
     );
     return apply_filters( 'unitedbuzzz_default_theme_options_countdown_timer', $default_theme_options );
}

function unitedbuzzz_get_default_countdown_timer_between( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_countdown_timer();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_countdown_timer();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['between'];
}

function unitedbuzzz_get_default_countdown_timer_day( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_countdown_timer();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_countdown_timer();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['day'];
}
function unitedbuzzz_get_default_countdown_timer_month( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_countdown_timer();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_countdown_timer();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['month'];
}
function unitedbuzzz_get_default_countdown_timer_year( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_countdown_timer();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_countdown_timer();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['year'];
}

function unitedbuzzz_get_default_countdown_timer_hours( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_countdown_timer();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_countdown_timer();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['hours'];
}

function unitedbuzzz_get_default_countdown_timer_minutes( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_countdown_timer();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_countdown_timer();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['minutes'];
}

function unitedbuzzz_get_default_countdown_timer_seconds( $default_scheme = null ) {
	if ( null === $default_scheme ) {
		$options = unitedbuzzz_get_theme_options_countdown_timer();
		$default_scheme = $options['default_scheme'];
	}

	$default_schemes = unitedbuzzz_default_schemes_countdown_timer();
	if ( ! isset( $default_schemes[ $default_scheme ] ) )
		return false;

	return $default_schemes[ $default_scheme ]['seconds'];
}

function unitedbuzzz_theme_options_render_page_countdown_timer() { ?> 
     <div class="wrap">
          <?php screen_icon(); ?>
          <h2><?php printf( __( "%s - CountDown Timer", 'unitedbuzzz' ), get_current_theme() ); ?></h2>
          <?php settings_errors(); ?>
          <hr>

          <div id="theme_option_main">

          <h2>CountDown Timer</h2>
          <form method="post" enctype="multipart/form-data" action="options.php">
          <?php
             settings_fields( 'unitedbuzzz_options_countdown_timer' );
             $options = unitedbuzzz_default_schemes_countdown_timer();
             $default_options = unitedbuzzz_get_default_theme_options_countdown_timer();
             do_settings_sections('between'); 
             do_settings_sections('day'); 
             do_settings_sections('month'); 
             do_settings_sections('year'); 
             do_settings_sections('hours'); 
             do_settings_sections('minutes'); 
             do_settings_sections('seconds'); 
             
          ?>
               <table class="form-table">
				   <tr>
                     <th scope="row"><?php _e( 'Team Names :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'between', 'unitedbuzzz' ); ?></span></legend>
					    <input type="text" name="between" id="between" class="textbox" value="<?php echo get_option('between'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'Day :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'day', 'unitedbuzzz' ); ?></span></legend>
					    <input type="text" name="day" id="day" class="textbox" value="<?php echo get_option('day'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'Month :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'month', 'unitedbuzzz' ); ?></span></legend>
					    <input type="text" name="month" id="month" class="textbox" value="<?php echo get_option('month'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'year :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'year', 'unitedbuzzz' ); ?></span></legend>
					    <input type="text" name="year" id="year" class="textbox" value="<?php echo get_option('year'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'Hours :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'hours', 'unitedbuzzz' ); ?></span></legend>
                           <input type="text" name="hours" id="hours" class="textbox" value="<?php echo get_option('hours'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'Minutes :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'minutes', 'unitedbuzzz' ); ?></span></legend>
                           <input type="text" name="minutes" id="minutes" class="textbox" value="<?php echo get_option('minutes'); ?>"></input>
                        </fieldset>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row"><?php _e( 'Seconds :', 'unitedbuzzz' ); ?></th>
                     <td>
                        <fieldset><legend class="screen-reader-text"><span><?php _e( 'seconds', 'unitedbuzzz' ); ?></span></legend>
                           <input type="text" name="seconds" id="seconds" class="textbox" value="<?php echo get_option('seconds'); ?>"></input>
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
?>
