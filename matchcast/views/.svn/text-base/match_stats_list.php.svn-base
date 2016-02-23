<div class='wrap nosubsub'>
	<h2>Match Stats List</h2>
	<?php 
		if(!empty($message))
		{
			?>
			<div class="updated"><?php echo $message ?></div>
			<?php	
		}
		$homeTeam = get_post_meta($_GET['pid'], 'home_team',true);
		$awayTeam = get_post_meta($_GET['pid'], 'away_team',true);
		
	?>
	<form name="" method="post" >
	<table  style="width: 100%" class="widefat">
		<tr>
			<th>Scoring Summary</th>
		</tr>		
		<tr>
			
		</tr>	
		<tr>
			<td colspan="4" style="text-align:center;"><input type="submit" name="" value="Submit"></td>
		</tr>
	</table>
	</form>
	<form name="" method="post" >
	<table  style="width: 100%" class="widefat">
		<tr>
			<th>Match Stats</th>
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
		$myResults = $wpdb->get_results( "SELECT * FROM match_stats where match_id=".$_GET['matchStatsId']." and team_name='home'");
		$myResultsOther = $wpdb->get_results( "SELECT * FROM match_stats where match_id=".$_GET['matchStatsId']." and team_name='away'");
		
		for($k=0;$k<8;$k++){ ?>
		<tr>
			<td><input type="text" name="manutd_<?php echo $matchstatarrayClass[$k]?>" class="number_input_text" value="<?php echo $myResults[0]->$arr[$k] ?>"/></td>
			<td><?php echo $matchstatarray[$k] ;?></td>
			<td><input type="text" name="other_<?php echo $matchstatarrayClass[$k] ?>" class="number_input_text" value="<?php echo $myResultsOther[0]->$arr[$k] ?>"/></td>
		</tr>
		
	<?php }
		?>		
	
	<tr>
		<td colspan="4" style="text-align:center;"><input type="submit" name="save_match_stats" value="Submit"></td>
	</tr>
	</table>
	</form>
	
	
	
	
	<br />
	<br />
		
		
		<?php matchStatList($_GET['matchStatsId'],'home',$homeTeam); ?>
				<div class='clear'></div>
				<br />
				<br />
		<?php matchStatList($_GET['matchStatsId'],'away',$awayTeam); ?>
	
	<div class="clear"></div>
	
