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
?>
