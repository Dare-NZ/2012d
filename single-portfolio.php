<?php
/*
Template name: Work
 */
?>

<?php get_header(); 

$this_id = get_the_id();

?>
<div class="content">
	<div class="wrapper">
	<div class="inner">
		<div class="third">
			<div class="portfolio-list-wrap">
				<div class="portfolio-list">
					<?php 
					$args = array('orderby' => 'asc', 'post_type' => 'portfolio', 'posts_per_page' => 4 );
					$the_query = new WP_Query( $args );
					while ( $the_query->have_posts() ) : $the_query->the_post();
						$image = vt_resize( get_post_thumbnail_id() , '', 100, 60, true );
						$sdesc = get_post_meta(get_the_id(), 'js_sdesc', true);
						if(get_the_id() == $this_id) {$current = 'class="current"';} else {$current = '';}
						?> 
						<div class="portfolio-list-item">
							<div class="thumb">
								<a href="<?php the_permalink() ?>"><?php echo "<img src='" . $image['url'] . "'' />"; ?></a>
							</div>
							<div class="content">
								<a href="<?php the_permalink() ?>">
									<h2 <?php echo $current ?>>
										<span><?php the_title() ?></span>
									</h2>
								<p><?php echo $sdesc ?></p></a>
							</div>
							<div class="clr"></div>
						</div>
					<?php endwhile ?>
				</div>
				<div class="portfolio-list-controls"><></div>
			</div>
			<div class="clr"></div>
			<?php 
			while ( have_posts() ) : the_post();
			$image = vt_resize( get_post_thumbnail_id() , '', 607, 348, true );
			?> 
		</div>
		<div class="twothird right">
			<div class="portfolio-slider-wrap">
			 	<div class="portfolio-slider">
			 		<?php  echo "<img src='" . $image['url'] . "'' />"; ?>
			 	</div>
			 </div> 
			<?php endwhile ?>
		</div>
		<div class="clr"></div>

		<div class="portfolio-info">
			<div class=" twothird">
				<h2><span><?php the_title() ?></span></h2><?php the_content() ?>
			</div>
			<div class=" third">
				<h2><span>Services used</span></h2>Some services
			</div>
		</div>
		<div class="clr"></div>
	</div>

	</div>
</div>

<?php get_footer(); ?>
