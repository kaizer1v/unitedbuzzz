<?php get_header('main') ?>
<?php get_sidebar('left') ?>

<div id="center-content-div-wrapper" class="center-content-div-menu-pages">
	<div id="center-content-div">

<!-- This sets the $curauth variable -->

    <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
	
	<div class="news-content-wrapper">
		<div id="menu-pages-heading-wrapper">
			<div id="menu-pages-heading">
				<h3>Posts By <?php echo $curauth->nickname; ?></h3>
			</div>
		</div>

		<!--
		<dl>
		    <dt>Website</dt>
		    <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
		    <dt>Profile</dt>
		    <dd><?php echo $curauth->user_description; ?></dd>
		</dl>
		
		<h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
		-->


		<div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			   
				<h4><a class="date" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
					<span class="custom-post-type-content-title news-title"><?php the_title(); ?></span>
			   	</a></h4>
			    <?php the_time('d M Y'); ?> in <?php the_category('&');?>
			    <p><?php the_excerpt(); ?></p>
				<div class="clear"></div>
			<?php endwhile; else: ?>
				<p><?php _e('No posts by this author.'); ?></p>

			<?php endif; ?>
		</div>
		
	</div>   <!--END .news-content-wrapper--> 
    
	</div><!--END #center-content-div-->
</div><!--END #center-content-div-wrapper-->
<?php get_sidebar('right') ?>
<div class="clear">&nbsp;</div>
<?php get_footer() ?>
