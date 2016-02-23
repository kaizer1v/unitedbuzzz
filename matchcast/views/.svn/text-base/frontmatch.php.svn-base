<script type="text/javascript">
	var gmatchid = <?php echo get_post_meta($castid, 'match_cast_code',true); ?>;
</script>
<div id="main_container">	
<?php
	if(!isset($code) and $code == "")
	{
		echo "No matchcast found";
	}
	else{
	
?>

<div id="tab_container" class="player-staff-tabs">
	<ul>
		<li class="tabs"><a tabindex="1" class="tab_container_selected">MatchCast</a></li>
		<li  class="tabs"><a tabindex="1">Report</a></li>
		<li class="tabs"><a  tabindex="2">Match Preview</a></li>
		<li class="tabs" ><a tabindex="3">Commentary</a></li>
		<li class="tabs"><a  tabindex="4">Match Stats</a></li>			
		<li class="tabs"><a  tabindex="5">Player Stats</a></li>			
	</ul>
</div>	
<div class="clear"></div>
<?php 	global $wpdb;
//$myMatchID = $wpdb->get_results( "SELECT `meta_value` FROM wp_postmeta where post_id=".$castid); 
$myMatchID = get_post_meta($castid, 'match_cast_code',true);
$homeTeam = get_post_meta($castid, 'home_team',true);
$awayTeam = get_post_meta($castid, 'away_team',true);
?>

<div>
	<div class="innerdiv" id="tabconent_0" >
		<div class="matchcast_left">		
			<div id="manutd_mc_wrapper">
				<?php 
					$manutd_mc = get_post_meta($castid, 'mc_manutd');
					echo $manutd_mc[0];
				?>
			</div>
			<div id="otherteam_mc_wrapper">
				<?php 
					$otherteam_mc = get_post_meta($castid, 'mc_otherteam');
					echo (isset($otherteam_mc[0])?$otherteam_mc[0]:'');
				?>
			</div>
			<div id="display_mc">
				<a id="display_mc_utd" >manutd</a>
				<a id="display_mc_otherteam" >other team</a>
			</div>
		</div>	
		<div class="matchcast_right">		
			<div class="comment_window">
				
					<?php
						if(!empty($allcomments))
						{
							//print_r($allcomments);

							global $bp;
							$currentUserId = $bp->loggedin_user->id;
	
							global $wpdb;
							$myLikes = $wpdb->get_results( "SELECT `commentary_id` FROM comment_like where `like`='y' and userid=".$currentUserId);
							$myLikeArray= array();
							foreach($myLikes as $ml){
								array_push($myLikeArray, $ml->commentary_id);
							}
							$myComments = $wpdb->get_results( "SELECT `commentary_id` FROM comments");
							$myCommentArray= array();
							foreach($myComments as $mC){
								array_push($myCommentArray, $mC->commentary_id);
							}
							foreach($allcomments as $comment)
							{								
								?>
									<div class="commentry_wrapper" id="wrapper_<?php echo $comment->id ?>">
										<span class="comm_min"><?php echo $comment->comment_number ?></span>
										<span class="comm_text"><?php echo $comment->comment_text ?></span>								
										<div class="clear"></div>
										<div class="like-and-comment-wrapper" >
											<?php if(in_array($comment->id, $myLikeArray )) { ?>
												<a class="like_commentry unlike" id="like_<?php echo $comment->id?>">UnLike</a>
											<?php }else{ ?>
												<a class="like_commentry like" id="like_<?php echo $comment->id?>">Like</a>
											<?php } ?>
											<a class="comment_commentry" id="commentry_<?php echo $comment->id?>">Comment</a>
											<?php
												if(in_array($comment->id,$arr_chants_exists))								
												{
													insert_audio_player("[audio:".$arr_chant_link[$comment->id]."]");	
												}
												
												if(in_array($comment->id,$myCommentArray))								
												{ ?>
													<a class="show_commentry_comments_small" id="show_commentry_small_<?php echo $comment->id?>">Show Comments</a>
										<?php	}
											?>
											
											
										</div>
									</div>
									<div class="clear"></div>									
								<?php						
								$arrlast[] = $comment->id;
							}
							$lastcomid = max($arrlast);
							?>
							<input type="hidden" name="lastcomid" id="lastcomid" value="<?php echo $lastcomid ?>">
							<?php
						}
						else
						{
							?>
							<div style="height:200px;">Commentaries coming soon</div>
							<?php
						}
						
					?>					
				
			</div>			
		</div>
		<div class="clear"></div>
	</div>
	<div class="innerdiv" id="tabconent_1" >
		<?php
		echo $post->post_content;
		?>
	</div>
	<div class="innerdiv" id="tabconent_2" >
	<?php
		echo $quotes;
	?>
	</div>
	<div class="innerdiv" id="tabconent_3">
	<?php
		if(!empty($allcomments))
		{
			$myComments = $wpdb->get_results( "SELECT `commentary_id` FROM comments where `comment_text`!=''");
			$myCommentArray= array();
			foreach($myComments as $myComment){
				array_push($myCommentArray, $myComment->commentary_id);
			}
			foreach($allcomments as $comment)
			{
				?>
					<div class="commentry_wrapper" id="wrapper_big_<?php echo $comment->id?>">
						<span class="comm_min_big"><?php echo $comment->comment_number ?></span>
						<span class="comm_text_big"><?php echo $comment->comment_text ?></span>								
						<div class="like-and-comment-wrapper">
							<?php if(in_array($comment->id, $myLikeArray )) { ?>
								<a class="like_commentry unlike" id="like_<?php echo $comment->id?>">UnLike</a>
							<?php }else{ ?>
								<a class="like_commentry like" id="like_<?php echo $comment->id?>">Like</a>
							<?php } ?>
							<a class="comment_commentry_big" id="commentry_big_<?php echo $comment->id?>">Comment</a>
							<?php if(in_array($comment->id, $myCommentArray )){ ?>
								<a class="show_commentry_comments" id="show_commentry_<?php echo $comment->id?>">Show Comments</a>
								<div class="show_comment_div_wrapper" id="show_comment_div_wrapper_<?php echo $comment->id ?>">
									<?php	
										$showComments = $wpdb->get_results( "SELECT `comment_text`,`userid` FROM comments where commentary_id=".$comment->id." ORDER BY `id` ASC ");
										foreach($showComments as $showComm){ ?>
											<div class='commentary_comment'>
												<?php $author = new BP_Core_User( $showComm->userid );  ?>
												<a href="<?php echo $author->user_url; ?>"><?php echo $author->avatar_mini;?></a>
												<div class='comment_text'>
													<span><?php echo $showComm->comment_text ?></span>
													<?php if($showComm->userid == bp_loggedin_user_id()) {?>
														<div class="delete_commentary_comment" id='delete_commentary_comment_<?php echo $comment->id?>'></div>
													<?php }?>
												</div>
												
												<div class="clear">&nbsp;</div>
											</div>
											<div class='clear'>&nbsp;</div>
									<?php }
									?>
								</div>
							<?php }?>
							<?php
								if(in_array($comment->id,$arr_chants_exists))								
								{
									insert_audio_player("[audio:".$arr_chant_link[$comment->id]."]");	
								}
							?>
							
							<div class="commentry_comment_div_wrapper" id="commentry_comment_div_wrapper_<?php echo $comment->id?>">
								<textarea class="commentry_textarea inputbox-common-class" id="commentry_textarea_<?php echo $comment->id?>"></textarea>
								<a class="commentry_submit" id="commentry_submit_<?php echo $comment->id?>">Submit</a>
							</div>
							
						</div>
					</div>
					<div class="clear"></div>
				<?php	
			}
		}
		else
		{
			?>
			<div style="height:200px;">Commentaries coming soon</div>
			<?php
		}

	?>	
	</div>
	
	<div class="innerdiv" id="tabconent_4">
		<!--ScoringSummary -->
		<?php
	$results =  $wpdb->get_results("SELECT * FROM match_stats where match_id=".$myMatchID."");
	if($wpdb->num_rows != 0)
	{?>
		<!--ScoringSummary -->
		<table  style="width: 100%" class="widefat PSHome">
			<tr>
				<th colspan="3" class="player_stats_table_heading">Match Stats</th>
			</tr>		
			<tr>
				<th><?php echo $homeTeam;?></th>
				<th></th>
				<th><?php echo $awayTeam;?></th>
			</tr>		
			<br />
			<br />
			<?php 
			$matchstatarray = array('Shots (on Goal)', 'Fouls','Corner Kicks', 'Offsides', 'Time of Possession' , 'Yellow Cards','Red Cards', 'Saves');
			$matchstatarrayClass =array('shots_on_goal', 'fouls','corner_kicks', 'offsides', 'time_of_possession' , 'yellow_cards','red_cards', 'saves');
			$arr=array('team_shots', 'team_fouls', 'team_corner_kicks', 'team_offsides', 'team_possession', 'team_yellow_cards', 'team_red_cards', 'team_saves');
			$myResults = $wpdb->get_results( "SELECT * FROM match_stats where match_id=".$myMatchID." and team_name='home'");
			$myResultsOther = $wpdb->get_results( "SELECT * FROM match_stats where match_id=".$myMatchID." and team_name='away'");
			
			for($k=0;$k<8;$k++){ ?>
			<tr>
				<td class="match_stat_data_width"><?php echo $myResults[0]->$arr[$k] ?></td>
				<td><?php echo $matchstatarray[$k] ;?></td>
				<td class="match_stat_data_width"><?php echo $myResultsOther[0]->$arr[$k] ?></td>
			</tr>
			
		<?php }
			?>			
		</table>
		<br />
		<br />
		
<?php 	}
	$results =  $wpdb->get_results("SELECT * FROM team_stats where match_id=".$myMatchID."");
	if($wpdb->num_rows != 0)
	{
		display_goal_details($myMatchID,$homeTeam,'home');
		display_goal_details($myMatchID,$awayTeam,'away');
		
		?>
		<div class="clear">&nbsp;</div>
		<br />
		<br />
		
		
		
		<!--Individual Player Details for the match-->
		<?php 
			player_details_for_the_match($myMatchID,$homeTeam,'home');
			player_details_for_the_match($myMatchID,$awayTeam,'away');
		?>

		<div class="clear"></div>
		<br />
		<br />
		
		<!-- Substitutes Listing -->
		<?php 
			display_substitutes_in_detail($myMatchID,'home');
			display_substitutes_in_detail($myMatchID,'away'); 
		?>
			
	
		<div class="clear"></div>
		<br />
		<br />
		
		
		<!-- Substitution Cards -->
		<?php 
			substitutions($myMatchID,'home');
			substitutions($myMatchID,'away'); 
		?>
			
		
		<div class="clear"></div>
		<br/><br/>
		
		<!-- Yellow Cards -->
		
		<?php 
			cards($myMatchID,'home','yellow');
			cards($myMatchID,'away','yellow');
		?>
		
		<div class="clear"></div>
		<br/><br/>
		
		<!-- Red Cards -->
		<?php 
			cards($myMatchID,'home','red');
			cards($myMatchID,'away','red');
		?>
			
			
		<div class="clear"></div>
		<?php
	}
	else
	{
		?>
		<div style="height:200px;">Match Stats is coming soon</div>
		<?php
	}
		?>
	</div>
	
	
	<div class="innerdiv player_stats_wrapper" id="tabconent_5">
		<ul class="player_stats_tabs">
			<li id="home_player_stats_tab"><a class="active-sub-menu" id="home_team"><?php echo $homeTeam;?></a></li>
			<li  id="other_player_stats_tab"><a id="away_team"><?php echo $awayTeam;?></a></li>
		</ul>
		<?php 
			player_stats_display($myMatchID,$homeTeam,'home'); 
			player_stats_display($myMatchID,$awayTeam,'away');
		?>
	</div>
	
</div>	

<?php
	}
