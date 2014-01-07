<nav>
	<div id="menu" class="col-xs-12 col-lg-2 col-lg-pull-10">
	  <ul class="noindent">
		    <h2 id="project_menu">Projects</h2>
			      <ul class="project_option">
			       <a href="http://69.195.124.62/~lesliegi/projects/list/"> <li class="noindent">full list</li></a>
			        <li id="commercial" class="noindent">commercial
			          <ul class="commercial_projects">

<?php 				$com = new WP_Query("post_type=commercial"); 
					if ($com->have_posts() ) { 
						while ( $com->have_posts() ) {
							$com->the_post();
						echo '<li class="com indent hide"><a href="'.get_permalink().'">'.get_the_title().'</a></li>';

				
						}
					}
					wp_reset_postdata(); 
?>
			          </ul>
			        </li>
			        <li id="institutional" class="noindent">institutional
			          <ul class="institutional_projects">

<?php 				$inst = new WP_Query("post_type=institutional"); 
					if ($inst->have_posts() ) {
						while ( $inst->have_posts() ) {
							$inst->the_post();
							
						echo '<li class="inst indent hide"><a href="'.get_permalink().'">'.get_the_title().'</a></li>';

				
						}
					}
					wp_reset_postdata(); 
?>
			          </ul>
			        </li>
			        <li id="residential" class="noindent">residential
			        <ul class="residential_projects">

<?php 				$res = new WP_Query("post_type=residential"); 
					if ($res->have_posts() ) {
						while ( $res->have_posts() ) {
							$res->the_post();
							
						echo '<li class="res indent hide"><a href="'.get_permalink().'">'.get_the_title().'</a></li>'; 

				
						}
					}
					wp_reset_postdata(); 
?> 
			        </ul>
			        </li> <!-- end of residential -->
			      </ul><!-- end of project option -->
<!--end of projects-->
		    <h2 id="studio_menu">Studio</h2>
			      <ul class="studio_option">
			        <li class="noindent">firm profile</li>
			        <li class="noindent" id="people">people
			          <ul>

<?php 				$com = new WP_Query("post_type=people"); 
					if ($com->have_posts() ) {
						while ( $com->have_posts() ) {
							$com->the_post();
							
						echo '<li class="ppl indent hide"><a href="'.get_permalink().'">'.get_the_title().'</a></li>'; 

				
						}
					}
					wp_reset_postdata(); 
?> 
			          </ul>
			        </li>
			        <li class="noindent">contact</li>
			      </ul>
		    <!-- end of studio -->
	  </ul>
	</div>
</nav>