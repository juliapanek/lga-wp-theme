<?php
	global $page_title;
	$page_title = get_field('name') . ', ' . get_field('role');

	global $page_description;
	$page_description = get_field('name') . ' is ' . get_field('role') . ' at ';

	get_header();
?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-5 col-lg-push-7">
	<div class="column-container">

		<h1 class="title"><?php the_field('name'); ?></h1>
		<p class="resume_section"><?php the_field('role'); ?></p>
		<p class="resume_section"><?php the_field('license'); ?></p>

		<?php
			if (get_field('image')) {
				$image = get_field('image');
				echo '<img class="bio_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/>';
			}
		?>
		<p class="intro"><?php the_field('bio'); ?></p>
	</div>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-7 col-lg-pull-5">
	<div class="column-container">

		<div class="resume">
			<?php
				if (get_field('resume')) {
					echo '<ul>';

					while (has_sub_field('resume')) {
						echo '<li class="resume"><p class="resume_section">' . get_sub_field('section_title') . '</p><br>';

						if (get_sub_field('section_jobs')) {
							echo '<ul>';

							while (has_sub_field('section_jobs'))
								echo '<li class="noindent">' . get_sub_field('name') . '</li><li class="indent">' . get_sub_field('description') . '</li>';

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

<?php
	$expand_sub_menu = "people";
	include 'footer.php'
?>
