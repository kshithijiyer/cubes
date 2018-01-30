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
	add_theme_support( 'custom-background', $args );
	function newborn_enqueue_comments_reply() {
		if( get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'comment_form_before', 'newborn_enqueue_comments_reply' );
	if ( ! isset( $content_width ) ) $content_width = 900;
	the_post_thumbnail( 'thumbnail' );
	function wpdocs_theme_add_editor_styles() {
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'wpdocs_theme_add_editor_styles' );
?>
