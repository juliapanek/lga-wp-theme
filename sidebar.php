<nav>
	<div class="nav_container">
	  <ul class="noindent">
		    <li id="project_menu" class="indent">Projects
			      <ul class="project_option">
			        <li>full list</li>
			        <li id="commercial">commercial
			          <ul class="commercial_projects">

<?php 				$com = new WP_Query("post_type=commercial"); 
					if ($com->have_posts() ) {
						echo '<li class="indent">'; 
						while ( $com->have_posts() ) {
							$com->the_post();
						echo '<a href="'.get_permalink().'">'.get_the_title().'</a></li>';

				
						}
					}
					wp_reset_postdata(); 
?>
			          </ul>
			        </li>
			        <li id="institutional">institutional
			          <ul class="institutional_projects">

<?php 				$com = new WP_Query("post_type=institutional"); 
					if ($com->have_posts() ) {
						echo '<li class="indent">';
						while ( $com->have_posts() ) {
							$com->the_post();
							
						echo '<a href="'.get_permalink().'">'.get_the_title().'</a></li>';

				
						}
					}
					wp_reset_postdata(); 
?>
			          </ul>
			        </li>
			        <li id="residential">residential
			        <ul class="residential_projects">

<?php 				$com = new WP_Query("post_type=residential"); 
					if ($com->have_posts() ) {
						echo '<li class="indent">';
						while ( $com->have_posts() ) {
							$com->the_post();
							
						echo '<a href="'.get_permalink().'">'.get_the_title().'</a></li>'; 

				
						}
					}
					wp_reset_postdata(); 
?> 
			        </ul>
			        </li> <!-- end of residential -->
			      </ul><!-- end of project option -->
		    </li> <!--end of projects-->
		    <li id="studio_menu" class="indent">Studio
			      <ul class="studio_option indent">
			        <li>firm profile</li>
			        <li>people
			          <ul class="people">

<?php 				$com = new WP_Query("post_type=people"); 
					if ($com->have_posts() ) {
						while ( $com->have_posts() ) {
							$com->the_post();
							
						echo '<li class="indent"><a href="'.get_permalink().'">'.get_the_title().'</a></li>'; 

				
						}
					}
					wp_reset_postdata(); 
?> 
			          </ul>
			        </li>
			        <li>contact</li>
			      </ul>
		    </li> <!-- end of studio -->
	  </ul>
	</div>
</nav>