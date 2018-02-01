<?php

/**
 *  404(page not found) Page for cubes.
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page.
 *
 * @Package: cubes
 * @Author: Kshithij Iyer
 * @Version: 1.0.1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div id="content" class="site-content" role="main">
			
			<header class="page-header">
				
				<h1 class="page-title"><?php  esc_html( 'Not Found', 'cubes' ); ?></h1>
			
			</header>

			
			<div class="page-wrapper">
			
				<div class="page-content">
			
					<h2><?php  esc_html( 'This is somewhat embarrassing!', 'cubes' ); ?></h2>
					<p><?php  esc_html( 'It looks like nothing was found at this location. Maybe try a search?', 'cubes' ); ?></p>
					<?php get_search_form(); ?>
				
				</div><!-- .page-content -->
			
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
		
	</div><!-- #primary -->
	
<?php get_footer(); ?>
