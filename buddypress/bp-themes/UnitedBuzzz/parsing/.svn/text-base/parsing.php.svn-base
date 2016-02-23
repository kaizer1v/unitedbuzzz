<?php

 define('DOING_CRON', true);

if ( !defined('ABSPATH') ) {
	/** Set up WordPress environment */
	require_once('../../../../../../wp-load.php');
} 

//create feeds table for the first time
create_feed_tables();


$xml = "";
$xmlc = "";
$xml = (array)simplexml_load_file ('EPL_FINAL_PBP$2011092411139.XML');
$xmlc = (array)simplexml_load_file ('EPL_COMMENTARY_EN$2011092411139.XML');
$xmls = (array)simplexml_load_file ('EPL_SCHEDULE.XML');

//parse schedule once or when ever it is different 
parse_schedule($xmls);

//parse live feeds of game
parse_pbp($xml);

//parse live commentaries
parse_comments($xmlc);


function parse_schedule($xmls)
{
	$schedule = $xmls['sports-schedule'];
	$date = $schedule->date;
	$time = $schedule->time;
	$version = $schedule->version;
	$league = $schedule->league;
	$season = $schedule->season;
	
	$gameschedule = $schedule->{'soccer-ifb-schedule'};	
	$schedule_arr = array();	
	
	global $wpdb;
	$sql = "SELECT MAX(version_number) AS m_ver FROM schedule ";
	$result = $wpdb->get_row($sql);
	
	$max_version = 0;	
	if($wpdb->num_rows > 0 and $wpdb->num_rows != 'NULL' )
	{				
		if($result->m_ver != "")			
			$max_version = $result->m_ver;		
		else	
			$max_version =0;
	}
	
	foreach($version->attributes() as $attr=>$value )	
	{
		$value = (array) $value;
		$schedule_arr['version'][$attr] = $value[0];
	}
	
		
	if($max_version < $schedule_arr['version']['number'])
	{	
		foreach($date->attributes() as $attr=>$value )	
		{
			$value = (array) $value;
			$schedule_arr['date'][$attr] = $value[0];
		}
		
		foreach($time->attributes() as $attr=>$value )	
		{
			$value = (array) $value;
			$schedule_arr['time'][$attr] = $value[0];
		}
		
		foreach($version->attributes() as $attr=>$value )	
		{
			$value = (array) $value;
			$schedule_arr['version'][$attr] = $value[0];
		}
		foreach($league->attributes() as $attr=>$value )	
		{
			$value = (array) $value;
			$schedule_arr['league'][$attr] = $value[0];
		}
		foreach($season->attributes() as $attr=>$value )	
		{
			$value = (array) $value;
			$schedule_arr['season'][$attr] = $value[0];
		}
		
		
		$i = 0 ;
		foreach($gameschedule as $gschedule)
		{		
			$newarr = array();
			foreach($gschedule as $gs)
			{			
				$is_manteams = false;
				$hometeam = $gs->{'home-team'};
				$home_teaminfo = $hometeam->{'team-info'};
				foreach($home_teaminfo->attributes() as $attr=>$value)
				{
					
					$value = (array)$value;
					if($attr == 'global-id' and $value[0] == 6157)
					{
						$is_manteams = true;
						//$schedule_arr[$i]['home_team'][$attr] = $value[0];
					}
					
				}
				
				$visitteam = $gs->{'visiting-team'};
				$visit_teaminfo = $visitteam->{'team-info'};
				foreach($visit_teaminfo->attributes() as $attr=>$value)
				{
					
					$value = (array)$value;
					if($attr == 'global-id' and $value[0] == 6157)
					{
						$is_manteams = true;
						//$schedule_arr[$i]['visit_team'][$attr] = $value[0];
					}
					
				}
				
				if($is_manteams)
				{			
					$gsdate = $gs->date;
					foreach($gsdate->attributes() as $attr=>$gdate)
					{
						$gdate = (array)$gdate;
						$schedule_arr['game'][$i]['gdate'][$attr] = $gdate[0];				
					}
					
					$gstime = $gs->time;
					foreach($gstime->attributes() as $attr=>$gtime)
					{
						$gtime = (array)$gtime;
						$schedule_arr['game'][$i]['gtime'][$attr] = $gtime[0];
					}
					
					$localdate = $gs->{'local-game-date'};
					
					
					foreach($localdate->attributes() as $attr=>$localdt)
					{
						$localdt = (array)$localdt;
						$schedule_arr['game'][$i]['localdate'][$attr] = $localdt[0];
					}
					
					$localtime = $gs->{'local-time'};
					foreach($localtime->attributes() as $attr=>$loctime)
					{
						$loctime = (array)$loctime;
						$schedule_arr['game'][$i]['loctime'][$attr] = $loctime[0];
					}
					
					$tba = $gs->{'tba'};
					foreach($tba->attributes() as $attr=>$tb)
					{
						$tb = (array)$tb;
						$schedule_arr['game'][$i]['tba'][$attr] = $tb[0];
					}
					
					$gamecode = $gs->{'gamecode'};
					foreach($gamecode->attributes() as $attr=>$gcode)
					{
						$gcode = (array)$gcode;
						$schedule_arr['game'][$i]['gamecode'][$attr] = $gcode[0];
					}
					
					$coverage = $gs->{'coverage'};
					foreach($coverage->attributes() as $attr=>$cover)
					{
						$cover = (array)$cover;
						$schedule_arr['game'][$i]['coverage'][$attr] = $cover[0];
					}
					
					$gaggparteners = $gs->{'aggregate-partner-game'};
					foreach($gaggparteners->attributes() as $attr=>$gaggpartener)
					{
						$gaggpartener = (array)$gaggpartener;
						$schedule_arr['game'][$i]['agg-partner-game'][$attr] = $gaggpartener[0];
					}
					
					$gametype = $gs->{'game-type'};
					foreach($gametype->attributes() as $attr=>$gtype)
					{
						$gtype = (array)$gtype;
						$schedule_arr['game'][$i]['game-type'][$attr] = $gtype[0];
					}
					
					$gweek = $gs->{'week'};
					foreach($gweek->attributes() as $attr=>$week)
					{
						$week = (array)$week;
						$schedule_arr['game'][$i]['gweek'][$attr] = $week[0];
					}
					
					$status = $gs->{'status'};
					foreach($status->attributes() as $attr=>$stat)
					{
						$stat = (array)$stat;
						$schedule_arr['game'][$i]['status'][$attr] = $stat[0];
					}
					
									
					$stadiums = $gs->{'stadium'};
					foreach($stadiums->attributes() as $attr=>$stadium)
					{
						$stadium = (array)$stadium;
						$schedule_arr['game'][$i]['stadium'][$attr] = $stadium[0];
					}
					
					$match_number = $gs->{'match-number'};
					foreach($match_number->attributes() as $attr=>$match)
					{
						$match = (array)$match;
						$schedule_arr['game'][$i]['match-number'][$attr] = $match[0];
					}
					
					
					$hometeam = $gs->{'home-team'};
					$home_teaminfo = $hometeam->{'team-info'};
					$home_outcome = $hometeam->{'outcome'};
					
					foreach($home_teaminfo->attributes() as $attr=>$value)
					{					
						$value = (array)$value;
						$schedule_arr['game'][$i]['home_team'][$attr] = $value[0];
					}
					if(!empty($home_outcome))
					{
						foreach($home_outcome->attributes() as $attr=>$value)
						{					
							$value = (array)$value;
							$schedule_arr['game'][$i]['home_outcome'][$attr] = $value[0];
						}
					}				
					
					
					$visitngteam = $gs->{'visiting-team'};
					$visit_teaminfo = $visitngteam->{'team-info'};
					$visit_outcome = $visitngteam->{'outcome'};
					foreach($visit_teaminfo->attributes() as $attr=>$value)
					{					
						$value = (array)$value;
						$schedule_arr['game'][$i]['visit_team'][$attr] = $value[0];
					}
					if(!empty($visit_outcome))
					{
						foreach($visit_outcome->attributes() as $attr=>$value)
						{					
							$value = (array)$value;
							$schedule_arr['game'][$i]['outcome_outcome'][$attr] = $value[0];
						}
					}		
					
					
					$totalperiods = $gs->{'total-periods'};
					if(!empty($totalperiods))
					{
						foreach($totalperiods->attributes() as $attr=>$total_p)
						{	
							$total_p = (array)$total_p;
							$schedule_arr['game'][$i]['total-periods'][$attr] = $totalp[0]; 
						}   
					}				
				}
				$i++;	
			}
			
		}
		
		
		$datetime = $schedule_arr['date']['year']."-".$schedule_arr['date']['month']."-".$schedule_arr['date']['date']."-".$schedule_arr['time']['hour'].":".$schedule_arr['time']['minute'].":".$schedule_arr['time']['second'];
		
		
		
		
		foreach($schedule_arr['game'] as $game)
		{
			echo "<br><br>".$sql = "INSERT INTO schedule SET 
				xml_date_time = '".$datetime."',
				xml_day = '".$schedule_arr['date']['day']."',
				xml_timezone = '".$schedule_arr['time']['timezone']."',
				xml_utc_hour = '".$schedule_arr['time']['utc-hour']."',
				xml_utc_minute = '".$schedule_arr['time']['utc-minute']."',
				version_number = '".$schedule_arr['version']['number']."',
				league_global_id = '".$schedule_arr['league']['global-id']."',
				league_name = '".$schedule_arr['league']['name']."',
				league_alias = '".$schedule_arr['league']['alias']."',
				league_display_name = '".$schedule_arr['league']['display-name']."',
				season_year = '".$schedule_arr['season']['year']."',
				season_id = '".$schedule_arr['season']['id']."',
				season_description = '".$schedule_arr['season']['description']."',
				game_date_time = '".$game['gdate']['year']."-".$game['gdate']['month']."-".$game['gdate']['date']." ".$game['gtime']['hour'].":".$game['gtime']['minute']."',
				game_date_day = '".$game['gdate']['day']."',
				game_timezone = '".$game['gtime']['timezone']."',
				game_utc_hour = '".$game['gtime']['utc-hour']."',
				game_utc_minute = '".$game['gtime']['utc-minute']."',
				game_localdatetime = '".$game['localdate']['year']."-".$game['localdate']['month']."-".$game['localdate']['date']." ".$game['loctime']['hour'].":".$game['loctime']['minute']."',
				game_localday = '".$game['localdate']['day']."',
				tba = '".$game['tba']['tba']."',
				gamecode_global_code = '".$game['gamecode']['global-code']."',
				gamecode_code = '".$game['gamecode']['code']."',
				coverage = '".$game['coverage']['level']."',
				agg_partner_game_global_code = '".$game['agg-partner-game']['global-code']."',
				game_type_id = '".$game['game-type']['id']."',
				game_type_description = '".$game['game-type']['description']."',
				game_week = '".$game['gweek']['week']."',
				game_original_week = '".$game['gweek']['original-week']."',
				status_id = '".$game['status']['status-id']."',
				status = '".$game['status']['status']."',
				stadium_global_id = '".$game['stadium']['global-id']."',
				stadium_id = '".$game['stadium']['id']."',			
				stadium_name = '".$game['stadium']['name']."',
				match_number = '".$game['match-number']['number']."',
				home_team_global_id = '".$game['home_team']['global-id']."',
				home_team_id = '".$game['home_team']['id']."',
				home_team_location = '".$game['home_team']['location']."',
				home_team_name = '".$game['home_team']['name']."',
				home_team_alias = '".$game['home_team']['alias']."',
				home_team_display_name = '".$game['home_team']['display-name']."',
				home_outcome = '".$game['home_outcome']['outcome']."',
				home_score = '".$game['home_outcome']['score']."',
				home_shootout_goals = '".$game['home_outcome']['shootout-goals']."',
				visit_team_global_id = '".$game['visit_team']['global-id']."',
				visit_team_id = '".$game['visit_team']['id']."',
				visit_team_location = '".$game['visit_team']['location']."',
				visit_team_name = '".$game['visit_team']['name']."',
				visit_team_alias = '".$game['visit_team']['alias']."',
				visit_team_display_name = '".$game['visit_team']['display-name']."',
				visit_outcome = '".$game['outcome_outcome']['outcome']."',
				visit_score = '".$game['outcome_outcome']['score']."',
				visit_shootout_goals = '".$game['outcome_outcome']['shootout-goals']."',
				total_periods = '".$game['total-periods']['periods']."'
				";
			$res = $wpdb->query($sql);	
		}
	
	}
	else
	{
		//skip this version
	}
	
	
	
	//{'sports-schedule'}
}