?>
</div>
<script>
	jQuery(document).ready(function(){
		jQuery('.comment_commentry').click(function(){
			jQuery(".innerdiv").hide();	
			jQuery(".innerdiv:nth-child(4)").show('slow');
			jQuery(".tabs").find('a').removeClass('tab_container_selected');
			jQuery(".tabs").eq(3).find('a').addClass('tab_container_selected');
			var commentaryId = jQuery(this).attr('id').substring(10);
			jQuery('.commentry_comment_div_wrapper').hide('slow');
			jQuery('#commentry_comment_div_wrapper_'+commentaryId).show('slow');
		})
		jQuery('.comment_commentry_big').click(function(){
			var commentaryId = jQuery(this).attr('id').substring(14);
			jQuery('.commentry_comment_div_wrapper').hide('slow');
			jQuery('#commentry_comment_div_wrapper_'+commentaryId).show('slow');
		})
		jQuery('.show_commentry_comments').live('click',function(){
			//var showcommentaryId = jQuery(this).attr('id').substring(15);
			jQuery('.show_comment_div_wrapper').hide('slow');
			jQuery(this).next().show('slow');
			//jQuery('#show_comment_div_wrapper_'+showcommentaryId).show('slow');
		})
		
		jQuery('.show_commentry_comments_small').click(function(){
			jQuery(".innerdiv").hide();	
			jQuery(".innerdiv:nth-child(4)").show('slow');
			jQuery(".tabs").find('a').removeClass('tab_container_selected');
			jQuery(".tabs").eq(3).find('a').addClass('tab_container_selected');
			var showcommentaryId = jQuery(this).attr('id').substring(21);
			jQuery('.show_comment_div_wrapper').hide('slow');
			jQuery('#show_comment_div_wrapper_'+showcommentaryId).show('slow');
		})
	
		/*ajax LIKE / UNLIKE*/
		jQuery('.like_commentry').live('click', function(){
			var elementId = jQuery(this).attr('id');
			if(jQuery(this).hasClass('unlike')){
				like = "n";
			}else{
				like = "y";
			}
			var commentid = jQuery(this).attr('id').substring(5) ;
			var data = {
					action: 'commentry_like',
					likeUnlike:like,
					commentaryid: commentid,
					userid: <?php echo $currentUserId ; ?>
				}
			jQuery.post(ajaxurl,data, function(response)	
			{
				if(jQuery.trim(response) == 'y')
				{
					jQuery("#"+elementId).parent().prepend("<a class='like_commentry unlike' id="+elementId+">UnLike</a>");
					jQuery("#tabconent_3").find("#"+elementId).parent().prepend("<a class='like_commentry unlike' id="+elementId+">UnLike</a>");
					jQuery("#"+elementId).parent().children().eq(1).remove();
					jQuery("#tabconent_3").find("#"+elementId).parent().children().eq(1).remove();
				}else{
					jQuery("#"+elementId).parent().prepend("<a class='like_commentry like' id="+elementId+">Like</a>");
					jQuery("#tabconent_3").find("#"+elementId).parent().prepend("<a class='like_commentry like' id="+elementId+">Like</a>");
					jQuery("#"+elementId).parent().children().eq(1).remove();
					jQuery("#tabconent_3").find("#"+elementId).parent().children().eq(1).remove();
				}
			});
		})
		
		
		/*ajax Comment*/
		jQuery('.commentry_submit').live('click', function(){
			//var elementId = jQuery(this).attr('id');
			var commentryID = jQuery(this).attr('id').substring(17);
			var commenttext = jQuery(this).prev().val();
			var data = {
					action: 'commentry_comment',
					commentaryid: commentryID,
					commentText: commenttext,
					userid: <?php echo $currentUserId ; ?>
				}
			jQuery.post(ajaxurl,data, function(response)	
			{
				if(jQuery.trim(response) == 'Success'){
					if(jQuery("#commentry_big_"+commentryID).next().attr('id') == "show_commentry_"+commentryID){
						jQuery("#show_comment_div_wrapper_"+commentryID).append("<div class='commentary_comment'><a href='<?php bp_loggedin_user_link(); ?>'><img src='<?php bp_loggedin_user_avatar( 'html=false&type=thumb&height=30&width=30' );?>' height='30' width='30'></img></a><div class='comment_text'><span>"+commenttext+"</span><div class='delete_commentary_comment' id='delete_commentary_comment_"+commentryID+"'></div></div><div class='clear'>&nbsp;</div></div>");
					}else{
						jQuery("#commentry_big_"+commentryID).after("<a class='show_commentry_comments' id='show_commentry_"+commentryID+"'>Show Comments</a><div class='show_comment_div_wrapper' id='show_comment_div_wrapper_"+commentryID+"'><div class='commentary_comment'><a href='<?php bp_loggedin_user_link(); ?>'><img src='<?php bp_loggedin_user_avatar( 'html=false&type=thumb&height=30&width=30' );?>' height='30' width='30'></img></a><div class='comment_text'><span>"+commenttext+"</span><div class='delete_commentary_comment' id='delete_commentary_comment_"+commentryID+"'></div></div><div class='clear'>&nbsp;</div></div>");
						jQuery('#show_comment_div_wrapper_'+commentryID).show('slow');
					}
				}else{
					alert("We were unable to post your comment. Please try again.")
				}
			});
		})
		
		/*Ajax Delete Comment*/
		jQuery('.delete_commentary_comment').click(function(){
			var commentryID = jQuery(this).attr('id').substring(26);
			var data = {
					action: 'delete_commentry_comment',
					commentaryid: commentryID,
					userid: <?php echo $currentUserId ; ?>
				}
			jQuery.post(ajaxurl,data, function(response)	
			{
				if(jQuery.trim(response) == 'Success'){
					jQuery("#delete_commentary_comment_"+commentryID).parent().parent().remove();
					if(!jQuery("#show_comment_div_wrapper_"+commentryID).find(".commentary_comment").length){
						jQuery("#show_commentry_"+commentryID).remove();
					}
				}else{
					alert("We were unable to delete the comment. Please try again.")
				}
			});
		})
	})
