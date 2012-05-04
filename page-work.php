<?php
/*
Template name: Work
 */
?>

<?php get_header(); ?>
<div class="slider"><div class="wrapper">Work</div></div>
<div class="content">
	<div class="wrapper">
	<div class="inner">
		<div class="third">
			<div class="portfolio-list-wrap">
				<div class="portfolio-list">
					<?php 
					$args = array('orderby' => 'rand', 'post_type' => 'article', 'posts_per_page' => 7 );
					$the_query = new WP_Query( $args );
					while ( $the_query->have_posts() ) : $the_query->the_post();
					?> 
					<div class="portfolio-list-item">
						<div class="thumb">
							<?php
				            $image = vt_resize( get_post_thumbnail_id() , '', 100, 100, true );
				            echo "<img src='" . $image['url'] . "'' />";
				            ?>
						</div>
						<div class="content">
							<h2><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></h2>
						</div>
						<div class="clr"></div>
					</div>
					<?php endwhile ?>
				</div>
			</div>
			<div class="clr"></div>
			<div class="portfolio-abstract">
				Abstract
			</div>
		</div>
		<div class="twothird right">
			<div class="portfoli-slider-wrap">
			 	<div class="portfolio-slider">
			 		Slider
			 	</div>
			 </div> 
		</div>
		<div class="twothird right">
			<div class="portfolio-details">
				Details
			</div>
		</div>
	</div>
	</div>
</div>

<?php get_footer(); ?>
