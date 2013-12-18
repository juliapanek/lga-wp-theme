<?php
/*
Template Name Posts: Project
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>


<div id="main_content">
	<img class="logo_left" src="<?php bloginfo('template_directory'); ?>/img/leslie-gill.png" alt="leslie gill architect">
	<div class="main_container">

<?php
		$image = get_field('image'); 

		echo '<img class="full" src="' . $image['url'] . '" alt="' . $image['alt'] . '"/>';
?>
		<!-- add conditional to display/not display .caption -->
		<p class="caption"><?php the_field('caption'); ?></p>
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
			<div class="credit_left">
			
<?php 		if(get_field('credits'))
			{
				echo '<ul>';

				while(has_sub_field('role'))
				{	
					echo '<li class="credit">sub_field_1 = ' . get_sub_field('role') . ', sub_field_2 = ' . get_sub_field('role') . ', etc</li>';
				}	

				echo '</ul>'; 
			}
?>
			</div>
			<div class="credit_right">
				<!-- repeater here -->
				<p class="credit"><?php the_field('name'); ?></p>
			</div>
	</div>
</div>

<?php get_footer(); ?>

