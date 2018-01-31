<?php

/**
 *  Index Page for cubes.
 *
 * @Package: cubes
 * @Author: Kshithij Iyer
 * @Version: 1.0
 */
get_header();?>
	
	<!-- Post Grid-->
	<div class="container-fluid text-center">
		
		<?php
		#Checking if there are posts to be displayed.
		if ( have_posts() ) {

			#Initializing counter and array of colors for backgroud.
			$counter = 1;
			$colors = array( '#ffff66' , '#ff6666' , '#6666ff' , '#66ff66' );

			#Iterating through the posts and displaying them.
			while ( have_posts() ) : the_post();

				#Selecting a random background color from the array for the post.
				$color_index = array_rand( $colors );

				#New row logic
				$one = 1;
				if ( $counter == $one ) {

						echo "<div class='row row-grid'> \n";

				}?>
							<!-- Post -->
							<div class='col-sm-4' style='background-color:<?php echo $colors[ $color_index ];?>;'>
								
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									
									<h2><a href='<?php the_permalink()?>'><?php the_title();?></a></h2><?php the_excerpt();?>
								
								</div><!-- post-id -->
								
							</div><!-- .col-sm-4 -->
					<?php
					$three = 3;
					if ( $counter == $three ) {

						echo "</div><!-- .row --> \n";
						$counter = 1;

					} else {

						$counter = $counter + 1;

					}
				endwhile;?>
	</div><!-- .container-fluid text-cente -->
		<?php

			#If there are no posts then display the error message.

		} else {

			esc_html_e( 'Error no posts found!', 'cubes' );

		} // End if().

		#Pagination for the page.
		echo paginate_links();

		get_footer();?>
