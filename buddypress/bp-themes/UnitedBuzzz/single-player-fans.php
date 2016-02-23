<?php
/*
Template Name: Player Fans
*/
?>
<?php get_header('main') ?>
<?php get_sidebar('left') ?>
<?php

	$playerID = $_GET['playerID'];
	$termID = $_GET['termID'];
	$playerPost = get_post($playerID);

	global $current_user;
	global $wpdb;
	$usersForThisPlayer = $wpdb->get_results("SELECT * FROM player_user_fans WHERE player_id=".$_GET['playerID']);
	foreach($usersForThisPlayer as $eachUser) {
		$allUsers .= $eachUser->user_id.",";
	}
	
	$users = substr($allUsers, 0, strlen($allUsers)-1);
?>

<div id="center-content-div-wrapper">

	<div id="center-content-div" class="player-page-content-wraper">

		<div id="player-tabs">
			<ul>
				<?php $playerPost = get_post($playerID); ?>
				<li><a href="<?php echo get_permalink($playerID); ?>"><?php echo $playerPost->post_title; ?></a></li>
				<?php $playerBiographyPage = get_page_by_title('PlayerBiography'); ?>
				<li><a href="<?php echo get_permalink($playerBiographyPage->ID).'?playerID='.$playerID.'&termID='.$termID; ?>">Information</a></li>
				<li><a href="<?php echo get_tag_link($termID).'?postType=post&playerID='.$playerID; ?>">Blog Posts</a></li>
				<li><a href="<?php echo get_tag_link($termID).'?postType=news&playerID='.$playerID; ?>">News</a></li>
				<?php $playerFans = get_page_by_title('PlayerFans'); ?>
				<li><a class="activePage" href="<?php echo get_permalink($playerFans->ID).'?playerID='.$playerID.'&termID='.$termID; ?>">Fans</a></li>
			</ul>
		</div><!--END #player-tabs -->
		
		<div id="menu-pages-heading-wrapper">
			<div id="menu-pages-heading">
				<h3 id="menu-pages-heading-with-search"><?php the_title();?></h3>
				<?php if ( bp_search_form_enabled() ) : ?>
					<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
						<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for Fans" id="search-input" name="s" value="" />
						<?php #echo bp_search_form_type_select() ?>
						<input type="hidden" name="fansearch" value="fansearch"></input>
						<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
						<?php wp_nonce_field( 'bp_search_form' ) ?>
					</form><!-- #search-form -->

				<?php endif; ?>
				<div class="clear"></div>
			</div>
		</div>
		
		
		<?php if ( bp_has_members('per_page=50&include='.$users) ) : ?>
			<div class="pagination">

				<div class="pag-count" id="member-dir-count">
					<?php bp_members_pagination_count() ?>
				</div>

			</div><!--END .pagination -->
				
			<?php do_action( 'bp_before_directory_members_list' ) ?>
				 
			<ul id="fan-page-list">
			<?php while ( bp_members() ) : bp_the_member(); ?>
			 
				<li>
					<div class="squad-player-image-wrapper fan-page-item-avatar-wrapper">
						<div class="fan-page-item-avatar">
							<a href="<?php bp_member_permalink() ?>"><?php bp_member_avatar('width=80&amp;height=70') ?></a>
						</div>
					</div>
					<div class="fan-page-item-wrapper">
						<div class="fan-page-item">
							<div class="fan-page-item-title">
								<a href="<?php bp_member_permalink() ?>"><?php bp_member_name() ?></a>
							</div>
							<?php do_action( 'bp_directory_members_item' ) ?>
						</div>
					
						<div class="clear">&nbsp;</div>
						<div class="fan-page-action">
							<?php
								global $bp;
								$loggedin_user_id = $bp->loggedin_user->userdata->ID;
								$other_user_id = bp_get_member_user_id();
							
								if($loggedin_user_id == $other_user_id){
									$check_string = 'its_me' ;
								}
								else{
									$check_string = friends_check_friendship_status( $loggedin_user_id, $other_user_id);
								}

									if ( $check_string == 'is_friend' ) { 
									
									}
									if ( $check_string == 'not_friends' ) {
									
									}
									if ( $check_string == 'pending' ) {
									
									}
									if ( $check_string == 'its_me' ) {
										echo "<div><a>You Found Yourself</a></div>";
									}
							?>

							<?php do_action( 'bp_directory_members_actions' ) ?>
						</div>
					</div><!--END .fan-page-item-wrapper-->
					<div class="clear">&nbsp;</div>
				</li>

			<?php endwhile; ?>
			</ul><!--END #fan-page-list-->

			<div class="clear">&nbsp;</div>
			<div class="pagination-links" id="member-dir-pag">
				<?php bp_members_pagination_links(); ?>
				<?php #wp_pagenavi(); ?>
			</div>
				
			<?php do_action( 'bp_after_directory_members_list' ) ?>
			 
			<?php bp_member_hidden_fields() ?>
				 
		<?php else: ?>

			<div id="message" class="info">
				<p><?php _e( "Sorry, no members were found.", 'buddypress' ) ?></p>
			</div>
		 
		<?php endif; ?>		
		
	
	</div> <!-- #center-content-div -->

</div> <!-- #center-content-div-wrapper -->
<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
