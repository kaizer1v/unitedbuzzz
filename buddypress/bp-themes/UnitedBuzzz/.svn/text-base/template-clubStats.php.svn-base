<?php
/*
*Template Name: Club Stats
*/
?>
<?php get_header('main') ?>
<?php get_sidebar('left') ?>
<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
	<div id="center-content-div">
		<div id="player-tabs">
			<ul>
				<?php $clubStatsPage = get_page_by_title('ClubStats'); ?>
				<li><a class="activePage" href="<?php echo get_permalink($clubStatsPage->ID); ?>">Club Stats</a></li>
				<?php $squadStatsPage = get_page_by_title('SquadStats'); ?>
				<li><a href="<?php echo get_permalink($squadStatsPage->ID); ?>">Squad Stats</a></li>
			</ul>
		</div><!--END #player-tabs -->
	
	<?php
		global $wpdb;
		$query = "SELECT * FROM ".$table_prefix."posts
					WHERE post_type='club_stats' AND post_status='publish'
					GROUP BY post_title
					ORDER BY post_title DESC";
		$clubStats = $wpdb->get_results($query);
		
	
		/*
		$totalPosts = wp_count_posts('club_stats');
		$args = array('post_type' => 'club_stats', 'numberposts' => $totalPosts->publish);
		$clubStats = get_posts($args);
		*/
		#$leguesCups = get_terms('club_stats_category', array('hide_empty' => 0));
		#print_r($leguesCups);
	?>
		<select id="select_club_stats_date">
		<?php foreach($clubStats as $clubStat) { ?>
			<option id="<?php echo 'stats-'.$clubStat->ID; ?>"><?php echo $clubStat->post_title; ?></option>
		<?php } ?>
		</select>
		
		<select id="select_club_stats_type">
		<?php
			$leguesCups = get_terms('club_stats_category', array('hide_empty' => 0));
			foreach($leguesCups as $leagueCup) {
		?>
			<option id="<?php echo 'lc-'.$leagueCup->term_id; ?>" name="<?php echo $leagueCup->slug; ?>"><?php echo $leagueCup->name; ?></option>
		<?php } ?>
		</select>
		
		<button value="View" id="btn_club_stats_view">View</button>
		
		<div id="clubStats">
			<?php echo $clubStats[0]->post_content; ?>
		</div>
		
	</div><!--END #center-content-div-->
</div>


<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
