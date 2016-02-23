<?php
/*
Plugin Name: BuddyPress Events
Plugin URI: http://wpoets.com/
Description: Allows users to create, join and participate in events. 
Author: Aman Kumar Jain
Author URI: http://amanjain.com
Version: 0.1
License: (Events: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html)
*/

define('BPE_Ver', 1);
class BPEvents{
  function init(){
    add_action('bp_setup_nav', array(&$this, 'show_menu'));
    //add_filter('bp_blogs_record_comment_post_types', array($this, 'record_pt'));
    $this->update();

  }

  function get_responses_list($post_id){
    global $wpdb;
    $sql= "select response, u_id from `".($wpdb->prefix."events")."` where post_id=".($post_id)." order by response, `timestamp` desc;";
    $all=$wpdb->get_results($sql);
    $response='';
    $list='';      
    foreach($all as $res){
      if($res->response!=$response){
	$response=$res->response;
	$list .= "</ul></li><li style='overflow:auto'>".(($res->response=='a')?'Attending':(($res->response=='na')?'Not Attending':'Not Sure'))."<ul style='list-style:none'>";
      }
      $list .= '<li  style="float:left">'.(get_avatar($res->u_id)).'</li>';
    }
    if($list!=''){
      $list="<ul>".substr($list, 10)."</ul></li></ul>";
    }
    return $list;
  }

  function get_friends($u_id){
    $members_query='user_id='.$u_id;
    $friends=array();
    if(bp_has_members($members_query)){
      while(bp_members()){
	bp_the_member();
	//$koi_bhi=new BP_Core_User(bp_get_member_user_id());
	//echo $koi_bhi->avatar;
	//echo bp_core_fetch_avatar('item_id='.bp_get_member_user_id().'&html=false');
	$friends[]=array('name'=>bp_get_member_name(), 'id'=>bp_get_member_user_id(), 'image'=>bp_core_fetch_avatar('type=thumb&&item_id='.bp_get_member_user_id().'&html=false') );
      }
    }
    return $friends;
  }

