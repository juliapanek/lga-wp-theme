<?php get_header(); ?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-6 col-lg-push-6">
	<h1 class="title">Firm Profile</h1>
	<p class="larger"><?php the_field('description'); ?></p>
	<h1 class="title">Composition</h1>
	<p class="larger"><?php the_field('composition'); ?></p>
	<h1 class="title">Founded</h1>
	<p class="larger"><?php the_field('founded'); ?></p>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-6 col-lg-pull-6">
	images
</div>

<?php get_footer(); ?>
