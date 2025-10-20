<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="icon" href="<?= THEMEROOT ?>/assets/img/logo/microchip-solid.svg" syzes="any" type="image/svg+xml">

	<title>
		<?php 
			echo is_front_page() ? '' : wp_title('', false) . ' | ';
			bloginfo('name'); 
			?>
	</title>

	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="<?= THEMEROOT ?>/assets/favicon.ico">
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>

</head>

<body <?php body_class() ?> id="page-top">


	<?php
	if (!(is_front_page() || is_home()))
		get_template_part('template-parts/navigation/navbar');
	?>