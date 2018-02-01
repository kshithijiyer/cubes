<?php

/**
 *  Author Page for cubes.
 *
 * @Package: cubes
 * @Author: Kshithij Iyer
 * @Version: 1.0
 */

get_header();?>

<div id="content" class="container-fluid">
	
	<?php
		#This sets the $curauth variable
		$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) );
		#Setting random backgroud color.
		$colors = array( '#ffff66',' #ff6666', '#6666ff', '#66ff66' );
		$color_index = array_rand( $colors );
	?>
	
	<div class='row row-grid'>
		
		<!-- Author  information-->
		<div class='col-sm-7' style='background-color:<?php echo esc_attr( $colors[ $color_index ] ); ?>; height: 100%;'>
		
		<h2>About author:</h2>
		
		<dl>
			<!-- Displaying Author's Name and Nick. -->
			<dt>Name</dt>
			<dd><?php the_author_meta( 'first_name' );?> <?php the_author_meta( 'last_name' );?>(aka <?php echo esc_html( $curauth->nickname ); ?>)</dd>
			
			<!-- Displaying Author's website. -->
			<dt>Website</dt>
			<dd><a href="<?php echo  esc_url( $curauth->user_url ); ?>"><?php echo esc_html( $curauth->user_url ); ?></a></dd>
			
			<!-- Dsiplaying Author's Bio. -->
			<dt>Bio</dt>
			<dd><?php echo esc_html( $curauth->user_description ); ?></dd>
	
		</dl>
		
		<?php
			#Setting random backgroud color.
			$colors = array( '#ffff66' , '#ff6666' , '#6666ff' , '#66ff66' );
			$color_index = array_rand( $colors );
		?>
		
		</div><!-- .col-sm-7 -->
		
		<!-- Posts by Author --> 
		
		<div class='col-sm-5 col' style='background-color:<?php echo esc_attr( $colors[ $color_index ] ); ?>; height: 100%;'>
			
			<!-- Heading -->
			
			<h2>Posts by <?php echo esc_html( $curauth->nickname ); ?>:</h2>
				
				<!-- Post Names.-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>,
					
				<?php endwhile; else : ?>
					
					<p><?php esc_html_e( 'No posts by this author.' , 'cubes' ); ?></p>
				
				<?php endif; ?>
		
		</div><!-- .col-sm-5 col -->
	
	</div><!-- .row -->

</div><!-- Content -->

<?php get_footer(); ?>
