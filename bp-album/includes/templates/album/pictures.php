<?php get_header('main') ?>
<?php get_sidebar('pleft') ?>

	<div id="center-content-div-wrapper">
		<div id="center-content-div">

			<div id="item-header">
				<?php locate_template( array( 'members/single/member-header.php' ), true ) ?>
			</div>

			<div id="item-body">

				<div class="item-list-tabs no-ajax activity-tabs pictures-activity-tabs" id="subnav">
					<ul>
						<?php bp_get_options_nav() ?>
					</ul>
					<div class="clear">&nbsp;</div>
				</div>
				<div class="clear">&nbsp;</div>

				<div class="group-item-body">
						<?php if ( bp_album_has_pictures() ) : ?>
						
					<div class="picture-pagination group-forum-loop-pagination">
						<?php bp_album_picture_pagination(); ?>	
					</div>			
						
					<div class="picture-gallery">												
							<?php while ( bp_album_has_pictures() ) : bp_album_the_picture(); ?>

					<div class="picture-thumb-box">
		
						<a href="<?php bp_album_picture_url() ?>" class="picture-thumb"><img src='<?php bp_album_picture_thumb_url() ?>' /></a>
						
					</div>
						
							<?php endwhile; ?>
					</div>					
						<?php else : ?>
						
					<div id="message" class="info group-forum-loop-pagination">
						<p><?php echo bp_word_or_name( __('No pics here, show something to the community!', 'bp-album' ), __( "Either %s hasn't uploaded any picture yet or they have restricted access", 'bp-album' )  ,false,false) ?></p>
					</div>
					
					<?php endif; ?>
				</div>
			</div><!-- #item-body -->

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

<?php get_sidebar('pright') ?>
<?php get_footer() ?>
