<?php
/*
Plugin Name: Match Casts
Plugin URI: http://wpoid.com
Description: 
Author: Savita at WPoid
Version: 0.3
Author URI: http://www.wpoid.com
*/

include_once('dbclass.php');

class MatchCast{

	var $wpdb = '';
 function __construct()
	{			
		if(!defined('WPM_DS')){define('WPM_DS', DIRECTORY_SEPARATOR);}		
		if(!defined('WPM_DIR')){define('WPM_DIR', dirname(__FILE__).WPM_DS);}
		if(!defined('WPM_URL')){define('WPM_URL', WP_PLUGIN_URL.'/matchcast/');}
		
		add_action('init', array(&$this,'register_matchcast')); 	
		add_action( 'add_meta_boxes', array(&$this,'match_custom_box') );
		add_action('save_post', array(&$this,'save_match_custom'));
		add_shortcode('matchcast', array(&$this,'display_matchcast'));
		add_action('wp_ajax_show_matchcast_utd',array(&$this,'save_matchcast_manutd'));
		add_action('wp_ajax_show_matchcast_otherteam',array(&$this,'save_matchcast_otherteam'));
		add_action('wp_ajax_commentry_like',array(&$this,'save_commentry_like'));
		add_action('wp_ajax_commentry_comment',array(&$this,'save_commentry_comment'));
		add_action('wp_ajax_delete_commentry_comment',array(&$this,'delete_a_commentry_comment'));
		add_action('wp_ajax_add_comments', array(&$this,'add_comments'));	
		add_action('wp_ajax_load_schedule', array(&$this,'load_schedule'));	
		add_action('wp_ajax_load_matchdetails', array(&$this,'load_matchdetails'));	
		add_action('wp_ajax_show_new_comments', array(&$this,'show_new_comments'));	
		add_action('wp_ajax_update_comment_number', array(&$this,'update_comment_number'));	
		add_action('wp_ajax_show_new_big_comments', array(&$this,'show_new_big_comments'));	
		add_action('wp_ajax_save_updated_comment', array(&$this,'save_updated_comment'));	
		add_action('wp_ajax_delete_comment', array(&$this,'delete_comment'));	
		add_action('save_post', array(&$this,'save_match_details'));
		$this->wpdb = new Match_db();				
	}
	function save_commentry_like()
	{
		$likeValue = $_POST['likeUnlike'];
		$commentaryId = $_POST['commentaryid'];
		$userId = $_POST['userid'];
		global $wpdb;
		$myResults = $wpdb->get_results( "SELECT `like` FROM comment_like where commentary_id=".$commentaryId." and userid=".$userId." LIMIT 1");
		if($myResults[0]->like == ""){
				$myInsertQ = $wpdb->insert( 'comment_like', array('like' => 'y','commentary_id'=>$commentaryId , 'userid'=>$userId ), array( '%s', '%d', '%d' )  ); 
		}else{
				$myUpdateQ = $wpdb->update( 'comment_like', array('like' => $likeValue), array('commentary_id'=>$commentaryId , 'userid'=>$userId) );
		}
		echo $likeValue;
	}
	function save_commentry_comment(){
		$commentaryId = $_POST['commentaryid'];
		$userId = $_POST['userid'];
		$commentTextUser = $_POST['commentText'];
		global $wpdb;
		$myCommentResults = $wpdb->get_results( "SELECT `comment_text` FROM comments where commentary_id=".$commentaryId." and userid=".$userId." LIMIT 1");
		$myInsertQ = $wpdb->insert( 'comments', array('comment_text' => $commentTextUser,'commentary_id'=>$commentaryId , 'userid'=>$userId ), array( '%s', '%d', '%d' )  ); 
		echo "Success";
	}
	function delete_a_commentry_comment(){
		$commentaryId = $_POST['commentaryid'];
		$userId = $_POST['userid'];
		global $wpdb;
		$myDeleteQ = $wpdb->query("DELETE FROM `comments` WHERE commentary_id=".$commentaryId." and userid=".$userId." LIMIT 1");		
		if($myDeleteQ == false){
			echo "Error";
		}else{
			echo "Success";
		}
	}
	function save_matchcast_manutd()
	{
		if($_POST['post_type'] == 'matchcast'){
			update_post_meta($_POST['postid'], 'mc_manutd', $_POST['mc_manutd_data']);
		}
		die();
	}
	function save_matchcast_otherteam()
	{
		if($_POST['post_type'] == 'matchcast') {
			update_post_meta($_POST['postid'], 'mc_otherteam', $_POST['mc_otherteam_data']);
		}
		die();
	}
	
