<?php get_header(); ?>
	<div class="container-fluid">
		<!--Site body -->	
		<?php if (have_posts()) : $colors=array("#ffff66","#ff6666","#6666ff","#66ff66"); while (have_posts()) : the_post(); $color_index=array_rand($colors);?>
			<div class='row row-grid'>
				<div class='col-*-8 col align-self-center' style='background-color:<? echo $colors[$color_index]; ?>;'>
					<h2><a href='<? the_permalink()?>'><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					<div class="text-right">
						Written by:<a href="<?php get_the_author_link(); ?> "><strong><?php echo get_the_author(); ?>,</strong></a><br />
						<strong><?php echo get_the_date(); ?></strong>
					</div>
				</div>
			</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
