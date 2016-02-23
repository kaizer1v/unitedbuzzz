<?php

/*
Plugin Name: OpenInviter
Version: 1.5.3
Plugin URI: http://openinviter.com
Description: Allow your visitors to invite their contacts from their AddressBook in GMail, Yahoo!, AOL, Live.com and many other networks to your blog.
Author: OpenInviter
Author URI: http://openinviter.com
*/


if (!defined('WP_CONTENT_DIR')) {
	define( 'WP_CONTENT_DIR', ABSPATH.'wp-content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
}
if (!defined('WP_PLUGIN_DIR')) {
	define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');
}
if (!defined('WP_PLUGIN_URL')) {
	define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
}

if (!class_exists('OpenInviter'))
	include("oi_includes/openinviter.php");
$inviter=new OpenInviter();
if (isset($inviter))
	{
	$services=$inviter->getPlugins();
	unset($inviter);
	}
else $services=array();

$openinviter_options['settings']['message_body']=array('label'=>'Message body:','default'=>"Hey!\r\n\r\nI have just found a really nice blog - ".get_option('blogname')." - ".get_option('siteurl')." and I think you would like it!");
$openinviter_options['settings']['message_subject']=array('label'=>'Message subject:','default'=>"%s is inviting you to ".get_option('blogname'));
$openinviter_options['title'] = 'Invite your friends';
$openinviter_options['settings']['username'] = array('label'=>'Username:', 'default'=>'rajkumar44');
$openinviter_options['settings']['private_key'] = array('label'=>'Private key:', 'default'=>'dab4c95429c87853cb338bab736de6fb');
$openinviter_options['settings']['transport'] = array('label'=>'Transport:', 'default'=>'curl');
$openinviter_options['settings']['cookie_path']=array('label'=>'Cookie files path:','default'=>'.');
$openinviter_options['settings']['filter_emails'] = array('label'=>'Filter emails:', 'default'=>true);
$openinviter_options['settings']['local_debug'] = array('label'=>'Local debug:', 'default'=>false);
$openinviter_options['settings']['remote_debug'] = array('label'=>'Remote debug:', 'default'=>true);

function oks($oks)
	{
	if (count($oks)==0)
		return;
	$result="<span style='color:blue;font-weight:bold;'>";
	foreach ($oks as $ok)
		$result.="<br />".$ok;
	$result.="</span>";
	return $result;
	}

function ers($ers)
	{
	if (count($ers)==0)
		return;
	$result="<span style='color:red;font-weight:bold;'>";
	foreach ($ers as $er)
		$result.="<br />".$er;
	$result.="</span>";
	return $result;
	}

function is_base36($string)
	{
	$allowed_chars="0123456789abcdefghijklmnopqrstuvwxyz";
	$length=strlen($string);
	$result=true;
	for ($i=0;$i<$length;$i++)
		if (strpos($allowed_chars,$string[$i])===false)
			$result=false;
	return $result;
	}

function is_md5($string)
	{
	$valid_chars=array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');
	$string=strtolower($string);
	if (strlen($string)!=32)
		return false;
	for($i=0;$i<32;$i++)
		if (!in_array($string{$i},$valid_chars))
			return false;
	return true;
	}

function row2text($row)
	{
	$text='';
	reset($row);
	$flag=0;
	$i=0;
	while(list($var,$val)=each($row))
		{
		if($flag==1)
			$text.=", ";
		elseif($flag==2)
			$text.=",\n";
		$flag=1;
		//Variable
		if(is_numeric($var))
			if($var{0}=='0')
				$text.="'$var'=>";
			else
				{
				if($var!==$i)
					$text.="$var=>";
				$i=$var;
				}
		else
			$text.="'$var'=>";
		$i++;
		//letter
		if(is_array($val))
			{
			$text.="array(".row2text($val).")";
			$flag=2;
			}
		else
			$text.="'$val'";
		}
	return($text);
	}

function openinviter_init()
	{
	add_action('admin_menu', 'openinviter_config_page');
	}
add_action('init','openinviter_init');

function openinviter_config_page()
	{
	if (function_exists('add_submenu_page'))
		add_submenu_page('plugins.php', __('OpenInviter Configuration'), __('OpenInviter Configuration'), 'manage_options', 'openinviter-config', 'openinviter_conf');
	}

function openinviter_conf()
	{
	if ($_SERVER['REQUEST_METHOD']=='POST')
		{
		$options=array();
		$ers=array();
		if (empty($_POST['message_body_box']))
			$ers['message']=__("Message missing");
		elseif (strlen($_POST['message_body_box'])<15)
			$ers['message']=__("Message body too short. Minimum length: 15 chars");
		else $options['message_body']=$_POST['message_body_box'];
		if (empty($_POST['message_subject_box']))
			$ers['message_subject']=__("Message subject missing");
		elseif (strlen($_POST['message_subject_box'])<5)
			$ers['message_subject']=__("Message subject too short. Minimum length: 5 chars");
		else $options['message_subject']=$_POST['message_subject_box'];
		if (empty($_POST['username_box']))
			$ers['username']=__("OpenInviter.com Username missing");
		else $options['username']=$_POST['username_box'];
		if (empty($_POST['private_key_box']))
			$ers['private_key']=__("OpenInviter.com Private Key missing");
		elseif (!is_md5($_POST['private_key_box']))
			$ers['private_key']=__("Invalid OpenInviter.com Private Key");
		else $options['private_key']=$_POST['private_key_box'];
		if (empty($_POST['transport_box']))
			$ers['transport']=__("Transport missing");
		else $options['transport']=$_POST['transport_box'];
		if (empty($_POST['cookie_path_box']))
			$ers['cookie']=__("Cookie path missing");
		else $options['cookie_path']=$_POST['cookie_path_box'];
		if (empty($_POST['local_debug_box']))
			$ers['local_debug']=__("Local debugger setting missing");
		else $options['local_debug']=($_POST['local_debug_box']=='off'?false:$_POST['local_debug_box']);
		if (empty($_POST['remote_debug_box']))
			$ers['remote_debug']=__("Remote debugger setting missing");
		else $options['remote_debug']=($_POST['remote_debug_box']=='on'?true:false);
		if (!isset($_POST['filter_emails_box']))
			$options['filter_emails']=false;
		else
			$options['filter_emails']=true;
		if (count($ers)==0)
			{
			if (!get_option('openinviter_settings'))
				add_option('openinviter_settings',$options);
			else
				update_option('openinviter_settings',$options);
			$path=WP_PLUGIN_DIR."/openinviter-for-wordpress/oi_includes/config.php";
			$file_contents="<?php\n";
			$file_contents.="\$openinviter_settings=array(\n".row2text($options)."\n);\n";
			$file_contents.="?>";
			file_put_contents($path,$file_contents);
			echo "<div id='message' class='updated fade'><p><strong>".__('Options saved.')."</strong></p></div>";
			}
		else
			{
			echo "<div id='message' class='error'><p><strong>".__('Errors encountered:')."</strong>";
			foreach ($ers as $er)
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$er}";
			echo "</p></div>";
			}
		}
	else
		{
		$options=get_option('openinviter_settings');
		global $openinviter_options;
		foreach ($openinviter_options['settings'] as $key=>$val)
			if (!isset($options[$key]))
				$options[$key]=$val['default'];
		}
	$transports=array('curl'=>__('cURL'),'wget'=>__('WGET'));
	$local_debugs=array('off'=>__('None'),'on_error'=>__('Errors only'),'always'=>__('Always'));
	$remote_debugs=array('off'=>__('Off'),'on'=>__('On'));
	$contents="<div class='wrap'><h2>".__('OpenInviter Configuration')."</h2>
			<div class='narrow'><form action='' method='POST' style='margin: auto; width: 600px;'><p>
			".sprintf(__('<strong>Tip</strong>: You can get your API details (username and private key) from <a href="%1$s">OpenInviter.com</a>. If you don\'t have an OpenInviter.com account you can sign up at <a href="%2$s">OpenInviter.com</a>.'), 'http://openinviter.com/get_key.php', 'http://openinviter.com/register.php')
			."</p>
				<table>
				<tr><td valign='top'><strong><label for='message_body_box'>".__("Invite message body")."</label></strong></td><td><textarea rows='5' cols='47' id='message_body_box' name='message_body_box'>{$options['message_body']}</textarea></td></tr>
				<tr><td valign='top'><strong><label for='message_subject_box'>".__("Invite message subject")."</label></strong></td><td><input type='text' id='message_subject_box' name='message_subject_box' value='{$options['message_subject']}' style='font-family: 'Courier New', Courier, mono; font-size: 1.5em;' size='50' /></td></tr>
				<tr><td colspan='2' align='right'>The <strong>%s</strong> in the message subject will be replaced with the sender</td></tr>
				<tr><td colspan='2'>&nbsp;</td></tr>
				<tr><td><strong><label for='username_box'>".__('OpenInviter.com Username')."</label></strong></td><td><input id='username_box' name='username_box' type='text' value='{$options['username']}' style='font-family: 'Courier New', Courier, mono; font-size: 1.5em;' size='50' /></td></tr>
				<tr><td><strong><label for='private_key_box'>".__('OpenInviter.com Private Key')."</label></strong></td><td><input id='private_key_box' name='private_key_box' type='text' value='{$options['private_key']}' style='font-family: 'Courier New', Courier, mono; font-size: 1.5em;' size='50' /></td></tr>
				<tr><td><strong><label for='transport_box'>".__("Transport")."</label></strong></td><td><select id='transport_box' name='transport_box'><option value=''></option>";
	foreach ($transports as $value=>$name)
		$contents.="<option value='{$value}'".($options['transport']==$value?' selected':'').">{$name}</option>";
	$contents.="</select></td></tr>
				<tr><td><strong><label for='cookie_path_box'>".__("Cookie path")."</label></strong></td><td><input type='text' id='cookie_path_box' name='cookie_path_box' value='{$options['cookie_path']}' style='font-family: 'Courier New', Courier, mono; font-size: 1.5em;' size='50' /></td></tr>
				<tr><td><strong><label for='local_debug_box'>".__('Local debugger')."</label></strong></td><td><select id='local_debug_box' name='local_debug_box'><option value=''></option>";
	if ($options['local_debug']===false) $options['local_debug']='off';
	if ($options['remote_debug']===false) $options['remote_debug']='off';
	else $options['remote_debug']='on';
	foreach($local_debugs as $value=>$name)
		$contents.="<option value='{$value}'".($options['local_debug']==$value?' selected':'').">{$name}</option>";
	$contents.="</select></td></tr>
				<tr><td><strong><label for='remote_debug_box'>".__('Remote debugger')."</label></strong></td><td><select id='remote_debug_box' name='remote_debug_box'><option value=''></option>";
	foreach ($remote_debugs as $value=>$name)
		$contents.="<option value='{$value}'".($options['remote_debug']==$value?' selected':'').">{$name}</option>";
	$contents.="</select></td></tr>
				<tr><td><strong><label for='filter_emails_box'>".__('Filter emails')."</label></strong></td><td><input id='filter_emails_box' name='filter_emails_box' type='checkbox' value='Y'".($options['filter_emails']?' checked':'')."></td></tr>
				<tr><td colspan='2' align='center'><p class='submit'><input type='submit' id='submit' name='save' value='".__("Save options")."' /></p></td></tr>
				</table>
			</form>
			</div>
		</div>";
	echo $contents;
	}

