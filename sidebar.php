<?php
	function renderListItem($title, $link, $currentLink, $class) {
		if ($link == $currentLink)
		   $class = $class . " active";
		echo '<li class="' . $class . '"><a href="' . $link . '">' . $title . '</a></li>';
	}

	function listPostsByType($postType, $order, $liClass, $expandSubMenu)
	{
		$currentPermalink = get_permalink();
		$liClass = $liClass . " menu_sub";

		if ($expandSubMenu != $postType)
		   $liClass = $liClass . " hide";

		$qry = new WP_Query(array("post_type"=>$postType, "order"=>$order)); 
		if ($qry->have_posts() ) { 
			while ( $qry->have_posts() ) {
				$qry->the_post();
				renderListItem(get_the_title(), get_permalink(), $currentPermalink, $liClass);
			}
		}
		wp_reset_postdata(); 
	}
?>

<nav>
	<div id="menu" class="col-xs-12 col-lg-2 col-lg-pull-10">
	<div class="column-container">
	  <ul class="noindent">
		    <p id="project_menu" class="menu">Projects</p>
			      <ul class="project_option">
			      				        <li id="residential" class="menu_main">residential
			        <ul class="residential_projects">

<?php
						listPostsByType("residential", "DESC", "res", $expandSubMenu);
?> 
			        </ul>
			        </li>
			        <li id="commercial" class="menu_main">commercial
			          <ul class="commercial_projects">

<?php
						listPostsByType("commercial", "DESC", "com", $expandSubMenu);
?>
			          </ul>
			        </li>
			        <li id="institutional" class="menu_main">institutional
			          <ul class="institutional_projects">

<?php
						listPostsByType("institutional", "DESC", "inst", $expandSubMenu);
?>
			          </ul>
			        </li>
<?php
					renderListItem("full list", "http://69.195.124.62/~lesliegi/projects/list/", get_permalink(), "menu_main");
?>
			      </ul>

		    <p id="studio_menu" class="menu">Studio</p>
			      <ul class="studio_option">
<?php
					renderListItem("firm profile", "http://69.195.124.62/~lesliegi/firm/profile/", get_permalink(), "menu_main");
?> 
			        <li class="menu_main" id="people">people
			          <ul>
<?php
						listPostsByType("people", "ASC", "ppl", $expandSubMenu);
?> 
			          </ul>
			        </li>
<?php
					renderListItem("contact", "http://69.195.124.62/~lesliegi/firm/contact/", get_permalink(), "menu_main");
?> 
			      </ul>
	  </ul>
	 </div>
	</div>
</nav>