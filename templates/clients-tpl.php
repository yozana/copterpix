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
    
    <section id="clients-by-industries" class="section-lg-space">
        <?php 
        while (have_rows('clients_section')) : the_row(); ?>
        <div class="container section-lg-space" >
            <div class="row">
                <div class="col">
                    <div class="logos-container p-5">
                        <h2><?php the_sub_field('section_title') ?><span class="subtitle ms-2"><?php echo the_sub_field('section_subtitle') ?></span></h2>
                        <hr style="border-top: 4px solid #DDA000; opacity: 1" />
                        <div class="d-flex justifiy-content-between my-5 flex-wrap">
                            <?php while (have_rows('logos')) : the_row() ?>
                            <div class="logo-item px-3"><img src="<?php the_sub_field('logo') ?>" /></div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile ?>
    </section>
    
    
    <section class="clients-section section-lg-space">
        <div class="container section-lg-padding " style="max-width: 780px;">
            <div class="row position-relative">                                
                <div class="col">
                    <div class="contact section-lg-space">
                        <div class="section-lg-padding">
                            <div class="client-contact-content">
                                <h4><?php echo get_field('clients_contact_box') ?></h4>
                                <a href="<?php echo get_field('contact_button') ?>" class="btn btn-primary text-white my-4">Contact Us</a>
                            </div>
                        </div>
                    </div>   
                    <img class="clients-icon-decoration" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/copterpix_large_icon.svg" alt="decoration" />
                </div>
            </div>
            
            
        </div>        
    </section>
    
</main><!-- #main -->

<?php
get_footer();
