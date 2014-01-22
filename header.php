<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
	
				<header class="header" role="banner">
	
					<div id="inner-header" class="row">
						<div class="large-12 columns">
							<div id="aulogo">
							 	<a href="http://www.au.edu"><img src='<?php echo get_template_directory_uri(); ?>/library/images/au-logo.png' width='87' height='87' alt='Assumption University' /></a>
							</div>
							<div id="gsellogo">
									<a href="http://www.elearning.au.edu"><img src='<?php echo get_template_directory_uri(); ?>/library/images/gsel-logo.png' width='72' height='74' alt='Assumption University' /></a>
							</div>			 

							<!--<p id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
							<p class="description"><?php  bloginfo('description'); ?></p>-->
						</div>
						
						
					</div> <!-- end #inner-header -->
	
				</header> <!-- end header -->

	<div class="off-canvas-wrap">
		<div class="inner-wrap">
			<div id="container">				

				<div id="navbar">

					<?php get_template_part( 'partials/nav', 'topbar' ); ?>
					
					<?php get_template_part( 'partials/nav', 'offcanvas' ); ?>

				</div>
