<?php
/*
Template Name: Firm Profile
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

THIS IS THE FIRM PROFILE TEMPLATE
<div id="main_content">
	<img class="logo_left" src="../img/leslie-gill.png" alt="leslie gill architect">
	<div class="main_container">
		<img class="full" src="" alt="bio image">
	</div>
</div>

<div id="side_content">
	<img class="logo_right" src="../img/architect.png" alt="leslie gill architect">
	<div class="side_container">

<?php 	if(get_field('repeaterfieldname')) 
		{
			echo '<p>'; 

			while(has_sub_field('repeaterfieldname'))
			{
				echo '<p>subfield_1 = ' . get_sub_field('subfield1') . sub_field_2 = '. get_sub_field('sub_field_2') . ', etc</p>';

			}
				echo '</p>';
}

?>
		<p class="title">title goes here</p>
		<p class="normal">Project text goes here</p>
	</div>
</div>

<?php get_footer(); ?>

