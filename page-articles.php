<?php
/*
Template name: Articless
 */
?>

<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
	<div class="inner">
	<div class="articles twothird">
			<?php 
			$args = array('orderby' => 'rand', 'post_type' => 'article', 'posts_per_page' => 7 );
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post();
			?> 
			<div class="article">
				<div class="thumb">
					<?php
		            $image = vt_resize( get_post_thumbnail_id() , '', 280, 150, true );
		            echo "<img src='" . $image['url'] . "'' />";
		            ?>
				</div>
				<div class="content">
						<h2><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></h2>
						<p><?php the_excerpt() ?></p>
				</div>
				
				<div class="clr"></div>
			</div>

			<?php endwhile ?>
			<div class="clr"></div>
	</div>
	<div class="clr"></div>
	</div>
	<!-- skills section -->
	<!-- cta -->
	</div>
</div>

<?php get_footer(); ?>
