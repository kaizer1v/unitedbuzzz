<div class="sidebar-wrapper">
    <div class="sidebar" id="sidebar-left">
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-leagues-tournaments">
				<h3 id="sidebar-l-t-h3"><span>Leagues & </span><br><span id="sidebar-tournaments-text">Tournaments</span></h3>
				<div id="sidebar-content-design-div">
					<div id="l-t-menu-wrapper">
						<?php #wp_nav_menu( array( 'theme_location' => 'sidebar-l-t') ); ?>
						<div class="menu-sidebar-leaguestournaments-container">
							<ul id="menu-sidebar-leaguestournaments" class="menu">
							<?php
							// ,'hide_empty=0'
								$lntTerms = get_terms('leagues_tournaments_category', 'hide_empty=0&orderby=count&order=DESC');
								foreach($lntTerms as $lntTerm) {
							?>
								<li class="menu-item menu-item-type-post_type <?php echo $lntTerm->slug; ?>">
									<?php $lntPage = get_page_by_title('LNT'); ?>
									<a href="<?php echo get_permalink($lntPage->ID); ?>?lnt_type_slug=<?php echo $lntTerm->slug; ?>">
										<?php echo $lntTerm->name; ?>
									</a>
								</li>
							<?php
								}
							?>
							</ul>
						</div>
					</div>
				</div>
			<!--	<a href="" class="sidebar-more">More</a>	--><!--Might Be Required later-->
			</div>
		</div>	
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-groups">
				<?php dynamic_sidebar( 'Left' ) ?>
				<a href="<?php bloginfo('siteurl')?>/groups" class="sidebar-more">More</a>
			</div>
		</div>
    </div>
</div>
