<?php
	global $page_title;
	$page_title = 'Contact Info';
	get_header();
?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-5 col-lg-push-7">
	<div class="column-container">
		<h3 class="title">Address</h3>
		<p class="normal space"><?php the_field('address_line_1'); ?><br><?php the_field('address_line_2'); ?></p>
		<h3 class="title">Telephone</h3>
		<p class="normal space"><?php the_field('telephone'); ?></p>
		<h3 class="title">Email</h3>
		<?php $url = get_post_meta(get_the_ID(), 'email', true); ?>
		<p class="normal space"><a href="mailto:<?php echo $url; ?>"><?php echo $url ?></a></p>
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
