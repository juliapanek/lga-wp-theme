<?php
/*
Template Name Posts: Project
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main_content">
	<div id="page_numbers">
			<p class="current_page">1&nbsp;&nbsp;</p>
			<p class="next_page">&frasl;&nbsp;&nbsp;10</p>
		</div>
	<img class="logo_left" src="wp-content/themes/lga/img/leslie-gill.png" alt="leslie gill architect">
	<div class="main_container">
		<img class="project_img" src="<?php the_field('main_img'); ?>" alt="fdasdf" /> 
		<p class="caption"><?php the_field('project_caption'); ?></p>
	</div>
</div>

<div id="side_content">
	<img class="logo_right" src="wp-content/themes/lga/img/architect.png" alt="leslie gill architect">
		<div id="arrows">
			<p class="arrow rt_arrow">&nbsp;&nbsp;&rarr;</p>
			<p class="arrow lt_arrow">&larr;&nbsp;&nbsp;</p>
		</div>
				<div class="process_container">
				<img class="process_img" src="<?php the_field('process_img'); ?>" alt="fdasdf" /> 
				<p class="process_caption"><?php the_field('process_cap'); ?></p>
				<p class="process_text"><?php the_field('process_text'); ?></p>
				</div>
</div>