function parse_comments($xmlc){
	global $wpdb;
	$comments = array();	
	$sports = $xmlc['sports-commentaries'];
	$i = 0;
	$gamecode = $sports->{'soccer-ifb-commentaries'}->{'ifb-commentary'}->gamecode;
	
	$game_code = array();
	foreach($gamecode->attributes() as $attr=>$value)
	{
		$value = (array)$value;
		$game_code[$attr] = $value[0];
	}
	
	
	
	$ifb_comments  = $sports->{'soccer-ifb-commentaries'}->{'ifb-commentary'}->comments;	

 	foreach($ifb_comments as $ifb_comm)	
	{
		foreach($ifb_comm as $ifb_com)
		{
			foreach($ifb_com->attributes()  as $attr => $comm)
			{				
				$comm = (array)$comm;
				$comments[$i][$attr] = $comm[0];			
			}
			$i++;
		}		
	} 
	
	$sql = "SELECT id FROM games WHERE gamecode_global_code = ".$game_code['global-code']." AND gamecode_code = ".$game_code['code']." ";
	$results = $wpdb->get_row($sql);	
		
	if( $wpdb->num_rows)
	{
		$gameid = $results->id;	
		
		$sql = "SELECT MAX( comment_number ) AS max_number FROM commentaries WHERE gamecode_global_code = '".$game_code['global-code']."' AND  gamecode_code = '".$game_code['code']."'  ";
		$res = $wpdb->get_row($sql);
		$max_comment_number = '';
		if($wpdb->num_rows)
		{
			$max_comment_number = 	$res->max_number;
		}
		
			
		foreach($comments as $comment)
		{		
			
			if(($comment['number'] > $max_comment_number ) or empty($max_comment_number))
			{	
				$sql = "INSERT INTO commentaries (game_id, gamecode_global_code, gamecode_code, comment_half, comment_time, comment_number, comment_headline, comment_text) 
					VALUES('".$gameid."', '".$game_code['global-code']."', '".$game_code['code']."', '".$comment['half']."', '".$comment['time']."', '".$comment['number']."', '".$comment['headline']."', '".mysql_real_escape_string($comment['text'])."')";
				$res = $wpdb->query($sql);	
			}
			
		}
	}
	
}


