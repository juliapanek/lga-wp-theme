<?php
  global $pageTitle;
  $pageTitle = 'Firm Profile';
  get_header();
?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-5 col-lg-push-7">
	<div class="column-container">
		<h1 class="title">Firm Profile</h1>
		<p class="normal"><?php the_field('description'); ?></p>
		<h1 class="title">Composition</h1>
		<p class="normal"><?php the_field('composition'); ?></p>
		<h1 class="title">Founded</h1>
		<p class="normal"><?php the_field('founded'); ?></p>
	</div>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-7 col-lg-pull-5">
	<div class="column-container">
<?php
	$image = get_field('image');
	echo '<img class="list_image" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/>';
?>
	</div>
</div>

<?php get_footer(); ?>

