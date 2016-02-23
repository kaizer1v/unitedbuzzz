<?php
// stop the theme from killing WordPress if BuddyPress is not enabled.
if ( !class_exists( 'BP_Core_User' ) ) return false;

// remove junks from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

//Adds a stylesheet for designing Custom Fields in Custom post types
wp_enqueue_style( 'unitedbuzzz-theme-options', get_template_directory_uri() . '/inc/custom-field-styles.css', false, '2011-04-28' );

// Load up our theme options page and related code.
require( dirname( __FILE__ ) . '/inc/connect-with-us.php' );
require( dirname( __FILE__ ) . '/inc/utd-history.php' );
require( dirname( __FILE__ ) . '/inc/countdown-timer.php' );

//disable admin bar
add_filter( 'show_admin_bar', '__return_false' );

//adding data at time of Registration  
	/* Add sign-up field to BuddyPress sign-up array */
function bp_custom_user_signup_field( $usermeta ) {
	$usermeta['first_login_check'] = $_POST['first_login'];

	return $usermeta;
}
add_filter( 'bp_signup_usermeta', 'bp_custom_user_signup_field' );

	/* Add field_name from sign-up to usermeta on activation */
function bp_user_activate_field( $signup ) {
	
	update_user_meta( $signup, 'first_login_check', 'false' );

	return $signup;
}
add_filter( 'bp_core_activate_account', 'bp_user_activate_field' );

// register menu
add_theme_support('menus');
register_nav_menus( array(
	'header' => __('Header Menu', 'blog_template'),
));
register_nav_menus( array(
	'footer'=>__('Footer Menu', 'blog_template'),
));
register_nav_menus( array(
	'sidebar-l-t'=>__('Sidebar Leagues & Tournaments Menu', 'blog_template'),
));
register_nav_menus( array(
	'sidebar-pleft-profile'=>__('Profile Option', 'blog_template'),
));
register_nav_menus( array(
	'players-staff-tabs'=>__('Players & Staff', 'blog_template'),
));

// add featured image support
add_theme_support('post-thumbnails');
add_image_size('hot_news', 510, 170, true);
add_image_size('player_big_image', 200, 250, true);
#add_image_size('player_small_image', 75, 65, true);

/**
 * Register the widget columns 
 */
