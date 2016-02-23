<?php do_action( 'bp_before_profile_loop_content' ) ?>

<?php if ( function_exists('xprofile_get_profile') ) : ?>

	<?php if ( bp_has_profile() ) : ?>
		<div id="p_info_tabs" class="activity-tabs">
			<ul>
				<?php while ( bp_profile_groups() ) : bp_the_profile_group(); ?>
					<li><a><?php bp_the_profile_group_name() ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="group-item-body">
			<div class="p-info-content">
			<?php while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

				<?php if ( bp_profile_group_has_fields() ) : ?>
				
					<?php do_action( 'bp_before_profile_field_content' ) ?>
					
					<div class="bp-widget profile-page-loop-starting <?php bp_the_profile_group_slug() ?>">
						<?php if ( 1 != bp_get_the_profile_group_id() ) : ?>
							<h4><?php bp_the_profile_group_name() ?></h4>
						<?php endif; ?>

						<table class="profile-fields zebra">
							<?php  while ( bp_profile_fields() ) : bp_the_profile_field(); ?>

								<?php if ( bp_field_has_data() ) : ?>
									<tr <?php bp_field_css_class() ?>>

										<td class="label">
											<?php bp_the_profile_field_name() ?>
										</td>

										<td class="data">
											<?php echo bp_get_profile_field_data( 'field='.bp_get_the_profile_field_name().'&user_id=' . $displayed_user_id ) ?>
										</td>

									</tr>
								<?php endif; ?>

								<?php do_action( 'bp_profile_field_item' ) ?>

							<?php endwhile; ?>
						</table>	
					</div>

					<?php do_action( 'bp_after_profile_field_content' ) ?>

				<?php endif; ?>

			<?php endwhile; ?>
			</div>
		</div>
		<?php do_action( 'bp_profile_field_buttons' ) ?>

	<?php endif; ?>

<?php else : ?>

	<?php /* Just load the standard WP profile information, if BP extended profiles are not loaded. */ ?>
	<?php bp_core_get_wp_profile() ?>

<?php endif; ?>

<?php do_action( 'bp_after_profile_loop_content' ) ?>

