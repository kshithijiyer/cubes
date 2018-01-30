<!DOCTYPE html>
<html  <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width-device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<?php wp_head(); ?>
		<?php wp_get_document_title()?>
	</head>
	<body <?php body_class();?>>
		
		<!--Site header-->
		<header class="container text-center page-header">
			<h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
			<div>
				<p><br />
					<?php bloginfo('description'); ?><br />
				</p><br />
			</div>
			<?php wp_link_pages(); ?>
		</header>
		
