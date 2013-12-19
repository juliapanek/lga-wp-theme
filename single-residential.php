<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main_content">
	<img class="logo_left" src="<?php bloginfo('template_directory'); ?>/img/leslie-gill.png" alt="leslie gill architect">
	<div class="main_container">
<?php
        $galleryId = get_field('gallery_id');
        if ($galleryId && ($galleryId != 0)) {
           echo do_shortcode( '[ngg_images gallery_ids="' . $galleryId . '" display_type="ds-nextgen_royalslider"]' );
        }
?>
	</div>
</div>

<!-- SIDE CONTENT -->

<!-- add conditional to display/not display #side_content -->
<div id="side_content">
	<img class="logo_right" src="<?php bloginfo('template_directory'); ?>/img/architect.png" alt="leslie gill architect">
	<div class="side_container">
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
</div>

<?php get_footer(); ?>

