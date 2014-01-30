<!DOCTYPE html> 
<html lang="en"> 

<head>
	<title><?php
	  global $pageTitle;
	  if ( !empty($pageTitle) )
        echo $pageTitle . ' | ';
      echo 'Leslie Gill Architect';
    ?></title>
	<meta name="description" content="Leslie Gill Architect is a New York City-based architecture and interior-design firm.">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">

<div id="header">
	<h1>Leslie Gill Architect</h1>
</div>

<div id="container" class="container">

<div id="header_content">
	<a href="/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/leslie-gill-architect.png" alt="leslie gill architect"></a>
	<div class="row">
		<div class="col-xs-12 col-lg-2"></div>
		<div class="col-xs-12 col-lg-10">
			<div class="row">
				<div id="header-column-2" class="col-xs-7">
					<a href="/"><img class="logo_left" src="<?php bloginfo('template_directory'); ?>/img/leslie-gill.png" alt="leslie gill architect"></a>
				</div>
				<div id="header-column-3" class="col-xs-5">
					<a href="/"><img class="logo_right" src="<?php bloginfo('template_directory'); ?>/img/architect.png" alt="leslie gill architect"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
<div class="col-xs-12 col-lg-10 col-lg-push-2">
<div class="row">