	function match_custom_box() 
	{
		add_meta_box( 'match_section', 'Select Match',  array($this,'match_inner_custom_box'),   'matchcast' ); 
		add_meta_box( 'match_matchdetails', 'Match Details',  array($this,'match_details_custom_box'),   'matchcast' ); 
		
		add_meta_box( 'match_report', 'Quotes',  array($this,'match_inner_quotes'), 'matchcast' ); 
		add_meta_box( 'match_drawcast', 'Draw ManUtd MatchCast',  array($this,'match_draw_utd'),   'matchcast' ); 
		add_meta_box( 'match_drawcast_2', 'Draw Other Team MatchCast',  array($this,'match_draw_otherteam'),   'matchcast' ); 
	}
	
	function match_details_custom_box()
	{		
		include('views/match_details.php');
	}
	
	function match_inner_custom_box($post)
	{
		$results = $this->wpdb->get_all_matches();
		$custom = get_post_custom($post->ID);
		$code = $custom["match_cast_code"][0];	
		
		$custom_fields = "<select name='match_cast_code' id='match_cast_code'>";
			$custom_fields .= "<option></option>";
			foreach($results as $result)
			{
				$select = "";
				if($code == $result->gamecode_global_code)
				$select = "selected";
				
				$custom_fields .= "<option value='".$result->gamecode_global_code."' ".$select." >".$result->home_team." vs ".$result->visiting_team."  ".$result->game_date_time ."</option>";
			}
		$custom_fields .= "</select>";
		
		echo $custom_fields;
	}
	function match_draw_utd()
	{
		global $post;
		include('views/wp-ground-utd.php');
	}
	function match_draw_otherteam()
	{
		include('views/wp-ground-otherteam.php');
	}
	function match_inner_quotes($post)
	{
		$custom = get_post_custom($post->ID);
		$quotes = $custom["match_quotes"][0];
		$custom_fields = "";
		$custom_fields ="<div class='customEditor'><textarea name='match_quotes'>".$quotes."</textarea></div>";
		echo $custom_fields;
	}
	
	function save_match_custom($post)
	{
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return $post_id;
		
		global $post;
		
		if($post->post_type == "matchcast")
		{
			update_post_meta($post->ID, "match_cast_code", $_POST["match_cast_code"]);	  
			update_post_meta($post->ID, "match_quotes", $_POST["match_quotes"]);	  
		}		  
	}
	
	function register_matchcast()
	{
		$labels = array(
			'name' => _x('Match Cast', 'post type general name'),
			'singular_name' => _x('Match Cast Item', 'post type singular name'),
			'add_new' => _x('Add New Cast', 'matchcast'),
			'add_new_item' => __('Add New Match Cast Item'),
			'edit_item' => __('Edit Match Cast Item'),
			'new_item' => __('New Match Cast Item'),
			'view_item' => __('View Match Cast Item'),
			'search_items' => __('Search Match Cast Item'),
			'not_found' =>  __('No Such Match Cast Item Found'),
			'not_found_in_trash' => __('No Match Cast Item Found in Trash'),
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
			'supports' => array('title','thumbnail','editor')
		); 
	 
		register_post_type('matchcast', $args);		
		
	}
	function all_commentaries()
	{
		if(isset($_GET['commentid']) and $_GET['commentid'] != "")
		{
			$commentid = $_GET['commentid'];			
			$this->comment_list();					
		}
		else
		{
			$arr = array('post_type'=>'matchcast');		
			$allposts = get_posts($arr);	
			include('views/commentaries.php');
		}		
	}
	function all_match_stats()
	{
		if(isset($_GET['matchStatsId']) and $_GET['matchStatsId'] != "")
		{
			$matchId = $_GET['matchStatsId'];			
			$this->matchStats_list();					
		}
		else
		{
			$arr = array('post_type'=>'matchcast');		
			$allposts = get_posts($arr);	
			include('views/match_stats.php');
		}		
	}
	function all_player_stats()
	{
		if(isset($_GET['playerStatsId']) and $_GET['playerStatsId'] != "")
		{
			$playerId = $_GET['playerStatsId'];			
			$this->playerStats_list();					
		}
		else
		{
			$arr = array('post_type'=>'matchcast');		
			$allposts = get_posts($arr);	
			include('views/player_stats.php');
		}		
	}
	
