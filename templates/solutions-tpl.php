<?php

/**
 * Template Name: SOLUTIONS PAGE TEMPLATE
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

$terms = get_categories(
    array(
        'type'          => 'products',        
        'exclude'       => '1' //uncategorized
    )); 

?>
<main id="primary" class="site-main solutions-page">
    <section id="copterpix-pro-hero">
        <div class="container-fluid g-0 hero-container" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/solutions.jpg'); background-size: cover;">                    
            <div class="d-flex justify-content-between align-items-center h-100">                
                <div class="hero-content">
                    <h2 style="font-weight: 500; font-size: 46px"><?php echo get_field('hero_title') ?></h2>
                    <?php echo get_field('hero_subtitle') ?>
<!--                    <div class="mt-2 btn btn-outline-light"><a alt="learn more" style="color: inherit" href="<?php echo get_field('hero_link') ?>">Learn More</a></div>-->
                </div> 
                <div class="bg-decoration">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aps-300_decor.png" />
                </div>
            </div>
            <div class="show_more text-center"><a href="#industries"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/circle_arrow_down.svg"  alt="show more" /></a></div>
        </div>
    </section>
    <section id="industries" class="section-lg-space">
        <div class="container">
            <h2 class="text-center section-title-center"><?php echo get_field('served_industries_title') ?></h2>
            <p class="mt-2 m-auto text-center "><?php echo get_field('served_industries_subtitle') ?></p>
        </div>
        <div class="container my-5">
                <?php
                    if (have_rows('industry_cards')): ?>
                    <div class="row py-5 g-4"> 
                        <?php    
                        while( have_rows('industry_cards')) : the_row();
                        ?>                        
                        <div class="col-sm-12 col-lg-4">
                            <div class="card-container h-100">
                                <div class="card h-100">
                                    <div class="card-front">
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
                        <?php endwhile ?>
                    </div>
                    <?php endif ?>
            </div>            
    </section>
    <section class="section-lg-space">
        <div class="container">
            <div class="row">
                <h2 class="text-center section-title-center"><?php echo get_field('mix_match_title') ?></h2>
                <div class="text-center m-auto">
                    <?php echo get_field('mix_match_subtitle') ?>                    
                </div>
            </div>            
            <div class="row section-lg-space">
                <div class="col">
                    <div class="solutions-lg-card text-center">                    
                        <div class="solutions-step-title"><h4 class="text-primary">Step: 01</h4></div>
                        <h2><?php echo get_field('step_1_title') ?></h2>                    
                        <img class="img-fuild" alt="Step 1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solution_step_1.jpg" />
                    </div>
                </div>
            </div>
            <div class="row section-lg-space">
                <div class="col">
                    <div class="solutions-lg-card text-center">                    
                        <div class="solutions-step-title"><h4 class="text-primary">Step: 02</h4></div>
                        <h2><?php echo get_field('step_2_title') ?></h2>
<!--                        <img class="img-fluid my-3 d-sm-block" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logos_mobile.jpg" />-->
                        <img class="img-fluid my-3 d-none d-md-block" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logos_desktop.jpg" /> <!-- DESKTOP -->
                        <img class="img-fluid my-3 d-md-none " src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logos_mobile.jpg" /> <!-- Mobile -->
                        
                    </div>
                </div>
            </div>
            <div class="row section-lg-space">
                <div class="col">
                    <div class="solutions-lg-card text-center">                    
                        <div class="solutions-step-title"><h4 class="text-primary">Step: 03</h4></div>
                        <h2><?php echo get_field('step_3_title') ?></h2>                    
                        <img class="img-fuild" alt="Step 1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solution_step3.jpg" />
                        
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="section-lg-space">
        <?php if (have_rows('examples')) { ?>
        <div class="examples-slider">
            <?php while (have_rows('examples')) : the_row() ?>
            <div class="example-slide ">
                <div class="cp-bg cp-bg-80 section-lg-padding">                
                    <div class="container custom-container">
                    <div class="row">
                            <div class="position-relative">
                                <div style="font-size: 22px"><?php echo get_sub_field('step_name') ?></div>
                                <div class="col col-content">
                                    <h2 class="section-title-left"><?php echo get_sub_field('example_title') ?></h2>
                                    <p class="subtitle"><?php echo get_sub_field('example_subtitle') ?></p>
                                    <?php echo get_sub_field('example_content') ?>
                                    
                                </div>
                                <div class="example-right-img mt-3 mt-lg-0">                                    
                                    <img src="<?php echo get_sub_field('example_image') ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            <?php endwhile; } ?>                    
        </div>
    </section>
    <?php if (have_rows('additional_benefits')) { ?>
    <section class="section-lg-space">
        <div class="container">
            <div class="row">
                <h2 class="section-title-left">Additional benefits</h2>
                
                    <?php while (have_rows('additional_benefits')) : the_row() ;?>
                    <div class="col-lg-6 col-sm-12">
                        <div class="d-flex my-2 align-items-start pe-lg-5">
                            <img class="me-3" src="<?php echo get_sub_field('benefit_icon') ?>" alt="benefit" />
                            <?php echo get_sub_field('benefit_description') ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                
            </div>            
        </div>
    </section>
    <?php } ?>
    
        
<!--    <?php get_template_part('/template-parts/copterpix-advantages')  ?>-->
    
    <section id="rounded-advantages" class="section-lg-space">
        <div class="cp-bg">        
            <div class="container section-lg-padding">
                <div class="row">
            <h2 class="text-center section-title-center"><?php echo get_field('copterpix_advantages_title', 'options') ?></h2>
            <h5 class="text-center"><?php echo get_field('copterpix_advantages_subtitle', 'options') ?></h5>
        </div>
        <?php
        if (have_rows('copterpix_advantages_cards', 'options')): ?>
            <div class="row py-lg-5 g-4"> 
            <?php    
            while( have_rows('copterpix_advantages_cards', 'options')) : the_row();
                    ?>                        
                <div class="col-lg-4 col-sm-12">
                    <div class="card-container card-container-product">
                        <div class="card">
                            <div class="card-front">
                                <div class="card-icon">
                                    <img src="<?php echo get_sub_field('advantage_icon') ?>" alt="<?php echo get_sub_field('card_label') ?>" />
                                </div>
                                <h4 class="mt-4"><?php echo get_sub_field('advantage_name') ?></h4>
                            </div>    
                            <div class="card-back card">
                                <div class="flipped-inner">
                                    <p class="flipped-description"><?php echo get_sub_field('advantage_description') ?></p>
                                </div>
                                <div class="flipped-bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/flipbox_background.svg" /></div>
                            </div>
                        </div>    
                    </div>    
                </div>   
                    <?php endwhile; ?>
            </div>
            <?php endif ?>
            </div>
        </div>    
    </section>
    
</main><!-- #main -->

<?php
get_footer();
