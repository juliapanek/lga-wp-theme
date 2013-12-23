<?php get_header(); ?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-6 col-lg-push-6">
		<!-- add conditional to display/not display .title --> 
		<p class="title"><?php the_field('name'); ?></p>
		<!-- add conditional to display/not display .location -->
		<p class="location"><?php the_field('location'); ?></p>
		<!-- add conditional to display/not display .intro -->
		<p class="intro"><?php the_field('intro_paragraph_1'); ?></p>
		<!-- add conditional to display/not display .normal -->
		<p class="normal"><?php the_field('intro_paragraph_2'); ?></p>

		<div class="credits">
<?php
			if (get_field('credits')) {
				echo '<ul>';
				 
				while (has_sub_field('credits')) {
					echo '<li class="credit">role = ' . get_sub_field('role') . ', name = ' . get_sub_field('name') . '</li>';
			   }
			   
				echo '</ul>';
			}
?>
		</div>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-6 col-lg-pull-6">
<?php
        $galleryId = get_field('gallery_id');
        if ($galleryId && ($galleryId != 0)) {
           echo do_shortcode( '[ngg_images gallery_ids="' . $galleryId . '" display_type="ds-nextgen_royalslider"]' );
        }
?>
</div>

<?php get_footer(); ?>
