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
    <section id="404-section" class="section-lg-space">
        <div class="container">
            <div class="row">
                <div class="my-5 text-center">
                    <h1>Lost your way?</h1>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/404.svg" alt="page not found" />
                    <div class="back-to-home my-5"><a href="/" class="btn btn-primary text-white text-center">Back to Homepage</a></div>
                </div>
            </div>
        </div>
    </section>
    
</main><!-- #main -->

<?php
get_footer();
