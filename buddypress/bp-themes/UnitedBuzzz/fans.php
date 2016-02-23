<?php
/*
Template Name: Fans Page
*/
?>
<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>

	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >
			<div id="menu-pages-heading-wrapper">
				<div id="menu-pages-heading">
					<h3 id="menu-pages-heading-with-search"><?php the_title();?></h3>
						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
							<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for Fans" id="search-input" name="s" value="" />
							<?php #echo bp_search_form_type_select() ?>
							<input type="hidden" name="fansearch" value="fansearch"></input>
							<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
							<?php wp_nonce_field( 'bp_search_form' ) ?>
						</form><!-- #search-form -->
					<div class="clear"></div>
				</div>	
			</div>
			
			
			
					<?php if ( bp_has_members('per_page=50') ) : ?>
						<div class="pagination">

							<div class="pag-count" id="member-dir-count">
								<?php bp_members_pagination_count() ?>
							</div>
 
						</div>
 
						<?php do_action( 'bp_before_directory_members_list' ) ?>
						 
						<ul id="fan-page-list">
							<?php while ( bp_members() ) : bp_the_member(); ?>
						 
							<li>
								<div class="squad-player-image-wrapper fan-page-item-avatar-wrapper">
									<div class="fan-page-item-avatar">
										<a href="<?php bp_member_permalink() ?>"><?php bp_member_avatar('type=full&width=80&height=70') ?></a>
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
												$check_string = friends_check_friendship_status( $loggedin_user_id,$other_user_id);
											}
											/*   **** Do Not Delete This**** (order by-Ankur Mantri :D)  
											Parameters 'is_friend', 'not_friends', 'pending' can be uset to check $check_string */ 
												if ( $check_string == 'its_me' ) {
													echo "<div><a>You Found Yourself</a></div>";
												}else{
													bp_add_friend_button(bp_get_member_user_id());
												}
										?>

										<?php //do_action( 'bp_directory_members_actions' ) ?>
									</div>
								</div>
								<div class="clear">&nbsp;</div>
							</li>
 
							<?php endwhile; ?>
						</ul>
						<div class="clear">&nbsp;</div>
						<div class="pagination-links" id="member-dir-pag">
							<?php bp_members_pagination_links() ?>
						</div>
							
						<?php do_action( 'bp_after_directory_members_list' ) ?>
						 
						<?php bp_member_hidden_fields() ?>
						 
						<?php else: ?>
 
						<div id="message" class="info">
							<p><?php _e( "Sorry, no members were found.", 'buddypress' ) ?></p>
						</div>
						 
					<?php endif; ?>
										
					
					
					
				
			
			
			
		</div>
	</div> <!-- #content-container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>

