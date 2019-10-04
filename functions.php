<?php
/**
 * Fruitful theme functions and definitions
 */

/**
 * Load stylesheets via wp_head()
 *
 * @return void
 * @author Kevin
 */
function load_stylesheets() {

	wp_register_style('bootstrap', get_template_directory_uri() . '/library/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('fontawesome-free', get_template_directory_uri() . '/library/fontawesome-free/css/all.min.css', array(), 1, 'all');
	wp_enqueue_style('fontawesome-free');

	wp_register_style('clean-blog-font', get_template_directory_uri() . '/css/clean-blog.min.css', array(), 1, 'all');
	wp_enqueue_style('clean-blog-font');

	wp_register_style('clean-blog', get_template_directory_uri() . '/css/clean-blog.css', array(), 1, 'all');
	wp_enqueue_style('clean-blog');
}

/**
 * Load scripts via wp_footer()
 *
 * @return void
 * @author Kevin
 */
function load_scripts() {
	
	wp_register_script('jquery', get_template_directory_uri() . '/library/jquery/jquery.min.js', array(), 1, 1, 1 );
	wp_enqueue_script('jquery');

	wp_register_script('bootstrap-js', get_template_directory_uri() . '/library/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1, 1 );
	wp_enqueue_script('bootstrap-js');

	wp_register_script('clean-blog-js', get_template_directory_uri() . '/js/clean-blog.min.js', array(), 1, 1, 1 );
	wp_enqueue_script('clean-blog-js');
}

/**
 * Add menu option under appearance on Wordpress
 *
 * @return void
 * @author Kevin
 */
function register_navigation_menu() {
	register_nav_menu('heading-menu', __('Heading Menu'));
}  

// Below are actions that are required to load both stylesheets and scripts
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_scripts');
add_action('init', 'register_navigation_menu');
?>