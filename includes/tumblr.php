<?php

if(isset($_GET['offset'])){$offset = $_GET['offset'];} else {$offset = 0;}

if(isset($_GET['limit'])){$limit = $_GET['limit'];} else {$limit = 20;}

if(isset($_GET['url'])){$postUrl = $_GET['url'];} else {$postUrl = '';}


function getTotal(){
	$string = "http://api.tumblr.com/v2/blog/lucidlark.tumblr.com/posts/photo?api_key=PyezS3Q4Smivb24d9SzZGYSuhMNPQUhMsVetMC9ksuGPkK1BTt";
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $string);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($result);
	return $result->response->blog->posts;
}	

if(isset($_GET['getPosts'])){

	function getPosts($limit, $postOffset, $url) {
		$string = "http://api.tumblr.com/v2/blog/lucidlark.tumblr.com/posts/photo?api_key=PyezS3Q4Smivb24d9SzZGYSuhMNPQUhMsVetMC9ksuGPkK1BTt";
		$string .= "&limit=$limit";
		$string .= "&offset=" . $postOffset;
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $string);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		$result = curl_exec($ch);
		curl_close($ch);

		$jsondata = json_decode($result,true);

		$posts = $jsondata['response']['posts'];
		
		foreach($posts as $post){ 
			$tHeight = ($post['photos'][0]['original_size']['height'] / $post['photos'][0]['original_size']['width']) * 320; 
		
			?>
		<div class="tumbler">
			<img src="<?php echo $url ?>/includes/phpthumb/phpThumb.php?src=<?php echo $post['photos'][0]['alt_sizes'][1]['url']; ?>" width="320" height="<?php echo $tHeight; ?>" />
			<a href="<?php echo $post['photos'][0]['original_size']['url']; ?>" rel="lightbox" class="cover"></a>
		</div>
		<?php } 
	}
	$total = getTotal();
	getPosts($limit, $offset, $postUrl);
} 
elseif(isset($_GET['getTotal'])){
	$total = getTotal();
	echo $total;
}



?>