register_sidebar( array(
	'name' => 'Left',
	'id' => 'left-sidebar',
	'description' => 'This is the left sidebar',
	'before_widget' => '<div id="sidebar-group-div">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

/* Sidebar showing the Fixtures Widget */
register_sidebar( array(
	'name' => 'Right Fixures',
	'id' => 'right-sidebar',
	'description' => 'This is the right sidebar',
	'before_widget' => '<div id="sidebar-group-div">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

register_sidebar( array(
	'name' => 'Leagues',
	'id' => 'right-leagues-sidebar',
	'description' => 'This is the Leagues Table',
	'before_widget' => '<div id="sidebar-group-div">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

register_sidebar( array(
	'name' => 'Invite Others',
	'id' => 'invite-others-sidebar',
	'description' => 'You Can Invite Others',
	'before_widget' => '<div id="sidebar-group-div">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

register_sidebar( array(
	'name' => 'Community Sidebar',
	'id' => 'community-sidebar',
	'description' => 'Appear on every buddy press page.',
	'before_widget' => '<div id="%1$s" class="widget-container %2$s clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="title">',
	'after_title' => '</h4>'
));

/*Default Avatar*/
function myavatar_add_default_avatar( $url )
{
	return get_stylesheet_directory_uri() .'/images/profile-avatar.png';
}
add_filter( 'bp_core_mysteryman_src', 'myavatar_add_default_avatar' );
/*Default Group Avatars*/
function my_default_get_group_avatar($avatar) {

global $bp, $groups_template;

if( strpos($avatar,'group-avatars') ) {

return $avatar;
}

else {
$custom_avatar = get_stylesheet_directory_uri() .'/images/profile-avatar.png';

if($bp->current_action == "")
return '<img width="'.BP_AVATAR_THUMB_WIDTH.'" height="'.BP_AVATAR_THUMB_HEIGHT.'" src="'.$custom_avatar.'" class="avatar" alt="' . attribute_escape( $groups_template->group->name ) . '" />';
else
return '<img width="'.BP_AVATAR_FULL_WIDTH.'" height="'.BP_AVATAR_FULL_HEIGHT.'" src="'.$custom_avatar.'" class="avatar" alt="' . attribute_escape( $groups_template->group->name ) . '" />';
}
}
add_filter( 'bp_get_group_avatar', 'my_default_get_group_avatar');

/*search post number*/
/*function change_wp_search_size($query) {
	if ( $query->is_search ) // Make sure it is a search page
		$query->query_vars['posts_per_page'] = 25; // Change 10 to the number of posts you would like to show
		$query->set('order', 'ASC');
		$query->set('orderby', 'title');
	return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter
/**
 * Load Javascript files
 */
 
function _theme_load_scripts() 
{
    // instruction to only load if it is not the admin area
    if ( is_admin() ) return;
    
    $dir = get_bloginfo('template_directory');
    
    // reload jquery library from google api
	wp_deregister_script("jquery");
	wp_register_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js", false, '1.4');
    
    
    // register scripts
    wp_register_script("global", $dir."/scripts/global.js", array('jquery'), true);
    wp_register_script("buddypress", $dir."/scripts/buddypress.js", array('jquery'), true);
    
    // load scripts
    wp_enqueue_script("global");
    
    if ( !bp_is_blog_page() ) {
        wp_enqueue_script("buddypress");
        
        // Add words that we need to use in JS to the end of the page so they can be translated and still used.
        wp_localize_script( "buddypress", "BP_DTheme", array(
        	'my_favs'           => __( 'My Favorites', 'buddypress' ),
        	'accepted'          => __( 'Accepted', 'buddypress' ),
        	'rejected'          => __( 'Rejected', 'buddypress' ),
        	'show_all_comments' => __( 'Show all comments for this thread', 'buddypress' ),
        	'show_all'          => __( 'Show all', 'buddypress' ),
        	'comments'          => __( 'comments', 'buddypress' ),
        	'close'             => __( 'Close', 'buddypress' ),
        	'mention_explain'   => sprintf( __( "%s is a unique identifier for %s that you can type into any message on this site. %s will be sent a notification and a link to your message any time you use it.", 'buddypress' ), '@' . bp_get_displayed_user_username(), bp_get_user_firstname( bp_get_displayed_user_fullname() ), bp_get_user_firstname( bp_get_displayed_user_fullname() ) )
        ));
    }
}
add_action('wp_print_scripts', '_theme_load_scripts');
function _theme_add_body_class($classes, $custom_classes = false)
{	
    the_post();
    
    // insert buddypress class on buddypress page
    if ( !bp_is_blog_page() ) $classes[] = 'buddypress';
    
    // add category
    if ( is_single() ) { 
        foreach (get_the_category() as $category) {
            $classes[] = "single-".$category->slug;
        }
    }
    
    rewind_posts();
    
    return $classes;
}
add_filter( 'body_class', '_theme_add_body_class', 10, 2 );

// trim excerpt by word
function get_trimmed_excerpt($maxChars = 160, $appendingString = '...', $default_excerpt = "Default page description.") {
	if( !is_single() && !is_page() ) 
	    return $default_excerpt;
	
	the_post();
    
	$content = substr(get_the_excerpt(), 0, $maxChars);
	$content = strip_tags($content);
	$pos = strrpos($content, " ");
	
	if ($pos > 0) {
		$content = substr($content, 0, $pos);
	}
	
	$result = $content.$appendingString;
	
	rewind_posts();
	
	return $result;
}


/**
 * Display pagination
 */
function the_theme_pagination( $pages_around = 3 ) { // pages will be show before and after current page
    
    // don't show in single page
    if ( is_single() || is_singular() ) return; 
    
    global $wp_query, $paged;
    
    $total_page = $wp_query->max_num_pages; // Total pages
    if ( $total_page == 1 ) return; // don't show when only one page
    if ( empty( $paged ) ) $paged = 1; // current page
    
    echo "<div class=\"pagination\">";
    
    // html format
    $page_number_html = '<a class="page-number" href="%1$s" title="%2$s">%2$s</a>'; // 1: link, 2: text
    $current_page_number_html = '<strong class="page-number current-page">%s</strong>'; // 1: link, 2: text
    $dots_html = '<span class="dots">…</span>';
    
    $previous_page_html = '<a class="previous-page" href="%s" title="Previous page">&larr; Previous Entries</a> '; // 1:link
    $disabled_previous_page_html = '<span class="previous-page disabled">&larr; Previous Entries</span> '; //&laquo;
    
    $next_page_html = ' <a class="next-page" href="%s" title="Next page">Next Entries &rarr;</a> '; // 1:link
    $disabled_next_page_html = ' <span class="next-page disabled">Next Entries &rarr;</span> '; //&raquo;
    
    // previous page
    if ($paged > 1) {
        printf($previous_page_html, get_pagenum_link($paged-1));
    } else {
        echo $disabled_previous_page_html;
    }
    
    // next page
    if ($paged < $total_page) {
        printf($next_page_html, get_pagenum_link($paged+1));
    } else {
        echo $disabled_next_page_html;
    }
    
    // page number
    echo '<span class="page-number-container">Page: ';
    if ( $paged > $pages_around + 1 ) printf($page_number_html, esc_html(get_pagenum_link(1)), 1);
    if ( $paged > $pages_around + 2 ) echo $dots_html;
     
    $start = $paged - $pages_around;
    $start = $start <= 0 ? 1 : $start;
    
    $end = $paged + $pages_around;
    $end = $end > $total_page ? $total_page : $end;
    
    for( $i = $start; $i <= $end; $i++ ) { // Middle pages
        
        if($i == $paged) {
            // current page
            printf($current_page_number_html, $i);
            continue;
        }
        
        printf($page_number_html, get_pagenum_link($i), $i);
    }
    
    if ( $paged < $total_page - $pages_around ) echo $dots_html;
    // if ( $paged < $total_page - $pages_around ) printf($format, esc_html(get_pagenum_link($total_page)), "Last");
    
    echo "</span>";
    
    echo "</div>";
}

function _add_buddypress_menu($items, $args) { // add a class to menu-item
    if( $args->theme_location != "primary" ) return $items;
    
    $items .= "\n";
    $currentMenuItem = "";
    
    if ( bp_is_active( 'activity' ) ) :
        $currentMenuItem = bp_is_page( BP_ACTIVITY_SLUG ) ? "current-menu-item" : "";
        $items .= "<li class=\"menu-item menu-item-activity {$currentMenuItem}\" id=\"menu-item-activity\"><a href=\"".site_url()."/".BP_ACTIVITY_SLUG."\">Activity</a></li>\n";
    endif;
    
    $currentMenuItem = bp_is_page( BP_MEMBERS_SLUG ) || bp_is_member() ? "current-menu-item" : "";
    $items .= "<li class=\"menu-item menu-item-members {$currentMenuItem}\" id=\"menu-item-members\"><a href=\"".site_url()."/".BP_MEMBERS_SLUG."\">Members</a></li>\n";
    
    if ( bp_is_active( 'groups' ) ) :
        $currentMenuItem = bp_is_page( BP_GROUPS_SLUG ) || bp_is_group() ? "current-menu-item" : "";
        $items .= "<li class=\"menu-item menu-item-groups {$currentMenuItem}\" id=\"menu-item-groups\"><a href=\"".site_url()."/".BP_GROUPS_SLUG."\">Groups</a></li>\n";
    endif;
    
    if ( bp_is_active( 'groups' ) && bp_is_active( 'forums' ) && ( function_exists( 'bp_forums_is_installed_correctly' ) && !(int) bp_get_option( 'bp-disable-forum-directory' ) ) && bp_forums_is_installed_correctly() ) :
        $currentMenuItem = bp_is_page( BP_FORUMS_SLUG ) ? "current-menu-item" : "";
        $items .= "<li class=\"menu-item menu-item-forums {$currentMenuItem}\" id=\"menu-item-forums\"><a href=\"".site_url()."/".BP_FORUMS_SLUG."\">Forums</a></li>\n";
    endif;
    
    if ( bp_is_active( 'blogs' ) && bp_core_is_multisite() ) :
        $currentMenuItem = bp_is_page( BP_BLOGS_SLUG ) ? "current-menu-item" : "";
        $items .= "<li class=\"menu-item menu-item-blogs {$currentMenuItem}\" id=\"menu-item-blogs\"><a href=\"".site_url()."/".BP_BLOGS_SLUG."\">Blogs</a></li>\n";
    endif;
    
    return $items;
}
add_filter('wp_nav_menu_items', '_add_buddypress_menu', 10, 2);

// include all theme widget
foreach (glob(TEMPLATEPATH.'/widgets/*.php') as $file) {
    include_once $file;
}

// Load the AJAX functions for the theme
require_once( TEMPLATEPATH . '/buddypress-ajax.php' );





//Menu
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation'),
	) );
}



//custom posttype for Chants
add_action('init', 'chants_register');
 
function chants_register() {
 
	$labels = array(
		'name' => _x('Chants', 'post type general name'),
		'singular_name' => _x('Chant Item', 'post type singular name'),
		'add_new' => _x('Add New', 'chant item'),
		'add_new_item' => __('Add New Chant Item'),
		'edit_item' => __('Edit Chant Item'),
		'new_item' => __('New Chant Item'),
		'view_item' => __('View Chant Item'),
		'search_items' => __('Search Chant'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	);
 
	register_post_type( 'chants' , $args );
}
/* Define the custom box */

add_action( 'add_meta_boxes', 'chants_add_custom_box' );
add_action( 'save_post', 'chants_type_save_postdata' );
function chants_add_custom_box(){
	add_meta_box( 'chant_audio', 'Select Type' , 'chants_inner_custom_box', 'chants'  );
}
function chants_inner_custom_box(){
	global $post;
	$chant_arr = array('chant_audio' , 'chant_video' );
	
	for( $i=0 ; $i < sizeOf($chant_arr) ; $i++){
		$chant_value = get_post_meta($post->ID, $chant_arr[$i]);
		if($chant_value[0] == "on"){
			echo "<input type='checkbox' name='".$chant_arr[$i]."' id='".$chant_arr[$i]."' checked='checked'/> ".substr($chant_arr[$i],6);
		}else{
			echo "<input type='checkbox' name='".$chant_arr[$i]."' id='".$chant_arr[$i]."'/> ".substr($chant_arr[$i],6);
		}
	}
	echo "<input type='checkbox' name='chant_lyrics' id='chant_lyrics' checked='checked'/> lyrics";
}
function chants_type_save_postdata(){
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return $post_id;
		
	global $post;
	if($post->post_type == "chants")
	{
		update_post_meta($post->ID, "chant_audio", $_POST['chant_audio']);
		update_post_meta($post->ID, "chant_video", $_POST['chant_video']);
		update_post_meta($post->ID, "chant_lyrics", $_POST['chant_lyrics']);
	}
}

//custom posttype for news

add_action('init', 'news_register');
 
function news_register() {
 
	$labels = array(
		'name' => _x('News', 'post type general name'),
		'singular_name' => _x('News Item', 'post type singular name'),
		'add_new' => _x('Add New', 'news item'),
		'add_new_item' => __('Add New News Item'),
		'edit_item' => __('Edit News Item'),
		'new_item' => __('New News Item'),
		'view_item' => __('View News Item'),
		'search_items' => __('Search News'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','excerpt', 'tags'),
		'taxonomies' => array('post_tag')
	); 
 
	register_post_type( 'news' , $args );
	#register_taxonomy_for_object_type('post_tag', 'news_tags');
}

/* Videos */
add_action('init', 'video_register');
 
function video_register() {
 
	$labels = array(
		'name' => _x('Videos', 'post type general name'),
		'singular_name' => _x('Video Item', 'post type singular name'),
		'add_new' => _x('Add New', 'video'),
		'add_new_item' => __('Add New Video Item'),
		'edit_item' => __('Edit Video Item'),
		'new_item' => __('New Video Item'),
		'view_item' => __('View Video Item'),
		'search_items' => __('Search Video Item'),
		'not_found' =>  __('No Such Video Item Found'),
		'not_found_in_trash' => __('No Video Item Found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','comments'),
	);
	register_post_type('video', $args);
}

add_post_type_support('video', array('comments'));
add_post_type_support('news', array('comments'));



/* Leagues and Tournaments */
add_action('init', 'leagues_tournaments_register');
 
function leagues_tournaments_register() {
 
	$labels = array(
		'name' => _x('Leauges / Tournaments', 'post type general name'),
		'singular_name' => _x('Leauge / Tournament Item', 'post type singular name'),
		'add_new' => _x('Add New', 'league / tournament'),
		'add_new_item' => __('Add New League / Tournament Item'),
		'edit_item' => __('Edit League / Tournament Item'),
		'new_item' => __('New League / Tournament Item'),
		'view_item' => __('View League / Tournament Item'),
		'search_items' => __('Search League / Tournament Item'),
		'not_found' =>  __('No Such League / Tournament Item Found'),
		'not_found_in_trash' => __('No League / Tournament Item Found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'page',
		'hierarchical' => true,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail', 'page-attributes'),
	); 
 
	register_post_type( 'leagues_tournaments' , $args );
}

register_taxonomy("leagues_tournaments_category", array("leagues_tournaments"), array("hierarchical" => true, "label" => "Category", "singular_label" => "Category", "rewrite" => true));



/* Players */
add_action('init', 'players_register');
 
function players_register() {
 
	$labels = array(
		'name' => _x('Players', 'post type general name'),
		'singular_name' => _x('Players Item', 'post type singular name'),
		'add_new' => _x('Add New', 'player'),
		'add_new_item' => __('Add New Player Item'),
		'edit_item' => __('Edit Player Item'),
		'new_item' => __('New Player Item'),
		'view_item' => __('View Player Item'),
		'search_items' => __('Search Player Item'),
		'not_found' =>  __('No Such Player Item Found'),
		'not_found_in_trash' => __('No Player Item Found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
	); 
 
	register_post_type( 'player' , $args );
}

register_taxonomy("player_category", array("player"), array("hierarchical" => true, "label" => "Category", "singular_label" => "Category", "rewrite" => true));





add_action("admin_init", "custom_fields");

function custom_fields() {

	register_taxonomy_for_object_type('post_tag', 'news_tag');
	add_meta_box("player_info_box", "Player Info", "fn_player_info", "player", "normal", "low");
	add_meta_box("player_match_goals_stats", "Latest Goals", "fn_player_match_goals", "player", "normal", "low");
	add_meta_box("player_match_booking_stats", "Latest Bookings", "fn_player_match_bookings", "player", "normal", "low");
	add_meta_box("player_show_on_squad_page", "Show Player on Squad Page", "fn_player_show_on_squad_page", "player", "side", "low");

	add_meta_box("player_lnt_top_scorer", "Top Scorer", "fn_lnt_top_scorer", "leagues_tournaments", "normal", "low");
}

function fn_lnt_top_scorer() {
	global $post;
	$custom = get_post_custom($post->ID);
?>
<table>
	<tr>
		<th>Player Name</th>
		<th>#Goals</th>
	</tr>
	<?php for($i=1;$i<=3;$i++) { ?>
	<tr>
		<td><input size="15" type="text" name="txt_lnt_top_scorer_name_<?php echo $i; ?>" value="<?php echo $custom['player_lnt_top_scorer_name_'.$i][0]; ?>" /></td>
		<td><input size="2" type="text" name="txt_lnt_top_scorer_goals_<?php echo $i; ?>" value="<?php echo $custom['player_lnt_top_scorer_goals_'.$i][0]; ?>" /></td>
	</tr>
	<?php } ?>
</table>
<?php
}

function fn_player_show_on_squad_page() {
	global $post;
	$custom = get_post_custom($post->ID);

	if($custom['player_show_on_squad_page'][0] == "on") {
?>
		<input type="checkbox" name="chckbox_show_on_squad" checked />Show on Squad Page
<?php
	}
	else {
?>
		<input type="checkbox" name="chckbox_show_on_squad" />Show on Squad Page
<?php
	}
}

function fn_player_info() {
	global $post;
	$custom = get_post_custom($post->ID);
	
	$countries = array('Netherlands', 'Australia', 'United Kingdom', 'England', 'Spain', 'Germany', 'Americas', 'Italy', 'Roman', 'Yugoslavakia', 'Russia', 'France', 'Brazil', 'Poland', 'Norway', 'Africa', 'Wales', 'Scotland', 'Bulgaria', 'Denmark', 'Portugal', 'Republic of Ireland', 'Serbia', 'South Korea', 'North Korea', 'China', 'Japan', 'Ecuador', 'Senegal', 'Belgium', 'Mexico', 'Northern Ireland');
	sort($countries);
	
	$playerPositions = array(
		'Goalkeeper',
		'Defender',
		'Left Back',
		'Right Back',
		'Full Back',
		'Wing Back',
		'Inside Right',
		'Inside Left',
		'Midfielder',
		'Winger',
		'Forward',
		'Manager',
		'Ex - Manager',
		'Head Physiotherapist',
		'Goalkeeping Coach',
		'First Team Coach',
		'Head of Human Performance',
		'Academy Director',
		'Youth Team Coach',
		'Assistant Manager',
	);
?>
	<table>
		<tr>
			<td style="width: 150px;">Player DOB (mm/dd/yyyy)</td>
			<td style="width: 300px;"><input size="15" type="text" name="txt_dob" value="<?php echo $custom['player_dob'][0]; ?>" /></td>
			<td style="width: 150px;">Position</td>
			<!--<td><input size="15" type="text" name="txt_position" value="<?php echo $custom['player_position'][0]; ?>" /></td>-->
			<td>
				<select name="select_player_position">
					<?php foreach($playerPositions as $playerPositionKey => $playerPosition) { ?>
						<option value="<?php echo $playerPosition; ?>" <?php if($custom['player_position'][0] == $playerPosition) { echo "selected"; } ?>>
							<?php echo $playerPosition; ?>
						</option>
					<?php } ?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Appearances</td>
			<td><input size="15" type="text" name="txt_appearances" value="<?php echo $custom['player_appearances'][0]; ?>" /></td>
			<td>Goals Scored</td>
			<td><input size="15" type="text" name="txt_goals" value="<?php echo $custom['player_goals'][0]; ?>" /></td>
		</tr>
		<tr>
			<td>Jersey Number</td>
			<td><input size="15" type="text" name="txt_jersey_number" value="<?php echo $custom['player_jersey_number'][0]; ?>" /></td>
			<td>United Debut</td>
			<td><input size="15" type="text" name="txt_debut" value="<?php echo $custom['player_debut'][0]; ?>" /></td>
		</tr>
		<tr>
			<td>Joined United</td>
			<td><input size="15" type="text" name="txt_joined_on" value="<?php echo $custom['player_joined_on'][0]; ?>" /></td>
			<td>Left United</td>
			<td><input size="15" type="text" name="txt_left_on" value="<?php echo $custom['player_left_on'][0]; ?>" /></td>
		</tr>

		</tr>
			<td>Nationality</td>
			<td>
				<select name="select_nationality">
					<?php foreach($countries as $country) { ?>
						<option <?php if($custom['player_nationality'][0] == $country) { echo "selected"; } ?>><?php echo $country; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
	</table>
	<p for="txt_excerpt"><strong>Excerpt</strong></p>
	<textarea rows="10" cols="100" name="txt_excerpt"><?php echo $custom['player_excerpt'][0]; ?></textarea>
<?php
}


function fn_player_match_goals() {
	global $post;
	$custom = get_post_custom($post->ID);
?>
	<table cellpadding='0' cellspacing='5'>
		<tr>
			<th>Date (mm/yy)</th>
			<th></th>
			<th>Match Against</th>
			<th>Type/Name</th>
			<th>#Goals</th>
			<th>Minutes (14', 52', ...)</th>
		</tr>
		<tr>
			<td><input size="10" type="text" name="txt_one_matchDate" value="<?php echo $custom['player_match_goals_one_matchDate'][0]; ?>" /></td>
			<td>vs.</td>
			<td><input size="20" type="text" name="txt_one_againstTeam" value="<?php echo $custom['player_match_goals_one_againstTeam'][0]; ?>" /></td>
			<td><input size="20" type="text" name="txt_one_matchType" value="<?php echo $custom['player_match_goals_one_matchType'][0]; ?>" /></td>
			<td><input size="5" type="text" name="txt_one_numberGoals" value="<?php echo $custom['player_match_goals_one_numberGoals'][0]; ?>" /></td>
			<td><input size="15" type="text" name="txt_one_goalMinutes" value="<?php echo $custom['player_match_goals_one_goalMinutes'][0]; ?>" /></td>
		</tr>
		<tr>
			<td><input size="10" type="text" name="txt_two_matchDate" value="<?php echo $custom['player_match_goals_two_matchDate'][0]; ?>" /></td>
			<td>vs.</td>
			<td><input size="20" type="text" name="txt_two_againstTeam" value="<?php echo $custom['player_match_goals_two_againstTeam'][0]; ?>" /></td>
			<td><input size="20" type="text" name="txt_two_matchType" value="<?php echo $custom['player_match_goals_two_matchType'][0]; ?>" /></td>
			<td><input size="5" type="text" name="txt_two_numberGoals" value="<?php echo $custom['player_match_goals_two_numberGoals'][0]; ?>" /></td>
			<td><input size="15" type="text" name="txt_two_goalMinutes" value="<?php echo $custom['player_match_goals_two_goalMinutes'][0]; ?>" /></td>
		</tr>
		<tr>
			<td><input size="10" type="text" name="txt_three_matchDate" value="<?php echo $custom['player_match_goals_three_matchDate'][0]; ?>" /></td>
			<td>vs.</td>
			<td><input size="20" type="text" name="txt_three_againstTeam" value="<?php echo $custom['player_match_goals_three_againstTeam'][0]; ?>" /></td>
			<td><input size="20" type="text" name="txt_three_matchType" value="<?php echo $custom['player_match_goals_three_matchType'][0]; ?>" /></td>
			<td><input size="5" type="text" name="txt_three_numberGoals" value="<?php echo $custom['player_match_goals_three_numberGoals'][0]; ?>" /></td>
			<td><input size="15" type="text" name="txt_three_goalMinutes" value="<?php echo $custom['player_match_goals_three_goalMinutes'][0]; ?>" /></td>
		</tr>
	</table>
<?php
}


function fn_player_match_bookings() {
	global $post;
	$custom = get_post_custom($post->ID);
?>
	<table cellpadding='0' cellspacing='5'>
		<tr>
			<th>Date (mm/yy)</th>
			<th></th>
			<th>Match Against</th>
			<th>Type/Name</th>
			<th>Card</th>
			<th>Minute (14' or 52' ...)</th>
		</tr>
		<tr>
			<td><input size="10" type="text" name="txt_one_booking_matchDate" value="<?php echo $custom['player_match_booking_one_matchDate'][0]; ?>" /></td>
			<td>vs.</td>
			<td><input size="20" type="text" name="txt_one_booking_againstTeam" value="<?php echo $custom['player_match_booking_one_againstTeam'][0]; ?>" /></td>
			<td><input size="20" type="text" name="txt_one_booking_matchType" value="<?php echo $custom['player_match_booking_one_matchType'][0]; ?>" /></td>
			<td><input size="5" type="text" name="txt_one_booking_card" value="<?php echo $custom['player_match_booking_one_card'][0]; ?>" /></td>
			<td><input size="15" type="text" name="txt_one_booking_cardMinute" value="<?php echo $custom['player_match_booking_one_cardMinute'][0]; ?>" /></td>
		</tr>
		<tr>
			<td><input size="10" type="text" name="txt_two_booking_matchDate" value="<?php echo $custom['player_match_booking_two_matchDate'][0]; ?>" /></td>
			<td>vs.</td>
			<td><input size="20" type="text" name="txt_two_booking_againstTeam" value="<?php echo $custom['player_match_booking_two_againstTeam'][0]; ?>" /></td>
			<td><input size="20" type="text" name="txt_two_booking_matchType" value="<?php echo $custom['player_match_booking_two_matchType'][0]; ?>" /></td>
			<td><input size="5" type="text" name="txt_two_booking_card" value="<?php echo $custom['player_match_booking_two_card'][0]; ?>" /></td>
			<td><input size="15" type="text" name="txt_two_booking_cardMinute" value="<?php echo $custom['player_match_booking_two_cardMinute'][0]; ?>" /></td>
		</tr>
		<tr>
			<td><input size="10" type="text" name="txt_three_booking_matchDate" value="<?php echo $custom['player_match_booking_three_matchDate'][0]; ?>" /></td>
			<td>vs.</td>
			<td><input size="20" type="text" name="txt_three_booking_againstTeam" value="<?php echo $custom['player_match_booking_three_againstTeam'][0]; ?>" /></td>
			<td><input size="20" type="text" name="txt_three_booking_matchType" value="<?php echo $custom['player_match_booking_three_matchType'][0]; ?>" /></td>
			<td><input size="5" type="text" name="txt_three_booking_card" value="<?php echo $custom['player_match_booking_three_card'][0]; ?>" /></td>
			<td><input size="15" type="text" name="txt_three_booking_cardMinute" value="<?php echo $custom['player_match_booking_three_cardMinute'][0]; ?>" /></td>
		</tr>
	</table>
<?php
}





/* Save Post */
add_action('save_post', 'save_details');

function save_details() {
	
	global $post;
	
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;
	
	if(empty($_POST))
		return;
	

	if($post->post_type == "player") {
		update_post_meta($post->ID, 'player_dob', $_POST['txt_dob']);
		update_post_meta($post->ID, "player_nationality", $_POST['select_nationality']);
		update_post_meta($post->ID, "player_jersey_number", $_POST['txt_jersey_number']);
		update_post_meta($post->ID, "player_debut", $_POST['txt_debut']);
		update_post_meta($post->ID, "player_appearances", $_POST['txt_appearances']);
		update_post_meta($post->ID, "player_goals", $_POST['txt_goals']);
		update_post_meta($post->ID, "player_joined_on", $_POST['txt_joined_on']);
		update_post_meta($post->ID, "player_left_on", $_POST['txt_left_on']);
		update_post_meta($post->ID, "player_excerpt", $_POST['txt_excerpt']);
		update_post_meta($post->ID, "player_position", $_POST['select_player_position']);

		if($_POST['chckbox_show_on_squad'] == NULL)
			$_POST['chckbox_show_on_squad'] = "off";
		else
			$_POST['chckbox_show_on_squad'] = "on";

		update_post_meta($post->ID, "player_show_on_squad_page", $_POST['chckbox_show_on_squad']);

		/* Update Player - Match Stats */
		/* Goals */

		update_post_meta($post->ID, "player_match_goals_one_matchDate", $_POST['txt_one_matchDate']);
		update_post_meta($post->ID, "player_match_goals_one_againstTeam", $_POST['txt_one_againstTeam']);
		update_post_meta($post->ID, "player_match_goals_one_matchType", $_POST['txt_one_matchType']);
		update_post_meta($post->ID, "player_match_goals_one_numberGoals", $_POST['txt_one_numberGoals']);
		update_post_meta($post->ID, "player_match_goals_one_goalMinutes", $_POST['txt_one_goalMinutes']);
	
		update_post_meta($post->ID, "player_match_goals_two_matchDate", $_POST['txt_two_matchDate']);
		update_post_meta($post->ID, "player_match_goals_two_againstTeam", $_POST['txt_two_againstTeam']);
		update_post_meta($post->ID, "player_match_goals_two_matchType", $_POST['txt_two_matchType']);
		update_post_meta($post->ID, "player_match_goals_two_numberGoals", $_POST['txt_two_numberGoals']);
		update_post_meta($post->ID, "player_match_goals_two_goalMinutes", $_POST['txt_two_goalMinutes']);
	
		update_post_meta($post->ID, "player_match_goals_three_matchDate", $_POST['txt_three_matchDate']);
		update_post_meta($post->ID, "player_match_goals_three_againstTeam", $_POST['txt_three_againstTeam']);
		update_post_meta($post->ID, "player_match_goals_three_matchType", $_POST['txt_three_matchType']);
		update_post_meta($post->ID, "player_match_goals_three_numberGoals", $_POST['txt_three_numberGoals']);
		update_post_meta($post->ID, "player_match_goals_three_goalMinutes", $_POST['txt_three_goalMinutes']);
	
		/* Bookings */
		update_post_meta($post->ID, "player_match_booking_one_matchDate", $_POST['txt_one_booking_matchDate']);
		update_post_meta($post->ID, "player_match_booking_one_againstTeam", $_POST['txt_one_booking_againstTeam']);
		update_post_meta($post->ID, "player_match_booking_one_matchType", $_POST['txt_one_booking_matchType']);
		update_post_meta($post->ID, "player_match_booking_one_card", $_POST['txt_one_booking_card']);
		update_post_meta($post->ID, "player_match_booking_one_cardMinute", $_POST['txt_one_booking_cardMinute']);
	
		update_post_meta($post->ID, "player_match_booking_two_matchDate", $_POST['txt_two_booking_matchDate']);
		update_post_meta($post->ID, "player_match_booking_two_againstTeam", $_POST['txt_two_booking_againstTeam']);
		update_post_meta($post->ID, "player_match_booking_two_matchType", $_POST['txt_two_booking_matchType']);
		update_post_meta($post->ID, "player_match_booking_two_card", $_POST['txt_two_booking_card']);
		update_post_meta($post->ID, "player_match_booking_two_cardMinute", $_POST['txt_two_booking_cardMinute']);
	
		update_post_meta($post->ID, "player_match_booking_three_matchDate", $_POST['txt_three_booking_matchDate']);
		update_post_meta($post->ID, "player_match_booking_three_againstTeam", $_POST['txt_three_booking_againstTeam']);
		update_post_meta($post->ID, "player_match_booking_three_matchType", $_POST['txt_three_booking_matchType']);
		update_post_meta($post->ID, "player_match_booking_three_card", $_POST['txt_three_booking_card']);
		update_post_meta($post->ID, "player_match_booking_three_cardMinute", $_POST['txt_three_booking_cardMinute']);
		/* END - Update Player - Match Stats */
	}
	
	if($post->post_type == "leagues_tournaments") {		
		for($i=1;$i<=3;$i++) {
			update_post_meta($post->ID, "player_lnt_top_scorer_name_".$i, $_POST['txt_lnt_top_scorer_name_'.$i]);
			update_post_meta($post->ID, "player_lnt_top_scorer_goals_".$i, $_POST['txt_lnt_top_scorer_goals_'.$i]);
		}
	}
	

	/* SAVE ManU Stats */
	/*
	update_post_meta($post->ID, 'stats_goals', $_POST['txt_stats_goals']);
	update_post_meta($post->ID, 'stats_won', $_POST['txt_stats_won']);
	update_post_meta($post->ID, 'stats_lost', $_POST['txt_stats_lost']);
	update_post_meta($post->ID, 'stats_draw', $_POST['txt_stats_draw']);
	update_post_meta($post->ID, 'stats_f', $_POST['txt_stats_f']);
	update_post_meta($post->ID, 'stats_a', $_POST['txt_stats_a']);
	update_post_meta($post->ID, 'stats_gd', $_POST['txt_stats_gd']);
	update_post_meta($post->ID, 'stats_gfa', $_POST['txt_stats_gfa']);
	update_post_meta($post->ID, 'stats_gaa', $_POST['txt_stats_gaa']);
	update_post_meta($post->ID, 'stats_ppg', $_POST['txt_stats_ppg']);
	update_post_meta($post->ID, 'stats_pts', $_POST['txt_stats_pts']);
	update_post_meta($post->ID, 'stats_position', $_POST['txt_stats_position']);
	*/
}
/* ================================================================================================================ */
/* AJAX Functionality for Becoming A fan */
/* ================================================================================================================ */

// this hook is fired if the current viewer is not logged in
if(isset($_REQUEST['action'])){
	do_action('wp_ajax_nopriv_' . $_REQUEST['action']);
}
 
// if logged in:
//do_action('wp_ajax_' . $_POST['action']); //amit singh


// if both logged in and not logged in users can send this AJAX request,
// add both of these actions, otherwise add only the appropriate one
// First action will fire only when the user is NOT logged in
// Second action will fire only when the user is logged in

if(!class_exists('frontEndAjax')) {

	class frontEndAjax {	
	
		function myajax_submit_logged_in() {
			// get the submitted parameters
			global $current_user;
			$postID = $_POST['postID'];
			$playerID = substr($_POST['playerID'], 7, strlen($_POST['playerID']));
	
			global $wpdb;	
			$query = "SELECT * FROM player_user_fans WHERE player_id=".$playerID." AND user_id=".$current_user->ID." LIMIT 1";
			//echo $query;
			$result = $wpdb->get_results($query, ARRAY_A);
	
			if(empty($result)) {
		
				if($_POST['iAmFan'] == true) {
					$wpdb->insert('player_user_fans', array(
						'player_id' => $playerID,
						'user_id'	=> $current_user->ID
					));
					$data['success'] = true;
				}
				else {
					$data['reason'] = "I am already a Fan";
					$data['success'] = false;
				}
			}
			elseif(!empty($result)) {
	
				if($_POST['iAmFan'] == false) {
					$data['reason'] = "I cannot Remove myself right now";
					$data['success'] = false;
				}
				else {
					$query = "DELETE FROM player_user_fans WHERE player_id=".$playerID." AND user_id=".$current_user->ID;
					$wpdb->query($query);
					$data['success'] = true;
				}
			}

			// generate the response
			$response = json_encode($data);
		 
			// response output
			header( "Content-Type: application/json" );
			echo $response;
		 
			// IMPORTANT: don't forget to "exit"
			exit;
		}

		function myajax_submit_not_logged_in() {
			$data['success'] = true;
			$data['reason'] = "You must be logged in to perform this action";
			$response = json_encode($data);
		}
		
		function myajax_show_club_stats() {
			$clubStatsType = $_POST['selectedStatType'];
			#$clubStatPostID = substr($_POST['selectedPostID'], 6, strlen($_POST['selectedPostID']));
			$clubStatsDate = $_POST['selectedPostTitle'];
			$clubStatsTypeSlug = $_POST['selectedStatTypeSlug'];

			$args = array(
				'post_type' => 'club_stats',
				'club_stats_category' => $clubStatsTypeSlug
			);
			$stats = get_posts($args);

			$data['statsToDisplay'] = array();
			foreach($stats as $stat) {
				if($stat->post_title == $clubStatsDate) {
					$data['statsToDisplay'] = $stat->post_content;
				}
			}

			if(!empty($data['statsToDisplay']))
				$data['success'] = true;
			else
				$data['success'] = false;
			#print_r($data);
			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		function myajax_show_squad_stats() {
			
			$squadStatsType = substr($_POST['selectedStatType'], 3, strlen($_POST['selectedStatType']));
			#$squadStatPostID = substr($_POST['selectedPostID'], 6, strlen($_POST['selectedPostID']));
			$squadStatsTypeSlug = $_POST['selectedStatTypeSlug'];
			$squadSatsDate = $_POST['selectedStatDate'];
			$selectedStatTypeID = $_POST['selectedStatTypeID'];
			
			$args = array(
				'post_type' => 'squad_stats',
				'squad_stats_category' => $squadStatsTypeSlug
			);
			$stats = get_posts($args);
			
			$data['statsToDisplay'] = array();
			foreach($stats as $stat) {
				if($stat->post_title == $squadSatsDate){
					$data['statsToDisplay'] = $stat->post_content;
				}
			}
			if(!empty($data['statsToDisplay']))
				$data['success'] = true;
			else
				$data['success'] = false;
			
			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		function myajax_show_child_fixtures() {
			$selectedParentFixture = $_POST['selectedParentFixture'];
			$data['parentFixgture'] = get_term_by('slug', $selectedParentFixture, 'fixtures_category');
			$childrenFixtures = get_term_children($data['parentFixgture']->term_id, 'fixtures_category');
			$data['childrenFixtures'] = array();
			foreach($childrenFixtures as $childTermID) {
				array_push($data['childrenFixtures'], get_term_by('id', $childTermID, 'fixtures_category'));
			}
			
			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		function myajax_show_fixtures() {
			
			$selectedFixtureType = $_POST['selectedFixtureType'];
			if($selectedFixtureType != 'all') {
				$args = array(
					'post_type' => 'fixtures',
					'fixtures_category' => $selectedFixtureType
				);
				$data['all'] = false;
				$data['success'] = true;
			}
			else {
				$args = array('post_type' => 'fixtures');
				$data['all'] = true;
				$data['success'] = true;
			}

			$data['fixturesToDisplay'] = get_posts($args);
			#print_r($data['fixturesToDisplay']);

			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		function myajax_invite_others_get_contacts() {
			$userEmail = $_POST['inviteUserEmail'];
			$userPassword = $_POST['inviteUserPwd'];
			$selectedService = $_POST['inviteSelectedService'];

			if (!class_exists('OpenInviter'))
				include("openinviter/oi_includes/openinviter.php");

			$oi = new OpenInviter();
			if(isset($oi))
				$services = $oi->getPlugins();	

			$oi->startPlugin($selectedService);
			$data = array();
			if($oi->login($userEmail, $userPassword)) {
				$data['contacts'] = $oi->getMyContacts();
			}
			else {
				$data['message'] = "Invalid Username/Email or Password or Service";
			}

			$userEmail = '';
			$userPassword = '';
			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		function myajax_invite_others_send_email() {
			$toEmails = $_POST['emails'];

			$subject = "Hey! Come Join UnitedBuzzz";
			$body = "Hey,
				I just joined a Manchester United Social Networking Site, would love for you to join and become a part of my network. Join the MUFC Family and help me support the RED DEVILS !!!";

			if(wp_mail($toEmails, $subject, $body)) {
				$data['message'] = "Email sent successfully";
			}
			else {
				$data['message'] = "Email could not be sent. Please try again.";
			}

			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		function myajax_save_dreamteam() {
			$dtFormation = $_POST['dtFormation'];
			$dtPlayers = $_POST['dtPlayers']['a'];

			global $current_user;
			global $wpdb;
			#$current_iser->ID
			#print_r($wpdb->get_results("SELECT * FROM user_dreamteam WHERE user_id=".$current_user->ID, ARRAY_A));
			$data['success'] = false;
			
			$results = $wpdb->get_results("SELECT * FROM user_dreamteam WHERE user_id=".$current_user->ID);
			if(empty($results)) {
				$wpdb->insert('user_dreamteam', array('user_id' => $current_user->ID, 'dt_formation' => $dtFormation, 'dt_players' => serialize($dtPlayers)));
				$data['success'] = true;
			}
			else {
				$wpdb->update("user_dreamteam", array('dt_players' => serialize($dtPlayers), 'dt_formation' => $dtFormation), array('user_id' => $current_user->ID));
				$data['success'] = true;
			}

			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		
		function myajax_show_child_leagues_tournaments() {

			global $wpdb;
			global $table_prefix;
			$query = "SELECT * 
						FROM ".$table_prefix."posts lt, ".$table_prefix."term_relationships tr
						WHERE lt.post_type='leagues_tournaments'
							AND lt.post_status='publish'
							AND lt.post_parent = ".$_POST['selectedpostID']."
							AND lt.ID = tr.object_id
							AND tr.term_taxonomy_id=".$_POST['selectedTermTaxonomyID']."
						GROUP BY lt.post_title ORDER BY lt.menu_order";
			#echo $query;
			$data['childPosts'] = $wpdb->get_results($query);
			$data['topScorers'] = get_post_custom($_POST['selectedpostID']);
			
			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		function myajax_show_lnt_round_content() {
			$data['roundContent'] = get_post($_POST['selectedroundID']);
			
			$response = json_encode($data);
			echo $response;
			exit;
		}
		
		function myajax_get_category_from_post_title() {
			global $wpdb;
			global $table_prefix;
			$selectedPostTitle = $_POST['selectedPostTitle'];
			$query = "SELECT tt.term_id
						FROM ".$table_prefix."posts p, ".$table_prefix."term_relationships tr, ".$table_prefix."term_taxonomy tt
						WHERE p.post_type='".$_POST['postType']."'
							AND p.post_status='publish'
							AND p.post_title='".$selectedPostTitle."'
							AND p.ID=tr.object_id
							AND tr.term_taxonomy_id=tt.term_taxonomy_id";

			$categoryIDs = $wpdb->get_results($query);
			foreach($categoryIDs as $categoryID) {
				$data['terms'][] = get_term_by('id', $categoryID->term_id, $_POST['categoryType']);
			}
			if(!empty($data['terms']))
				$data['success'] = true;
			else
				$data['success'] = false;
			
			$response = json_encode($data);
			echo $response;
			exit;
		}
		
	}
}

$frontEndAjax = new frontEndAjax();
add_action('wp_ajax_nopriv_myajax-submit', array(&$frontEndAjax, 'myajax_submit_not_logged_in'));
add_action('wp_ajax_myajax-submit', array(&$frontEndAjax, 'myajax_submit_logged_in'));
add_action('wp_ajax_show-stats-club', array(&$frontEndAjax, 'myajax_show_club_stats'));
add_action('wp_ajax_show-stats-squad', array(&$frontEndAjax, 'myajax_show_squad_stats'));
add_action('wp_ajax_show-fixtures', array(&$frontEndAjax, 'myajax_show_fixtures'));
add_action('wp_ajax_show-child-fixtures', array(&$frontEndAjax, 'myajax_show_child_fixtures'));
add_action('wp_ajax_invite-others-get-contacts', array(&$frontEndAjax, 'myajax_invite_others_get_contacts'));
add_action('wp_ajax_invite-others-send-email', array(&$frontEndAjax, 'myajax_invite_others_send_email'));
add_action('wp_ajax_save-dreamteam', array(&$frontEndAjax, 'myajax_save_dreamteam'));
add_action('wp_ajax_show-child-leagues-tournaments', array(&$frontEndAjax, 'myajax_show_child_leagues_tournaments'));
add_action('wp_ajax_show-lnt-round-content', array(&$frontEndAjax, 'myajax_show_lnt_round_content'));
add_action('wp_ajax_get-category-from-post-title', array(&$frontEndAjax, 'myajax_get_category_from_post_title'));

// embed the javascript file that makes the AJAX request
wp_enqueue_script( 'my-ajax-request', plugin_dir_url( __FILE__ ) . 'js/ajax.js', array( 'jquery' ) );

// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
wp_localize_script( 'my-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

/* ================================================================================================================ */
/* END of AJAX */
/* ================================================================================================================ */


/* ================================================================================================================ */
/* Statistics */
/* ================================================================================================================ */
	/* Club Stats */
	add_action('init', 'club_stats_register');

	function club_stats_register() {
	 
		$labels = array(
			'name' => _x('Club Stats', 'post type general name'),
			'singular_name' => _x('Club Stats Item', 'post type singular name'),
			'add_new' => _x('Add New', 'club stat'),
			'add_new_item' => __('Add New Club Stats Item'),
			'edit_item' => __('Edit Club Stats Item'),
			'new_item' => __('New Club Stats Item'),
			'view_item' => __('View Club Stats Item'),
			'search_items' => __('Search Club Stats Item'),
			'not_found' =>  __('No Such Club Stats Item Found'),
			'not_found_in_trash' => __('No Club Stats Item Found in Trash'),
			'parent_item_colon' => ''
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			#'menu_icon' => '',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail'),
		); 
	 
		register_post_type('club_stats', $args);
	}

	register_taxonomy("club_stats_category", array("club_stats"), array("hierarchical" => true, "label" => "Leagues/Cups", "singular_label" => "League/Cup", "rewrite" => true));

	/* Squad Stats */
	/* ManU Stats */
	add_action('init', 'squad_stats_register');
	 
	function squad_stats_register() {
	 
		$labels = array(
			'name' => _x('Squad Stats', 'post type general name'),
			'singular_name' => _x('Squad Stats Item', 'post type singular name'),
			'add_new' => _x('Add New', 'squad stats'),
			'add_new_item' => __('Add New Squad Stats Item'),
			'edit_item' => __('Edit Squad Stats Item'),
			'new_item' => __('New Squad Stats Item'),
			'view_item' => __('View Squad Stats Item'),
			'search_items' => __('Search Squad Stats Item'),
			'not_found' =>  __('No Such Squad Stats Item Found'),
			'not_found_in_trash' => __('No Squad Stats Item Found in Trash'),
			'parent_item_colon' => ''
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			#'menu_icon' => '',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail')
		); 
	 
		register_post_type('squad_stats', $args);
	}

	register_taxonomy("squad_stats_category", array("squad_stats"), array("hierarchical" => true, "label" => "Leagues/Cups", "singular_label" => "League/Cup", "rewrite" => true));

/* ================================================================================================================ */
/* END Statistics */
/* ================================================================================================================ */
	
/* ================================================================================================================ */
/* Fixtures */
/* ================================================================================================================ */
add_action('init', 'fixtures_register');
	 
	function fixtures_register() {
	 
		$labels = array(
			'name' => _x('Fixtures', 'post type general name'),
			'singular_name' => _x('Fixtures Item', 'post type singular name'),
			'add_new' => _x('Add New', 'fixtures'),
			'add_new_item' => __('Add New Fixtures Item'),
			'edit_item' => __('Edit Fixtures Item'),
			'new_item' => __('New Fixtures Item'),
			'view_item' => __('View Fixtures Item'),
			'search_items' => __('Search Fixtures Item'),
			'not_found' =>  __('No Such Fixtures Item Found'),
			'not_found_in_trash' => __('No Fixtures Item Found in Trash'),
			'parent_item_colon' => ''
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			#'menu_icon' => '',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail')
		); 
	 
		register_post_type('fixtures', $args);
	}

	register_taxonomy("fixtures_category", array("fixtures"), array("hierarchical" => true, "label" => "Leagues/Cups", "singular_label" => "League/Cup", "rewrite" => true));
	
/* ================================================================================================================ */
/* END Fixtures */
/* ================================================================================================================ */



/*Adding Excerpt on Pages*/
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}


/*CountDown Timer*/
function days_hours_minutes_seconds($seconds = 1, $time = '')
	{
		if ( ! is_numeric($seconds))
		{
			$seconds = 1;
		}

		if ( ! is_numeric($time))
		{
			$time = time();
		}

		if ($time <= $seconds)
		{
			$seconds = 1;
		}
		else
		{
			$seconds = $time - $seconds;
		}

		$data = array();
		$days = floor($seconds / 86400);

		if ($days > 0)
		{
			if ($days > 0)
			{
				////$str .= $days.' '.(($days>1)?'days':'day');
				$data['days']=$days;
			}

			$seconds -= $days * 86400;
		}

		$hours = floor($seconds / 3600);

		if ($days > 0 OR $hours > 0)
		{
			if ($hours > 0)
			{
				//$str .= $hours.' '.($hours>1)?'hours':'hour';
				$data['hours']=$hours;
			}

			$seconds -= $hours * 3600;
		}

		$minutes = floor($seconds / 60);

		if ($days > 0 OR $hours > 0 OR $minutes > 0)
		{
			if ($minutes > 0)
			{
				//$str .= $minutes.' '.($minutes>1)?'minutes':'minute';
				$data['minutes']=$minutes;
			}

			$seconds -= $minutes * 60;
		}

		$data['seconds']=$seconds;
	
		return $data;
		//return substr(trim($str), 0, -1);
	}

	function timespan($seconds = 1, $time = '')
	{
		if ( ! is_numeric($seconds))
		{
			$seconds = 1;
		}

		if ( ! is_numeric($time))
		{
			$time = time();
		}

		if ($time <= $seconds)
		{
			$seconds = 1;
		}
		else
		{
			$seconds = $time - $seconds;
		}

		$str = '';
		$years = floor($seconds / 31536000);

		if ($years > 0)
		{
			$str .= $years.' '.($years>1)?'years':'year';
		}

		$seconds -= $years * 31536000;
		$months = floor($seconds / 2628000);

		if ($years > 0 OR $months > 0)
		{
			if ($months > 0)
			{
				$str .= $months.' '.($months>1)?'months':'month';
			}

			$seconds -= $months * 2628000;
		}

		$weeks = floor($seconds / 604800);

		if ($years > 0 OR $months > 0 OR $weeks > 0)
		{
			if ($weeks > 0)
			{
				$str .= $weeks.' '.($weeks>1)?'weeks':'week';
			}

			$seconds -= $weeks * 604800;
		}

		$days = floor($seconds / 86400);

		if ($months > 0 OR $weeks > 0 OR $days > 0)
		{
			if ($days > 0)
			{
				$str .= $days.' '.($days>1)?'days':'day';
			}

			$seconds -= $days * 86400;
		}

		$hours = floor($seconds / 3600);

		if ($days > 0 OR $hours > 0)
		{
			if ($hours > 0)
			{
				$str .= $hours.' '.($hours>1)?'hours':'hour';
			}

			$seconds -= $hours * 3600;
		}

		$minutes = floor($seconds / 60);

		if ($days > 0 OR $hours > 0 OR $minutes > 0)
		{
			if ($minutes > 0)
			{
				$str .= $minutes.' '.($minutes>1)?'minutes':'minute';
			}

			$seconds -= $minutes * 60;
		}

		if ($str == '')
		{
			$str .= $seconds.' '.($seconds>1)?'seconds':'second';
		}

		return substr(trim($str), 0, -1);
	}





/*Unified Search*/
/* Add these code to your functions.php to allow Single Search page for all buddypress components*/
//	Remove Buddypress search drowpdown for selecting members etc
add_filter("bp_search_form_type_select", "bpmag_remove_search_dropdown"  );
function bpmag_remove_search_dropdown($select_html){
    return '';
}

remove_action( 'init', 'bp_core_action_search_site', 5 );//force buddypress to not process the search/redirect
add_action( 'init', 'bp_buddydev_search', 10 );// custom handler for the search

function bp_buddydev_search(){
global $bp;
	if ( $bp->current_component == BP_SEARCH_SLUG )//if thids is search page
		bp_core_load_template( apply_filters( 'bp_core_template_search_template', 'search-single' ) );//load the single searh template
}
add_action("advance-search","bpmag_show_search_results",1);//highest priority

/* we just need to filter the query and change search_term=The search text*/
function bpmag_show_search_results() {
    //filter the ajaxquerystring
     add_filter("bp_ajax_querystring","bpmag_global_search_qs",100,2);
}

//show the search results for member*/
function bpmag_show_member_search(){
    ?>
   <div class="memberss-search-result search-result">
   <h2 class="content-title"><?php _e("Members Results","bpmag");?></h2>
  <?php locate_template( array( 'members/members-loop.php' ), true ) ;  ?>
  <?php global $members_template;
	if($members_template->total_member_count>1):?>
		<a href="<?php echo bp_get_root_domain().'/'.BP_MEMBERS_SLUG.'/?s='.$_REQUEST['search-terms']?>" ><?php _e(sprintf("View all %d matched Members",$members_template->total_member_count),"bpmag");?></a>
	<?php 	endif; ?>
</div>
<?php	
 }

//Hook Member results to search page
add_action("advance-search","bpmag_show_member_search",10); //the priority defines where in page this result will show up(the order of member search in other searchs)
function bpmag_show_groups_search(){
    ?>
<div class="groups-search-result search-result">
 	<h2 class="content-title"><?php _e("Group Search","bpmag");?></h2>
	<?php locate_template( array('groups/groups-loop.php' ), true ) ;  ?>
	
	<a href="<?php echo bp_get_root_domain().'/'.BP_GROUPS_SLUG.'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View All matched Groups","bpmag");?></a>
</div>
	<?php
 //endif;
  }

//Hook Groups results to search page
 if(bp_is_active( 'groups' ))
    add_action("advance-search","bpmag_show_groups_search",10);

/**
 *
 * Show blog posts in search
 */
function bpmag_show_site_blog_search(){
    ?>
 <div class="blog-search-result search-result">
 
  <h2 class="content-title"><?php _e("Blog Search","bpmag");?></h2>
   
   <?php locate_template( array( 'search-loop.php' ), true ) ;  ?>
   <a href="<?php echo bp_get_root_domain().'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View All matched Posts","bpmag");?></a>
</div>
   <?php
  }

//Hook Blog Post results to search page
 add_action("advance-search","bpmag_show_site_blog_search",10);

//show forums search
function bpmag_show_forums_search(){
    ?>
 <div class="forums-search-result search-result">
   <h2 class="content-title"><?php _e("Forums Search","bpmag");?></h2>
  <?php locate_template( array( 'forums/forums-loop.php' ), true ) ;  ?>
  <a href="<?php echo bp_get_root_domain().'/'.BP_FORUMS_SLUG.'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View All matched forum posts","bpmag");?></a>
</div>
  <?php
  }

//Hook Forums results to search page
if ( bp_is_active( 'forums' ) && bp_is_active( 'groups' ) && ( function_exists( 'bp_forums_is_installed_correctly' ) && !(int) bp_get_option( 'bp-disable-forum-directory' ) ) && bp_forums_is_installed_correctly() )
 add_action("advance-search","bpmag_show_forums_search",20);


//show blogs search result

function bpmag_show_blogs_search(){

    ?>
  <div class="blogs-search-result search-result">
  <h2 class="content-title"><?php _e("Blogs Search","bpmag");?></h2>
  <?php locate_template( array( 'blogs/blogs-loop.php' ), true ) ;  ?>
  <a href="<?php echo bp_get_root_domain().'/'.BP_BLOGS_SLUG.'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View All matched Blogs","bpmag");?></a>
 </div>
  <?php
  }

//Hook Blogs results to search page if blogs comonent is active
 if(bp_is_active( 'blogs' ))
    add_action("advance-search","bpmag_show_blogs_search",10);


 //modify the query string with the search term
function bpmag_global_search_qs(){
	return "search_terms=".$_REQUEST['search-terms'];
}

function bpmag_is_advance_search(){
global $bp;
if($bp->current_component == BP_SEARCH_SLUG)
	return true;
return false;
}
remove_action( 'bp_init', 'bp_core_action_search_site', 7 );


/*Adding profile_info to profile*/
function xprofile_screen_profile_info() {
	$new = isset( $_GET['new'] ) ? $_GET['new'] : '';

	do_action( 'xprofile_screen_profile_info', $new );
	bp_core_load_template( apply_filters( 'xprofile_template_profile_info', 'members/single/home' ) );
}

function my_logo_setup_nav() {
	global $bp;
	$profile_link = $bp->loggedin_user->domain . $bp->profile->slug . '/';

	/* Add the subnav items to the profile nav item */
	bp_core_new_subnav_item( 		array( 	
				'name'            => __( 'Profile Info', 'buddypress' ),
				'slug'            => 'profile-info',
				'parent_url'      => $profile_link,
				'parent_slug'     => 'profile',
				'screen_function' => 'xprofile_screen_profile_info',
				'position'        => 40
			)
	);
	if ( $bp->current_component == $bp->profile->slug ) {
		if ( bp_is_my_profile() ) {
			$bp->bp_options_title = __( 'My Profile', 'buddypress' );
		} else {
			$bp->bp_options_avatar = bp_core_fetch_avatar( array( 'item_id' => $bp->displayed_user->id, 'type' => 'thumb' ) );
			$bp->bp_options_title = $bp->displayed_user->fullname;
		}
	}

	do_action( 'my_logo_setup_nav' );
}
add_action( 'bp_setup_nav', 'my_logo_setup_nav' );


// Stop user accounts logging in that have not been activated (user_status = 2)
function bp_core_signup_disable_inactive_modified( $auth_obj, $username ) {
	global $bp, $wpdb;

	if ( !$user_id = bp_core_get_userid( $username ) )
		return $auth_obj;

	$user_status = (int) $wpdb->get_var( $wpdb->prepare( "SELECT user_status FROM $wpdb->users WHERE ID = %d", $user_id ) );

	if ( 2 == $user_status )
		header("Location:".get_site_url()."/login?err=not-activated");
	else
		return $auth_obj;
}
add_filter( 'authenticate', 'bp_core_signup_disable_inactive_modified', 30, 2 );



/*Favourite Count*/
function my_show_favorite_count() {
	$my_fav_count = bp_activity_get_meta( bp_get_activity_id(), 'favorite_count' );
	if($my_fav_count > 0){
		echo "<a class='my_fav_count'>(".$my_fav_count.")</a>";
	}
}
add_action( 'bp_activity_entry_meta', 'my_show_favorite_count' );
