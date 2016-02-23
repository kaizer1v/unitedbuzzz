<?php
/*
*Template Name: Fixtures
*/
?>
<?php get_header('main') ?>
<?php get_sidebar('left') ?>
<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
	<div id="center-content-div" >
		
		<?php
			$parentFixtureTerms = get_categories(array(
				'type'	=> 'fixtures',
				'taxonomy' => 'fixtures_category',
				'parent' => 0,
				'hide_empty' => 0
			));
			#print_R($parentFixtureTerms);
		?>
		<div id="parent-child-fixture-tabs">
			<ul id="parent-fixtures">
			<?php
				foreach($parentFixtureTerms as $parentFixtureTerm) {
			?>
					<li id="<?php echo $parentFixtureTerm->slug; ?>"><a href="javascript:void(0)"><?php echo $parentFixtureTerm->name; ?></a></li>
			<?php
				} 
			?>
			</ul>

			<ul id="child-fixtures">
				<li id="all"><a class="activePage" href="javascript:void(0)">All</a></li>
			<?php
				$fixturesCats = get_terms('fixtures_category', array('hide_empty' => 0, 'parent' => $parentFixtureTerms[0]->term_id));
				foreach($fixturesCats as $fixturesCat) {
			?>
				<li id="<?php echo $fixturesCat->slug; ?>"><a href="javascript:void(0)"><?php echo $fixturesCat->name; ?></a></li>
			<?php } ?>
			</ul>
		</div><!--END #player-tabs -->
		
		<div id="fixtures">
		<?php
			$args = array('post_type' => 'fixtures');
			$fixtures = get_posts($args);
			foreach($fixtures as $fixture) {
		?>
			<p><?php echo $fixture->post_content; ?></p>
		<?php } ?>
		</div>
		
	</div><!--END #center-content-div-->
</div><!--END #center-content-div-wrapper-->

<?php #dynamic_sidebar('right-sidebar'); ?>
<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
