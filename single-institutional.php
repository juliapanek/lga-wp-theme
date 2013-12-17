<?php
/*
Template Name Posts: Project
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

THIS IS A INSTITUTIONAL POST
<div id="main_content">
	<img class="logo_left" src="../img/leslie-gill.png" alt="leslie gill architect">
	<div class="main_container">
		<img class="project_img" src="../img/project_thumbnails/soho-loft.jpg" alt="main">

		<!-- add conditional to display/not display .caption -->
		<p class="caption">THIS IS A CAPTION</p>
	</div>
</div>

<!-- SIDE CONTENT -->

<!-- add conditional to display/not display #side_content -->
<div id="side_content">
	<img class="logo_right" src="../img/architect.png" alt="leslie gill architect">
	<div class="side_container">
		<!-- add conditional to display/not display .process_img -->
		<img class="process_img" src="" alt="process">
		<!-- add conditional to display/not display .caption -->
		<p class="caption">THIS IS A CAPTION</p>
		<!-- add conditional to display/not display .title --> 
		<p class="title">title of project</p>
		<!-- add conditional to display/not display .location -->
		<p class="location">location of project</p>
		<!-- add conditional to display/not display .intro -->
		<p class="intro">intro text</p>
		<!-- add conditional to display/not display .normal -->
		<p class="normal">Project text goes here</p>
	</div>
</div>