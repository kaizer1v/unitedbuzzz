jQuery(document).ready(function (){
	jQuery(".innerdiv").hide();	
	jQuery(".innerdiv:nth-child(1)").show();
	jQuery(".tabs").click(function(index,obj){					
		var showIndex = Number(jQuery(this).index())+1;				
		jQuery(".innerdiv").hide();
		jQuery(".innerdiv:nth-child("+showIndex+")").show('slow');
		
		jQuery(".tabs").find('a').removeClass('tab_container_selected');
		jQuery(this).find('a').addClass('tab_container_selected');
	});
	
	jQuery(".clike").click(function(){
	
		
	});
	
	jQuery("#addcontainer").hide();
	jQuery("#showaddbx").click(function(){
		
			jQuery("#addcontainer").show();	
			jQuery("#showaddbx").hide();
			//jQuery("#showaddbx").html("<a href='javascript:void(0);' id='showaddbx' title='hide' >'Hide Comment box'</a>");	
	});
	jQuery("#addcomment").click(function(){		
		cnumber = jQuery("#cnumber").val();
		ctime = jQuery("#ctime").val();
		cheadline = jQuery("#cheadline").val();
		ccomments = jQuery("#ccomments").val();		
		
		errflag = false;
		
		if(cnumber == '')
		errflag = true;
		
		if(ctime == '')
		errflag = true;
		
		if(cheadline == '')
		errflag = true;
		
		if(ccomments == '')
		errflag = true;
		
		if(errflag == true)
		{
			alert('Please fill all the fields');
			return false;
		}
		
		var global_code = jQuery("#global_code").val();
		
		var data = {
				action: "add_comments",
				cnumber: cnumber,		
				ctime: ctime,				
				cheadline: cheadline,
				ccomments: ccomments,
				global_code:global_code
			};
			
		jQuery.post(ajaxurl, data, function(response) {	
			
			if(jQuery.trim(response) == "done")
			{				
				newCommentShow();
				jQuery("#cnumber").val(' ');
				jQuery("#ctime").val(' ');
				jQuery("#cheadline").val(' ');
				jQuery("#ccomments").val(' ');	 
			}			
		});	
	
	});
		
	/*Match Cast Display*/
	jQuery('#display_mc_utd').addClass('active-sub-menu');
	jQuery('#display_mc_utd').click(function(){
		jQuery('#otherteam_mc_wrapper').hide();
		jQuery('#manutd_mc_wrapper').show();	
		jQuery(this).addClass('active-sub-menu');
		jQuery('#display_mc_otherteam').removeClass('active-sub-menu');
	})
	jQuery('#display_mc_otherteam').click(function(){
		jQuery('#manutd_mc_wrapper').hide();
		jQuery('#otherteam_mc_wrapper').show();
		jQuery(this).addClass('active-sub-menu');
		jQuery('#display_mc_utd').removeClass('active-sub-menu');
	})
	
	var call = '';
	jQuery("#match_cast_code").change(function(){		
		call = 'ajax';
		populate_data(call);
	});
	call = 'load';
	populate_data(call);
	
	setInterval('update_comments()', 60000);
	
	//update_comments();
	/*Player Stats*/
	jQuery('.player_stats_wrapper').children().eq(1).show();
	jQuery('.player_stats_tabs').find('a').click(function(){
		jQuery('.player_stats_tabs').find('a').removeClass('active-sub-menu');
		jQuery(this).addClass('active-sub-menu');
	})
	jQuery('#home_team').click(function(){
		jQuery('.player_stats_wrapper').find('div').hide();
		jQuery('.player_stats_wrapper').children().eq(1).show();
	})
	jQuery('#away_team').click(function(){
		jQuery('.player_stats_wrapper').find('div').hide();
		jQuery('.player_stats_wrapper').children().eq(2).show();
	})
});


function populate_data(call)
{	
	if(jQuery("#match_cast_code").length == 0) 
	return;
	
	scheduleId = jQuery("#match_cast_code").val();
	if(call == 'ajax')
	{		
		var datav = {
			action: "load_schedule",
			scheduleId: scheduleId
		};
		
		jQuery.post(ajaxurl, datav, function(data) 
		{					
			ajaxdata(data);
		},"json");
	}
	else if(call == 'load')
	{		
		var datav = {
			action: "load_matchdetails",
			matchid: scheduleId
		};
		
		jQuery.post(ajaxurl, datav, function(data) 
		{					
			loaddata(data);
		},"json");
	}
	
	
		
	
	
}
function update_comments()
{
	if(jQuery("#lastcomid").length == 0)
	return;
	
	var lastcomid = jQuery("#lastcomid").val();
	var data = {
			action: "show_new_comments",
			matchid: gmatchid,
			lastcomid: lastcomid
		};				
				
		jQuery.post(ajaxurl, data, function(res) 
		{	
			if(res != " ")
			jQuery(".comment_window").prepend(res);				
			update_comment_number(gmatchid);
		}); 
	update_big_comments();	
}
function update_big_comments()
{
	var lastcomid = jQuery("#lastcomid").val();
	var data = {
			action: "show_new_big_comments",
			matchid: gmatchid,
			lastcomid: lastcomid
		};				
				
		jQuery.post(ajaxurl, data, function(res) 
		{	
			if(res != " ")
			jQuery("#tabconent_3").prepend(res);				
			update_comment_number(gmatchid);
		}); 
}
function update_comment_number(gmatchid)
{
	var data = {
			action: "update_comment_number",
			matchid: gmatchid			
		};
		
		jQuery.post(ajaxurl, data, function(res) 
		{	
			if(res != " ")
			jQuery("#lastcomid").val(res);		
			
		}); 
}


