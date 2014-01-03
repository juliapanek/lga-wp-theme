<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main_content">
	<div class="main_container">
		<div class="images">
<?php
			if (get_field('images')) {
				echo '<ul>';
				 
				while (has_sub_field('images')) {
					$image = get_sub_field('image');
					echo '<li class="list_image"><img class="list_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/></li>';
		   		}

				echo '</ul>';
			}
?>
		</div>
	</div>
</div>

<div id="side_content">
	<div class="side_container">
		<div class="projects">
<?php
			if (get_field('commercial_institutional')) {
				echo '<ul>';
				 
				while (has_sub_field('commercial_institutional')) {
					echo '<li class="noindent">' . get_sub_field('name') . '</li><li class="indent">' . get_sub_field('location') . '</li>';
			   }
			   
				echo '</ul>';
			}
?>
		</div>
		<div class="projects">
<?php
			if (get_field('residential')) {
				echo '<ul>';
				 
				while (has_sub_field('residential')) {
					echo '<li class="noindent">' . get_sub_field('name') . '</li><li class="indent">' . get_sub_field('location') . '</li>';
			   }
			   
				echo '</ul>';
			}
?>
		</div>
	</div>
</div>

<?php get_footer(); ?>