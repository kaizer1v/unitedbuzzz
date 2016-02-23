<div class='wrap nosubsub'>
	<h2>Player Stats List</h2>
	<?php 
		if(!empty($message))
		{
			?>
			<div class="updated"><?php echo $message ?></div>
			<?php	
		}
		$homeTeam = get_post_meta($_GET['pid'], 'home_team',true);
		$awayTeam = get_post_meta($_GET['pid'], 'away_team',true);
		
		
		player_stats_list_display($_GET['playerStatsId'],'home',$homeTeam);
	?>
	
	<br />
	<br />
	<br />
	<?php player_stats_list_display($_GET['playerStatsId'],'away',$homeTeam);?>

</div>

<?php 
function player_stats_list_display($playerStatsId,$team_type,$team_name){ ?>
	<form name="" method="post"  >
		<table  style="width: 100%" class="widefat playerstatstable" >
			<tr>
				<th colspan="12"><b><?php echo $team_name;?></b></th>
			</tr>
			<tr>
				<th>J No.</th>
				<th>Name</th>
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
			
			global $wpdb;
			$myResults = $wpdb->get_results( "SELECT * FROM player_stats where match_id=".$playerStatsId." and team_name='".$team_type."'");
			$j=0;
			for($i=1;$i<=11;$i++)
			{
				
				?>
				<tr>
					<td><input type="text" name="<?php echo $team_type;?>_jno_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->jno;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_name_p<?php echo $i?>" value="<?php echo $myResults[$j]->name;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_total_shots_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->total_shots;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_shots_on_goal_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->shots_on_goal;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_goals_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->goals;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_assists_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->assists;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_offisdes_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->offsides;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_fouls_drawn_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->fouls_drawn;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_fouls_committed_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->fouls_committed;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_saves_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->saves;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_yellow_cards_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->yellow_cards;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_red_cards_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->red_cards;?>"/></td>
				</tr>
				<?php
				$j++;
			}		
		
		?>
		<tr>
			<th colspan="12">Substitutes</th>
		</tr>
		<?php for($i=12;$i<=19;$i++)
			{
				?>
				<tr>
					<td><input type="text" name="<?php echo $team_type;?>_jno_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->jno;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_name_p<?php echo $i?>" value="<?php echo $myResults[$j]->name;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_total_shots_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->total_shots;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_shots_on_goal_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->shots_on_goal;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_goals_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->goals;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_assists_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->assists;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_offisdes_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->offsides;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_fouls_drawn_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->fouls_drawn;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_fouls_committed_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->fouls_committed;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_saves_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->saves;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_yellow_cards_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->yellow_cards;?>"/></td>
					<td><input type="text" name="<?php echo $team_type;?>_red_cards_p<?php echo $i?>" class="number_input_text" value="<?php echo $myResults[$j]->red_cards;?>"/></td>
				</tr>
				<?php
				$j++;
			}		
		?>
		<tr>
			<td colspan="4" style="text-align:center;"><input type="submit" name="save_player_stats_<?php echo $team_type;?>" value="Submit"></td>
		</tr>
		</table>
	</form>
<?php }
