<?php
/**
 * Theme Supports
 */
// Theme Title
add_theme_support('title-tag');
// Post Thumbnail
add_theme_support('post-thumbnails');

/**
 * Register Stylesheet
 */

function tmCssJsEnque(){
    // Enqueue Theme style
    wp_enqueue_style('tm-style',get_stylesheet_uri()); // style.css file is
    // Register style
    wp_register_style('tm-bootstrap-style','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',array(),'5.0.2','all');


   // Enqueue style and script
    wp_enqueue_style('tm-bootstrap-style');
    wp_enqueue_script('tm-bootstrap-script','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',array(),'5.0.2',true);
    wp_enqueue_script('tm-cusom-main',get_template_directory_uri().'/js/main.js',array(),'1.0.0',true);
}

add_action('wp_enqueue_scripts','tmCssJsEnque');


////////////////// CUSTOM Post TYPE

/*
 * Custom Post Type
 */


function tmCustomPostType(){
	$roomSuitsArgs = array(
		'public'=> true,
		'labels'=> array('name'=>'Rooms and Suits', 'singular_name'=>'rooms and suits'),
		'menu_icon'=> 'dashicons-building',
		'supports'=> array( 'title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
		'has_archive'=>true,
		'show_in_rest'=>true,
		'taxonomies'=>array('category'),
		'rewrite'=> array('slug','room')
	);
	register_post_type('rooms',$roomSuitsArgs); //key name can be any key it will be the name of the post and use in permalink 'room-info'
	
	$homeSliderArgs =  array(
		'public'=> true,
		'label'=> 'Image Slider',
		'menu_icon'=> 'dashicons-images-alt2',
		'supports'=> array('title','editor','thumbnail','excerpt'),
		'taxonomies'=>array('category'),
		'rewrite'=> array('slug','slider')
	);

	register_post_type('sliders',$homeSliderArgs); //key name can be any key it will be the name of the post and use in permalink 'room-info'

}

add_action('init','tmCustomPostType');
