<?php get_header('main') ?>
<?php get_sidebar('pleft') ?>
<div id="center-content-div-wrapper">
	<div id="center-content-div" class="member-page-content-div">
		<div class="activity no-ajax">
			<?php if ( bp_has_activities( 'display_comments=threaded&include=' . bp_current_action() ) ) : ?>

				<ul id="activity-stream" class="activity-list item-list">
				<?php while ( bp_activities() ) : bp_the_activity(); ?>

					<?php locate_template( array( 'activity/entry.php' ), true ) ?>

				<?php endwhile; ?>
				</ul>

			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_sidebar('pright') ?>
<?php get_footer() ?>
