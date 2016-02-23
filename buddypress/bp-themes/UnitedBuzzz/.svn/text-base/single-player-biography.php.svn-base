<?php
/*
Template Name: Player Biography
*/
?>
<?php get_header('main') ?>
<?php get_sidebar('left') ?>
<?php
	$playerID = $_GET['playerID'];
	$playerPost = get_post($playerID);
	$termID = $_GET['termID'];
?>

<div id="center-content-div-wrapper">

	<div id="center-content-div" class="player-page-content-wraper center-content-div-menu-pages">
	
		<div id="player-tabs">
			<ul>
				<li><a href="<?php echo get_permalink($playerID); ?>"><?php echo $playerPost->post_title; ?></a></li>
				<?php $playerBiographyPage = get_page_by_title('PlayerBiography'); ?>
				<li><a class="activePage" href="<?php echo get_permalink($playerBiographyPage->ID).'?playerID='.$playerID.'&termID='.$termID; ?>">Information</a></li>
				<li><a href="<?php echo get_tag_link($termID).'?postType=post&playerID='.$playerID; ?>">Blog Posts</a></li>.
				<li><a href="<?php echo get_tag_link($termID).'?postType=news&playerID='.$playerID; ?>">News</a></li>
				<?php $playerFans = get_page_by_title('PlayerFans'); ?>
				<li><a href="<?php echo get_permalink($playerFans->ID).'?playerID='.$playerID.'&termID='.$termID; ?>">Fans</a></li>
			</ul>
		</div><!--END #player-tabs -->
		
		<div id="player-bio">
			
			<div class="custom-post-type-content" id="player-bio-excerpt">
				<div class="squad-player-image-wrapper player-bio-image-div">
					<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($playerID)); ?>
					<!--<img src="<?php echo $image[0]; ?>" width="200" height="250" />-->
					<?php echo get_the_post_thumbnail($playerID, 'player_big_image'); ?>
				</div>
			<?php
				#$custom = get_post_custom($playerID);
				echo nl2br($playerPost->post_content);
			?>
			</div>
			<div class="clear"></div>
		</div><!--END #player-bio-->
			<div class="clear"></div>
	</div> <!-- #center-content-div -->

</div> <!-- #center-content-div-wrapper -->

<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
