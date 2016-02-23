<?php get_header('main') ?>
<?php get_sidebar('pleft') ?>

	<div id="center-content-div-wrapper">
		<div id="center-content-div">


			<?php do_action( 'bp_before_member_plugin_template' ) ?>

			<div id="item-header" class="clearfix">
				<?php locate_template( array( 'members/single/member-header.php' ), true ) ?>
			</div><!-- #item-header -->

			<div id="item-body">
				<?php do_action( 'bp_before_member_body' ) ?>

				<div class="item-list-tabs no-ajax activity-tabs pictures-activity-tabs" id="subnav">
					<ul>
						<?php bp_get_options_nav() ?>

						<?php do_action( 'bp_member_plugin_options_nav' ) ?>
					</ul>
					<div class="clear">&nbsp;</div>
				</div><!-- .item-list-tabs -->
				<div class="clear">&nbsp;</div>
				
				<div class="group-item-body">
					<div class="group-item-body-inner-wrapper">
						<?php do_action( 'bp_template_title' ) ?>

						<?php do_action( 'bp_template_content' ) ?>

						<?php do_action( 'bp_after_member_body' ) ?>
					</div>
				</div>
				
			</div><!-- #item-body -->

			<?php do_action( 'bp_after_member_plugin_template' ) ?>

		</div><!-- #content -->
	</div><!-- #content-container -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

<?php get_sidebar('pright') ?>
<?php get_footer() ?>