</script>




<?php

/*Function To Display Substitutes*/
function substitute_display($myMatchID,$p_substitute,$team_name){
	global $wpdb;
	echo "<span class='out_image matchast_image' ></span>";
	echo "<div class='clear'></div>";
	echo "<span class='sub_image matchast_image' ></span>";
	$mySearchQ = $wpdb->get_results("SELECT * FROM team_stats where match_id=".$myMatchID." and team_name='".$team_name."' and p_name='".$p_substitute."' ORDER BY `team_stat_id` ASC" );
		echo "<span class='team_stat_p_jno team_stat_p_jno_inner'>".$mySearchQ[0]->p_jno."</span>";
		echo "<span class='team_stat_p_name'>".$mySearchQ[0]->p_name."</span>";
		echo "<span class='in_image matchast_image' ></span>";
		if($mySearchQ[0]->p_goals != "-" || $mySearchQ[0]->p_goals != ""){
			for($h=0; $h<$mySearchQ[0]->p_goals ;$h++){
				echo "<span class='goal_image matchast_image' ></span>";
			}
		}
		if($mySearchQ[0]->p_yellow_card == "yellow_card"){
			echo "<span class='yellow_card_image matchast_image' ></span>";
		}
	
		if($mySearchQ[0]->p_red_card == "red_card"){
			echo "<span class='red_card_image matchast_image' ></span>";
		}
	echo "<span class='match_stats_p_pos'>".$mySearchQ[0]->p_pos."</span>";  
	if($mySearchQ[0]->p_substitute == "-" || $mySearchQ[0]->p_substitute == ""){
								
	}else{
		substitute_display($myMatchID, $mySearchQ[0]->p_substitute,$team_name);
	}
}


