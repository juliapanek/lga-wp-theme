<?php
	function render_list_item($title, $link, $currentLink, $class)
	{
		if ($link == $currentLink)
			$class = $class . " active";
		echo '<li class="' . $class . '"><a href="' . $link . '">' . $title . '</a></li>';
	}

	function list_posts_by_type($postType, $order, $li_class, $expand_sub_menu)
	{
		$current_permalink = get_permalink();
		$li_class = $li_class . " menu_sub";

		if ($expand_sub_menu != $postType)
			$li_class = $li_class . " hide";

		$qry = new WP_Query(array("post_type" => $postType, "order" => $order));
		if ($qry->have_posts()) {
			while ($qry->have_posts()) {
				$qry->the_post();
				render_list_item(get_the_title(), get_permalink(), $current_permalink, $li_class);
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
							<?php list_posts_by_type("residential", "DESC", "res", $expand_sub_menu); ?>
						</ul>
					</li>
					<li id="commercial" class="menu_main">commercial
						<ul class="commercial_projects">
							<?php list_posts_by_type("commercial", "DESC", "com", $expand_sub_menu); ?>
						</ul>
					</li>
					<li id="institutional" class="menu_main">institutional
						<ul class="institutional_projects">
							<?php list_posts_by_type("institutional", "DESC", "inst", $expand_sub_menu); ?>
						</ul>
					</li>
					<?php render_list_item("full list", "http://69.195.124.62/~lesliegi/projects/list/", get_permalink(), "menu_main"); ?>
				</ul>

				<p id="studio_menu" class="menu">Studio</p>
				<ul class="studio_option">
					<?php render_list_item("firm profile", "http://69.195.124.62/~lesliegi/firm/profile/", get_permalink(), "menu_main"); ?>
					<li class="menu_main" id="people">people
						<ul>
							<?php list_posts_by_type("people", "ASC", "ppl", $expand_sub_menu); ?>
						</ul>
					</li>
					<?php render_list_item("contact", "http://69.195.124.62/~lesliegi/firm/contact/", get_permalink(), "menu_main"); ?>
				</ul>
			</ul>
		</div>
	</div>
</nav>