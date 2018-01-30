<?php get_header(); ?>
	<div class="container-fluid">
		<!--Site body -->	
		<?php if (have_posts()) : $colors=array("#ffff66","#ff6666","#6666ff","#66ff66"); while (have_posts()) : the_post(); $color_index=array_rand($colors);?>
			<div class='row row-grid'>
				<div class='col-*-* col align-self-center' style='background-color:<?php echo $colors[$color_index]; ?>;'>
					<h2><a href='<?php the_permalink()?>'><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					<div class="text-right">
						Written by:<?php the_author_posts_link()?><br />
						<strong><?php echo get_the_date(); ?></strong><br />
						Category: <?php the_category(', ') ?><br />
						<?php echo get_the_tag_list( '#', ', #','' ); ?>
					</div>
					 <?php wp_list_comments( $args ); ?>
					<?php paginate_comments_links(); ?>
					<?php comments_template( '/templates/comments.php', true );     ?>
				</div>
			</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
