

<?php get_header(); ?>

<div class="content">
	<div class="wrapper">
	<div class="inner">
	<div class="articles twothird">
			<?php 
			while ( have_posts() ) : the_post();
		    $image = vt_resize( get_post_thumbnail_id() , '', 240, 160, true );
		    $sdesc = get_post_meta(get_the_id(), 'js_sdesc', true);
			?> 
			<div class="article">
				<div class="thumb">
					<?php
		            echo "<img src='" . $image['url'] . "'' />";
		            ?>
				</div>
				<div class="info">
						<h2><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></h2>
						<p><strong><?php echo $sdesc ?></strong></p>
						<p><?php the_excerpt() ?></p>
				</div>
				<div class="clr"></div>
			</div>

			<?php endwhile ?>
			<div class="clr"></div>
	</div>
	<div class="third"><?php get_sidebar() ?></div>
	<div class="clr"></div>
	</div>
	<!-- skills section -->
	<!-- cta -->
	</div>
</div>

<?php get_footer(); ?>
