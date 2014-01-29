<?php get_header(); ?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-5 col-lg-push-7">
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-7 col-lg-pull-5">
	<div class="column-container">
	
	<?php 
					$img = get_field('home_image');
					echo '<img class="full" src="' . $img['url'] . '">';

	echo nggcf_get_field(3, 'Process Text');
	?>

	</div>
</div>

<?php get_footer(); ?>
