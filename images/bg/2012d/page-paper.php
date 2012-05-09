<?php
/*
Template name: Paper
 */
?>

<?php get_header(); ?>
	<script type="text/paperscript" canvas="canvas">
		var center = view.center;
		for (var i = 0; i < 70; i++) {
			var path = new Path.Circle(center, i * 5);
			path.strokeColor = 'black';
		}
	</script>
	<canvas id="canvas" resize></canvas>
<?php get_footer(); ?>
