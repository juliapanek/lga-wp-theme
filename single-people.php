<?php
/*
Template Name: People
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main_content">
	<img class="logo_left" src="../img/leslie-gill.png" alt="leslie gill architect">
	<div class="main_container">
		<h1 class="title"><?php the_field('name'); ?></h1>
		<h1 class="title"><?php the_field('role'); ?></h1>
		<!-- add conditional for license-->
		<h1 class="title"><?php the_field('license'); ?></h1>

		<img class="full" src="" alt="bio image">

		<p class="normal"><?php the_field('bio'); ?></p>
	</div>
</div>

<div id="side_content">
	<img class="logo_right" src="../img/architect.png" alt="leslie gill architect">
	<div class="side_container">
		<p class="title">experience</p>
			<div class="cv_container">
				<li class="noindent">description</li>
					<li class="indent">date, location</li>
				<li class="noindent">description</li>
					<li class="indent">date, location</li>
				<li class="noindent">description</li>
					<li class="indent">date, location</li>
			</div>
	</div>
</div>

<?php get_footer(); ?>
