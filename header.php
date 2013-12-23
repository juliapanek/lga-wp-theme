<!DOCTYPE html> 
<html lang="en"> 

<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="Leslie Gill Architect" content="Leslie Gill Architect is a New York City-based design and architecture firm">  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">  
	<?php wp_head(); ?>
</head>
<body>

<div id="header">
	<div class="row">
		<div class="col-xs-7">
			<img class="logo_left" src="<?php bloginfo('template_directory'); ?>/img/leslie-gill.png" alt="leslie gill architect">
		</div>
		<div class="col-xs-5">
			<img class="logo_right" src="<?php bloginfo('template_directory'); ?>/img/architect.png" alt="leslie gill architect">
		</div>
	</div>
</div>

<div class="row">
<div class="col-xs-12 col-lg-10 col-lg-push-2">
<div class="row">
