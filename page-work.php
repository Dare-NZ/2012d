<?php
/*
Template name: Work
 */
?>

<?php get_header(); ?>
<div class="slider">Work</div>
<div class="content">
	<div class="wrapper">
	<!-- portfolio block -->
	<!-- some blurb -->
	<div class="inner">
	<div class="articles">
			

			<?php 
			$i = 0;
			$args = array('orderby' => 'rand', 'post_type' => 'portfolio', 'posts_per_page' => 7 );
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post();
			?> 
			<div class="article">
				<div class="thumb">
					<?php the_post_thumbnail('215x150'); ?>
				</div>
				<div class="info">
						<h2><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></h2>
				</div>
			</div>
			<?php if($i == 3) {$i = 0; echo '<div class="clr"></div>'; } else { $i++; } ?>
			<?php endwhile ?>
			<div class="clr"></div>
	</div>
	</div>
	<!-- skills section -->
	<!-- cta -->
	</div>
</div>

<?php get_footer(); ?>
