<?php
/**
 * This is the navigation template for the menu bar
 */
 
$navigation_title = get_field("navigation_title"); 
$background_color = get_field("background_color");?>

<body style="background-color:<?php echo $background_color ?>">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="index.php"><?php echo $navigation_title; ?></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		Menu
		<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto custom-navbar">
			<?php

			$args = array(
				'theme_location' => 'heading-menu',
				'container' => 'false',
				'orderby' => 'menu_order'
			);

			// This line of code below will populate list of menu from navigation menu in Wordpress
			wp_nav_menu( $args );

			?>
			</ul>
		</div>
	</div>
</nav>