	function comment_list()
	{	
		$message = "";
		if($_POST)
		{
			$chant_list = $_POST['chant_list'];			
			$game_global_code = $_GET['commentid'];
			$this->wpdb->add_chants_oncomments($chant_list, $game_global_code);
			$message = "Chants added";
			
		}
		$commentid = $_GET['commentid'];
		$global_commentid = $_GET['global_commentid'];
		$allcomments = $this->wpdb->get_all_commentaries($commentid);
		$chants = get_posts(array('post_type'=>'chants'));
		include('views/commentaries_list.php');
	}
	function matchStats_list(){
		global $wpdb;
		if($_POST['save_match_stats']){
			$arr=array('team_shots', 'team_fouls', 'team_corner_kicks', 'team_offsides', 'team_possession', 'team_yellow_cards', 'team_red_cards', 'team_saves');
			$match_info_array_manutd=array('manutd_shots_on_goal', 'manutd_fouls', 'manutd_corner_kicks', 'manutd_offsides','manutd_time_of_possession', 'manutd_yellow_cards', 'manutd_red_cards', 'manutd_saves');
			$marr = array('match_id'=>$_GET['matchStatsId'],'team_name'=>'home');
			foreach($match_info_array_manutd as $fieldkey=>$matchInfo){		
				if($_POST[$matchInfo] == ""){
					$marr[$arr[$fieldkey]] = "-";
				}else{
					$marr[$arr[$fieldkey]] = $_POST[$matchInfo];
				}			
			}
			$myDeleteQ = $wpdb->query("DELETE FROM match_stats WHERE match_id=".$_GET['matchStatsId']." AND team_name = 'home'");
			$myInsertQ = $wpdb->insert( 'match_stats', $marr, array( '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')  ); 
			
			
			
			$match_info_array_other=array('other_shots_on_goal', 'other_fouls', 'other_corner_kicks', 'other_offsides','other_time_of_possession', 'other_yellow_cards', 'other_red_cards', 'other_saves');
			$omarr = array('match_id'=>$_GET['matchStatsId'],'team_name'=>'away');
			foreach($match_info_array_other as $fieldkey=>$matchInfo2){		
				if($_POST[$matchInfo2] == ""){
					$omarr[$arr[$fieldkey]] = "-";
				}else{
					$omarr[$arr[$fieldkey]] = $_POST[$matchInfo2];
				}			
			}
			$myDeleteQ = $wpdb->query("DELETE FROM match_stats WHERE match_id=".$_GET['matchStatsId']." AND team_name = 'away'");
			$myInsertQ = $wpdb->insert( 'match_stats', $omarr, array( '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')  ); 
			
			
		}
		
		
		
		if($_POST['save_team_stats_home']){
			$this->saving_team_stats($_GET['matchStatsId'],'home');
		}
		if($_POST['save_team_stats_away']){
			$this->saving_team_stats($_GET['matchStatsId'],'away');
		}
			
		include('views/match_stats_list.php');
	}
	
	
	function saving_team_stats($matchStatsId,$team_type){
		global $wpdb;
		$arr=array('p_jno', 'p_name', 'p_goals', 'p_substitute', 'p_red_card', 'p_yellow_card', 'p_pos', 'p_goaltime','p_sbstime','p_redtime','p_yellowtime');
		$team_info_array=array($team_type.'_matchStats_jno_p', $team_type.'_matchStats_name_p', $team_type.'_matchStats_numberOfGoals_p', $team_type.'_matchStats_wasSubstituted_p',$team_type.'_matchStats_red_chk_p', $team_type.'_matchStats_yellow_chk_p', $team_type.'_matchStats_pos_p',$team_type.'_matchStats_goaltime_p',$team_type.'_matchStats_substime_p',$team_type.'_matchStats_redtime_p',$team_type.'_matchStats_yellowtime_p');
		if($team_type=='home'){
			$w=1;
		}else{
			$w=20;
		}
		for($i=1;$i<=19;$i++){
			$tsarr = array('match_id'=>$_GET['matchStatsId'],'team_name'=>$team_type,'team_stat_id'=>$w);
			foreach($team_info_array as $fieldkey=>$teamInfo){		
				if($_POST[$teamInfo.$i] == ""){
					if($_POST[$team_type.'_matchStats_red_chk_p'.$i]=="red_card"){$tsarr[$arr[$fieldkey]] = "red_card";}
					if($_POST[$team_type.'_matchStats_yellow_chk_p'.$i]=="yellow_card"){$tsarr[$arr[$fieldkey]] = "yellow_card";}
					$tsarr[$arr[$fieldkey]] = "-";
				}else{
					$tsarr[$arr[$fieldkey]] = $_POST[$teamInfo.$i];
				}			
			}
			$myResults = $wpdb->get_results( "SELECT `match_id`,`team_stat_id` FROM team_stats where match_id=".$matchStatsId." and team_stat_id=".$w." LIMIT 1");
			if($myResults[0]->team_stat_id == "" || $myResults[0]->match_id == ""){
				$myInsertQ = $wpdb->insert( 'team_stats', $tsarr, array( '%d', '%s','%d' , '%s', '%s', '%s', '%s', '%s', '%s', '%s','%s','%s','%s','%s' )  ); 
			}else{
				$myUpdateQ = $wpdb->update( 'team_stats', $tsarr, array('match_id'=>$matchStatsId, 'team_name'=>$team_type, 'team_stat_id'=>$w) );
			}
			$w++;				
		}
	}
	
