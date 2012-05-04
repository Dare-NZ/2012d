<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="slider"><?php the_title() ?></div>
<div class="content single-post">
	<div class="wrapper">
	<!-- portfolio block -->
	<!-- some blurb -->
			<div class="inner">
				 <?php
            $thumb = get_post_thumbnail_id(); 
            $image = vt_resize( $thumb, '', 940, 200, true );
            echo "<img src='" . $image['url'] . "'' />";
            ?>
			</div>
			<div class="content-inner">
				<div class="inner"><?php the_content(); ?></div>
			</div>
			
			<div class="sidebar"></div>
			
			<div class="clr"></div>

	<!-- skills section -->
	<!-- cta -->
	</div>
</div>
<?php endwhile ?>
<?php get_footer(); ?>
