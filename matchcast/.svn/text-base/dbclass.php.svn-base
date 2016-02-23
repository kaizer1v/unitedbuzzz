<?php
global $wpdb;		
define('TBL_COST_UNITS', $wpdb->prefix.'wpe_cost_units');
define('TBL_LABOUR_COST', $wpdb->prefix.'wpe_labour_cost');
	
class Match_db
{
	var $db ;
	function __construct()
	{
		global $wpdb;
		$this->db = $wpdb;
	}
	
	function get_all_matches()
	{
		
		$sql = "SELECT gamecode_global_code, home_team_display_name AS home_team, visit_team_display_name AS visiting_team, game_date_time from schedule ORDER BY game_date_time DESC  ";
		$results = $this->db->get_results($sql);
		if($this->db->num_rows)
		{
			return $results;
		}
		else
		{
			return false;
		}
	}
	
	function get_mtach_name($globalid)
	{
		$sql = "SELECT gamecode_global_code, home_team_display_name AS home_team, visit_team_display_name AS visiting_team, game_date_time  FROM schedule WHERE gamecode_global_code	= ".$globalid."  ";
		$results = $this->db->get_row($sql);
		if($this->db->num_rows)
		{
			return $results;
		}
		
	}
	
	function get_all_commentaries($gamecode_global_code)
	{
		$sql = "SELECT * FROM commentaries WHERE gamecode_global_code = '".$gamecode_global_code."' ORDER BY comment_number DESC  ";
		$results = $this->db->get_results($sql);
		if($this->db->num_rows)
		{
			return $results;
		}
		else
		{
			return false;
		}
	}
	
	function add_chants_oncomments($chant_list, $game_global_code)
	{
		foreach($chant_list as $key=>$chant)
		{
			$sql = "UPDATE commentaries  SET chant_id = '".$chant."' WHERE comment_number = '".$key."' AND gamecode_global_code = '".$game_global_code."' ";
			$res = $this->db->query($sql);	
		}
	}
	
	function save_comments($comments,$headline,$number, $ctime, $game_global_code, $gamecode_code)
	{
		$sql = "INSERT INTO commentaries (gamecode_global_code, gamecode_code, comment_time, comment_number, comment_headline, comment_text, chant_id) VALUES('".$game_global_code."', '".$gamecode_code."', '".$ctime."', '".$number."', '".$headline."', '".$comments."', '')";
		$res = $this->db->query($sql);	
		return true;
	}
	function get_schedule_data($schid)
	{
		$sql = "SELECT * FROM schedule WHERE gamecode_global_code = ".$schid." ";
		$results = $this->db->get_row($sql);
		if($this->db->num_rows)
		{
			return $results;
		}
		else
		{
			return false;
		}
	}
	
