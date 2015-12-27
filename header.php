<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider.js"></script>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />



	<?php wp_head(); ?>

</head>
<body>
	<header class="Header">
		<!-- <div class="Header-top">
			<h3><?php bloginfo('description' ); ?></h3>
		</div> -->
		<div class="Header-content">
			<div class="Header-title">
				<a href="<?php echo get_option('home'); ?>/">
					<h1><?php bloginfo('name' ); ?></h1>
				</a>
				<small> <?php bloginfo('description' ); ?></small>
			</div>			
			<div class="Header-menu">
				<label class="Header-label" for="menu">
					<span class="icon-menu"></span>
				</label>
				<input type="checkbox" class="check" id="menu">								
				<?php include TEMPLATEPATH . '/nav.php' ?>
			</div>
		</div>
	</header>