/*Function To Display Goal Details*/
function display_goal_details($myMatchID,$team_name,$team_type){ 
	global $wpdb;
	?>
	<table class="widefat PSHome match_cast_team_stats">
		<tr>
			<th colspan="" class="player_stats_table_heading">
				<?php echo $team_name ?>
			</th>
		</tr>
		<?php 
			$myResults = $wpdb->get_results( "SELECT * FROM team_stats where match_id=".$myMatchID." and team_name='".$team_type."' ORDER BY `team_stat_id` ASC");
			$j=0;
			$cntdata = 0;
			for($i=1;$i<19;$i++){
				if($myResults[$i-1]->p_goaltime != 0)
				{
				?>
				<tr>						
					<td><?php echo $myResults[$i-1]->p_name ;?>(<?php echo $myResults[$i-1]->p_goaltime?>)</td>						
				</tr>
		<?php 
			$cntdata++;
			}
			if($cntdata == 0)
			{
				?>
				<tr>
					<td colspan="">-</td>
				</tr>
				<?php
				break;
			}
			
			$j++;
		} ?>
		
	</table> <?php
}



/*Function To Display Cards*/
function cards($myMatchID,$team_name,$card_type){
	global $wpdb;?>
	<table class="widefat PSHome match_cast_team_stats">
	<tr>
		<th colspan="3" class="player_stats_table_heading">
			<?php	if($card_type == "red"){ 
						echo "Red Cards";
					}else{	
						echo "Yellow Cards";
					} ?>
		</th>
	</tr>
	<tr>
		<th class="test_subs_h_no">MIN.</th>
		<th >NAME</th>				
	</tr>

<?php	$myQuery = $wpdb->get_results( "SELECT * FROM team_stats where match_id=".$myMatchID." and team_name='".$team_name."' ORDER BY `team_stat_id` ASC");
		$myfinal_card_time="p_".$card_type."time";
		$j=0;
		$cntdata = 0;
		for($i=1;$i<19;$i++){ 
			if( $myQuery[$i-1]->$myfinal_card_time != 0 || $myQuery[$i-1]->$myfinal_card_time != '-')
			{?>
				<tr>
					<td class="test_subs_h_no"><?php echo $myQuery[$i-1]->$myfinal_card_time;?></td>						
					<td class="test_subs_h_no" style="text-align:left;">
						<?php	if($card_type == "red"){ ?>
									<span class="red_card_image matchast_image"></span>							
						<?php 	}else{?>
									<span class="yellow_card_image matchast_image"></span>							
						<?php 	} ?>
				
					<?php echo $myQuery[$i-1]->p_name;?>  </td>
				</tr>
		<?php 
			$cntdata++;
			}
			$j++;
		} 
		if($cntdata == 0)
			{
				?>
				<tr>
					<td colspan="3">
					<?php	if($card_type == "red"){ ?>
								No Red Cards
					<?php 	}else{?>
								No Yellow Cards
					<?php 	} ?>
					</td>
				</tr>
				<?php
			}?>
			</table><?php
}