	function insert_match()
	{
		$match = $this->get_match($_POST['gamecode_global_code']);
		if(!$match)
		{
			//insert
			$sql = "INSERT INTO games SET ";
		}
		else
		{
			//update
			$sql = "UPDATE games SET ";
		}
		
		$sql .=	"league_global_id = '".$_POST['league_global_id']."',
				league_name = '".$_POST['league_name']."',
				league_alias = '".$_POST['league_alias']."',
				league_display_name = '".$_POST['league_display_name']."',
				season_year = '".$_POST['season_year']."',
				season_id = '".$_POST['season_id']."',
				season_description = '".$_POST['season_description']."',
				game_date = '".$_POST['game_date']."',
				game_day = '".$_POST['game_day']."',
				game_utc_hour = '".$_POST['game_utc_hour']."',
				game_utc_minute = '".$_POST['game_utc_minute']."',
				game_local_game_date = '".$_POST['game_local_game_date']."',
				game_local_game_day = '".$_POST['game_local_game_day']."',";
		if(!$match)
		$sql .=	"gamecode_global_code = '".$_POST['gamecode_global_code']."', ";
				
		$sql .=	"gamecode_code = '".$_POST['gamecode_code']."',
				coverage_level = '".$_POST['coverage_level']."',
				aggregate_partner_global_code = '".$_POST['aggregate_partner_global_code']."',
				game_type_id = '".$_POST['game_type_id']."',
				game_type_description = '".$_POST['game_type_description']."',
				week = '".$_POST['week']."',
				gamestate_status_id = '".$_POST['gamestate_status_id']."',
				gamestate_status = '".$_POST['gamestate_status']."',
				gamestate_minutes = '".$_POST['gamestate_minutes']."',
				gamestate_seconds = '".$_POST['gamestate_seconds']."',
				gamestate_additional_minutes = '".$_POST['gamestate_additional_minutes']."',
				stadium_global_id = '".$_POST['stadium_global_id']."',
				stadium_id = '".$_POST['stadium_id']."',
				stadium_global_name = '".$_POST['stadium_global_name']."',
				match_number = '".$_POST['match_number']."',
				visiting_team_global_id = '".$_POST['visiting_team_global_id']."',
				visiting_team_id = '".$_POST['visiting_team_id']."',
				visiting_team_global_location = '".$_POST['visiting_team_global_location']."',
				visiting_team_global_name = '".$_POST['visiting_team_global_name']."',
				visiting_team_global_alias = '".$_POST['visiting_team_global_alias']."',
				visiting_team_global_display_name = '".$_POST['visiting_team_global_display_name']."',
				visiting_team_global_primary_color = '".$_POST['visiting_team_global_primary_color']."',
				visiting_team_global_shorts_color = '".$_POST['visiting_team_global_shorts_color']."',
				visiting_team_global_wins = '".$_POST['visiting_team_global_wins']."',
				visiting_team_global_ties = '".$_POST['visiting_team_global_ties']."',
				visiting_team_global_losses = '".$_POST['visiting_team_global_losses']."',
				visiting_team_global_score = '".$_POST['visiting_team_global_score']."',
				visiting_team_global_shots = '".$_POST['visiting_team_global_shots']."',
				visiting_team_global_half = '".$_POST['visiting_team_global_half']."',
				visiting_team_global_formation = '".$_POST['visiting_team_global_formation']."',
				home_team_global_id = '".$_POST['home_team_global_id']."',
				home_team_id = '".$_POST['home_team_id']."',
				home_team_global_location = '".$_POST['home_team_global_location']."',
				home_team_global_name = '".$_POST['home_team_global_name']."',
				home_team_global_alias = '".$_POST['home_team_global_alias']."',
				home_team_global_display_name = '".$_POST['home_team_global_display_name']."',
				home_team_global_primary_color = '".$_POST['home_team_global_primary_color']."',
				home_team_global_shorts_color = '".$_POST['home_team_global_shorts_color']."',
				home_team_global_wins = '".$_POST['home_team_global_wins']."',
				home_team_global_ties = '".$_POST['home_team_global_ties']."',
				home_team_global_losses = '".$_POST['home_team_global_losses']."',
				home_team_global_score = '".$_POST['home_team_global_score']."',
				home_team_global_shots = '".$_POST['home_team_global_shots']."',
				home_team_global_half = '".$_POST['home_team_global_half']."',
				home_team_global_formation = '".$_POST['home_team_global_formation']."'
				";
		if($match)
		{
			$sql .= " WHERE gamecode_global_code = ".$match->gamecode_global_code." ";
		}
		
		$res = $this->db->query($sql);			
	}
	
	function get_match($matchid)
	{
		$sql = "SELECT * FROM games WHERE gamecode_global_code = ".$matchid." ";
		$results = $this->db->get_row($sql);
		if($this->db->num_rows)
		{
			return $results;
		}
		else
		{
			return false;
		}
	}
	
	function check_new_comments($lastcomid, $matchid)
	{
		$sql = "SELECT * FROM commentaries WHERE id > ".$lastcomid." AND 	gamecode_global_code = ".$matchid." ORDER BY comment_number DESC ";
		$results = $this->db->get_results($sql);
		if($this->db->num_rows)
		{
			return $results;
		}
		else
		{
			return false;
		}
	}
	function new_max_comment($matchid)
	{
		$sql = "SELECT MAX(id) AS mnum FROM commentaries  WHERE gamecode_global_code = ".$matchid." ";
		$results = $this->db->get_row($sql);
		if($this->db->num_rows)
		{
			return $results;
		}
		else
		{
			return false;
		}
	}
	
	function update_comment_edit($cid,$cnumber,$ctime, $chline, $ctext ,$cchant)
	{
		$sql = "UPDATE commentaries SET comment_time = '".$ctime."', comment_number = '".$cnumber."', comment_headline = '".$chline."', comment_text = '". $ctext."', chant_id = '".$cchant."' WHERE id = ".$cid."  ";
		$res = $this->db->query($sql);
		return true;
	}
	function delete_comment($cid)
	{
		 $sql = "DELETE FROM commentaries WHERE id = '".$cid."' ";	
		$res = $this->db->query($sql);
		return true;
	}
	function match_chants($code)
	{
		$sql = "SELECT id, chant_id FROM commentaries WHERE gamecode_global_code = '".$code."' AND chant_id != 0 " ;
		$results = $this->db->get_results($sql);
		if($this->db->num_rows)
		{
			return $results;
		}
		else
		{
			return false;
		}
	}
}	
?>