  function ui($c){
    global $post;
    if($post->post_type == 'events'){


      global $wpdb;
      if(is_user_logged_in()){
	global $current_user;
	get_currentuserinfo();
	bp_core_delete_notifications_for_user_by_item_id($current_user->ID, $post->ID, 'event', 'invited');
	$sql= "select response from `".($wpdb->prefix."events")."` where post_id=".($post->ID)." and u_id=".($current_user->ID)." limit 1";
	$im=$wpdb->get_var($sql);
      }else{
	$im='';
      }


      $list=$this->get_responses_list($post->ID);
      $c .= '
	<div style="text-align:right">
	<input type="button" value="Attending" class="e-action attend '.(($im=='a')?'e-action-selected':'').'" data-action="a" data-pid="'.($post->ID).'"/>
	<input type="button" value="Not Attending" class="e-action not-attend '.(($im=='na')?'e-action-selected':'').'" data-action="na" data-pid="'.($post->ID).'"/>
	<input type="button" value="Not Sure" class="e-action not-sure '.(($im=='ns')?'e-action-selected':'').'" data-action="ns" data-pid="'.($post->ID).'"/>'.
        (/*is_user_logged_in()*/true?'&middot; <input type="button" id="e-action-invite" data-pid="'.($post->ID).'" value="Invite Friends"/>':'')
	.'</div>
        <div id="attendance">'.$list.'</div>
        <div class="e-el-overlay" style="display:none;"></div>
        <div id="e-el-box"></div>

        <script>
           var friends_selected=[]
	   jQuery(".e-action").click(function(){
	       jQuery(".e-action").removeClass("e-action-selected");
	       jQuery(this).addClass("e-action-selected");
	       jQuery.ajax({"url":ajaxurl, type:"post", data:{action:"e-action", "selection":jQuery(this).attr("data-action"), "pid":jQuery(this).attr("data-pid")}, dataType:"json", success:function(data){if(data.success){jQuery("#attendance").html(data.list)}else{alert(data.reason)}  } });
	   })
           jQuery("#e-el-box img").live("click", function(){ jQuery(this).toggleClass("selected"); if(jQuery(this).hasClass("selected")){friends_selected.push(jQuery(this).attr("data-uid"))}else{var removeItem = jQuery(this).attr("data-uid");  friends_selected=jQuery.grep(friends_selected, function(value) {return value != removeItem;});  } } )
           jQuery("#e-action-invite").click(function(){
               jQuery.ajax({url:ajaxurl, data:{action:"friends"}, type:"post", dataType:"json", success:function(data){
                   if(data.success){
                     jQuery("#e-el-box").html("")
                     //if(data.friends.length >= 1){
                       for(f in data.friends){
                         //alert(jQuery.inArray(data.friends[f].id, friends_selected))
                         jQuery("#e-el-box").append("<img class=\'"+((jQuery.inArray(data.friends[f].id, friends_selected)!=-1)?"selected":"")+"\' data-uid=\'"+(data.friends[f].id)+"\' src=\'"+(data.friends[f].image)+"\'/>") 
                       }
                       jQuery("#e-el-box").append("<div style=\'clear:both; padding-top:5px;\'><form class=\'e-message-form standard-form\'><label>Emails:<br/><input id=\'e-email-box\' type=\'text\'/></label><!-- <label>Message:<br/><textarea></textarea></label> --> </form></div>")
                       jQuery("#e-el-box").append("<div style=\'clear:both; padding-top:5px;\'><div style=\' text-align:right; padding-top:5px; border-top:1px solid #ccc\'><input type=\'button\' value=\'Invite\' data-pid=\'"+(jQuery("#e-action-invite").attr("data-pid"))+"\' id=\'e-el-send-invite\'/></div></div>")
                     //}else{
                     //  jQuery("#e-el-box").append("C\'mon make some friends first.")
                     //}
                     jQuery(".e-el-overlay").css({opacity:0.5}).fadeIn("fast", function(){jQuery("#e-el-box").animate({"top":"0px"},500);})

                   }else{
                     alert(data.reason)
                   }
 
               }})
           })
           jQuery("#e-el-send-invite").live("click", function(){if(jQuery("#e-el-box img.selected").length==0 && jQuery("#e-email-box").val().length==0){alert(\'Please select some to be invited.\')}else{
             var invited=[]
             jQuery("#e-el-box img.selected").each(function(){invited.push(jQuery(this).attr(\'data-uid\'))})
             jQuery.ajax({url:ajaxurl, data:{action:"invite", uids:invited, emails:jQuery("#e-email-box").val(), pid:(jQuery("#e-action-invite").attr("data-pid"))}, type:"post", dataType:"json", success:function(data){ jQuery(".e-el-overlay").click()  }})
           }})
           jQuery(".e-el-overlay").click(function(){ 
             jQuery("#e-el-box").animate({"top":"-2500px"},500,function(){jQuery(".e-el-overlay").fadeOut()})
           });
	</script>
	<style>
           .e-message-form.standard-form input{width:97%}
           .e-message-form.standard-form textarea{width:97%}
           .e-el-overlay{background:black repeat top left; position:fixed; top:0px; bottom:0px; left:0px; right:0px; z-index:1001;}
           #e-el-box{position:fixed; top:-2500px; left:30%; right:30%; background-color:#fff; color:#7F7F7F; padding:20px; border:2px solid #ccc; -moz-border-radius: 20px; -webkit-border-radius:20px; -khtml-border-radius:20px; -moz-box-shadow: 0 1px 5px #333; -webkit-box-shadow: 0 1px 5px #333; z-index:1005;  border-top:0px; border-top-right-radius:0px; -moz-border-radius-topright:0px; -webkit-border-top-right-radius:0px; -khtml-border-top-right-radius:0px; border-top-left-radius:0px; -moz-border-radius-topleft:0px; -webkit-border-top-left-radius:0px; -khtml-border-top-left-radius:0px;}
	   .e-action.attend.e-action-selected{ border-color:green ! important; }
           .e-action.not-attend.e-action-selected{ border:1px solid green ! important; }
           .e-action.not-sure.e-action-selected{ border-color:#1FB3DD ! important; }
           #e-el-box img{width:50px; height:50px; float:left; border:2px solid white; cursor:pointer;}
           #e-el-box img.selected{border:2px solid #888;}
           #e-el-box{overflow:auto}
	</style>';
    }
    return $c;
  }
  function set_globals(){
    global $bp;
    $bp->event->id = 'events';
    $bp->event->notification_callback = 'e_format_notifications';
  }
  function ajax_invite(){
    $data=array();
    if(is_user_logged_in()){
      $data['success']=true;
      if(is_array($_POST['uids'])){
	foreach($_POST['uids'] as $uid){
	  bp_core_add_notification($_POST['pid'], $uid, 'event', 'invited');
	}
      }
      if(isset($_POST['emails']) && trim($_POST['emails'])!=''){
	$emails=explode(",", $_POST['emails']);
	$link=get_permalink($_POST['pid']);
	foreach($emails as $e){
	  $e=trim($e);
	  if(filter_var($e, FILTER_VALIDATE_EMAIL)){
	    wp_mail($e, 'Invitation to an event.', "Hi, <br/> You have been invited to an event. Click this <a href='{$link}'>link</a> to follow. <br/><br/>Regards,<br/>Team UB" );
	  }
	}
      }
    }else{
      $data=array('success'=>false, 'reason'=>array('Please login.'));
    }
    echo json_encode($data);
    
  }
  function ajax_friends(){
    $data=array();
    if(is_user_logged_in()){
      global $wpdb;
      global $current_user;
      get_currentuserinfo();
      $data['friends']=$this->get_friends($current_user->ID);
      $data['success']=true;
    }else{
      $data=array('success'=>false, 'reason'=>array('Please login.'));
    }
    echo json_encode($data);
  }
  /*
  function record_pt($pt){
    $pt[]='events';
    return $pt;
    }*/

  function events_title(){
    echo 'Events';
  }

  function events_contents(){
    include(dirname(__FILE__)."/".'templates/create.php');
  }

  function page(){
    wp_enqueue_script('jquery-ui',  'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js', array('jquery'));
    wp_enqueue_style('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css');
    //add_action( 'bp_template_title', array(&$this, 'events_title'));
    add_action( 'bp_template_content', array(&$this, 'events_contents'));
    bp_core_load_template(apply_filters('bp_core_template_plugin', 'members/single/plugins'));
  }

  function show_menu(){
    bp_core_new_nav_item(array('name'=>__('Events', 'events'), 'slug'=>'events',  'screen_function'=>array(&$this, 'page')));
  }

  function events_post_type_link($post_link, $post, $leavename, $sample)
  {
    if('events'==$post->post_type){
      $authordata=get_userdata($post->post_author);
      $author=$authordata->user_nicename;
      $post_link=str_replace('%author%', $author, $post_link);
    }
    return $post_link;
  }

  function create_post_type(){
    register_post_type('events', array('public'=>true, 'rewrite'=>array("slug"=>"event/%author%"), 'has_archive'=>true, 'labels'=>array('name'=>'Events'), 'supports'=>array('title',  'revisions',  'custom-fields', 'editor'), 'taxonomies'=>array()));
    
  }

  function update(){
    $installed_ver=get_option("BPE_Ver");
    if($installed_ver!=BPE_Ver){
      global $wpdb;
      $create_table="CREATE TABLE `".($wpdb->prefix."events")."` (`post_id` INT(11) NOT NULL, `u_id` INT(11) NOT NULL, `response` VARCHAR(2) NOT NULL, `timestamp` TIMESTAMP DEFAULT NOW(), PRIMARY  KEY (`post_id`, `u_id`) );";
      require_once(ABSPATH.'wp-admin/includes/upgrade.php');
      dbDelta($create_table);
      update_option("BPE_Ver", BPE_Ver);
    }
  }

  function ajax(){
    $data=array();
    if(is_user_logged_in()){
      $fields=array('when', 'what', 'where', 'more', 'time');
      $error=array();
      
      foreach($fields as $f){
	if(!isset($_POST[$f]) || trim($_POST[$f])==''){
	  $error[]='"'.$f.'" field cannot be blank.';
	}else{
	  if($f=='when'){
	    $d=trim($_POST[$f]);
	    $d=explode("/", $d);
	    if(!checkdate($d[0], $d[1], $d[2])){
	      $error[]='Please enter a valid date.';
	    }
	  }
	}
      }
      
      if(sizeOf($error)==0){
	
	global $current_user;
	get_currentuserinfo();
	
	$eve = array(
		     'post_title' => $_POST['what'],
		     'post_content' => $_POST['more'],
		     'post_status' => 'publish',
		     'post_author' => $current_user->ID,
		     'post_type' => 'events'
		     );
	if($_POST['editCheck']=='y'){
		$eve['ID'] = $_POST['editID'];
		$pid=wp_update_post( $eve );	
		update_post_meta($_POST['editID'], 'When', $_POST['when']); 
		update_post_meta($_POST['editID'], 'Time', $_POST['time']);
		update_post_meta($_POST['editID'], 'Where', $_POST['where']);
	}else{
		$pid=wp_insert_post( $eve );	
		add_post_meta($pid, 'When', $_POST['when'], true); 
		add_post_meta($pid, 'Time', $_POST['time'], true);
		add_post_meta($pid, 'Where', $_POST['where'], true);
	}
	$postLink = get_permalink($pid);
	$data=array('success'=>true,'pLink'=>$postLink);
      }else{
	$data=array('success'=>false, 'reason'=>$error);
      }
    
    }else{
      $data=array('success'=>false, 'reason'=>array('Please login.'));
    }
    echo json_encode($data);
  }

  function e_action(){
    $data=array();
    if(is_user_logged_in()){
      global $wpdb;
      global $current_user;
      get_currentuserinfo();
      $sql= "replace into `".($wpdb->prefix."events")."` (`post_id`, `u_id`, `response`) values ('".$_POST['pid']."', '".($current_user->ID)."', '".$_POST['selection']."')";
      $wpdb->query($sql);
      $data['list']=$this->get_responses_list($_POST['pid']);
      $data['success']=true;
    }else{
      $data=array('success'=>false, 'reason'=>array('Please login.'));
    }
    echo json_encode($data);
  }
}
$bpevents=new BPEvents();
add_action('init', array($bpevents, 'create_post_type'));
add_action('bp_include', array(&$bpevents, 'init'));
add_action('wp_ajax_add-event', array(&$bpevents, 'ajax'));
add_filter('post_type_link', array(&$bpevents, 'events_post_type_link'), 10, 4 );
add_filter('the_content', array(&$bpevents, 'ui'));
add_action('wp_ajax_e-action', array(&$bpevents, 'e_action'));
add_action('wp_ajax_friends', array(&$bpevents, 'ajax_friends'));
add_action('wp_ajax_invite', array(&$bpevents, 'ajax_invite'));
add_action('bp_setup_globals', array(&$bpevents, 'set_globals'));


if(!function_exists('e_format_notifications')){
  function e_format_notifications($data, $bata, $abc, $def){
    return "<a href='".get_permalink($bata)."' title='Event'>You have 1 event invitation.</a>";
  }
}
