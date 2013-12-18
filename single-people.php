<?php
/*
Template Name: People
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

THIS IS A PEOPLE POST
<div id="main_content">
	<img class="logo_left" src="../img/leslie-gill.png" alt="leslie gill architect">
	<div class="main_container">
		<p class="title">name</p>
		<img class="full" src="" alt="bio image">
		<p class="normal">bio text goes here</p>
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
