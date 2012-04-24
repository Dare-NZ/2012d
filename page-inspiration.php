<?php
/*
Template name: Inspiration
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="slider"><?php the_title(); ?></div>
<div class="content">
	<div class="wrapper nobg">
	<!-- portfolio block -->
	<!-- some blurb -->
	<div class="tumblers">
		<?php
			$url = get_bloginfo('template_url');
			$tumblr = $url . '/includes/tumblr.php?getPosts=true&url=' . $url;
			 	require_once( $tumblr );
		?>
	</div>
		<a id="next" class="load-more" href="#next">Load more</a>
		<div class="clr"></div>
		<div class="inner">	
			<?php the_content(); ?>
		</div>
		<script type="text/javascript">
			$(document).ready(function(e){
				var total = <?php require_once(get_bloginfo('template_url') . '/includes/tumblr.php?getTotal'); ?>;
				var offset = 20;
				var limit = 20;

				$isotope = $('.tumblers').isotope({
				  itemSelector : '.tumbler'
				});

				$('a#next').bind('click', function(e){
					$.ajax({
					  url: "<?php echo get_bloginfo('template_url') . '/includes/tumblr.php?getPosts&url=' . get_bloginfo('template_url') ?>",
					  type: "GET",
					  data: {
					  	getPosts : true,
					  	offset : offset
					  },
					  dataType: "html",
					  success : function(data){
					  	if(offset + limit <= total){
						  	//$('.tumblers').isotope( 'appended', $(data) );
						  	var curScroll = $(window).scrollTop();
						  	$('.tumblers').append(data);
						  	$('.tumblers').isotope('destroy').isotope({itemSelector : '.tumbler'}, function(e){
						  		 $(window).scrollTop(curScroll);
						  		 $("a[rel^='lightbox']").slimbox();
						  	});
						  	offset = offset + limit;
						  	
					  	}
					  }
					});

					return false;
				})
			});
		</script>	
	</div>
	</div>
</div>
<?php endwhile ?>
<?php get_footer(); ?>
