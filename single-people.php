<?php get_header(); ?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-6 col-lg-push-6">
	
		<p class="title"><?php the_field('name'); ?></p>
		<p class="location"><?php the_field('role'); ?></p>
		<p class="license"><?php the_field('license'); ?></p>

<?php
		if (get_field('image')) {
			
				$image = get_field('image');
				echo '<img class="bio_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/>';
		}
?>
		<p class="normal"><?php the_field('bio'); ?></p>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-6 col-lg-pull-6">

		<div class="resume">
<?php
		if (get_field('resume')) {
				echo '<ul>';
				 
				while (has_sub_field('resume')) {
					echo '<li class="resume"><p class="resume_section">' . get_sub_field('section_title') . '</p><br>';

					if (get_sub_field('section_jobs')) {
						echo '<ul>';
				 
					   	while (has_sub_field('section_jobs')) {
							echo '<li class="noindent">' . get_sub_field('name') . '</li><li class="indent">' . get_sub_field('description') . '</li>';
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

<?php
	$expandSubMenu = "people";
	include 'footer.php'
?>
