<?php print_r(get_field('project_category')); ?>

<nav id="side_nav">
	<div class="space">&nbsp;</div>
		<ul>
			<li>
			<ul>
				<li id="project_menu">projects</li>
					<li class="project_option commercial hide">commercial</li>
						<ul class="commercial_projects hide project_list">

<?php 

							// The Query
							$com = new WP_Query($post_type="com_proj"); 
							// The Loop Commercial
							if ($com->have_posts() ) {
								echo '<li class="project_option institutional  hide">';
								while ( $com->have_posts() ) {
									$com->the_title();
									echo '<li>' . get_the_title() . get_the_permalink() . '</li>';
								}
							}
							wp_reset_postdata(); 
?>
						</ul>
					<li class="project_option institutional  hide">institutional</li>
	    			<ul class="institutional_projects hide project_list">
<?php 
		    				// The Query
	    				$inst = new WP_Query($post_type="inst_proj");
	    				// The Loop Institutional 
							if ($inst->have_posts() ) {
								echo '<li class="project_option institutional  hide">';
								while ( $inst->have_posts() ) {
									$inst->the_title();
									echo '<li>' . get_the_title() . get_the_permalink() . '</li>';
								}
							}
							wp_reset_postdata(); 
?>
						</ul>
					<li class="project_option residential  hide">residential</li>
	    			<ul class="residential_projects hide project_list">
<?php 
    				// The Query
		    			$res = new WP_Query($post_type="res_proj");
		    				// The Loop Institutional 
								if ($res->have_posts() ) {
									echo '<li class="project_option institutional  hide">';
									while ( $res->have_posts() ) {
										$res->the_title();
										echo '<li>' . get_the_title() . get_the_permalink() . '</li>';

									}
								}
								wp_reset_postdata(); 
?>
				</ul>
			<li class="project_option hide">full list</li>
			</ul>
			</li>
				<li>
					<li>
	<ul class="studio">
		<li id="studio_menu">studio</li>
		<li class="studio_option hide">firm profile</li>
					</ul>
	</li>
					</ul> 
					<ul class="info_section">
							<li class="info first">277 Broadway Suite 100</li>
							<li class="info">New York NY 10007</li>
							<li>&nbsp;</li>
							<li class="info"><span class="bold">TEL</span>&emsp; 212 334-8011</li>
							<li class="info"><span class="bold">FAX</span>&emsp; 212 334-8046</li>
							<li class="info"><span class="bold">EMAIL</span>&emsp; <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">info@lesliegill.com</a></li>
		</ul>
</nav>

?>
