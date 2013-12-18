<?php
/*
Template Name: Firm Profile
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="wrapper">

	<div id="main_content">
		<img class="logo_left" src="../img/leslie-gill.png" alt="leslie gill architect">
		<div class="main_container">
			<h1 class="title">Firm Profile</h1>
			<p class="larger"><?php the_field('description'); ?></p>
			<h1 class="title">Composition</h1>
			<p class="larger"><?php the_field('composition'); ?></p>
			<h1 class="title">Founded</h1>
			<p class="larger"><?php the_field('founded'); ?></p>
		</div>
	</div>

	<div id="side_content">
		<img class="logo_right" src="../img/architect.png" alt="leslie gill architect">
		<div class="side_container">
			<!-- put images repeater here -->

		</div>
	</div>
</div>

<?php get_footer(); ?>

