<?php get_header(); ?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-6 col-lg-push-6">
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-6 col-lg-pull-6">
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
