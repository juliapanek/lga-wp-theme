<?php
/*
Template Name Posts: Home
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<div id="main_content">
	<img class="logo_left" src="http://lesliegill.com/wordpress/wp-content/themes/lga/img/leslie-gill.png" alt="leslie gill architect">
</div> 

<div id="side_content">
	<img class="logo_right" src="http://lesliegill.com/wordpress/wp-content/themes/lga/img/architect.png" alt="leslie gill architect">
</div>

<div id="index_content">
	<div class="index_container">
<?php 
		$q = new WP_Query("p=791");
			if ($q->have_posts() ) {
				$q->the_post();
				$img = get_field('home_image');
				echo '<img class="full" src="' . $img['url'] . '">';
			}
			wp_reset_postdata(); 
?>
	</div>
</div>