/*Function To Who Substituted Who*/
function substitutions($myMatchID,$team_name){
	global $wpdb;
	?>
	<table class="widefat PSHome match_cast_team_stats">
		<tr>
			<th colspan="3" class="player_stats_table_heading">Substitutions</th>
		</tr>
		<tr>
			<th class="test_subs_h_no">MIN.</th>
			
			<th class="test_subs_h_no">SUBSTITUTION</th>
		</tr>
		<?php
		$myResults = $wpdb->get_results( "SELECT * FROM team_stats where match_id=".$myMatchID." and team_name='".$team_name."' ORDER BY `team_stat_id` ASC");
		
		$j=0;
		$cntdata = 0;
		for($i=1;$i<19;$i++)
		{
			if($myResults[$i-1]->p_sbstime != 0 || $myResults[$i-1]->p_sbstime != '-')
			{?>
			<tr>
				<td class="test_subs_h_no"><?php echo $myResults[$i-1]->p_sbstime;?></td>						
				<td class="test_subs_h_no" style="text-align:left;">
				<span class="in_image matchast_image"></span>
				<span class="out_image matchast_image"></span>
				<?php echo $myResults[$i-1]->p_substitute;?> for <?php echo $myResults[$i-1]->p_name;?> </td>
			</tr>
	<?php 
			$cntdata++;
			}
			
		$j++;
		}
		if($cntdata == 0)
		{
			?>
			<tr>
				<td colspan="3">No Substitution</td>
			</tr>
			<?php
		}?>
		</table><?php
}