function widget_openinviter_init() {
	if (!function_exists('register_sidebar_widget'))
		return;

	function widget_openinviter($args)
		{
		global $openinviter_options,$oi_services;
		$inviter=new OpenInviter();
		if ((empty($inviter->settings['username'])) OR (empty($inviter->settings['private_key'])))
			return;
		extract($args);
		$title=get_option('openinviter_title');
		if (!$title)
			$title=$openinviter_options['title'];
		$contents=$before_widget . $before_title . $title . $after_title . "<center>";
		$_POST['email_box']='';
		$_POST['password_box']='';
		$_POST['provider_box']='';
		$_POST['oi_session_id']='';
		$contents.="<form action='' method='POST' name='openinviter'>".ers($ers).oks($oks);
			$contents.="<table align='center' cellspacing='2' cellpadding='0' style='border:none;'>
				<tr><td align='right'><label for='email_box'>Email</label></td><td><input class='thTextbox' type='text' name='email_box' value='{$_POST['email_box']}'></td></tr>
				<tr><td align='right'><label for='password_box'>Password</label></td><td><input class='thTextbox' type='password' name='password_box' value='{$_POST['password_box']}'></td></tr>
				<tr><td align='right'><label for='provider_box'>Service Provider</label></td><td><select class='thSelect' name='provider_box'><option value=''></option>";
			foreach ($oi_services as $type=>$providers)	
				{
				$contents.="<option disabled>".$inviter->pluginTypes[$type]."</option>";
				foreach ($providers as $provider=>$details)
					$contents.="<option value='{$provider}'".($_POST['provider_box']==$provider?' selected':'').">{$details['name']}</option>";
				}
			$contents.="</select></td></tr>
				<tr><td colspan='2' align='center'><input type='submit' name='import' value='Import Contacts'></td></tr>
			</table><input type='hidden' name='step' value='get_contacts'>";
			$contents.="<center><a href='http://openinviter.com/'><img src='http://openinviter.com/images/banners/banner_blue_1.gif' border='0' alt='Powered by OpenInviter.com' title='Powered by OpenInviter.com'></a></center>";
		echo $contents;
		}

	function widget_openinviter_control()
		{
		global $openinviter_options;
		if (isset($_POST['inviter-submit']))
			if (!empty($_POST['title_box']))
				if (!get_option('openinviter_title'))
					add_option('openinviter_title', $_POST['title_box']);
				else
					update_option('openinviter_title', $_POST['title_box']);
		$title = get_option('openinviter_title');
		if (!$title)
			$title=$openinviter_options['title'];
		echo "<p style='text-align:right;' class='openinviter_field'><label for='title_box'>Title <input id='title_box' name='title_box' type='text' value='{$title}' class='openinviter_text' /></label></p>";
		echo '<input type="hidden" id="inviter-submit" name="inviter-submit" value="1" />';
		}
	
	function widget_openinviter_register()
		{		
		$options = get_option('widget_inviter');
		$dims = array('width' => 300, 'height' => 300);
		$class = array('classname' => 'widget_openinviter');

		wp_register_sidebar_widget('openinviter', __("OpenInviter"),'widget_openinviter', $class);
		wp_register_widget_control('openinviter', __("OpenInviter"),'widget_openinviter_control', $dims);
		
		}
	widget_openinviter_register();
	}

