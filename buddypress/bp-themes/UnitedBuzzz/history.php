<?php
/*
Template Name: History Page
*/
?>
<?php get_header('index'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div">
			<div id="history-image"><?php the_post_thumbnail(); ?> </div>
			<table id="history-table">
				<tr>
					<th>Founded</th>
					<td><?php echo get_option('founded')?></td>
				</tr>
				<tr>
					<th>Manager</th>
					<td><?php echo get_option('manager')?></td>
				</tr>
				<tr>
					<th>Official Website</th>
					<td><a href="<?php echo get_option('official_website')?>"><?php echo get_option('official_website')?></a></td>
				</tr>
			</table>
			<div class="clear">&nbsp;</div>
			<div id="history-content">
				<?php the_content();?>
			</div>
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<div class="clear">&nbsp;</div>
<?php get_footer(); ?>

