<?php

function redmedia_setup() {

	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	// This theme supports a variety of post formats.
	add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
	
	// Register Navigation
	register_nav_menus(array('primary' => 'Primary Navigation'));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'redmedia_setup');

function redmedia_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('data-tables-css', get_template_directory_uri().'/css/jquery.dataTables.min.css');
	wp_enqueue_style('data-tables-responsive-css', get_template_directory_uri().'/css/responsive.dataTables.min.css');
	wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());

	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script('data-tables-js', get_template_directory_uri().'/js/data-tables.min.js', array(), '', true);
	wp_enqueue_script('data-tables-responsive-js', get_template_directory_uri().'/js/dataTables.responsive.min.js', array(), '', true);
	wp_enqueue_script('function', get_template_directory_uri().'/js/functions.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'redmedia_scripts');

// Register Custom Navigation Walker
require_once('inc/wp-bootstrap-navwalker.php');

