<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--<link href="<?php echo get_template_directory_uri(); ?>" rel="stylesheet" type="text/css"/>-->
	<!--<link href="<?php echo get_template_directory_uri(); ?>/css/index.css" rel="stylesheet" type="text/css"/> -->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header-top">
	<header>
		<div class="logo">
			<h1><a href="<?php home_url('/'); ?>">Nitin-Garud</a></h1>
		</div>
		<div class="menu">
			<!-- <ul>
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="about.html">About me</a></li>
				<li><a href="resume.html">Resume</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul> -->
			<nav class="main-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false )); ?>
		</nav>
		</div>
		
	</header>
	
</div>
<div id="page" class="hfeed site">
	
	

	<div id="content" class="site-content">
