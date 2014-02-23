<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php
			global $page_title;
			if (!empty($page_title))
				echo $page_title . ' | ';
			echo 'Leslie Gill Architect';
	?></title>

	<meta name="description"
		  content="Leslie Gill Architect is a New York City-based architecture and interior-design firm.">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico"/>
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>
	<link rel="apple-touch-icon" sizes="57x57"
		  href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-57x57.png"/>
	<link rel="apple-touch-icon" sizes="72x72"
		  href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-72x72.png"/>
	<link rel="apple-touch-icon" sizes="76x76"
		  href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-76x76.png"/>
	<link rel="apple-touch-icon" sizes="114x114"
		  href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-114x114.png"/>
	<link rel="apple-touch-icon" sizes="120x120"
		  href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-120x120.png"/>
	<link rel="apple-touch-icon" sizes="144x144"
		  href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-144x144.png"/>
	<link rel="apple-touch-icon" sizes="152x152"
		  href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-152x152.png"/>

	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">
	<div id="header">
	</div>

	<div id="container" class="container">
		<div id="header_content">
			<a href="/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/leslie-gill-architect.png"
							 alt="leslie gill architect"></a>
			<div class="row">
				<div class="col-xs-12 col-lg-2"></div>
				<div class="col-xs-12 col-lg-10">
					<div class="row">
						<div id="header-column-2" class="col-xs-7">
							<a href="/"><img class="logo_left"
											 src="<?php bloginfo('template_directory'); ?>/img/leslie-gill.png"
											 alt="leslie gill architect"></a>
						</div>
						<div id="header-column-3" class="col-xs-5">
							<a href="/"><img class="logo_right"
											 src="<?php bloginfo('template_directory'); ?>/img/architect.png"
											 alt="leslie gill architect"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-lg-10 col-lg-push-2">
				<div class="row">
