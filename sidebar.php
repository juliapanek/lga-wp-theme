<nav>
	<div id="menu" class="col-xs-12 col-lg-2 col-lg-pull-10">
	<div class="column-container">
	  <ul class="noindent">
		    <h2 id="project_menu">Projects</h2>
			      <ul class="project_option">
			       <a href="http://69.195.124.62/~lesliegi/projects/list/"> <li class="menu_main">full list</li></a>
			        <li id="commercial" class="menu_main">commercial
			          <ul class="commercial_projects">

<?php
					if ($expandSubMenu == "commercial")
					   $liClass = "com menu_sub";
					else
					   $liClass = "com menu_sub hide";

					$com = new WP_Query("post_type=commercial"); 
					if ($com->have_posts() ) { 
						while ( $com->have_posts() ) {
							$com->the_post();
							echo '<li class="' . $liClass . '"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
						}
					}
					wp_reset_postdata(); 
?>
			          </ul>
			        </li>
			        <li id="institutional" class="menu_main">institutional
			          <ul class="institutional_projects">

<?php
					if ($expandSubMenu == "institutional")
					   $liClass = "inst menu_sub";
					else
					   $liClass = "inst menu_sub hide";

					$inst = new WP_Query("post_type=institutional"); 
					if ($inst->have_posts() ) {
						while ( $inst->have_posts() ) {
							$inst->the_post();
							echo '<li class="' . $liClass . '"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
						}
					}
					wp_reset_postdata(); 
?>
			          </ul>
			        </li>
			        <li id="residential" class="menu_main">residential
			        <ul class="residential_projects">

<?php
					if ($expandSubMenu == "residential")
					   $liClass = "res menu_sub";
					else
					   $liClass = "res menu_sub hide";

					$res = new WP_Query("post_type=residential"); 
					if ($res->have_posts() ) {
						while ( $res->have_posts() ) {
							$res->the_post();
							echo '<li class="' . $liClass . '"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
						}
					}
					wp_reset_postdata(); 
?> 
			        </ul>
			        </li>
			      </ul>

		    <h2 id="studio_menu">Studio</h2>
			      <ul class="studio_option">
			        <li class="menu_main"><a href="/firm/profile/">firm profile</a></li>
			        <li class="menu_main" id="people">people
			          <ul>

<?php
					if ($expandSubMenu == "people")
					   $liClass = "ppl menu_sub";
					else
					   $liClass = "ppl menu_sub hide";

					$ppl = new WP_Query(array("post_type"=>"people", "order"=>"ASC")); 
					if ($ppl->have_posts() ) {
						while ( $ppl->have_posts() ) {
							$ppl->the_post();
							echo '<li class="' . $liClass . '"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
						}
					}
					wp_reset_postdata(); 
?> 
			          </ul>
			        </li>
			        <li class="menu_main"><a href="/firm/contact/">contact</a></li>
			      </ul>
	  </ul>
	 </div>
	</div>
</nav>