function loaddata(data)
{
	jQuery("#league_global_id").val(data.league_global_id);
	jQuery("#league_name").val(data.league_name);
	jQuery("#league_alias").val(data.league_alias);
	jQuery("#league_display_name").val(data.league_display_name);	
	jQuery("#game_date").val(data.game_date);
	jQuery("#game_day").val(data.game_day);
	jQuery("#game_utc_hour").val(data.game_utc_hour);
	jQuery("#game_utc_minute").val(data.game_utc_minute);
	jQuery("#game_local_game_date").val(data.game_local_game_date);
	jQuery("#game_local_game_day").val(data.game_local_game_day);
	jQuery("#gamecode_global_code").val(data.gamecode_global_code);
	jQuery("#gamecode_code").val(data.gamecode_code);
	jQuery("#coverage_level").val(data.coverage_level);
	jQuery("#aggregate_partner_global_code").val(data.aggregate_partner_global_code);
	jQuery("#game_type_id").val(data.game_type_id);
	jQuery("#game_type_description").val(data.game_type_description);
	jQuery("#week").val(data.week);
	jQuery("#gamestate_status_id").val(data.gamestate_status_id);
	jQuery("#gamestate_status").val(data.gamestate_status);
	jQuery("#gamestate_period").val(data.gamestate_period);
	jQuery("#gamestate_minutes").val(data.gamestate_minutes);
	jQuery("#gamestate_seconds").val(data.gamestate_seconds);
	jQuery("#gamestate_additional_minutes").val(data.gamestate_additional_minutes);
	jQuery("#stadium_global_id").val(data.stadium_global_id);
	jQuery("#stadium_id").val(data.stadium_id);
	jQuery("#stadium_global_name").val(data.stadium_global_name);
	jQuery("#match_number").val(data.match_number);
	jQuery("#visiting_team_global_id").val(data.visiting_team_global_id);
	jQuery("#visiting_team_id").val(data.visiting_team_id);
	jQuery("#visiting_team_global_location").val(data.visiting_team_global_location);
	jQuery("#visiting_team_global_name").val(data.visiting_team_global_name);
	jQuery("#visiting_team_global_display_name").val(data.visiting_team_global_display_name);
	jQuery("#visiting_team_global_primary_color").val(data.visiting_team_global_primary_color);
	jQuery("#visiting_team_global_shorts_color").val(data.visiting_team_global_shorts_color);
	jQuery("#visiting_team_global_wins").val(data.visiting_team_global_wins);
	jQuery("#visiting_team_global_ties").val(data.visiting_team_global_ties);
	jQuery("#visiting_team_global_losses").val(data.visiting_team_global_losses);
	jQuery("#visiting_team_global_score").val(data.visiting_team_global_score);
	jQuery("#visiting_team_global_half").val(data.visiting_team_global_half);
	jQuery("#visiting_team_global_formation").val(data.visiting_team_global_formation);
	jQuery("#home_team_global_id").val(data.home_team_global_id);
	jQuery("#home_team_id").val(data.home_team_id);
	jQuery("#home_team_global_location").val(data.home_team_global_location);
	jQuery("#home_team_global_name").val(data.home_team_global_name);
	jQuery("#home_team_global_alias").val(data.home_team_global_alias);
	jQuery("#home_team_global_display_name").val(data.home_team_global_display_name);
	jQuery("#home_team_global_primary_color").val(data.home_team_global_primary_color);
	jQuery("#home_team_global_shorts_color").val(data.home_team_global_shorts_color);
	jQuery("#home_team_global_wins").val(data.home_team_global_wins);
	jQuery("#home_team_global_ties").val(data.home_team_global_ties);
	jQuery("#home_team_global_losses").val(data.home_team_global_losses);
	jQuery("#home_team_global_score").val(data.home_team_global_score);
	jQuery("#home_team_global_shots").val(data.home_team_global_shots);
	jQuery("#home_team_global_half").val(data.home_team_global_half);
	jQuery("#home_team_global_formation").val(data.home_team_global_formation);
}
function ajaxdata(data)
{
	jQuery("#league_global_id").val(data.league_global_id);
	jQuery("#league_name").val(data.league_name);
	jQuery("#league_alias").val(data.league_alias);
	jQuery("#league_display_name").val(data.league_display_name);	
	jQuery("#game_date").val(data.game_date_time);
	jQuery("#game_day").val(data.game_date_day);
	jQuery("#game_utc_hour").val(data.game_utc_hour);
	jQuery("#game_utc_minute").val(data.game_utc_minute);
	jQuery("#game_local_game_date").val(data.game_localdatetime);
	jQuery("#game_local_game_day").val(data.game_localday);
	jQuery("#gamecode_global_code").val(data.gamecode_global_code);
	jQuery("#gamecode_code").val(data.gamecode_code);
	jQuery("#coverage_level").val(data.coverage);
	jQuery("#aggregate_partner_global_code").val(data.agg_partner_game_global_code);
	jQuery("#game_type_id").val(data.game_type_id);
	jQuery("#game_type_description").val(data.game_type_description);
	jQuery("#week").val(data.game_week);
	jQuery("#gamestate_status_id").val(data.status_id);
	jQuery("#gamestate_status").val(data.status);
	//jQuery("#gamestate_period").val(data.);
	//jQuery("#gamestate_minutes").val(data.);
	//jQuery("#gamestate_seconds").val(data.);
	//jQuery("#gamestate_additional_minutes").val(data.);
	jQuery("#stadium_global_id").val(data.stadium_global_id);
	jQuery("#stadium_id").val(data.stadium_id);
	jQuery("#stadium_global_name").val(data.stadium_name);
	jQuery("#match_number").val(data.match_number);
	jQuery("#visiting_team_global_id").val(data.visit_team_global_id);
	jQuery("#visiting_team_id").val(data.visit_team_id);
	jQuery("#visiting_team_global_location").val(data.visit_team_location);
	jQuery("#visiting_team_global_name").val(data.visit_team_name);
	jQuery("#visiting_team_global_display_name").val(data.visit_team_display_name);
	//jQuery("#visiting_team_global_primary_color").val(data.);
	//jQuery("#visiting_team_global_shorts_color").val(data.);
	//jQuery("#visiting_team_global_wins").val(data.);
	//jQuery("#visiting_team_global_ties").val(data.);
	//jQuery("#visiting_team_global_losses").val(data.);
	jQuery("#visiting_team_global_score").val(data.visit_score);
	//jQuery("#visiting_team_global_half").val(data.);
	//jQuery("#visiting_team_global_formation").val(data.);
	jQuery("#home_team_global_id").val(data.home_team_global_id);
	jQuery("#home_team_id").val(data.home_team_id);
	jQuery("#home_team_global_location").val(data.home_team_location);
	jQuery("#home_team_global_name").val(data.home_team_name);
	jQuery("#home_team_global_alias").val(data.home_team_alias);
	jQuery("#home_team_global_display_name").val(data.home_team_display_name);
	//jQuery("#home_team_global_primary_color").val(data.);
	//jQuery("#home_team_global_shorts_color").val(data.);
	//jQuery("#home_team_global_wins").val(data.);
	//jQuery("#home_team_global_ties").val(data.);
	//jQuery("#home_team_global_losses").val(data.);
	jQuery("#home_team_global_score").val(data.home_score);
	//jQuery("#home_team_global_shots").val(data.);
	//jQuery("#home_team_global_half").val(data.);
	//jQuery("#home_team_global_formation").val(data.);
}

