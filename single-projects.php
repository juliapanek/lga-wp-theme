<?php
	global $page_title;
	$page_title = 'Full Project List';
	get_header();

	function listProjects($repeaterFieldName)
	{
		while (has_sub_field($repeaterFieldName)) {
			echo '<li class="plist">';

			$link = get_sub_field('link');
			if ($link && (substr($link, -strlen("dummy-post/")) === "dummy-post/"))
				unset($link);

			echo '<p class="project_name">';

			if (isset($link))
				echo '<a class="project_link" href="' . $link . '">';

			echo get_sub_field('name');

			if (isset($link))
				echo '</a>';

			echo '</p><p class="indent">' . get_sub_field('location') . '</p></li>';
		}
	}

?>


<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-5 col-lg-push-7">
	<div class="projects">
		<p class="resume_section">Commercial and Institutional Projects</p><br>
		<?php
			if (get_field('commercial_institutional')) {
				echo '<ul>';
				listProjects('commercial_institutional');
				echo '</ul>';
			}
		?>
		<p class="resume_section res-space">Residential Projects</p><br>
		<?php
			if (get_field('residential')) {
				echo '<ul>';
				listProjects('residential');
				echo '</ul>';
			}
		?>
	</div>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-7 col-lg-pull-5">
	<div class="column-container">
		<div class="left_image_list">
			<?php
				if (get_field('images_lt')) {
					echo '<ul>';
					while (has_sub_field('images_lt')) {
						$image = get_sub_field('image_lt');
						echo '<li><img class="list_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/><p class="list-img-caption">' . $image['title'] . '</p></li>';
					}
					echo '</ul>';
				}
			?>
		</div>
		<div class="right_image_list">
			<?php
				if (get_field('images_rt')) {
					echo '<ul>';
					while (has_sub_field('images_rt')) {
						$image = get_sub_field('image_rt');
						echo '<li><img class="list_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/><p class="list-img-caption">' . $image['title'] . '</p></li>';
					}
					echo '</ul>';
				}
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