	function playerStats_list(){
		if($_POST['save_player_stats_home'])
		{
			$this->saving_playerStats_list($_GET['playerStatsId'],'home');
		}
		if($_POST['save_player_stats_away'])
		{
			$this->saving_playerStats_list($_GET['playerStatsId'],'away');
		}
		include('views/player_stats_list.php');
	}
	
	function saving_playerStats_list($matchStatsId,$team_type){
		global $wpdb;
		$arr= array('jno','name','total_shots','shots_on_goal','goals','assists','offsides','fouls_drawn','fouls_committed','saves','yellow_cards','red_cards')	;
		$player_info_array = array($team_type.'_jno_p', $team_type.'_name_p', $team_type.'_total_shots_p', $team_type.'_shots_on_goal_p', $team_type.'_goals_p', $team_type.'_assists_p', $team_type.'_offisdes_p', $team_type.'_fouls_drawn_p', $team_type.'_fouls_committed_p', $team_type.'_saves_p', $team_type.'_yellow_cards_p', $team_type.'_red_cards_p');
		if($team_type=='home'){
			$w=1;
		}else{
			$w=20;
		}
		for($i=1;$i<=19;$i++){
			$parr = array('match_id'=>$matchStatsId,'team_name'=>$team_type, 'player_stat_id'=>$w);
			foreach($player_info_array as $fieldkey=>$playerInfo){					
				if($_POST[$playerInfo.$i] == ""){
					$parr[$arr[$fieldkey]] = "-";
				}else{
					$parr[$arr[$fieldkey]] = $_POST[$playerInfo.$i];
				}
			}
			$myResults = $wpdb->get_results( "SELECT `match_id`,`player_stat_id` FROM player_stats where match_id=".$matchStatsId." and player_stat_id=".$w." LIMIT 1");
			if($myResults[0]->player_stat_id == "" || $myResults[0]->match_id == ""){
				$myInsertQ = $wpdb->insert( 'player_stats', $parr, array( '%d', '%s','%d' , '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s','%s' )  ); 
			}else{
				$myUpdateQ = $wpdb->update( 'player_stats', $parr, array('match_id'=>$matchStatsId, 'team_name'=>$team_type, 'player_stat_id'=>$w) );
			}
			$w++;
		}
	}
	
	
	
