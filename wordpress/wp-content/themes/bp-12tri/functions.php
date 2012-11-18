<?php

define('TITLE_SEPARATOR',		' - ');
define('BOXES_RANGE_START',		1);
define('FB_BOX_RANGE_STOP',		5);
define('EVENTS_BOX_RANGE_STOP',	5);

if (!is_admin())
	define( 'BP_DISABLE_ADMIN_BAR', true );

function tri_scripts ()
{
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/libs/modernizr-2.6.1.js', false, null, false);
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', false, null, true);
	wp_enqueue_script('fb_api', get_stylesheet_directory_uri() . '/js/libs/fb_api.js', false, null, true);
	wp_enqueue_script('jquery.mansonry', get_stylesheet_directory_uri() . '/js/libs/jquery.masonry.min.js', array('jquery'), null, true);
	wp_enqueue_script('user_scripts', get_stylesheet_directory_uri() . '/js/script.js', array('jquery', 'jquery.mansonry'), null, true);
}
add_action('wp_enqueue_scripts', 'tri_scripts');

function tri_remove_unnecessary ()
{
	// Post Relational Links
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link');
	
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
}
tri_remove_unnecessary ();

// override BP styles
if ( !function_exists( 'bp_dtheme_enqueue_styles' ) )
{
	function bp_dtheme_enqueue_styles()
	{
		// $version = '20111109';
		wp_register_style( 'bp-12tri', get_stylesheet_directory_uri() . '/styles/style.css');
		wp_enqueue_style( 'bp-12tri' );
	}
	add_action('wp_head', 'bp_dtheme_enqueue_styles', 1);
}

function get_entires_params()
{
	$dict = array('double', 'triple');
	$params = array();
	
	foreach ($dict as $param) {
		if (is_tag($param))
			die('dupa');
			// $params[] = $param;
	}
	return $params;
}
function the_entries_params()
{
	echo implode(' ', get_entires_params());
}

function tri_the_title ()
{
	$site_name = get_bloginfo('name');
	$site_description = get_bloginfo('description');
	
	if ($site_description && ( is_home() || is_front_page() ))
		echo $site_name . TITLE_SEPARATOR . $site_description;
	else
		echo $site_name;
}

function tri_the_date ()
{
	printf('%sT%s+01:00', get_the_date('Y-m-d'), get_the_date('G:i'));
}

function tri_random_boxes_positions ($loop_count)
{
	$last = --$loop_count;
	$boxes = array();
	$boxes['fb'] = rand(BOXES_RANGE_START, FB_BOX_RANGE_STOP < $last ? FB_BOX_RANGE_STOP : $last);
	$boxes['events'] = rand(BOXES_RANGE_START, EVENTS_BOX_RANGE_STOP < $last ? EVENTS_BOX_RANGE_STOP : $last);
	
	return $boxes;
}

function tri_get_box ($boxes, $curr_position)
{
	foreach ($boxes as $box_name => $position)
	{
		if ($position == $curr_position)
			get_template_part('box', $box_name);
	}
}

function the_first_category ()
{
	$category = get_the_category();
	if (isset($category[0]))
		echo $category[0]->name;
}

function tri_has_post_image ($post_id)
{
	return has_post_thumbnail($post_id);
}

function tri_post_image ($post_id)
{
	$post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
	return $post_image[0];
}

?>