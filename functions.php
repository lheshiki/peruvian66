<?php 
// サムネイル
add_theme_support("post-thumbnails");

// feedlinkのエラー解消のため
add_theme_support( 'automatic-feed-links' );

// add_theme_support("title");
add_theme_support("title-tag");

function add_theme_scripts(){
	wp_enqueue_style("reset",get_template_directory_uri()."/assets/css/reset.css");
	wp_enqueue_style("style",get_template_directory_uri()."/assets/css/style.css",array(),"1.0.0");
	wp_enqueue_script( 'utiliy', get_theme_file_uri()."/assets/js/smooth-scroll.js",array(), '1.0.0',true);
	wp_enqueue_script( 'js', get_template_directory_uri()."/assets/js/script.js",array(), '1.0.0',true);
}
add_action("wp_enqueue_scripts","add_theme_scripts");

function custom_theme_setup() {
  add_theme_support( 'html5', array( 'style', 'script') );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

// custom post type
function custom_post() {
	register_post_type( 'works',
		array(
			'public' => true,
			'label' => 'Works',
			'show_in_rest' => true,
			'supports' => array('title','editor','thumbnail','revisions','excerpt', 'custom-fields','page-attributes'),
			'has_archive' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-admin-customizer',
			'hierarchical' => true,
		)
	);
}
add_action('init', 'custom_post');
