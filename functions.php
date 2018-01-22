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
	add_action( 'after_setup_theme', 'my_theme_setup' );	
	function my_theme_setup(){
		load_theme_textdomain( 'cubes', get_template_directory() . '/languages' );
	}
	$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
	);
	comment_form($comments_args);
?>
