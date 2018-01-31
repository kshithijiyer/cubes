<?php
/**
 *  Comments section to be displayed at the end single page for cubes.
 *
 * @Package: cubes
 * @Author: Kshithij Iyer
 * @Version: 1.0
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">

			<?php
				printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'cubes' ),
				number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
			
		</h2>
		
		<ol class="comment-list">

		<?php

			wp_list_comments( array(
										'style' => 'ol',
										'short_ping' => true,
										'avatar_size' => 74,
									)
			);

		?>
		
		</ol><!-- .comment-list -->

		<?php
		// Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :

		?>       
		<nav class="navigation comment-navigation" role="navigation">
			
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'cubes' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'cubes' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'cubes' ) ); ?></div>
		
		</nav><!-- .comment-navigation -->

		<?php endif; // Check for comment navigation ?>
		 
		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.' , 'cubes' ); ?></p>
		<?php endif; ?>
	<?php endif; // have_comments() ?>
	
	<!-- Comment form -->
	<?php comment_form(); ?>
</div><!-- #comments -->

<!-- Comments paginate -->

<?php paginate_comments_links(); ?>