function openinviter_validation()
	{
	global $oi_services,$validation_displayed;
	//if ($validation_displayed) return;
	$validation_displayed=true;
	$inviter=new OpenInviter();
	if ((empty($inviter->settings['username'])) OR (empty($inviter->settings['private_key'])))
		return;
	if (!empty($_POST['step'])) $step=$_POST['step'];
	else $step='get_contacts';
	$ers=array();$oks=array();$import_ok=false;$done=false;
	if ($_SERVER['REQUEST_METHOD']=='POST')
		{
		if ($step=='get_contacts')
			{
			if (empty($_POST['email_box']))
				$ers['email']="Email missing !";
			if (empty($_POST['password_box']))
				$ers['password']="Password missing !";
			if (empty($_POST['provider_box']))
				$ers['provider']="Provider missing !";
			if (count($ers)==0)
				{
				if (isset($oi_services['email'][$_POST['provider_box']])) $plugType='email';
				elseif (isset($oi_services['social'][$_POST['provider_box']])) $plugType='social';
				else $plugType='';

				$inviter->startPlugin($_POST['provider_box']);
				$internal=$inviter->getInternalError();
				if ($internal)
					$ers['inviter']=$internal;
				elseif (!$inviter->login($_POST['email_box'],$_POST['password_box']))
					{
					$internal=$inviter->getInternalError();
					$ers['login']=($internal?$internal:"Login failed. Please check the email and password you have provided and try again later !");
					}
				elseif (false===$contacts=$inviter->getMyContacts())
					$ers['contacts']="Unable to get contacts !";
				else
					{
					$import_ok=true;
					$step='send_invites';
					$_POST['oi_session_id']=$inviter->plugin->getSessionID();
					$_POST['message_box']='';
					}
				}
			}
		elseif ($step=='send_invites')
			{
			if (empty($_POST['provider_box'])) $ers['provider']='Provider missing !';
			else
				{
				$inviter->startPlugin($_POST['provider_box']);
				$internal=$inviter->getInternalError();
				if ($internal) $ers['internal']=$internal;
				else
					{
					if (empty($_POST['email_box'])) $ers['inviter']='Inviter information missing !';
					if (empty($_POST['oi_session_id'])) $ers['session_id']='No active session !';
					if (empty($_POST['message_box'])) $ers['message_body']='Message missing !';
					else $_POST['message_box']=strip_tags($_POST['message_box']);
					$selected_contacts=array();$contacts=array();
					$message=array('subject'=>$inviter->settings['message_subject'],'body'=>$inviter->settings['message_body'],'attachment'=>"\n\rAttached message: \n\r".$_POST['message_box']);
					if ($inviter->showContacts())
						{
						foreach ($_POST as $key=>$val)
							if (strpos($key,'check_')!==false)
								$selected_contacts[$_POST['email_'.$val]]=$_POST['name_'.$val];
							elseif (strpos($key,'email_')!==false)
								{
								$temp=explode('_',$key);$counter=$temp[1];
								if (is_numeric($temp[1])) $contacts[$val]=$_POST['name_'.$temp[1]];
								}
						if (count($selected_contacts)==0) $ers['contacts']="You haven't selected any contacts to invite !";
						}
					}
				}
			if (count($ers)==0)
				{
				$sendMessage=$inviter->sendMessage($_POST['oi_session_id'],$message,$selected_contacts);
				$inviter->logout();
				if ($sendMessage===-1)
					{
					if (!function_exists("wp-mail")) require_once(ABSPATH.'wp-includes/pluggable.php');
					$message_footer="\r\n\r\nThis invite was sent using OpenInviter technology.";
					$message_subject=$_POST['email_box'].$message['subject'];
					$message_body=$message['body'].$message['attachment'].$message_footer; 
					$headers="From: {$_POST['email_box']}";
					foreach ($selected_contacts as $email=>$name)
						wp_mail($email,$message_subject,$message_body,$headers);
					$oks['mails']="Mails sent successfully";
					}
				elseif ($sendMessage===false)
					{
					$internal=$inviter->getInternalError();
					$ers['internal']=($internal?$internal:"There were errors while sending your invites.<br>Please try again later!");
					}
				else $oks['internal']="Invites sent successfully!";
				$done=true;
				}
			}
		}
	else
		{
		$_POST['email_box']='';
		$_POST['password_box']='';
		$_POST['provider_box']='';
		}
	$contents="<script type='text/javascript'>
		function toggleAll(element) 
		{
		var form = document.forms.openinviter, z = 0;
		for(z=0; z<form.length;z++)
			{
			if(form[z].type == 'checkbox')
				form[z].checked = element.checked;
			}
		}
	</script>";
	$title=get_option('openinviter_title');
		if (empty($title))
			{
			global $openinviter_options;
			$title=$openinviter_options['title'];
			}
	if (!$done)
		{
		$contents.="<div><form action='' method='POST' name='openinviter'>".ers($ers).oks($oks);
		if ($step=='send_invites')
			{
			$contents.="<br/>
			<input type='checkbox' id='selectAll' checked title='Select All'>Select All
			<table cellspacing='0' cellpadding='0' style='border:none;'>
				<tr><td align='center' colspan='".($plugType=='email'? "3":"2")."'><h2 style='margin-top:5px;'>{$title}</h2></td></tr>		
				<tr><td align='right' valign='top'><label for='message_box'><b>Message : </b></label></td><td><textarea rows='5' cols='50' name='message_box' class='thTextArea' style='width:300px;'>{$_POST['message_box']}</textarea></td></tr>
				<tr><td align='center' colspan='2'><input type='submit' name='send' value='Send Invites' ></td></tr>
			</table>";
			}
		}
	if (!$done)
		{
		if ($step=='send_invites')
			{
			if ($inviter->showContacts())
				{
				$contents.="<table align='center' cellspacing='0' cellpadding='0'><tr><td align='center' style='padding-top:10px' colspan='".($plugType=='email'? "3":"2")."'><b>Your contacts<b></td></tr>";
				if (count($contacts)==0)
					$contents.="<tr><td align='center' style='padding:20px;' colspan='".($plugType=='email'? "3":"2")."'>You do not have any contacts in your address book.</td></tr>";
				else
					{
					$contents.="<tr><td><input type='checkbox' onChange='toggleAll(this)' name='toggle_all' title='Select/Deselect all' checked>Invite?</td><td>Name</td>".($plugType == 'email' ?"<td>E-mail</td>":"")."</tr>";
					$counter=0;
					foreach ($contacts as $email=>$name)
						{
						$counter++;
						$contents.="<tr><td><input name='check_{$counter}' value='{$counter}' type='checkbox' class='thCheckbox' checked><input type='hidden' name='email_{$counter}' value='{$email}'><input type='hidden' name='name_{$counter}' value='{$name}'></td><td>{$name}</td>".($plugType == 'email' ?"<td>{$email}</td>":"")."</tr>";
						$odd=!$odd;
						}
					$contents.="<tr><td colspan='".($plugType=='email'? "3":"2")."' style='padding:3px;' align='center'><input type='submit' name='send' value='Send invites'></td></tr>";
					}
				$contents.="</table>";
				}
			$contents.="<input type='hidden' name='step' value='send_invites'>
				<input type='hidden' name='provider_box' value='{$_POST['provider_box']}'>
				<input type='hidden' name='email_box' value='{$_POST['email_box']}'>
				<input type='hidden' name='oi_session_id' value='{$_POST['oi_session_id']}'>";
			}
		}
		$contents.="</form>".((!$done)?'</div>':ers($ers).oks($oks));
		echo $contents
	}
$validation_displayed=false;
add_action('widgets_init', 'widget_openinviter_init');
add_filter('loop_start', 'openinviter_validation');
?>
