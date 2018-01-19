<div class="container-fluid text-center">
<!--Site body -->
<?php
	get_header();
	if(have_posts()){
		$counter=1;
		$colors=array("#ffff66","#ff6666","#6666ff","#66ff66");
		while(have_posts()):the_post();
			$color_index=array_rand($colors);
			if($counter%3==0){
				echo "<div class='row row-grid'>";
			}?>
					<div class='col-sm-4' style='background-color:<? echo $colors[$color_index]; ?>; height: 100%;'>
						<h2><a href='<? the_permalink()?>'><?the_title();?></a></h2>
						<? the_excerpt();?>
					</div>
			<?php 
			if($counter%3==0){
				echo "</div>";
			}
			$counter=$counter+1;
		endwhile;
	}else{
		echo "<p>Error no posts found! :)</p>" ;
	}
	get_footer();
?>