	function add_comments()
	{
		$comments = $_POST['ccomments'];
		$headline = $_POST['cheadline'];
		$number = $_POST['cnumber'];
		$ctime = $_POST['ctime'];
		$game_global_code = $_POST['global_code'];
		$results = $this->wpdb->get_mtach_name($game_global_code);
				
		if($results->gamecode_global_code)
		{			
			$gamecode_code = $results->gamecode_code;		
			$this->wpdb->save_comments($comments,$headline,$number, $ctime, $game_global_code, $gamecode_code);		
			echo "done";
			die();
		}
		
		
	}	
	
	function add_admin_menu()	
	{
		add_submenu_page('edit.php?post_type=matchcast','Match Cast','Commentaries', 9,'cast',array(&$this, 'all_commentaries'));
		add_submenu_page('edit.php?post_type=matchcast','Match Cast','Match Stats', 9,'matchstats',array(&$this, 'all_match_stats'));
		add_submenu_page('edit.php?post_type=matchcast','Match Cast','Player Stats', 9,'playerstats',array(&$this, 'all_player_stats'));
	}

	/*
		Now Front end
	*/
	
	function display_matchcast()
	{
		if(!isset($_GET['castid']) && (isset($_GET['castid']) == ""))
		{
			$args = array('numberposts'=>1, 'orderby'=>'post_date', 'order'=>'DESC', 'post_type'=>'matchcast');
			$all_posts = get_posts($args);
			$castid = $all_posts[0]->ID ;	
		}
		else
		{
			$castid = $_GET['castid'];
		}
		
		$custom = get_post_custom($castid);
		$code = $custom["match_cast_code"][0];		
		$allcomments = $this->wpdb->get_all_commentaries($code);
		$allchanta = $this->wpdb->match_chants($code);
		$arr_chants = array();
		$arr_chants_exists = array();
		$arr_chant_link = array();
		if($allchanta)
		{
			foreach($allchanta as $chant)
			{
				$args = array(
					'post_type' => 'attachment',
					'numberposts' => 1,
					'post_status' => null,
					'post_parent' => $chant->chant_id,
					'post_mime_type'=> 'audio/mpeg'
				);
				$attachments = get_posts($args);
				
				if($attachments[0]->guid)
				{					
					$arr_chants_exists[] = $chant->id;
					$arr_chants[$chant->id] = $chant->chant_id;
					$arr_chant_link[$chant->id] = $attachments[0]->guid;
				}				
			}						
		}
		
		$quotes = $custom["match_quotes"][0];
		$post = get_post($castid);		
		
		include('views/frontmatch.php');
	}
	
	function load_schedule()
	{			
		$scheduleid = $_POST['scheduleId'];
		$scheduledata = $this->wpdb->get_schedule_data($scheduleid);
		echo json_encode($scheduledata);
		die();
	}
	
	function save_match_details()
	{				
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return $post_id;
		
		global $post;
		
		if($post->post_type == "matchcast")
		{
			$this->wpdb->insert_match($_POST);
			update_post_meta($post->ID, "home_team", $_POST['home_team_global_display_name']);	
			update_post_meta($post->ID, "away_team", $_POST['visiting_team_global_display_name']);					
		}		
	}
	
	function load_matchdetails()
	{
		$matchid = $_POST['matchid'];
		$matchdata = $this->wpdb->get_match($matchid);
		echo json_encode($matchdata);
		die();
	}
	function show_new_comments()
	{
		$matchid = $_POST['matchid'];
		$lastcomid = $_POST['lastcomid'];
		
		$newcomments = $this->wpdb->check_new_comments($lastcomid,$matchid);
		if($newcomments)
		{
			$apdiv = "";;
			//echo json_encode($newcomments);
			$return_arr = array();
			foreach($newcomments as $key=>$comment)
			{
				$apdiv .= "<div class='commentry_wrapper' id='wrapper_".$comment->id." >
						<span class='comm_min'>".$comment->comment_number."</span><span class='comm_text'>".$comment->comment_text."</span>								
							<div class='clear'></div>
							<div class='like-and-comment-wrapper' >						
							<a class='like_commentry like' id='like_".$comment->id." >Like</a>						
							<a class='comment_commentry' id='commentry_".$comment->id." >Comment</a>
							</div>
						</div><div class='clear'></div>"; 
				
						
			}
			//echo json_encode($return_arr);
			echo $apdiv;
		}
		
			
		die();		
		
	}
	function update_comment_number()
	{
		$matchid = $_POST['matchid'];
		$maxcomm = $this->wpdb->new_max_comment($matchid);
		if($maxcomm)
		{
			echo $maxcomm->mnum;
		}
		else
			echo '';
		die();
	}
	
