<?php get_header(); ?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-6 col-lg-push-6">
	<h1 class="title">Address</h1>
	<p class="larger"><?php the_field('address_line_1'); ?><br><?php the_field('address_line_2'); ?></p>
	<h1 class="title">Telephone</h1>
	<p class="larger"><?php the_field('telephone'); ?></p>
	<h1 class="title">Fax</h1>
	<p class="larger"><?php the_field('fax'); ?></p>
	<h1 class="title">Email</h1>
	<p class="larger"><?php the_field('email'); ?></p>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-6 col-lg-pull-6">
	images
</div>

<?php get_footer(); ?>
