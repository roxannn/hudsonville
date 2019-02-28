<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hudsonville
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i|Playfair+Display:400,400i,700,700i" rel="stylesheet">
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
<div class="site" id="site">
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hudsonville' ); ?></a>

	<header id="masthead" class="site-header">
			
			
			
		<div class="header-nav flex items-start justify-between pa2 pa3-ns">
				
				<div class="h-logo">
				<a class="home-logo" href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_directory');?>/assets/main-logo.svg" class="w2 w3-ns fixed-ns">
				</a></div>
				
			<nav id="site-navigation" class="main-navigation">	
				<div class="bee-logo pr4-ns mr4-ns">
				<a class="menu-logo">
				<img src="<?php bloginfo('template_directory');?>/assets/main-menu.svg" class="w2 w3-ns fixed-ns">
				 <?php wp_nav_menu(); ?>
				</a></div>
			
			
			</nav><!-- #site-navigation -->
			</div>
		
	
</div>
</header><!-- #masthead -->

<div id="content" class="site-content">
