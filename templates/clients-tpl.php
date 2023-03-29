<?php

/**
 * Template Name: CLIENTS TEMPLATE
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

//$home_url = apply_filters('wpml_home_url', get_option('home'));

?>
<main id="primary" class="site-main company-page">
    <section id="copterpix-pro-hero">
        <div class="container-fluid g-0 hero-container" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/clients-bg.jpg'); background-attachment: fixed; background-position: center; background-size: cover">                    
            <div class="d-flex justify-content-between align-items-center h-100">                
                <div class="hero-content" style="max-width: 450px">
                    <h2 style="font-weight: 500; font-size: 46px"><?php echo get_field('hero_title') ?></h2>
                    <h5><?php echo get_field('hero_subtitle') ?></h5>
                </div> 
                <div class="bg-decoration">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ere-mini-95.png" />
                </div>
            </div>
            <div class="show_more text-center"><a href="#clients"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/circle_arrow_down.svg"  alt="show more" /></a></div>
        </div>
    </section>
    <section class="section-lg-space">
        <div class="container" id="clients">
            <div class="row">                
                <h2 class="text-center"><?php echo get_field('trusting_us_title') ?></h2>                                    
            </div>
            <div class="row g-4 my-5">                        
                <?php if (have_rows('clients_logos')) {
                    while( have_rows('clients_logos')) : the_row(); ?>
                        <div class="col-6 col-sm-3 col-lg-4"><img src="<?php echo get_sub_field('logo') ?>" /></div>                                
                    <?php endwhile;}  ?>            
            </div>
            
        </div>
    </section>
    <section class="clients-section section-lg-space">
        <div class="container section-lg-padding ">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="img-container position-relative" style="max-width:566px;">
                        <img class="clients-contact" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Clients_contact-banner.jpg" alt="clients contact background" /> 

                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 clients-nagative-margin">
                    <div class="contact section-lg-space">
                        <div class="section-lg-padding ">
                            <div class="ms-4">
                                <h4><?php echo get_field('clients_contact_box') ?></h4>
                                <a href="<?php echo get_field('contact_button') ?>" class="btn btn-primary text-white my-4">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>        
    </section>
    
</main><!-- #main -->

<?php
get_footer();