function newCommentShow()
{	
	cnumber = jQuery("#cnumber").val();
	ctime = jQuery("#ctime").val();
	cheadline = jQuery("#cheadline").val();
	ccomments = jQuery("#ccomments").val();	
	selectAudio = jQuery("#audioContainer").html();	
	
	
	var htmltr = "";
	htmltr += "<tr>";
	htmltr += "<td>"+ctime+"</td>";
	htmltr += "<td>"+cheadline+"</td>";
	htmltr += "<td>"+ccomments+"</td>";
	htmltr += "<td>"+selectAudio+"</td>";
	htmltr += "</tr>";
	
	jQuery("#commentsTblbody").prepend(htmltr);
	
}	

function edit_comment(cid)
{
	jQuery('#tr_'+cid).hide();
	jQuery('#trh_'+cid).show();
	
	
}
function cancel(cid)
{
	jQuery('#tr_'+cid).show();
	jQuery('#trh_'+cid).hide();
}
function save_updated_comment(cid)
{
	var data = {
		action: "save_updated_comment",
		cid: cid,
		cnumber : jQuery("#cnumber_"+cid).val(),
		ctime : jQuery("#ctime_"+cid).val(),
		chline : jQuery("#chline_"+cid).val(),
		ctext : jQuery("#ctext_"+cid).val(),
		cchant : jQuery("#cchant_"+cid).val()
	};
	
	
	jQuery.post(ajaxurl, data, function(res) 
	{		
		location.reload(true);	
		
	}); 
}

function delete_comment(cid)
{
	var answer = confirm("Are you sure");
	if(answer)
	{
		var data = {
		action: "delete_comment",
		cid: cid
		}
		jQuery.post(ajaxurl, data, function(res) 
		{		
			location.reload(true);	
			
		}); 
	}
	
}
