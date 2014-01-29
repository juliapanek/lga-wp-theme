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
	<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/leslie-gill-architect.png" alt="leslie gill architect">
	<div class="row">
		<div class="col-xs-12 col-lg-2"></div>
		<div class="col-xs-12 col-lg-10">
			<div class="row">
				<div class="col-xs-7">
					<p class="gallery-number active">1</p>
					<p class="gallery-number">&emsp;&frasl;&emsp;10</p>
					<img class="logo_left" src="<?php bloginfo('template_directory'); ?>/img/leslie-gill.png" alt="leslie gill architect">
				</div>
				<div class="col-xs-5">
					<img class="logo_right" src="<?php bloginfo('template_directory'); ?>/img/architect.png" alt="leslie gill architect">
					<p class="gallery-arrow">&rarr;</p>
					<p class="gallery-arrow">&larr;&emsp;</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
<div class="col-xs-12 col-lg-10 col-lg-push-2">
<div class="row">
