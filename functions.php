<?php

// <!-- Bootstrap core CSS -->
//   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

//   <!-- Custom fonts for this template -->
//   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
//   <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
//   <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

//   <!-- Custom styles for this template -->
//   <link href="css/clean-blog.min.css" rel="stylesheet">

// <script src="vendor/jquery/jquery.min.js"></script>
//   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

//   <!-- Custom scripts for this template -->
//   <script src="js/clean-blog.min.js"></script>

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

	wp_register_style('clean-blog', get_template_directory_uri() . '/css/clean-blog.min.css', array(), 1, 'all');
	wp_enqueue_style('clean-blog');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts() {
	
	wp_register_script('jquery', get_template_directory_uri() . '/library/jquery/jquery.min.js', array(), 1, 1, 1 );
	wp_enqueue_script('jquery');

	wp_register_script('bootstrap-js', get_template_directory_uri() . '/library/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1, 1 );
	wp_enqueue_script('bootstrap-js');

	wp_register_script('clean-blog-js', get_template_directory_uri() . '/js/clean-blog.min.js', array(), 1, 1, 1 );
	wp_enqueue_script('clean-blog-js');
}

add_action('wp_enqueue_scripts', 'load_scripts');

