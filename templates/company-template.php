<?php

/**
 * Template Name: COMPANY TEMPLATE
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
        <div class="container-fluid g-0 hero-container" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/company-bg.jpg'); background-size: cover">                    
            <div class="d-flex justify-content-between align-items-center h-100">                
                <div class="hero-content" style="max-width: 450px">
                    <h2 style="font-weight: 500; font-size: 46px"><?php echo get_field('hero_title') ?></h2>
                    <h5><?php echo get_field('hero_subtitle') ?></h5>
                </div> 
                <div class="bg-decoration">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ere-mini-95.png" />
                </div>
            </div>
            <div class="show_more text-center"><a href="#solutions"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/circle_arrow_down.svg"  alt="show more" /></a></div>
        </div>
    </section>
    <section class="section-lg-space">
        <div class="container">
            <div class="row">
                <div class="col col-lg-9">
                    <h2><?php echo get_field('about_title') ?></h2>                
                    <?php echo get_field('about_content') ?>
                    <div class="collapse" id="about_more" aria-controls="about_more">
                        <?php echo get_field('about_content_read_more_collapse_content') ?>
                        
                    </div>
                    <a class="btn btn-outline-dark" data-bs-toggle="collapse" aria-expanded="false" href="#about_more">
                        <span class="collapsed">Show more <img class="ms-1 chevron-down" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chevron-down.svg" alt="show more" /></span>
                        <span class="expanded">Show Less <img class="ms-1 mb-1 chevron-up" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chevron-down.svg" alt="show more" /></span>
                    </a>
                    
                </div>
            </div>

            
        </div>
    </section>
    <section class="section-lg-space">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Leadership</h2>                                
            </div>
            <?php if (have_rows('leadership')) : ?>
            <div class="row my-5 g-4">
                <?php while (have_rows('leadership')) : the_row(); 
                    get_template_part('/template-parts/team-member-item');
                endwhile; endif ?>
            </div>
        </div>
    </section>
    <section class="section-lg-space">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Advisory Board</h2>                                
            </div>
            <?php if (have_rows('advisory_board')) : ?>
            <div class="row my-5 g-4">
                <?php while (have_rows('advisory_board')) : the_row(); 
                    get_template_part('/template-parts/team-member-item');
                endwhile; endif ?>
            </div>
        </div>
    </section>
    <?php if (have_rows('awards', 'options')): 
        get_template_part('/template-parts/awards-section');
    endif ?>
</main><!-- #main -->

<?php
get_footer();
