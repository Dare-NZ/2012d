<?php
/*
Template name: Inspiration
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="slider"><?php the_title(); ?></div>
<div class="content">
	<div class="wrapper">
	<!-- portfolio block -->
	<!-- some blurb -->
		<?php
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,"http://lucidlark.tumblr.com/api/read/json");
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		$result = curl_exec($ch);
		curl_close($ch);

		$result = str_replace("var tumblr_api_read = ","",$result);
		$result = str_replace(';','',$result);
		$result = str_replace('\u00a0','&amp;nbsp;',$result);

		$jsondata = json_decode($result,true);
		$posts = $jsondata['posts'];
		echo '<pre>';
		//var_dump($posts);
		echo '</pre>';
		?>
		<div class="tumblers">
		<?php
		foreach($posts as $post){ 
			$tHeight = ($post['height'] / $post['width']) * 320 
		?>
		<div class="tumbler">
			<img src="<?php echo $post['photo-url-400']; ?>" width="320" height="<?php echo $tHeight; ?>" />
			<a href="<?php echo $post['photo-url-1280']; ?>" rel="shadowbox[inspiration]" class="cover"></a>
		</div>
		<?php }
		?>
		</div>
		<div class="clr"></div>
		<div class="inner">	
			<?php the_content(); ?>
		</div>
		<script type="text/javascript">
			$(document).ready(function(e){
				$('.tumblers').isotope({
				  itemSelector : '.tumbler',
				  sortBy : 'random'
				});
			});
		</script>	
		
	</div>
	<!-- skills section -->
	<!-- cta -->
	</div>
</div>
<?php endwhile ?>
<?php get_footer(); ?>
