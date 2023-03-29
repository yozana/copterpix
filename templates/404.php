<?php

/**
 * Template Name: 404 PAGE TEMPLATE
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package copterpix
 */

get_header();

?>
<main id="primary" class="site-main">
    <section id="copterpix-pro-hero">
        <div class="container-fluid g-0 hero-container" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/career.jpg');border-bottom-left-radius: 150px; border-bottom-right-radius: 150px">                    
            <div class="d-flex justify-content-between align-items-center h-100">                
                <div class="hero-content">
                    <h2 style="font-weight: 700; font-size: 46px"><?php echo get_field('hero_title') ?></h2>
                    <div class="hero-subcontent" style="max-width:410px">
                        <h5><?php echo get_field('hero_subtitle') ?></h5>
                    </div>
                </div>                 
            </div>
            <div class="show_more text-center"><a href="#main-content"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/circle_arrow_down.svg"  alt="show more" /></a></div>
        </div>
    </section>
    <section id="main-content" class="section-lg-space">
        <div class="container main">
            <div class="row">
                <h1>Oh no!</h1>
            </div>
        </div>
    </section>
    
</main><!-- #main -->

<?php
get_footer();
