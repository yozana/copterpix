<?php

/**
 * Template Name: DRONE-IN-A-BOX TEMPLATE
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
<main id="primary" class="site-main drone-in-a-box-page">
    <section id="copterpix-pro-hero" class="video-background-holder vh-100">
        <div class="video-background-overlay"></div>
<!--
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.coverr.co/videos/Nv4Gqow7scn9XalkdfhPSLNjwNWrYYpE?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBJZCI6Ijg3NjdFMzIzRjlGQzEzN0E4QTAyIiwiaWF0IjoxNjMzMzkzNjUzfQ.EElJb38kbaq_0OTzJpPnInZjpR8pLDoxwLGskhuoBBc" type="video/mp4">
        </video>            
-->
      
        
        <div class="videoContainer">
            
             <iframe  class="videoContainer__video" src="https://www.youtube.com/embed/dJJjkdawMsg?autoplay=1&controls=0&fs=0&loop=1&playlist=dJJjkdawMsg&rel=0&showinfo=0&disablekb=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        
        <div class="hero-content video-background-content container h-100" style="max-width: 550px">
            <div class="d-flex h-100 text-left justify-content-center flex-column">                         
                
                <h2 class="text-white" style="font-weight: 500; font-size: 46px;"><?php echo get_field('hero_title') ?></h2>
                <div class="text-white subtitle">
                    <?php echo get_field('hero_subtitle') ?>
                </div>                                                             
<!--                <div class="d-block mt-2"><a class="btn btn-outline-light hover-dark" alt="learn more" style="color: inherit" href="<?php echo get_field('hero_learn_more_link') ?>">Learn More</a></div>                                -->
            </div>
        </div>             
    </section>
    <section class="section-lg-space">
        <div class="container">
            <div class="row">
                <h2 class="text-center section-title-center"><?php echo get_field('bvlos_game_changer_title') ?></h2>
            </div>    
            <?php
            if (have_rows('bvlos_cards')): ?>
            <div class="row py-5 g-4"> 
                <?php    
                while( have_rows('bvlos_cards')) : the_row(); ?>                        
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card-container h-100" style="min-height: 350px">
                        <div class="card d-flex h-100">
                            <div class="card-front d-flex flex-column justify-content-start">
                                <div class="card-icon">
                                    <img src="<?php echo get_sub_field('card_icon') ?>" alt="<?php echo get_sub_field('card_name') ?>" />
                                </div>
                                <h4 class="mt-4"><?php echo get_sub_field('card_name') ?></h4>
                            </div>    
                            <div class="card-back card">
                                <div class="flipped-inner">
                                    <p class="flipped-description"><?php echo get_sub_field('card_description') ?></p>
                                </div>
                                <div class="flipped-bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/flipbox_background.svg" /></div>
                            </div>
                        </div>    
                    </div>    
                </div>   
                <?php endwhile; endif ?>
            </div>            
        </div>
    </section>
    <section class="section-lg-space">
        <div class="cp-bg">
            <div class="container section-lg-padding">
                <div class="row">
                    <h2 class="text-center section-title-center"><?php echo get_field('drone_in_a_box_solution_title') ?></h2>                    
                </div>
                <?php if (have_rows('drone_in_a_box_cards')): ?>
                <div class="row py-lg-5 p-3 g-4">
                    <?php    
                    while( have_rows('drone_in_a_box_cards')) : the_row(); ?> 
                    <div class="col-lg-4 col-sm-12">
                        <div class="no-flip-card-container h-100">
                            <div class="card d-flex h-100 justify-content-start">
                                <div class="card-front d-flex flex-column justify-content-start">
                                    <div class="card-icon">
                                        <img src="<?php echo get_sub_field('card_icon') ?>" alt="<?php echo get_sub_field('card_name') ?>" />
                                    </div>
                                    <h4 class="mt-4"><?php echo get_sub_field('card_name') ?></h4>
                                </div>                                    
                            </div>    
                        </div>    
                    </div>   
                <?php endwhile; endif ?>
                </div>
            </div>
        </div>
    </section>
    <section class="negative-section-lg-space mb-5">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10 position-relative" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/95-hybrid-ts-bg.jpg'); border-top-left-radius: 150px; border-bottom-left-radius: 150px;background-size: cover; background-size: cover; background-attachment: fixed">                                    
                    <div class="container">
                        <div class="row">                                                                        
                            <div class="incredible-benefits d-flex align-items-start section-lg-padding" >
                            </div>                                                                            
                        </div>
                    </div>
                    <div class="drone-in-a-decoration-benefits">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/drone_benefits.png" alt="benefits drone" />
                    </div>
                </div>
            </div>
        </div>
            
    </section>
    <section class="section-lg-space">
        <div class="container">
            <h2 class="text-dark section-title-left"><?php echo get_field('incredible_benefits_title') ?></h2>
            <div class="intro-description">
            <?php echo get_field('incredible_benefits_description') ?>
                <div class="btn btn-outline-dark my-3"><a style="color: inherit" href="/contact">Contact Us</a></div>
            </div>            
        </div>
    </section>
</main>
<?php
get_footer();