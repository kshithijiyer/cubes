<?php get_header();?>
	<!--Site body -->
	<div class="container-fluid text-center">
<?php
	if(have_posts()){
		$counter=1;
		$colors=array("#ffff66","#ff6666","#6666ff","#66ff66");
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
		while($wpb_all_query->have_posts()):$wpb_all_query->the_post();
			$color_index=array_rand($colors);
			if($counter==1){
				echo "<div class='row row-grid'> \n";
			}?>
					<div class='col-sm-4' style='background-color:<?php echo $colors[$color_index];?>;'>
						<h2><a href='<?php the_permalink()?>'><?php the_title();?></a></h2>
						<?php the_excerpt();?>
					</div>
			<?php 
			if($counter==3){
				echo "</div>\n";
				$counter=1;
			}else{
				$counter=$counter+1;
			}
		endwhile;?>
		</div>
	<?php }else{
		_e( 'Error no posts found!', 'Cubes' );
	}
	get_footer();
?>
