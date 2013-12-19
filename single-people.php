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
		<div class="resume">
<?php
		if (get_field('resume')) {
				echo '<ul>';
				 
				while (has_sub_field('resume')) {
					echo '<li class="section">title = ' . get_sub_field('section_title') . '<br>';

					if (get_sub_field('section_jobs')) {
						echo '<ul>';
				 
					   	while (has_sub_field('section_jobs')) {
							echo '<li class="jobs">name = ' . get_sub_field('name') . ', description = ' . get_sub_field('description') . '</li>';
						}
						
						echo '</ul>';
					}
					
					echo '</li>';				   
			   }
			   
				echo '</ul>';
			}
?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
