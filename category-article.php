<?php get_header(); ?>
<div class="slider">Articles</div>
<div class="content">
	<div class="wrapper">
	<!-- portfolio block -->
	<!-- some blurb -->
	<div class="inner">
	<div class="articles">
			

			<?php 
			$args = array('orderby' => 'rand', 'post_type' => 'article', 'posts_per_page' => 7 );
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post();
			?> 
			<div class="article">
				<div class="thumb">
					<?php the_post_thumbnail('block'); ?>
				</div>
				<div class="info">
						<!-- date -->
						<p>
						<strong>Posted:</strong> <?php the_date() ?>
						</p>
						<!-- link -->
						<p>
						<strong>Link: </strong> <a href="<?php the_permalink() ?>">Click here</a>
						</p>
				</div>
				<div class="content">
						<h2><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></h2>
						<p><?php the_excerpt() ?></p>
				</div>
				
				<div class="clr"></div>
			</div>

			<?php endwhile ?>
	</div>
	</div>
	<!-- skills section -->
	<!-- cta -->
	</div>
</div>

<?php get_footer(); ?>