/*Function To Display Substitutes In Detail*/
function display_substitutes_in_detail($myMatchID,$team_name){ 
	global $wpdb;
?>
	<table class="widefat PSHome match_cast_team_stats">
		<tr>
			<th colspan="3" class="player_stats_table_heading">Substitutes</th>
		</tr>
		<tr>
			<th class="test_subs_h_no">No.</th>
			<th >NAME</th>
			<th class="test_subs_h_no">POS</th>
		</tr>
		
		<?php 
			$myResults = $wpdb->get_results( "SELECT * FROM team_stats where match_id=".$myMatchID." and team_name='".$team_name."' ORDER BY `team_stat_id` ASC");
			$j=0;
			for($i=12;$i<19;$i++){ ?>
				<tr>
					<td class="test_subs_h_no"><?php echo $myResults[$i-1]->p_jno;?></td>
					<td><?php echo $myResults[$i-1]->p_name;?></td>
					<td class="test_subs_h_no"><?php echo $myResults[$i-1]->p_pos;?></td>
				</tr>
			<?php 
				$j++;
			} ?>
	</table>
	<?php
}


/*Function To Display PLayer Details of the match */
function player_details_for_the_match($myMatchID,$team_name,$team_type){
	global $wpdb;
	?>
	<table class="widefat PSHome match_cast_team_stats">
			<tr>
				<th colspan="3" class="player_stats_table_heading">
					<?php echo $team_name; ?>
				</th>
			</tr>		
			<tr>
				<th class="team_stat_p_jno team_stat_p_jno_header">No.</th>
				<th class="team_stat_p_name_header">NAME</th>
				<th class='match_stats_p_pos'>POS</th>
			</tr>		
			
			<?php 
			$myResults = $wpdb->get_results( "SELECT * FROM team_stats where match_id=".$myMatchID." and team_name='".$team_type."' ORDER BY `team_stat_id` ASC");
			for($i=1;$i<=11;$i++)
			{
				?>
				<tr>
					<td colspan="3">
						<span class="team_stat_p_jno"><?php echo $myResults[$i-1]->p_jno;  ?></span>
						<span class="team_stat_p_name"><?php echo $myResults[$i-1]->p_name;  ?></span>
						<?php if($myResults[$i-1]->p_goals != "-" || $myResults[$i-1]->p_goals != ""){
								for($h=0; $h<$myResults[$i-1]->p_goals ;$h++){
									echo "<span class='goal_image matchast_image' ></span>";
								}
							}
							if($myResults[$i-1]->p_yellow_card == "yellow_card"){
								echo "<span class='yellow_card_image matchast_image' ></span>";
							}
						
							if($myResults[$i-1]->p_red_card == "red_card"){
								echo "<span class='red_card_image matchast_image' ></span>";
							}
							echo "<span class='match_stats_p_pos'>".$myResults[$i-1]->p_pos."</span>";  
							if($myResults[$i-1]->p_substitute == "-" || $myResults[$i-1]->p_substitute == ""){
								
							}else{
								substitute_display($myMatchID, $myResults[$i-1]->p_substitute,$team_type);
							}
						?>
					</td>
					
				</tr>
				<?php
				
			}		
		?>
		
		</table><?php
}



