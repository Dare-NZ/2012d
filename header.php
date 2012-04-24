<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<!-- wordpressy stuff -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/raphael-min.js"></script>

	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/isotope/jquery.isotope.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/raphael-min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/slimbox/js/slimbox2.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/js/slimbox/css/slimbox2.css" type="text/css" media="screen" />

	<script type="text/javascript">
		$(document).ready(function(e){
			$('#contact-tab').bind('click', function(e){
				$('#contact').toggleClass('down');
			});
			$('#hire-me').bind('click', function(e){
				$('#contact').toggleClass('down');
			});
		});
	</script>

	<?php wp_head(); ?>
</head>

<!-- start body -->
<body <?php body_class(); ?>>
<!-- 

		//	So, I see you are checking out my markup
		//	As you can see, I comment the hell out of everything.
		//	Just give up, I'm awesome. Hire me. =)
		//	--Joe
		
-->
<div id="header" class="header">
	<div id="home-slider" class="home-slider">
		<div class="wrapper">
			<div class="nav-bar">
				<div class="logo"><a href="<?php bloginfo('url') ?>"></a></div>
				 <?php 
					$args = array(
							'theme_location' => 'primary'
						);
				 	wp_nav_menu( $args ); 
				 ?>
			</div>
		</div>
	</div>
</div>

<div id="contact" class="contact">
	<div class="wrapper">
	<?php 
		$args = array('page_id' => 195 );
		$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ) : $the_query->the_post();
	?> 
		<?php the_content() ?>
	<?php
		endwhile;
	?>
	<div class="clr"></div>
	</div>
	<a href="#" id="contact-tab" class="tab">Contact</a>
</div>			