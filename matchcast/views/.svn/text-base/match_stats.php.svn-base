<style>
	.thead tr th
	{
		border-bottom:2px solid #484848;font-weight:normal;padding: 7px 0px 7px 0px;text-align:left;
	}
</style>
<div class='wrap nosubsub'>
	<h2>Commentaries</h2>
		<table style="width: 800px;" class="widefat">
			<thead>
				<tr>
					<th>Cast Title</th>
					<th>Match</th>
					<th>Date</th>
					<th>Match Stats</th>
				</tr>
		</thead>	
		<tbody>
		<?php
			$commenturl = get_option('siteurl').'/wp-admin/edit.php?post_type=matchcast&page=matchstats&matchStatsId=';
			foreach($allposts as $posts)
			{
			 ?>
				<tr>
					<td><?php
						echo $posts->post_title
					?></td>
					<td>
						<?php
							$globalid = get_post_meta($posts->ID, 'match_cast_code', true);
							$results = $this->wpdb->get_mtach_name($globalid);
							echo $results->home_team ." vs ". $results->visiting_team
							
						?>
					</td>
					<td>
						<?php
							echo $results->game_date_time;
						?>
					</td>
					<td>
						<a href="<?php echo $commenturl.$globalid ?>&pid=<?php echo $posts->ID ?> ">Match Stats</a>
					</td>
				</tr>
			<?php	
			}
		?>
		</tbody>
		</table>
</div>