function player_stats_display($myMatchID,$team_name,$team_type){ 
	global $wpdb;
	?>
	<div class='team_player_stats'>
	<table  style="width: 100%" class="widefat playerstatstable PSHome" cellspacing="0" cellpadding="0" >
			<tr>
				<th colspan="12" class="player_stats_table_heading"><b>
				<?php
					echo $team_name;
				?>
				</b></th>
			</tr>
			<tr>
				<th>J No.</th>
				<th class="player_stats_player_name">Name</th>
				<th><a title="Total Shots">SH</a></th>
				<th><a title="Shots on Goal">SG</a></th>
				<th><a title="Goals">G</a></th>
				<th><a title="Assists">A</a></th>
				<th><a title="Offsides">OF</a></th>
				<th><a title="Fouls Drawn">FD</a></th>
				<th><a title="Fouls Committed">FC</a></th>
				<th><a title="Saves">SV</a></th>
				<th><a title="Yellow Cards">YC</a></th>
				<th><a title="Red Cards">RC</a></th>
			</tr>		
		<?php		
			$myResults = $wpdb->get_results( "SELECT * FROM player_stats where match_id=".$myMatchID." and team_name='".$team_type."'");
			$j=0;
			for($i=1;$i<=11;$i++)
			{
				
				?>
				<tr>
					<td><?php echo (isset($myResults[$j]->jno)?($myResults[$j]->jno):'-');?></td>
					<td><?php echo (isset($myResults[$j]->name)?($myResults[$j]->name):'-');?></td>
					<td><?php echo (isset($myResults[$j]->total_shots)?($myResults[$j]->total_shots):'-');?></td>
					<td><?php echo (isset($myResults[$j]->shots_on_goal)?($myResults[$j]->shots_on_goal):'-');?></td>
					<td><?php echo (isset($myResults[$j]->goals)?($myResults[$j]->goals):'-');?></td>
					<td><?php echo (isset($myResults[$j]->assists)?($myResults[$j]->assists):'-');?></td>
					<td><?php echo (isset($myResults[$j]->offsides)?($myResults[$j]->offsides):'-');?></td>
					<td><?php echo (isset($myResults[$j]->fouls_drawn)?($myResults[$j]->fouls_drawn):'-');?></td>
					<td><?php echo (isset($myResults[$j]->fouls_committed)?($myResults[$j]->fouls_committed):'-');?></td>
					<td><?php echo (isset($myResults[$j]->saves)?($myResults[$j]->saves):'-');?></td>
					<td><?php echo (isset($myResults[$j]->yellow_cards)?($myResults[$j]->yellow_cards):'-');?></td>
					<td><?php echo (isset($myResults[$j]->red_cards)?($myResults[$j]->red_cards):'-');?></td>
				</tr>
				<?php
				$j++;
			}		
		
		?>
		<tr>
			<th colspan="12" class="player_stats_table_heading">Substitutes</th>
		</tr>
		<?php for($i=12;$i<=19;$i++)
			{
				?>
				<tr>
					<td><?php echo (isset($myResults[$j]->jno)?($myResults[$j]->jno):'-');?></td>
					<td><?php echo (isset($myResults[$j]->name)?($myResults[$j]->name):'-');?></td>
					<td><?php echo (isset($myResults[$j]->total_shots)?($myResults[$j]->total_shots):'-');?></td>
					<td><?php echo (isset($myResults[$j]->shots_on_goal)?($myResults[$j]->shots_on_goal):'-');?></td>
					<td><?php echo (isset($myResults[$j]->goals)?($myResults[$j]->goals):'-');?></td>
					<td><?php echo (isset($myResults[$j]->assists)?($myResults[$j]->assists):'-');?></td>
					<td><?php echo (isset($myResults[$j]->offsides)?($myResults[$j]->offsides):'-');?></td>
					<td><?php echo (isset($myResults[$j]->fouls_drawn)?($myResults[$j]->fouls_drawn):'-');?></td>
					<td><?php echo (isset($myResults[$j]->fouls_committed)?($myResults[$j]->fouls_committed):'-');?></td>
					<td><?php echo (isset($myResults[$j]->saves)?($myResults[$j]->saves):'-');?></td>
					<td><?php echo (isset($myResults[$j]->yellow_cards)?($myResults[$j]->yellow_cards):'-');?></td>
					<td><?php echo (isset($myResults[$j]->red_cards)?($myResults[$j]->red_cards):'-');?></td>
				</tr>
				<?php
				$j++;
			}		
		?>
		
		</table>
		</div><?php
}
