<?php

define('TITLE_SEPARATOR', ' - ');

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');

// move sctipts to footer
remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);

add_action('wp_footer', 'wp_enqueue_scripts', 5);
add_action('wp_footer', 'wp_print_scripts', 6);
add_action('wp_footer', 'wp_print_head_scripts', 6);

// override BP styles
if ( !function_exists( 'bp_dtheme_enqueue_styles' ) )
{
	function bp_dtheme_enqueue_styles()
	{
		$version = '20111109';
		wp_register_style( 'bp-12tri', get_stylesheet_directory_uri() . '/styles/style.css', array(), $version );
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

function the_first_category ()
{
	$category = get_the_category();
	if (isset($category[0]))
		echo $category[0]->name;
}

?>