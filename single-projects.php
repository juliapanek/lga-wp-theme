<?php get_header(); ?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-6 col-lg-push-6">
		<div class="projects">
<?php
			if (get_field('commercial_institutional')) {
				echo '<ul>';
				 
				while (has_sub_field('commercial_institutional')) {
					echo '<li class="noindent plist">' . get_sub_field('name') . '</li><li class="indent last">' . get_sub_field('location') . '</li>';
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
					echo '<li class="noindent plist">' . get_sub_field('name') . '</li><li class="indent last">' . get_sub_field('location') . '</li>';
			   }
			   
				echo '</ul>';
			}
?>
		</div>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-6 col-lg-pull-6">
	<!--<div id="lt-img-container">-->
<?php
			if (get_field('images_lt')) {
				echo '<ul>';
				 
				while (has_sub_field('images_lt')) {
					$image = get_sub_field('image_lt');
					echo '<li class="image_list_item"><img class="list_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/></li>';
		   		}

				echo '</ul>';
			}
?>
	<!--</div>-->
	<!--<div id="rt-img-container">-->
<?php
			if (get_field('images_rt')) {
				echo '<ul>';
				 
				while (has_sub_field('images_rt')) {
					$image = get_sub_field('image_rt');
					echo '<li class="image_list_item"><img class="list_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/></li>';
		   		}

				echo '</ul>';
			}
?>
	<!--</div>-->
</div>

<?php get_footer(); ?>
