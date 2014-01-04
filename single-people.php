<?php
/*
Template Name: People
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main_content">
	<div class="main_container">
		<p class="title"><?php the_field('name'); ?></p>
		<h1 class="location"><?php the_field('role'); ?></h1>
		<!-- add conditional for license-->
		<h1 class="location"><?php the_field('license'); ?></h1>

<?php
			if (get_field('image')) {
				
					$image = get_field('image');
					echo '<img class="bio_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/>';
			}
?>

		<p class="normal"><?php the_field('bio'); ?></p>
	</div>
</div>

<div id="side_content">
	<div class="side_container">
		<div class="resume">
<?php
		if (get_field('resume')) {
				echo '<ul>';
				 
				while (has_sub_field('resume')) {
					echo '<li><p class="location">' . get_sub_field('section_title') . '</p><br>';

					if (get_sub_field('section_jobs')) {
						echo '<ul>';
				 
					   	while (has_sub_field('section_jobs')) {
							echo '<li class="noindent">' . get_sub_field('name') . get_sub_field('description') . '</li>';
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
