<?php get_header(); ?>

<div id="content" class="container-fluid">
<!-- This sets the $curauth variable -->
    <?php
		$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
		$colors=array('#ffff66','#ff6666','#6666ff','#66ff66');
		$color_index=array_rand($colors);
    ?>
	<div class='row row-grid'>
		<div class='col-sm-7' style='background-color:<?php echo $colors[$color_index]; ?>; height: 100%;'>
		<h2>About author:</h2>
		<dl>
			<dt>Name</dt>
			<dd><?php the_author_meta('first_name');?> <?php the_author_meta('last_name');?>(aka <?php echo $curauth->nickname; ?>)</dd>
			<dt>Website</dt>
			<dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
			<dt>Bio</dt>
			<dd><?php echo $curauth->user_description; ?></dd>
		</dl>
		<?php
			$colors=array('#ffff66','#ff6666','#6666ff','#66ff66');
			$color_index=array_rand($colors);
		?>
		</div>
		<div class='col-sm-5 col' style='background-color:<?php echo $colors[$color_index]; ?>; height: 100%;'>
			<h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>,
					<?php endwhile; else: ?>
					<p><?php _e('No posts by this author.', 'cubes'); ?></p>
				<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