function parse_pbp($xml){
	$games = array();
	$date = $xml['sports-play-by-play']->date;
	$time = $xml['sports-play-by-play']->time;
	$version = $xml['sports-play-by-play']->version;
	$league = $xml['sports-play-by-play']->league;
	$season = $xml['sports-play-by-play']->season;
	$soccer_date = $xml['sports-play-by-play']->{'soccer-ifb-game'}->date;
	$soccer_time = $xml['sports-play-by-play']->{'soccer-ifb-game'}->time;
	$soccer_local_dt = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'local-game-date'};
	$soccer_local_time = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'local-time'};
	$gamecode = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'gamecode'};
	$coverage = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'coverage'};
	$aggregate_partner_game = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'aggregate-partner-game'};
	$game_type = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'game-type'};
	$week = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'week'};
	$gamestate = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'gamestate'};
	$stadium = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'stadium'};
	$match_number = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'match-number'};

	$visiting_team = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'visiting-team'}->{'team-info'};
	$vteam = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'visiting-team'}->{'team'};
	$vrecord = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'visiting-team'}->{'record'};
	$vlinescore = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'visiting-team'}->{'linescore'};
	$vhalf = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'visiting-team'}->{'linescore'}->{'half'};
	$vformation = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'visiting-team'}->{'formation'};


	$home_team = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'home-team'}->{'team-info'};
	$hteam = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'home-team'}->{'team'};
	$hrecord = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'home-team'}->{'record'};
	$hlinescore = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'home-team'}->{'linescore'};
	$hhalf = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'home-team'}->{'linescore'}->{'half'};
	$hformation = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'home-team'}->{'formation'};

	$plays = $xml['sports-play-by-play']->{'soccer-ifb-game'}->{'plays'}->{'play'};





	foreach($date->attributes() as $attr => $value)
	{		
		$value = (array) $value;
		$games['date'][$attr] = $value[0];
	}
	foreach($time->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['time'][$attr] = $value[0];
	}
	foreach($version->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['version'][$attr] = $value[0];
	}
	foreach($league->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['league'][$attr] = $value[0];
	}
	foreach($season->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['season'][$attr] = $value[0];
	}
	foreach($soccer_date->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['date'][$attr] = $value[0];
	}
	foreach($soccer_time->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['time'][$attr] = $value[0];
	}
	foreach($soccer_local_dt->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['localdt'][$attr] = $value[0];
	}
	foreach($soccer_local_time->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['local_time'][$attr] = $value[0];
	}
	foreach($gamecode->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['gamecode'][$attr] = $value[0];
	}
	foreach($coverage->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['coverage'][$attr] = $value[0];
	}
	foreach($aggregate_partner_game->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['aggregate_partner_game'][$attr] = $value[0];
	}
	foreach($game_type->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['game_type'][$attr] = $value[0];
	}
	foreach($week->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['week'][$attr] = $value[0];
	}
	foreach($gamestate->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['gamestate'][$attr] = $value[0];
	}
	foreach($stadium->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['stadium'][$attr] = $value[0];
	}
	foreach($match_number->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['match_number'][$attr] = $value[0];
	}
	foreach($visiting_team->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['visiting_team'][$attr] = $value[0];
	}
	foreach($vteam->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['vteam'][$attr] = $value[0];
	}
	foreach($vrecord->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['vrecord'][$attr] = $value[0];
	}
	foreach($vlinescore->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['vlinescore'][$attr] = $value[0];
	}
	foreach($vhalf->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['vhalf'][$attr] = $value[0];
	}
	foreach($vformation->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['vformation'][$attr] = $value[0];
	}

	foreach($home_team->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['home_team'][$attr] = $value[0];
	}
	foreach($hteam->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['hteam'][$attr] = $value[0];
	}
	foreach($hrecord->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['hrecord'][$attr] = $value[0];
	}
	foreach($hlinescore->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['hlinescore'][$attr] = $value[0];
	}
	foreach($hhalf->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['hhalf'][$attr] = $value[0];
	}
	foreach($hformation->attributes() as $attr => $value)
	{	
		$value = (array) $value;
		$games['soccer']['hformation'][$attr] = $value[0];
	}


	$i =0;
	foreach($plays as $key=>$pvalue )
	{
		 foreach($pvalue->attributes() as $attr=>$play)
		{
			//echo "<br>".$attr." - ".$play;
			$play = (array)$play;
			$games['soccer']['play'][$i][$attr] = $play[0];
		} 	
		$i++;	
	}

	
	
	


	$sports_date = $games['date']['year']."-".$games['date']['month']."-".$games['date']['date']." ".$games['time']['hour'].":".$games['time']['minute'].":".$games['time']['second'] ;
	$soccer_date = $games['soccer']['date']['year']."-".$games['soccer']['date']['month']."-".$games['soccer']['date']['date']." ".$games['soccer']['time']['hour'];
	$game_localdt = $games['soccer']['localdt']['year']."-".$games['soccer']['localdt']['month']."-".$games['soccer']['localdt']['date']." ".$games['soccer']['local_time']['minute'].":".$games['soccer']['local_time']['hour'];

	global $wpdb;
	$sql = "SELECT id FROM games WHERE gamecode_global_code = '".$games['soccer']['gamecode']['global-code']."' AND gamecode_code = '".$games['soccer']['gamecode']['code']."' ";
	$results = $wpdb->get_row($sql);
	
	if( $wpdb->num_rows == 0)
	{
		global $wpdb;
		$sql = "INSERT INTO games SET 
			sports_date = '".$sports_date."',
			sports_day = '".$games['date']['day']."' ,
			sports_timezone = '".$games['time']['timezone']."',
			sports_utc_hour = '".$games['time']['utc-hour']."',
			sports_utc_minute = '".$games['time']['utc-minute']."',
			sports_version_number = '".$games['version']['number']."',
			league_global_id = '".$games['league']['global-id']."',
			league_name	 = '".$games['league']['name']."',
			league_alias = '".$games['league']['alias']."',
			league_display_name = '".$games['league']['display-name']."',
			season_year = '".$games['season']['year']."',
			season_id = '".$games['season']['id']."',
			season_description = '".$games['season']['description']."',
			game_date = '".$soccer_date."',
			game_day =  '".$games['soccer']['date']['day']."',
			game_utc_hour = '".$games['soccer']['time']['utc-hour']."',
			game_utc_minute = '".$games['soccer']['time']['utc-minute']."',
			game_local_game_date = '".$game_localdt."',
			game_local_game_day = '".$games['soccer']['localdt']['day']."',
			gamecode_global_code = '".$games['soccer']['gamecode']['global-code']."',
			gamecode_code = '".$games['soccer']['gamecode']['code']."',
			coverage_level = '".$games['soccer']['coverage']['level']."',
			aggregate_partner_global_code = '".$games['soccer']['aggregate_partner_game']['global-code']."',
			game_type_id = '".$games['soccer']['game_type']['id']."',
			game_type_description = '".$games['soccer']['game_type']['description']."',
			week = '".$games['soccer']['week']['week']."',
			gamestate_status_id = '".$games['soccer']['gamestate']['status-id']."',
			gamestate_status = '".$games['soccer']['gamestate']['status']."',
			gamestate_period = '".$games['soccer']['gamestate']['period']."',
			gamestate_minutes =  '".$games['soccer']['gamestate']['minutes']."',
			gamestate_seconds =  '".$games['soccer']['gamestate']['seconds']."',
			gamestate_additional_minutes = '".$games['soccer']['gamestate']['additional-minutes']."',
			stadium_global_id = '".$games['soccer']['stadium']['global-id']."',
			stadium_id = '".$games['soccer']['stadium']['id']."',
			stadium_global_name = '".$games['soccer']['stadium']['name']."',
			match_number = '".$games['soccer']['match_number']['number']."',
			visiting_team_global_id = '".$games['soccer']['visiting_team']['global-id']."',
			visiting_team_id = '".$games['soccer']['visiting_team']['id']."',
			visiting_team_global_location = '".$games['soccer']['visiting_team']['location']."',
			visiting_team_global_name = '".$games['soccer']['visiting_team']['name']."',
			visiting_team_global_alias = '".$games['soccer']['visiting_team']['alias']."',
			visiting_team_global_display_name = '".$games['soccer']['visiting_team']['display-name']."',
			visiting_team_global_primary_color = '".$games['soccer']['vteam']['primary-color']."',
			visiting_team_global_shorts_color = '".$games['soccer']['vteam']['shorts-color']."',
			visiting_team_global_wins = '".$games['soccer']['vrecord']['wins']."',
			visiting_team_global_ties = '".$games['soccer']['vrecord']['ties']."',
			visiting_team_global_losses = '".$games['soccer']['vrecord']['losses']."',
			visiting_team_global_score = '".$games['soccer']['vhalf']['score']."',
			visiting_team_global_shots = '".$games['soccer']['vhalf']['shots']."',
			visiting_team_global_half = '".$games['soccer']['vhalf']['half']."',
			visiting_team_global_formation = '".$games['soccer']['vformation']['formation']."',
			home_team_global_id = '".$games['soccer']['home_team']['global-id']."',
			home_team_id = '".$games['soccer']['home_team']['id']."',
			home_team_global_location = '".$games['soccer']['home_team']['location']."',
			home_team_global_name = '".$games['soccer']['home_team']['name']."',
			home_team_global_alias = '".$games['soccer']['home_team']['alias']."',
			home_team_global_display_name = '".$games['soccer']['home_team']['display-name']."',
			home_team_global_primary_color = '".$games['soccer']['hteam']['primary-color']."',
			home_team_global_shorts_color = '".$games['soccer']['hteam']['shorts-color']."',
			home_team_global_wins = '".$games['soccer']['hrecord']['wins']."',
			home_team_global_ties = '".$games['soccer']['hrecord']['ties']."',
			home_team_global_losses = '".$games['soccer']['hrecord']['losses']."',
			home_team_global_score = '".$games['soccer']['hhalf']['score']."',
			home_team_global_shots = '".$games['soccer']['hhalf']['shots']."',
			home_team_global_half = '".$games['soccer']['hhalf']['half']."',
			home_team_global_formation = '".$games['soccer']['hformation']['formation']."' 
	";
		$res = $wpdb->query($sql);
		$gameid = $wpdb->insert_id;
	}
	else	
	{
		$gameid = $results->id;
	}
	
	$seq = 0;
	$sql = "SELECT MAX(seq_number) AS seq FROM pbp WHERE game_id = '".$gameid."'  ";	
	$res = $wpdb->get_row($sql);
	if($wpdb->num_rows)
	{
		$seq = $res->seq;
	}
	
	foreach($games['soccer']['play'] as $play){
		if($play['seq-number'] > $seq)
		{
				$sqlplays = "INSERT INTO pbp SET 
					game_id = '".$gameid."',
					half = '".$play['half']."',
					minutes = '".$play['minutes']."',
					seconds = '".$play['seconds']."',
					additional_minutes = '".$play['additional-minutes']."',
					seq_number = '".$play['seq-number']."',
					event_number = '".$play['event-number']."',
					event_text = '".$play['event-text']."',
					global_team_id = '".$play['global-team-id']."',
					team_id = '".$play['team-id']."',
					away_score = '".$play['away-score']."',
					home_score = '".$play['home-score']."',
					global_offensive_player_id = '".$play['global-offensive-player-id']."',
					global_defensive_player_id = '".$play['global-defensive-player-id']."',
					global_assisting_player_id = '".$play['global-assisting-player-id']."',
					offensive_player_id = '".$play['offensive-player-id']."',
					defensive_player_id = '".$play['defensive-player-id']."',
					assisting_player_id = '".$play['assisting-player-id']."',
					offensive_player_first_name = '".$play['offensive-player-first-name']."',
					offensive_player_last_name = '".$play['offensive-player-last-name']."',
					offensive_player_shirt_name = '".$play['offensive-player-shirt-name']."',
					offensive_player_full_first_name = '".$play['offensive-player-full-first-name']."',
					offensive_player_full_last_name = '".$play['offensive-player-full-last-name']."',
					defensive_player_first_name = '".$play['defensive-player-first-name']."',
					defensive_player_last_name = '".$play['defensive-player-last-name']."',
					defensive_player_shirt_name = '".$play['defensive-player-shirt-name']."',
					defensive_player_full_first_name = '".$play['defensive-player-full-first-name']."',
					defensive_player_full_last_name = '".$play['defensive-player-full-last-name']."',
					assisting_player_first_name = '".$play['assisting-player-first-name']."',
					assisting_player_last_name = '".$play['assisting-player-last-name']."',
					assisting_player_shirt_name = '".$play['assisting-player-shirt-name']."',
					assisting_player_full_first_name = '".$play['assisting-player-full-first-name']."',
					assisting_player_full_last_name = '".$play['assisting-player-full-last-name']."',
					x_coord = '".$play['x-coord']."',
					y_coord = '".$play['y-coord']."'
					";
				$res = $wpdb->query($sqlplays);	
		}
	}
}
		
  
 
 function create_feed_tables (){
	
	if ( file_exists(ABSPATH . 'wp-admin/includes/upgrade.php') ) 
	{
		require_once(ABSPATH . '/wp-admin/includes/upgrade.php');
	} 
	else 
	{ // Wordpress <= 2.2
		require_once(ABSPATH . 'wp-admin/upgrade-functions.php');
	}	
 
	$sql = "CREATE TABLE IF NOT EXISTS `commentaries` (
	  `game_id` int(10) NOT NULL,
	  `gamecode_global_code` int(50) NOT NULL,
	  `gamecode_code` bigint(50) NOT NULL,
	  `comment_half` int(10) NOT NULL,
	  `comment_time` int(10) NOT NULL,
	  `comment_number` int(10) NOT NULL,
	  `comment_headline` varchar(255) NOT NULL,
	  `comment_text` text NOT NULL
	)";
	dbDelta($sql);	
	
	$sql = "CREATE TABLE IF NOT EXISTS `games` (
	  `id` int(10) NOT NULL AUTO_INCREMENT,
	  `sports_date` datetime NOT NULL,
	  `sports_day` int(10) NOT NULL,
	  `sports_timezone` varchar(40) NOT NULL,
	  `sports_utc_hour` int(5) NOT NULL,
	  `sports_utc_minute` int(5) NOT NULL,
	  `sports_version_number` int(5) NOT NULL,
	  `league_global_id` int(10) NOT NULL,
	  `league_name` varchar(50) NOT NULL,
	  `league_alias` varchar(10) NOT NULL,
	  `league_display_name` varchar(50) NOT NULL,
	  `season_year` int(10) NOT NULL,
	  `season_id` int(10) NOT NULL,
	  `season_description` varchar(50) NOT NULL,
	  `game_date` datetime NOT NULL,
	  `game_day` int(10) NOT NULL,
	  `game_utc_hour` int(10) NOT NULL,
	  `game_utc_minute` int(10) NOT NULL,
	  `game_local_game_date` datetime NOT NULL,
	  `game_local_game_day` int(10) NOT NULL,
	  `gamecode_global_code` int(50) NOT NULL,
	  `gamecode_code` bigint(50) NOT NULL,
	  `coverage_level` int(10) NOT NULL,
	  `aggregate_partner_global_code` int(10) NOT NULL,
	  `game_type_id` int(10) NOT NULL,
	  `game_type_description` varchar(30) NOT NULL,
	  `week` int(10) NOT NULL,
	  `gamestate_status_id` int(10) NOT NULL,
	  `gamestate_status` varchar(20) NOT NULL,
	  `gamestate_period` int(10) NOT NULL,
	  `gamestate_minutes` int(10) NOT NULL,
	  `gamestate_seconds` int(10) NOT NULL,
	  `gamestate_additional_minutes` int(10) NOT NULL,
	  `stadium_global_id` int(10) NOT NULL,
	  `stadium_id` int(10) NOT NULL,
	  `stadium_global_name` varchar(30) NOT NULL,
	  `match_number` int(5) NOT NULL,
	  `visiting_team_global_id` int(20) NOT NULL,
	  `visiting_team_id` int(10) NOT NULL,
	  `visiting_team_global_location` varchar(50) NOT NULL,
	  `visiting_team_global_name` varchar(50) NOT NULL,
	  `visiting_team_global_alias` varchar(30) NOT NULL,
	  `visiting_team_global_display_name` varchar(50) NOT NULL,
	  `visiting_team_global_primary_color` varchar(30) NOT NULL,
	  `visiting_team_global_shorts_color` varchar(30) NOT NULL,
	  `visiting_team_global_wins` int(10) NOT NULL,
	  `visiting_team_global_ties` int(10) NOT NULL,
	  `visiting_team_global_losses` int(10) NOT NULL,
	  `visiting_team_global_score` int(10) NOT NULL,
	  `visiting_team_global_shots` int(10) NOT NULL,
	  `visiting_team_global_half` int(10) NOT NULL,
	  `visiting_team_global_formation` varchar(40) NOT NULL,
	  `home_team_global_id` int(10) NOT NULL,
	  `home_team_id` int(10) NOT NULL,
	  `home_team_global_location` varchar(50) NOT NULL,
	  `home_team_global_name` varchar(50) NOT NULL,
	  `home_team_global_alias` varchar(20) NOT NULL,
	  `home_team_global_display_name` varchar(50) NOT NULL,
	  `home_team_global_primary_color` varchar(30) NOT NULL,
	  `home_team_global_shorts_color` varchar(30) NOT NULL,
	  `home_team_global_wins` int(10) NOT NULL,
	  `home_team_global_ties` int(10) NOT NULL,
	  `home_team_global_losses` int(10) NOT NULL,
	  `home_team_global_score` int(10) NOT NULL,
	  `home_team_global_shots` int(10) NOT NULL,
	  `home_team_global_half` int(10) NOT NULL,
	  `home_team_global_formation` varchar(50) NOT NULL,
	  PRIMARY KEY (`id`)
	) ";
	dbDelta($sql);	
	
	$sql = "CREATE TABLE IF NOT EXISTS `pbp` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `game_id` int(10) NOT NULL,
	  `half` int(10) NOT NULL,
	  `minutes` int(10) NOT NULL,
	  `seconds` int(10) NOT NULL,
	  `additional_minutes` int(10) NOT NULL,
	  `seq_number` int(10) NOT NULL,
	  `event_number` int(10) NOT NULL,
	  `event_text` varchar(100) NOT NULL,
	  `global_team_id` int(10) NOT NULL,
	  `team_id` int(10) NOT NULL,
	  `away_score` int(10) NOT NULL,
	  `home_score` int(10) NOT NULL,
	  `global_offensive_player_id` int(10) NOT NULL,
	  `global_defensive_player_id` int(10) NOT NULL,
	  `global_assisting_player_id` int(10) NOT NULL,
	  `offensive_player_id` int(10) NOT NULL,
	  `defensive_player_id` int(10) NOT NULL,
	  `assisting_player_id` int(10) NOT NULL,
	  `offensive_player_first_name` varchar(100) NOT NULL,
	  `offensive_player_last_name` varchar(100) NOT NULL,
	  `offensive_player_shirt_name` varchar(100) NOT NULL,
	  `offensive_player_full_first_name` varchar(100) NOT NULL,
	  `offensive_player_full_last_name` varchar(100) NOT NULL,
	  `defensive_player_first_name` varchar(100) NOT NULL,
	  `defensive_player_last_name` varchar(100) NOT NULL,
	  `defensive_player_shirt_name` varchar(100) NOT NULL,
	  `defensive_player_full_first_name` varchar(100) NOT NULL,
	  `defensive_player_full_last_name` varchar(100) NOT NULL,
	  `assisting_player_first_name` varchar(100) NOT NULL,
	  `assisting_player_last_name` varchar(100) NOT NULL,
	  `assisting_player_shirt_name` varchar(100) NOT NULL,
	  `assisting_player_full_first_name` varchar(100) NOT NULL,
	  `assisting_player_full_last_name` varchar(100) NOT NULL,
	  `x_coord` int(10) NOT NULL,
	  `y_coord` int(10) NOT NULL,
	  PRIMARY KEY (`id`)
	)";
	dbDelta($sql);	
 }
  
?>