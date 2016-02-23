<?php
/*
*Template Name: Squad Stats
*/
?>
<?php get_header('main') ?>
<?php get_sidebar('left') ?>
<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
	<div id="center-content-div">
		<div id="player-tabs">
			<ul>
				<?php $clubStatsPage = get_page_by_title('ClubStats'); ?>
				<li><a href="<?php echo get_permalink($clubStatsPage->ID); ?>">Club Stats</a></li>
				<?php $squadStatsPage = get_page_by_title('SquadStats'); ?>
				<li><a class="activePage" href="<?php echo get_permalink($squadStatsPage->ID); ?>">Squad Stats</a></li>
			</ul>
		</div><!--END #player-tabs -->
	<?php
		global $wpdb;
		$query = "SELECT * FROM ".$table_prefix."posts
					WHERE post_type='squad_stats' AND post_status='publish'
					GROUP BY post_title
					ORDER BY post_title DESC";
		$squadStats = $wpdb->get_results($query);
		#print_r($squadStats);
		/*
		$totalPosts = wp_count_posts('squad_stats');
		$args = array('post_type' => 'squad_stats', 'numberposts' => $totalPosts->publish);
		$squadStats = get_posts($args);
		*/
	?>
	
		<select id="select_squad_stats_date">
		<?php foreach($squadStats as $squadStat) { ?>
			<option id="<?php echo 'stats-'.$squadStat->ID; ?>"><?php echo $squadStat->post_title; ?></option>
		<?php } ?>
		</select>
		
		<select id="select_squad_stats_type">
		<?php
			$leguesCups = get_terms('squad_stats_category', array('hide_empty' => 0));
			foreach($leguesCups as $leagueCup) {
		?>
			<option id="<?php echo 'lc-'.$leagueCup->term_id; ?>" name="<?php echo $leagueCup->slug; ?>"><?php echo $leagueCup->name; ?></option>
		<?php } ?>
		</select>
		
		<button value="View" id="btn_squad_stats_view">View</button>
		
		<div id="squadStats">
			<?php echo $squadStats[0]->post_content; ?>
		</div>
		
	</div><!--END #center-content-div-->
</div>


<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