	function show_new_big_comments()
	{
		$matchid = $_POST['matchid'];
		$lastcomid = $_POST['lastcomid'];
		
		$newcomments = $this->wpdb->check_new_comments($lastcomid,$matchid);
		if($newcomments)
		{
			$apdiv = "";;
			//echo json_encode($newcomments);
			$return_arr = array();
			foreach($newcomments as $key=>$comment)
			{
				$apdiv .= "<div class='commentry_wrapper' id='wrapper_big_".$comment->id."'>
						<span class='comm_min_big'>".$comment->comment_number."</span>
						<span class='comm_text_big'>".$comment->comment_text."</span>								
						<div class='like-and-comment-wrapper'>							
							<a class='like_commentry like' id='like_".$comment->id."'>Like</a>							
							<a class='comment_commentry_big' id='commentry_big_".$comment->id."'>Comment</a>							
								<div class='show_comment_div_wrapper' id='show_comment_div_wrapper_".$comment->id."'>									
										<div class='commentary_comment'>											
											".$showComm->comment_text."
										</div>									
								</div>							
							<div class='commentry_comment_div_wrapper' id='commentry_comment_div_wrapper_".$comment->id."'>
								<textarea class='commentry_textarea inputbox-common-class' id='commentry_textarea_".$comment->id."'></textarea>
								<a class='commentry_submit' id='commentry_submit_".$comment->id."'>Submit</a>
							</div>							
						</div>
					</div>
					<div class='clear'></div>"; 
			}
			//echo json_encode($return_arr);
			echo $apdiv;
		}
		
			
		die();	
	}
	
	function save_updated_comment()
	{
		$cid = $_POST['cid'];
		$cnumber = $_POST['cnumber'];
		$ctime = $_POST['ctime'];
		$chline = $_POST['chline'];
		$ctext = $_POST['ctext'];
		$cchant = $_POST['cchant'];
		$comment_update = $this->wpdb->update_comment_edit($cid,$cnumber,$ctime, $chline, $ctext ,$cchant);
		if($comment_update)
		{
			echo "done";
		}
		else
		{
			echo "false";
		}
		
		die();
	}
	
	function delete_comment()
	{
		$cid = $_POST['cid'];
		$ret = $this->wpdb->delete_comment($cid);
		if($ret)
		{
			echo "done";
		}
		else
		{
			echo "false";
		}
		
		die();
	}
	//Include new tinyMCE editor for quotes
	function my_admin_print_footer_scripts()
	{
		?><script type="text/javascript">/* <![CDATA[ */
			jQuery(function($)
			{
				var i=1;
				$('.customEditor textarea').each(function(e)
				{
					var id = $(this).attr('id');
	 
					if (!id)
					{
						id = 'customEditor-' + i++;
						$(this).attr('id',id);
					}
	 
					tinyMCE.execCommand('mceAddControl', false, id);
	 
				});
			});
		/* ]]> */</script><?php
	}
	
	
}

$cast = new MatchCast;
add_action('admin_menu', array(&$cast, 'add_admin_menu'));

wp_enqueue_script("jquery");
#wp_enqueue_script("allfabric", WPM_URL.'fabric.js/dist/all.js');
wp_enqueue_script("comments", WPM_URL.'js/comments.js');
#wp_enqueue_script("newlayout", WPM_URL.'js/newlayout.js');
wp_enqueue_script("jquery-ui-draggable");
wp_enqueue_style('style', WPM_URL.'css/matchcast.css');

add_action('admin_print_footer_scripts',array(&$cast,'my_admin_print_footer_scripts'),99);
