<?php
  global $pageTitle;
  $pageTitle = 'Contact Info';
  get_header();
?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-6 col-lg-push-6">
	<div class="column-container">
		<h1 class="title">Address</h1>
		<p class="normal space"><?php the_field('address_line_1'); ?><br><?php the_field('address_line_2'); ?></p>
		<h1 class="title">Telephone</h1>
		<p class="normal space"><?php the_field('telephone'); ?></p>
		<h1 class="title">Fax</h1>
		<p class="normal space"><?php the_field('fax'); ?></p>
		<h1 class="title">Email</h1>
		<p class="normal space"><?php the_field('email'); ?></p>
	</div>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-6 col-lg-pull-6">
	<div class="column-container">
<?php
	$image = get_field('image');
	echo '<img class="list_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/>';
?>
	</div>
</div>

<?php get_footer(); ?>

