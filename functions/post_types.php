<?php 
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio'),
				'supports' => array('title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'page-attributes')
		)
	);
	register_post_type( 'tutorial',
		array(
			'labels' => array(
				'name' => __( 'Tutorial' ),
				'singular_name' => __( 'Tutorial' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'tutorial'),
				'supports' => array('title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'page-attributes')
		)
	);
	register_post_type( 'article',
		array(
			'labels' => array(
				'name' => __( 'Article' ),
				'singular_name' => __( 'Article' )
			),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'article'),
				'supports' => array('title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'page-attributes')
			)
		);
}
