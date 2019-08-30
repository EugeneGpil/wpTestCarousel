<?php



function load_stylesheets()
{
	wp_register_style('bootstrap', get_template_directory_uri() . '/public/css/bootstrap.min.css', null, null);
	wp_enqueue_style('bootstrap');

	wp_register_style('animate', get_template_directory_uri() . '/public/css/animate.min.css', null, null);
	wp_enqueue_style('animate');

	wp_register_style('style', get_template_directory_uri() . '/public/css/style.css', null, null);
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function loadjs()
{
    wp_register_script('jquery', get_template_directory_uri() . '/public/js/jquery.min.js', null, null, true);
	wp_enqueue_script('jquery');
	
	wp_register_script('bootstrap', get_template_directory_uri() . '/public/js/bootstrap.min.js', null, null, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'loadjs');



add_theme_support('post-thumbnails');

add_image_size('main', 1920, 675, true);
add_image_size('mobile', 767, 400, true);
add_image_size('preview', 48, 55, true);