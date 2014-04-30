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

		<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="images/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="images/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="images/mstile-144x144.png">

		<!--[if IE]>
			<link rel="shortcut icon" href="images/favicon.ico">
		<![endif]-->

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
	
				<header class="header" role="banner">
	
					<div id="inner-header" class="row">
						<div class="large-12 columns">

							<img src='images/gsel-logo-full.png'  alt='Graduate School of eLearning' />
							
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
