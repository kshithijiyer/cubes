<!DOCTYPE html>
<html  <? language_attributes();?>>
	<head>
		<meta charset="<? bloginfo('charset');?>">
		<meta name="viewport" content="width-device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title><? bloginfo('name');?></title>
		<? wp_head(); ?>
	</head>
	<body <? body_class();?>>
		
		<!--Site header-->
		<header class="container text-center page-header">
			<h1><a href="<? echo home_url();?>"><? bloginfo('name'); ?></a></h1>
			<div>
				<p><br />
					<? bloginfo('description'); ?><br />
				</p><br />
			</div>
		</header>
		
