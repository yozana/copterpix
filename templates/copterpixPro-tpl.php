<?php

/**
 * Template Name: COPTERPIX-PRO TEMPLATE
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
<main id="primary" class="site-main copterpix-pro-page">
    <section id="copterpix-pro-hero">
        <div class="container-fluid g-0 hero-container" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/technology.jpg'); background-size: cover">                    
            <div class="d-flex justify-content-between align-items-center h-100">                
                <div class="hero-content">
                    <h2><?php echo get_field('hero_tile') ?></h2>
                    <?php echo get_field('hero_subtitle') ?>
<!--                    <div class="mt-2 btn btn-outline-light hover-dark"><a alt="learn more" style="color: inherit" href="<?php echo get_field('hero_learn_more_link') ?>">Learn More</a></div>-->
                </div> 
                <div class="bg-decoration">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/drone-pro.png" />
                </div>
            </div>
            <div class="show_more text-center"><a href="#solutions"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/circle_arrow_down.svg"  alt="show more" /></a></div>
        </div>
    </section>
    <section id="solutions" class="section-lg-space">
        <div class="container">
            <h2 class="text-center section-title-center"><?php echo get_field('copterpix_solution_title') ?></h2>
            <p class="mt-2 m-auto text-center"><?php echo get_field('copterpix_solution_description') ?></p>
        </div>
        <div class="container my-5">
            <?php
            if (have_rows('solution_advantages')): ?>
            <div class="row "> 
            <?php    
                while( have_rows('solution_advantages')) : the_row(); ?>                        
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="solution-icon">
                        <img src="<?php echo get_sub_field('solution_icon') ?>" alt="<?php echo get_sub_field('solution_description') ?>" />
                    </div>
                    <div class="solution-description ">
                        <p class="my-3 text-center"><?php echo get_sub_field('solution_description') ?></p>
                    </div>
                </div>
                <?php endwhile; endif  ?>
            </div>
        </div>
    </section>
    <section id="edge">
        <div class="cp-bg">        
            <div class="container section-lg-padding">
                <h2 class="text-center section-title-center mb-lg-5"><?php echo get_field('copterpix_edge_title') ?></h2>
                <div class="row p-lg-0 p-5 p-lg-0 g-5 px-xl-3 g-lg-0">
                    <div class="col-lg-3 col-md-12">
                        <div class="mx-3 px-3-sm px-0-lg d-flex h-75">                            
                            <?php echo get_field('left_image_text') ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 text-center">
                        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/copterpix edge.svg" alt="copterpix edge" />
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="mx-3 px-3-sm px-0-lg">                            
                        <?php echo get_field('right_imag_text') ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>    
    </section>
    <section id="certifications" class="section-lg-space">
        <div class="container">
            <div class="row">
                <h2 class="text-center section-title-center"><?php echo get_field('certifications_title') ?></h2>                
            </div>
            <div class="row my-5 d-flex justify-item-center g-3 g-lg-0">
                <?php            
                if (have_rows('certifications')): ?>

                <?php   while( have_rows('certifications')) : the_row(); ?>                        
                <div class="col text-center">
                    <div class="certification_icon d-flex justify-content-center align-items-center m-auto">
                        <img src="<?php echo get_sub_field('certification_image') ?>" alt="cert" />
                    </div>
                </div>                
                <?php endwhile; endif ?>
            </div>    
        </div>
    </section>
    <section id="open-souce" class="section-lg-space" >
        <div class="container dark-container rounded-50 section-lg-padding position-relative" style="overflow: hidden">
            <div class="open-source-decoration"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/open-source-element.png" alt="decoration" /></div>
            <div class="row text-white" style="max-width: 700px; margin: auto;">
                <div class="ps-5">
                    <h2 class="vertical-title-decoration"><?php echo get_field('open_source_title') ?></h2>            
                    <p class="m-atuo" style="max-width: 1000px;"><?php echo get_field('open_source_description') ?></p>
                </div>
            </div>            
        </div>
    </section>
    <section id="CPX" class="section-lg-space">
        <div class="container section-lg-padding">
            <div class="row">
                <h2 class="text-center section-title-center"><?php echo get_field('cpx_mission_title') ?></h2>
                <p class="text-center subtitle"><?php echo get_field('cpx_mission_description') ?></p>
            </div>
            <div class="row p-lg-0 p-5 p-lg-0 g-5 g-lg-0 section-lg-padding my-lg-5">
                <div class="col-lg-3 col-md-12">
                    <div class="mx-3 px-3-sm px-0-lg d-flex h-75">
                        <?php echo get_field('cpx_left_image_text') ?>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 text-center">
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/CPX.svg" alt="copterpix edge" />
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="mx-3 px-3-sm px-0-lg">
                        <?php echo get_field('cpx_right_image_text') ?>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <section id="open-framework" class="section-lg-space">
        <div class="cp-bg">
            <div class="container section-lg-padding">
                <div class="row">
                    <h2 class="text-center"><?php echo get_field('cpx_open_framework_title') ?></h2>
                </div>
                <?php            
                if (have_rows('cpx_capabilities')): ?>
                <div class="row my-lg-5">
                    <?php 
                    while (have_rows('cpx_capabilities')) : the_row(); ?>
                    <div class="col-md-12 col-lg-3 cap-item">
                        <div class="cap-icon">
                            <img src="<?php echo get_sub_field('capability_icon') ?>" alt="<?php echo get_sub_field('capability_name') ?>" />
                            <h5 class="mt-4 fw-bolder"><?php echo get_sub_field('capability_name') ?></h5>
                            <p class="mt-2 subtitle"><?php echo get_sub_field('capability_description') ?></p>
                        </div>
                    </div>
                    <?php endwhile; endif ?>
                </div>
                
            </div>
        </div>    
    </section>
    
    <section id="integrations" class="section-lg-padding">        
        <div class="container">
            <h2 class="text-center section-title-center">Plug&Play - 3rd Party Integration</h2>
            <div class="my-5">
                <img class="img-fluid my-3 d-none d-md-block" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logos_desktop.jpg" /> <!-- DESKTOP -->
                <img class="img-fluid my-3 d-md-none " src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logos_mobile.jpg" /> <!-- Mobile -->
            </div>
        </div>
    </section>
    
    
    
    
    <?php get_template_part('/template-parts/copterpix-advantages') ?>
    
    <section id="more-info" class="section-lg-padding md-hf-padding gray-bg">
        
        <div class="container section-lg-padding md-hf-padding">
            <h2 class="text-center">Need more information?</h2>
            <div class="more-info-row my-5 d-flex justify-content-center">
                <div class="mx-3"><a class="btn btn-outline-dark" href="#">Download Brochure</a></div>
                <div class=""><a class="btn btn-primary text-white" href="/contact">Contact Us</a></div>
            </div>
        </div>
        
            
    </section>
    
</main><!-- #main -->

<?php
get_footer();
