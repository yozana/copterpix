<?php

/**
 * Template Name: CONTACT PAGE TEMPLATE
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
<main id="primary" class="site-main contact-page">
    <section id="copterpix-pro-hero">
        <div class="container-fluid g-0 hero-container" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact-us.jpg'); background-size: cover">                    
            <div class="d-flex justify-content-between align-items-center h-100">                
                <div class="hero-content" style="max-width: 500px;">
                    <h2 style="font-weight: 500; font-size: 46px"><?php echo get_field('hero_title') ?></h2>
                    <p class="subtitle"><?php echo get_field('hero_subtitle') ?></p>
                </div>                 
            </div>
            <div class="show_more text-center"><a href="#form"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/circle_arrow_down.svg"  alt="show more" /></a></div>
        </div>
    </section>
    <section id="form" class="section-lg-space">
        <div class="container">
            <div class="row">
                <h2 class="section-title-left"><?php echo get_field('form_title') ?></h2>            
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-7">
                    <div class="form-container g-3" style="max-width: 660px">
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Page"]') ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-5">
                    <div class="d-flex align-items-center my-2">
                        <img class="me-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/location_icon.png" alt="address" />
                        <p class="mb-0"><?php echo get_field('company_address', 'options') ?></p>
                    </div>
                    <div class="d-flex align-items-center my-2">
                        <img class="me-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/phone_icon.png" alt="address" />
                        <p class="mb-0"><?php echo get_field('company_phone', 'options') ?></p>
                    </div>
                    <div class="d-flex align-items-center my-2">
                        <img class="me-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/email_icon.png" alt="address" />
                        <p class="mb-0"><?php echo get_field('company_email', 'options') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-lg-space mb-0">
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1699.0540612601733!2d34.54199597972781!3d31.603496955546866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x150283696cf7bc4f%3A0xbee2add99c5cd2cf!2sCOPTERPIX%20PRO!5e0!3m2!1siw!2sil!4v1670508089905!5m2!1siw!2sil" width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
