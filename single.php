<?php

/**
 *  Single Page for cubes.
 *
 * @Package: cubes
 * @Author: Kshithij Iyer
 * @Version: 1.0.1
 */

get_header();?>

	<div class="container-fluid">
		
		<?php

		#Checking if there are any posts or not and setting the array with colors.
		if ( have_posts() ) :
			$colors = array( '#ffff66' , '#ff6666' , '#6666ff' , '#66ff66' );

			#Iterating through the list of posts and displaying them.
			while ( have_posts() ) : the_post();

				#Setting the background color.
				$color_index = array_rand( $colors );
		?>
				<div class='row row-grid'>
					
					<div class='col-*-* col align-self-center' style="background-color:<?php echo esc_attr( $colors[ $color_index ] ); ?>;">
						
						<!-- Post Title. -->
						<h2><a href='<?php the_permalink()?>'><?php the_title(); ?></a></h2>
						
						<!-- Post content. -->
						<?php the_content(); ?>
						
						<!-- Displaying Post metadata. -->
						<div class="text-right">
						
							Written by:<?php the_author_posts_link()?><br />
							<strong><?php echo esc_html( get_the_date() ); ?></strong><br />
							Category: <?php the_category( ', ' ) ?><br />
							<?php echo esc_html( get_the_tag_list( '#', ', #','' ) ); ?>
						
						</div><!-- .text-right -->
						
						<!-- Comments  and Comment form -->		
						<?php wp_list_comments( $args ); ?>
						<?php comments_template( '/templates/comments.php', true );     ?>
					
					</div><!-- .row -->
					
			</div><!-- .container-fluid -->
			
	<?php endwhile; #End while ?>

<?php endif; #End If ?>

<?php get_footer(); ?>
