<?php
/*
Template name: Work
 */
?>

<?php get_header(); ?>
<div class="content">
	<div class="wrapper">
	<div class="inner">
		<div class="third">
			<div class="portfolio-list-wrap">
				<div class="portfolio-list">
					<?php
					$this_id = get_the_id(); 
					$args = array('orderby' => 'rand', 'post_type' => 'portfolio', 'posts_per_page' => -1 );
					$the_query = new WP_Query( $args );
					while ( $the_query->have_posts() ) : $the_query->the_post();
					if(get_the_id() == $this_id) {$current = 'class="current"';} else {$current = '';}
						$sdesc = get_post_meta(get_the_id(), 'js_sdesc', true);
				            $image = vt_resize( get_post_thumbnail_id() , '', 100, 60, true );
					?> 
					<div class="portfolio-list-item">
						<div class="thumb">
							<?php
				            echo "<img src='" . $image['url'] . "'' />";
				            ?>
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
			if ( have_posts() ) while ( have_posts() ) : the_post();
			?> 
		</div>
		<div class="twothird right">
			<div class="portfolio-slider-wrap">
			 	<div class="portfolio-slider">
			 		<?php
		            $image = vt_resize( get_post_thumbnail_id() , '', 607, 313	, true );
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
