<?php
/*
Template name: Work
 */
?>

<?php get_header(); 

$args = array('orderby' => 'asc', 'post_type' => 'portfolio', 'posts_per_page' => 1 );
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();
$this_id = get_the_id();
endwhile;

?>
<div class="content">
	<div class="wrapper">
	<div class="inner">
		<div class="third">
			<div class="portfolio-list-wrap">
				<div class="portfolio-list">
					<?php 
					$args = array('orderby' => 'asc', 'post_type' => 'portfolio', 'posts_per_page' => 7 );
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
								<a href="<?php the_permalink() ?>"><h2 <?php echo $current ?>><span><?php the_title() ?></span></h2>
								<p><?php echo $sdesc ?></p></a>
							</div>
							<div class="clr"></div>
						</div>
					<?php endwhile ?>
				</div>
			</div>
			<div class="clr"></div>
			<?php 
			$args = array('orderby' => 'asc', 'post_type' => 'portfolio', 'posts_per_page' => 1 );
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$image = vt_resize( get_post_thumbnail_id() , '', 607, 300, true );
			?> 
		</div>
		<div class="twothird right">
			<div class="portfolio-slider-wrap">
			 	<div class="portfolio-slider">
			 		<?php
		            echo "<img src='" . $image['url'] . "'' />";
		            ?>
			 	</div>
			 </div> 
			<?php endwhile ?>
			<div class="portfolio-info"><?php the_content() ?></div>
		</div>
		<div class="clr"></div>
	</div>
	</div>
</div>

<?php get_footer(); ?>
