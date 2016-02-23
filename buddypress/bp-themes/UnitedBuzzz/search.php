<?php get_header('main'); ?>
<?php get_sidebar('left'); ?>
	<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
		<div id="center-content-div" >		
			
			<?php if($_GET['all'] == 'all-types') { ?>
			
				<?php do_action( 'bp_before_blog_search' ) ?>

				<div class="page" id="blog-search" role="main">
					<div id="menu-pages-heading-wrapper">
						<div id="menu-pages-heading">
							<h3><?php _e( 'Search Results', 'buddypress' ) ?></h3>
						</div>
					</div>
					<div class="custom-post-type-content">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<?php do_action( 'bp_before_blog_post' ) ?>
								<div class="news-content-wrapper">
								
									<h4>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>">
											<span class="custom-post-type-content-title news-title"><?php the_title(); ?></span>
										</a>
									</h4>
									<div class="news-excerpt"><?php the_excerpt();?></div>
									<div class="clear"></div>
									<div class="author-box">
										<?php #echo get_avatar( get_the_author_meta( 'email' ), '50' ); ?>
										<p><?php printf( _x( 'by %s', 'Post written by...', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></p>
									</div>
									<p class="date"><?php printf( __( '%1$s <span>in %2$s</span>', 'buddypress' ), get_the_date(), get_the_category_list( ', ' ) ); ?></p>
									<p class="postmetadata"><?php the_tags( '<span class="tags">' . __( 'Tags: ', 'buddypress' ), ', ', '</span>' ); ?> <span class="comments"><?php comments_popup_link( __( 'No Comments &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></span></p>
								</div><!--END .news-content-wrapper-->

								<?php do_action( 'bp_after_blog_post' ) ?>
							<?php endwhile; ?>
						<?php else : ?>
							<h2 class="center"><?php _e( 'No posts found. Try a different search?', 'buddypress' ) ?></h2>
							<?php get_search_form() ?>
						<?php endif; ?>
					</div>
				</div>
				<?php do_action( 'bp_after_blog_search' ) ?>
			<?php } #END all-types ?>
			
			<!--Chants Search results-->
			<?php if( $_POST['post_type'] == 'chants'){ ?>
			
				<div id="search-chant-result">
					<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3 id="menu-pages-heading-with-search"><?php _e( 'Chants', 'buddypress' ) ?></h3>
						<?php if ( bp_search_form_enabled() ) : ?>
							<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
								<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for Chants" id="search-input" name="s" value="" />
								<?php #echo bp_search_form_type_select() ?>
								<input type="hidden" name="post_type" value="chants" />
								<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
								<?php wp_nonce_field( 'bp_search_form' ) ?>
							</form><!-- #search-form -->

						<?php endif; ?>
						<div class="clear"></div>
					</div>
				</div>
				
				<?php if (have_posts()) : ?>
						<h3><?php _e( 'Search Results For Chants', 'buddypress' ) ?></h3>
						<div class="clear">&nbsp;</div>
						<ul>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php echo get_permalink()?>"><span class="play_image"></span></a>
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<div class="clear">&nbsp;</div>
							</li>
				
						<?php endwhile; ?>
						</ul>
						<div style="margin-top:20px; width:100%;">
							<?php the_theme_pagination(); ?>
						</div>
					<?php else : ?>
						<h2 class="center"><?php _e( 'No Chants found. Try a different search?', 'buddypress' ) ?></h2>
						
					<?php endif; ?>
				</div>
				<div id="search-back-chants">
					<a href="<?php echo get_permalink(get_page_by_title('Chants'));?>" id="chant-page-back-link" >Back to Chants</a>
				</div>
				
			<?php } ?>
			
			
			
			
			<!--Chants Search results-->
			<?php if( $_POST['post_type'] == 'events'){ ?>
			
				<div id="search-chant-result">
					<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3 id="menu-pages-heading-with-search"><?php _e( 'Events', 'buddypress' ) ?></h3>
						<?php if ( bp_search_form_enabled() ) : ?>
							<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
								<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for Events" id="search-input" name="s" value="" />
								<?php #echo bp_search_form_type_select() ?>
								<input type="hidden" name="post_type" value="events" />
								<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
								<?php wp_nonce_field( 'bp_search_form' ) ?>
							</form><!-- #search-form -->

						<?php endif; ?>
						<div class="clear"></div>
					</div>
				</div>
				
				<?php if (have_posts()) : ?>
						<h3><?php _e( 'Search Results For Events', 'buddypress' ) ?></h3>
						<div class="clear">&nbsp;</div>
						<ul>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<div class="clear">&nbsp;</div>
							</li>
				
						<?php endwhile; ?>
						</ul>
						<div style="margin-top:20px; width:100%;">
							<?php the_theme_pagination(); ?>
						</div>
					<?php else : ?>
						<h2 class="center"><?php _e( 'No Events found. Try a different search?', 'buddypress' ) ?></h2>
						
					<?php endif; ?>
				</div>
				<div id="search-back-chants">
					<a href="<?php echo get_permalink(get_page_by_title('Events'));?>" id="chant-page-back-link" >Back to Events</a>
				</div>
				
			<?php } ?>
			
			<!-- News Search Results -->
			<?php if( $_POST['post_type'] == 'news'){ ?>
			
				<div id="search-chant-result">
					<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3 id="menu-pages-heading-with-search"><?php _e( 'News', 'buddypress' ) ?></h3>
						<?php if ( bp_search_form_enabled() ) : ?>
							<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
								<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for News" id="search-input" name="s" value="" />
								<?php #echo bp_search_form_type_select() ?>
								<input type="hidden" name="post_type" value="post" />
								<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
								<?php wp_nonce_field( 'bp_search_form' ) ?>
							</form><!-- #search-form -->

						<?php endif; ?>
						<div class="clear"></div>
					</div>
				</div>
				
				<?php if (have_posts()) : ?>
						<h3><?php _e( 'Search Results For News', 'buddypress' ) ?></h3>
						<div class="clear">&nbsp;</div>
						<?php while (have_posts()) : the_post(); ?>
							
							
							<div class="news-content-wrapper">
								<h4>
									<a href="<?php echo get_permalink()?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<span class="custom-post-type-content-title news-title"><?php the_title();?></span>
									</a>
								</h4>
								<div class="clear"></div>
								<div class="news-excerpt"><?php the_excerpt();?></div>
								<div class="clear"></div>
				
							</div><!--END .news-content-wrapper-->
							<div class="clear">&nbsp;</div>							
							
				
						<?php endwhile; ?>
						<div style="margin-top:20px; width:100%;">
							<?php the_theme_pagination(); ?>
						</div>
					<?php else : ?>
						<h2 class="center"><?php _e( 'No News found. Try a different search?', 'buddypress' ) ?></h2>
						
					<?php endif; ?>
				</div>
				<div id="search-back-chants">
					<a href="<?php echo get_permalink(get_page_by_title('News'));?>" id="chant-page-back-link" >Back to News</a>
				</div>
				
			<?php } ?>
			<!-- END News Search Results -->
			
			<!-- Videos Search -->
			<?php if( $_POST['post_type'] == 'video'){ ?>
			
				<div id="search-chant-result">
					<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3 id="menu-pages-heading-with-search"><?php _e( 'Videos', 'buddypress' ) ?></h3>
						<?php if ( bp_search_form_enabled() ) : ?>
							<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
								<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for Videos" id="search-input" name="s" value="" />
								<?php #echo bp_search_form_type_select() ?>
								<input type="hidden" name="post_type" value="post" />
								<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
								<?php wp_nonce_field( 'bp_search_form' ) ?>
							</form><!-- #search-form -->

						<?php endif; ?>
						<div class="clear"></div>
					</div>
				</div>
				
				<?php if (have_posts()) : ?>
						<h3><?php _e( 'Search Results For Videos', 'buddypress' ) ?></h3>
						<div class="clear">&nbsp;</div>
						<?php while (have_posts()) : the_post(); ?>
							
							
							<div class="news-content-wrapper">
								<h4>
									<a href="<?php echo get_permalink()?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<span class="custom-post-type-content-title news-title"><?php the_title();?></span>
									</a>
								</h4>
								<div class="clear"></div>
								<div class="news-excerpt"><?php the_content();?></div>
								<div class="clear"></div>
				
							</div><!--END .news-content-wrapper-->
							<div class="clear">&nbsp;</div>							
							
				
						<?php endwhile; ?>
						<div style="margin-top:20px; width:100%;">
							<?php the_theme_pagination(); ?>
						</div>
					<?php else : ?>
						<h2 class="center"><?php _e( 'No Videos found. Try a different search?', 'buddypress' ) ?></h2>
						
					<?php endif; ?>
				</div>
				<div id="search-back-chants">
					<a href="<?php echo get_permalink(get_page_by_title('Videos'));?>" id="chant-page-back-link" >Back to Videos</a>
				</div>
				
			<?php } ?>
			<!-- END Videos Search Results -->
			
			
			<!--Blog Posts Search results-->
			<?php if( $_POST['post_type'] == 'post'){ ?>
			
				<div id="search-chant-result">
					<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3 id="menu-pages-heading-with-search"><?php _e( 'Blog Posts', 'buddypress' ) ?></h3>
						<?php if ( bp_search_form_enabled() ) : ?>
							<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" id="search-form">
								<input type="text" class="menu-pages-heading-search-input input-placeholder" placeholder="Search for Blog Posts" id="search-input" name="s" value="" />
								<?php #echo bp_search_form_type_select() ?>
								<input type="hidden" name="post_type" value="post" />
								<input type="submit" name="search-submit" class="menu-pages-heading-search-submit" value="<?php _e( 'Go', 'buddypress' ) ?>" />
								<?php wp_nonce_field( 'bp_search_form' ) ?>
							</form><!-- #search-form -->

						<?php endif; ?>
						<div class="clear"></div>
					</div>
				</div>
				
				<?php if (have_posts()) : ?>
						<h3><?php _e( 'Search Results For Blog Posts', 'buddypress' ) ?></h3>
						<div class="clear">&nbsp;</div>
						<?php while (have_posts()) : the_post(); ?>
							
							
							<div class="news-content-wrapper">
								<h4>
									<a href="<?php echo get_permalink()?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<span class="custom-post-type-content-title news-title"><?php the_title();?></span>
									</a>
								</h4>
								<div class="clear"></div>
								<div class="news-excerpt"><?php the_excerpt();?></div>
								<div class="clear"></div>
				
							</div><!--END .news-content-wrapper-->
							<div class="clear">&nbsp;</div>							
							
				
						<?php endwhile; ?>
						<div style="margin-top:20px; width:100%;">
							<?php the_theme_pagination(); ?>
						</div>
					<?php else : ?>
						<h2 class="center"><?php _e( 'No Posts found. Try a different search?', 'buddypress' ) ?></h2>
						
					<?php endif; ?>
				</div>
				<div id="search-back-chants">
					<a href="<?php echo get_permalink(get_page_by_title('Blogz'));?>" id="chant-page-back-link" >Back to Blog Posts</a>
				</div>
				
			<?php } ?>
			<!-- END Blog posts Search Results -->
			
			
			<!--Fans Search results-->
			<?php if( $_POST['fansearch'] == 'fansearch'){ ?>
					
				<div id="menu-pages-heading-wrapper">
					<div id="menu-pages-heading">
						<h3 id="menu-pages-heading-with-search">Fans</h3>
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
					
					
					
				<?php if ( bp_has_members('per_page=50&search_terms='.$_POST['s']) ) : ?>
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
							<p><?php _e( "Sorry, no Fans were found.", 'buddypress' ) ?></p>
						</div>
						 
					<?php endif; ?>
				
			<?php } ?>	
			
			
		</div>
	</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
