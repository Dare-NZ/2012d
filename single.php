<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();
$image = vt_resize( get_post_thumbnail_id() , '', 620, 160, true );
 ?>
<div class="content single-post">
	<div class="wrapper">
	<!-- portfolio block -->
	<!-- some blurb -->
			<div class="content-inner">
				<div class="inner"><div class="image">
				 <?php echo "<img src='" . $image['url'] . "'' />";  ?></div><?php the_content(); ?></div>
			</div>
			
			<div class="sidebar"><div class="inner"> <?php get_sidebar() ?></div></div>
			
			<div class="clr"></div>
	</div>
</div>
<?php endwhile ?>
<?php get_footer(); ?>