</div>
<?php
function matchStatList($matchStatsId,$team_type,$team_name){
	global $wpdb; ?>
	<form name="" method="post" style="float:left;">
	<table  style="width:100%;" class="widefat">
		<tr>
			<th colspan="5"><?php echo $team_name; ?></th>
		</tr>		
		<tr>
			<th>No.</th>
			<th>NAME</th>
			<th>POS</th>
			<th>TIMES</th>
		</tr>		
		
		<?php 
		$myResults2 = $wpdb->get_results( "SELECT * FROM team_stats where match_id=".$matchStatsId." and team_name='".$team_type."' Order by `team_stat_id` ASC");
		$j=0;
		for($y=1;$y<=11;$y++){ ?>
		<tr>
			<td><input type="text" name="<?php echo $team_type ?>_matchStats_jno_p<?php echo $y?>" class="number_input_text" value="<?php  echo $myResults2[$j]->p_jno; ?>"/></td>
			<td>
				<input type="text" name="<?php echo $team_type ?>_matchStats_name_p<?php echo $y?>"  value="<?php  echo $myResults2[$j]->p_name; ?>"/>
				Goals
				<input type="text" name="<?php echo $team_type ?>_matchStats_numberOfGoals_p<?php echo $y?>" class="number_input_text"  value="<?php  echo $myResults2[$j]->p_goals; ?>"/>
				Substitute
				<input type="text" name="<?php echo $team_type ?>_matchStats_wasSubstituted_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_substitute; ?>"></input>
				<?php if($myResults2[$j]->p_red_card == "red_card") { ?>
					<input type="checkbox" name="<?php echo $team_type ?>_matchStats_red_chk_p<?php echo $y?>" checked="checked" value="red_card"/>Red Card
					<?php }else{?>
					<input type="checkbox" name="<?php echo $team_type ?>_matchStats_red_chk_p<?php echo $y?>"  value="red_card"/>Red Card
				<?php }
				if($myResults2[$j]->p_yellow_card == "yellow_card") { ?>
					<input type="checkbox" name="<?php echo $team_type ?>_matchStats_yellow_chk_p<?php echo $y?>" checked="checked" value="yellow_card"/>Yellow Card
				<?php }else{?>
					<input type="checkbox" name="<?php echo $team_type ?>_matchStats_yellow_chk_p<?php echo $y?>"  value="yellow_card"/>Yellow Card
				<?php } ?>	
			</td>
			<td><input type="text" name="<?php echo $team_type ?>_matchStats_pos_p<?php echo $y?>" class="number_input_text" value="<?php  echo $myResults2[$j]->p_pos; ?>"/></td>
			<td>
				Goal:<input type="text" class="number_input_text" name="<?php echo $team_type ?>_matchStats_goaltime_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_goaltime; ?>" >
				Substitute:<input type="text" class="number_input_text"  name="<?php echo $team_type ?>_matchStats_substime_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_sbstime; ?>">
				Red Card:<input type="text" class="number_input_text" name="<?php echo $team_type ?>_matchStats_redtime_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_redtime; ?>">
				Yellow Card:<input type="text" class="number_input_text" name="<?php echo $team_type ?>_matchStats_yellowtime_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_yellowtime; ?>">
			</td>
		</tr>
		
	<?php $j++;
	}
		?>		
		<tr>
			<th colspan="3">Substitutes</th>
		</tr>		
		
		<?php 
		for($y=12;$y<19;$y++){ ?>
		<tr>
			<td><input type="text" name="<?php echo $team_type ?>_matchStats_jno_p<?php echo $y?>" class="number_input_text" value="<?php  echo $myResults2[$j]->p_jno; ?>"/></td>
			<td>
				<input type="text" name="<?php echo $team_type ?>_matchStats_name_p<?php echo $y?>"  value="<?php  echo $myResults2[$j]->p_name; ?>"/>
				Goals
				<input type="text" name="<?php echo $team_type ?>_matchStats_numberOfGoals_p<?php echo $y?>" class="number_input_text"  value="<?php  echo $myResults2[$j]->p_goals; ?>"/>
				Substitute
				<input type="text" name="<?php echo $team_type ?>_matchStats_wasSubstituted_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_substitute; ?>"></input>
				<?php if($myResults2[$j]->p_red_card == "red_card") { ?>
					<input type="checkbox" name="<?php echo $team_type ?>_matchStats_red_chk_p<?php echo $y?>" checked="checked" value="red_card"/>Red Card
					<?php }else{?>
					<input type="checkbox" name="<?php echo $team_type ?>_matchStats_red_chk_p<?php echo $y?>"  value="red_card"/>Red Card
				<?php }
				if($myResults2[$j]->p_yellow_card == "yellow_card") { ?>
					<input type="checkbox" name="<?php echo $team_type ?>_matchStats_yellow_chk_p<?php echo $y?>" checked="checked" value="yellow_card"/>Yellow Card
				<?php }else{?>
					<input type="checkbox" name="<?php echo $team_type ?>_matchStats_yellow_chk_p<?php echo $y?>"  value="yellow_card"/>Yellow Card
				<?php } ?>	
			</td>
			<td><input type="text" name="<?php echo $team_type ?>_matchStats_pos_p<?php echo $y?>" class="number_input_text" value="<?php  echo $myResults2[$j]->p_pos; ?>"/></td>
			<td>
				Goal:<input type="text" class="number_input_text" name="<?php echo $team_type ?>_matchStats_goaltime_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_goaltime; ?>" >
				Substitute:<input type="text" class="number_input_text"  name="<?php echo $team_type ?>_matchStats_substime_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_sbstime; ?>">
				Red Card:<input type="text" class="number_input_text" name="<?php echo $team_type ?>_matchStats_redtime_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_redtime; ?>">
				Yellow Card:<input type="text" class="number_input_text" name="<?php echo $team_type ?>_matchStats_yellowtime_p<?php echo $y?>" value="<?php  echo $myResults2[$j]->p_yellowtime; ?>">
			</td>
		</tr>
		
	<?php $j++;
	 }
		?>		
	
	<tr>
		<td colspan="3" style="text-align:center;"><input type="submit" name="save_team_stats_<?php echo $team_type ?>" value="Submit"></td>
	</tr>
	</table>
	</form>
	<?php
}
