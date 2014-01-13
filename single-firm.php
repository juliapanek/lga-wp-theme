<?php
	if (strpos($_SERVER['REQUEST_URI'], 'contact') !== FALSE)
		include 'single-firm-contact.php';
	else
		include 'single-firm-profile.php';
?>
