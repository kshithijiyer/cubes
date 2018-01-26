<?php
	function cubes_resources(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts','cubes_resources');
	
	function wpdocs_excerpt_more( $more ) {
		return '<a href="'.get_the_permalink().'" rel="nofollow">[Read Me...]</a>';
	}
	add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
	function custom_excerpt_length( $length ) {
		return 25;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	function wpse_theme_setup() {
		add_theme_support( 'title-tag' );
	}
	add_action( 'after_setup_theme', 'wpse_theme_setup' );
	add_filter( 'locale', 'my_theme_localized' );
	function my_theme_localized( $locale ){
		if ( isset( $_GET['l'] ) ){
			return sanitize_key( $_GET['l'] );
		}
	return $locale;
	}
	add_theme_support('automatic-feed-links');
	$args = array(
		'width'         => 980,
		'height'        => 60,
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
?>
