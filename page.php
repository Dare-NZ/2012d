<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="slider"><?php the_title(); ?></div>
<div class="content">
	<div class="wrapper">
	<!-- portfolio block -->
	<!-- some blurb -->
	<div class="inner">
			
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

		
		
	</div>
	<!-- skills section -->
	<!-- cta -->
	</div>
</div>
<?php endwhile ?>
<?php get_footer(); ?>
