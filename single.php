<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="slider"><?php the_title() ?></div>
<div class="content single-post">
	<div class="wrapper">
	<!-- portfolio block -->
	<!-- some blurb -->
			
			<?php the_post_thumbnail('single-thumbnail'); ?>
			<div class="post">

			<?php the_content(); ?>

			</div>
			<div class="clr"></div>

	<!-- skills section -->
	<!-- cta -->
	</div>
</div>
<?php endwhile ?>
<?php get_footer(); ?>
