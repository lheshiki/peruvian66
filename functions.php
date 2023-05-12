<?php 
// サムネイル
add_theme_support("post-thumbnails");

// feedlinkのエラー解消のため
add_theme_support( 'automatic-feed-links' );

// add_theme_support("title");
add_theme_support("title-tag");

function add_theme_scripts(){
	wp_enqueue_style("reset",get_template_directory_uri()."/assets/css/reset.css");
	if (is_front_page()) {
		wp_enqueue_style("swiper","https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css");
	}
	wp_enqueue_style("style",get_template_directory_uri()."/assets/css/style.css",array(),"1.0.0");
	wp_enqueue_script( 'utiliy', get_theme_file_uri()."/assets/js/smooth-scroll.js",array(), '1.0.0',true);
	if (is_front_page()) {
		wp_enqueue_script( 'swiper', "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js",array(), '1.0.0',true);
		wp_enqueue_script( 'js', get_template_directory_uri()."/assets/js/script.js",array(), '1.0.0',true);
	}
	if (is_singular('works')) {
		wp_enqueue_script('custom-script', get_template_directory_uri()."/assets/js/single-works.js",array(), '1.0.0',true);
	}
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
	register_taxonomy_for_object_type('category', 'works');
	register_taxonomy_for_object_type('post_tag', 'works');
}
add_action('init', 'custom_post');
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'media'; //任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
?>