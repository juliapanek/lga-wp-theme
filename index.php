<?php get_header(); ?>

<div class="content">
<?php 
		$q = new WP_Query("p=102");
			if ($q->have_posts() ) {
				$q->the_post();
				$img = get_field('home_image');
				echo '<img class="full" src="' . $img['url'] . '">';
			}
			wp_reset_postdata(); 
?>
</div>

<?php get_footer(); ?>
