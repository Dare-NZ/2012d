<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
$prefix = 'js_';

global $meta_boxes;

$meta_boxes = array();

$meta_boxes[] = array(
	'id' => 'attributes',
	'title' => 'Additional Attributes',
	'pages' => array( 'portfolio', 'article' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'sdesc',
			'desc'		=> 'Short Description',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
	),
);


/********************* META BOX REGISTERING ***********************/

function js_register_meta_boxes()
{
	global $meta_boxes;
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
add_action( 'admin_init', 'js_register_meta_boxes' );