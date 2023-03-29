<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package copterpix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="CopterPix Pro – Autonomous Drones' Advanced Solutions" />
    <meta property="og:description" content="CopterPIX PRO Israeli deep-tech company that specializes in designing, developing and manufacturing unique and advanced UAV solutions for special assignments." />
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri()?>/assets/images/we_are_copterpix.png" />
    <meta property="og:secure_url" content="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo_white.svg" />
    <meta property="og:url" content="<?php echo get_permalink() ?>" />
    <meta property="og:site_name" content="Copterpix Pro" />
    <meta property="og:image:width" content="230" />
    <meta property="og:image:height" content="37" />
    <meta property="og:article:publisher" content="Copterpix-Pro" />
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri()?>/assets/images/favicon.png" type="image/x-icon">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header copterpix-site-header">
			<?php echo get_template_part('/template-parts/header-menu') ?>
		</header><!-- #masthead -->
        <!-- ENBALE -->
        <script src="https://cdn.enable.co.il/licenses/enable-L288mf8lu5a7pw-0717-39591/init.js"></script>
