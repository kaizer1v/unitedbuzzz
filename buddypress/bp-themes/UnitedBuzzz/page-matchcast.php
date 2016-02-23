<?php 
/*
Template Name: Page Matchcast
*/

get_header('matchcast'); ?>
<?php get_sidebar('left'); ?>
<div id="main-container">
	<div id="matchcast-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="matchcast-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			<?php the_content();?>
		</div>
	</div> <!-- #content-container -->
</div>
<?php //get_sidebar('right'); ?>
<div class="clear"></div>
<?php get_footer(); ?>
