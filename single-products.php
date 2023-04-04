<?php

/**
 * Template Name: SINGLE PRODUCT PAGE TEMPLATE
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
//global $post;
//$post_slug = $post->post_name;
get_header();

$terms = get_the_category(get_the_ID());



$args = array( 'category' => $terms[0]->term_id, 'post_type' =>  'products', 'exclude' => get_the_ID() ); 
$product_list = get_posts( $args ); 
?>
<main id="primary" class="site-main single-product-page">
    <section id="copterpix-pro-hero">
        <div class="container-fluid g-0 hero-container" style="background-image: url('<?php echo get_field('hero_cover_image') ?>'); background-position: center; background-attachment: fixed; background-size: cover">                   
            <div class="d-flex justify-content-between align-items-center h-100">                
                <div class="hero-content">
                    <h5><?php echo get_field('above_hero_title') ?></h5>
                    <h2 style="font-weight: 500; font-size: 46px"><?php echo get_field('hero_title') ?></h2>
                    <h4><?php echo get_field('hero_subtitle') ?></h4>
                    <div class="my-5">
                        <div class="sticker text-center">
                            <p><?php echo get_field('hero_sticker') ?></p>
                        </div>
                    </div>
                    
                </div> 
                <div class="bg-decoration">
                    <img src="<?php echo get_field('hero_decoration_image') ?>" alt="<?php echo get_field('hero_title') ?>" />
                </div>
            </div>
            <div class="show_more text-center"><a href="#capabilities"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/circle_arrow_down.svg"  alt="show more" /></a></div>
        </div>
    </section>
    <section id="capabilities" class="section-lg-space position-relative">
        <div class="container" style="max-width: 900px">
            <div class="row">
                <h2 class="mb-5 text-center section-title-center">Capabilities</h2>                
                <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-3 mb-lg-0">
                    <div class="mb-3 mb-lg-0">
                        <div class="cap-item-circle"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/takeoff.svg" alt="Takeoff" /></div>                    
                        <div class="cap-title mt-3">Max takeoff:</div>
                        <strong><?php echo get_field('max_takeoff') ?></strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12  text-center mb-3 mb-lg-0">
                    <div class="mb-3 mb-lg-0">
                        <div class="cap-item-circle"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/payload.svg" alt="Payload" /></div>                    
                        <div class="cap-title mt-3">Max payload:</div>
                        <strong><?php echo get_field('max_payload') ?></strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12  text-center">
                    <div class="mb-3 mb-lg-0">
                        <div class="cap-item-circle"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/flight-time.svg" alt="Flight Time" /></div>                    
                        <div class="cap-title mt-3">Flight time:</div>
                        <strong><?php echo get_field('flight_time') ?></strong>
                    </div>
                </div>                
            </div>
            
        </div>
    </section>
    <?php if (get_field('product_table') != ''){ ?>
    
    <section id="product-data" class="product-data-negative-section-lg-space d-flex justify-content-end">
        <div class="cp-bg-right double-lg-padding-top">
            <div class="container section-lg-padding">                
                <div class="text-center table-data-img" >
                    <img src="<?php the_field('product_table') ?>" alt="product data" />
                </div>
            </div>
        </div>
    </section>    
    <?php }?>
    <section id="cameras" class="section-lg-space">
        <div class="cp-bg" style="background: #111111">
            <div class="container section-lg-padding">
                <div>
                    <h2 class="text-white text-center section-title-center"><?php the_field('cameras_title', 'options') ?></h2>
                    <p class="subtitle text-center text-white"><?php the_field('camera_subtitle', 'options') ?></p>
                </div>
                <div class="cameras-row my-3">
                    <?php if (have_rows('cameras', 'options')) {
                        while( have_rows('cameras', 'options')) : the_row(); ?>
                            <div class="camera-item">
                                <img class="m-auto" src="<?php echo get_sub_field('camera_image') ?>" />
                                <h4 class="text-white text-center py-3"><?php the_field('camera_name') ?></h4>
                                <div class="cam-capabilies text-center">
                                    <div class="d-flex justify-content-center align-items-center my-2">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/weight.svg" alt="Weight" />
                                        <p class="text-white mb-0 ms-2">Weight: <span class="text-primary fw-semibold"><?php the_sub_field('weight') ?></span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center my-2">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/zoom.svg" alt="zoom" />
                                        <p class="text-white mb-0 ms-2">Zoom: <span class="text-primary fw-semibold"><?php the_sub_field('zoom') ?></span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center my-2">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/IR.svg" alt="IR" />
                                        <p class="text-white mb-0 ms-2">IR: <span class="text-primary fw-semibold"><?php the_sub_field('ir') ?></span></p>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;}  ?>            
                </div>
                
            </div>
        </div>
    </section>
    <section id="analytics" class="section-lg-space">
        <div class="container">
            <div class="row">
                <h2 class="section-title-left"><?php the_field('analyics_title', 'options') ?></h2>                
            </div>
            <div class="row">
                <div class="col-lg-7" style="max-width: 650px"><?php the_field('analyics_content', 'options') ?></div>
                <div class="col-lg-5 text-lg-end text-md-center"><img src="<?php the_field('analytics_image', 'options') ?>" alt="analytics" /></div>
            </div>
        </div>
    </section>
    <section id="communications" class="section-lg-space d-flex justify-content-end">
        <div class="cp-bg-right section-lg-padding">
            <div class="container">
                <div class="row">
                    <h2 class="section-title-center text-center"><?php the_field('communications_title', 'options') ?></h2>                
                </div>
                <?php            
                if (have_rows('communications', 'options')): ?>
                <div class="row my-lg-5">
                    <?php 
                    while (have_rows('communications', 'options')) : the_row(); ?>
                    <div class="col-md-12 col-lg-4 cap-item">
                        <div class="cap-icon text-center">
                            <img src="<?php echo get_sub_field('logo') ?>" alt="<?php echo get_sub_field('name') ?>" />
                            <h5 class="mt-4 fw-bolder"><?php echo get_sub_field('name') ?></h5>                            
                        </div>
                    </div>
                <?php endwhile; endif ?>
                </div>
                
            </div>
        </div>
    </section>
    
    <section id="antenas" class="section-lg-space d-flex justify-content-end">        
        <div class="container">
            <div class="row">
                <h2 class="section-title-center text-center"><?php the_field('antenas_title', 'options') ?></h2>                
            </div>
            <div class="antenas-row">
                <?php if (have_rows('antenas', 'options')) {
                    while( have_rows('antenas', 'options')) : the_row(); ?>
                    <div class="antena-item text-center">
                        <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('name') ?>" />
                        <h4 class="text-center"><?php the_sub_field('name') ?></h4>
                        <div class="d-flex justify-content-center align-items-center my-2">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon_range.svg" alt="Range" style="width: 20px; height: 20px;"/>
                            <p class="mb-0 ms-2">Range: <span class="text-primary fw-semibold"><?php the_sub_field('range') ?></span></p>
                        </div>
                    </div>
                <?php endwhile;}  ?>            
            </div>
        </div>
        
    </section>
    <section id="non-gps-navigation" class="section-lg-space">
        <div class="container">
            <div class="row section-lg-padding">
                <div class="col-md-7 col-sm-12">
                    <h2 class="section-title-left my-3"><?php the_field('non-gps_navigation_title', 'options') ?></h2>
                    <div class="section-content"><?php the_field('non-gps_content', 'options') ?></div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <img class="my-5 my-lg-0" src="<?php the_field('non-gps_image', 'options') ?>" alt="Non-GPS Navigation" style="border-radius: 20px"/>
                </div>
            </div>
        </div>
    </section>
    <section id="accessories" class="section-lg-space">
        <div class="container">
            <div class="row section-lg-padding flex-column-reverse flex-md-row">
                <div class="col-md-5 col-sm-12 my-5 my-md-0">
                    <img src="<?php the_field('accessories_image', 'options') ?>" alt="Accessories" style="border-radius: 20px"/>
                </div>
                <div class="col-md-7 col-sm-12 ps-lg-5">
                    <h2 class="section-title-left my-3"><?php the_field('accessories_title', 'options') ?></h2>
                    <div class="section-content"><?php the_field('accessories_content', 'options') ?></div>
                </div>
            </div>
        </div>
    </section>
    <section id="custom-drones" class="section-lg-space d-flex">        
        <div class="container">            
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <h2 class="section-title-left my-3"><?php the_field('custom_drones_title', 'options') ?></h2>                
                    <?php if (have_rows('list', 'options')) {
                    ?>
                    <ul>
                    <?php while( have_rows('list', 'options')) : the_row(); ?>
                        <li><?php the_sub_field('list_item') ?></li>
                    <?php endwhile;}  ?>            
                    </ul>    
                </div>
                <div class="col-sm-12 col-lg-6 text-center text-lg-end ">
                    <img src="<?php the_field('custom_drone_image', 'options') ?>" alt="Custom Drone" />
                </div>
            </div>
        </div>
        
    </section>
    
    <section id="ground-control" class="section-lg-space">        
        <div class="container">            
            <div class="row">
                <div class="col-sm-12 col-lg-5 text-center text-lg-start">                    
                    <img src="<?php the_field('ground_control_image', 'options') ?>" alt="Ground Control Unit" />
                </div>
                <div class="col-sm-12 col-lg-7">
                    <h2 class="section-title-left my-3"><?php the_field('ground_control_title', 'options') ?></h2>                
                    <div><?php the_field('ground_control_content', 'options') ?></div>
                </div>
            </div>
        </div>
        
    </section>
    <?php if (get_field('section_image') != ''){ ?>
    <section class="section-lg-space" >
        <div class="container-fluid d-flex h-100 align-items-center justify-content-center" id="product-demo-section" style="background-image: url('<?php echo get_field('section_image') ?>'); background-position: center; background-attachment: fixed; background-size: cover">
<!--            <img src="<?php echo get_field('section_image') ?>" alt="demo" />
            <div class="section-cover-img-demo">
                <img src="<?php echo get_field('section_drone_background') ?>" alt="<?php echo get_field('hero_title') ?>" />
            </div> -->
            <div class="py-5">
                <img src="<?php echo get_field('section_drone_background') ?>" alt="<?php echo get_field('hero_title') ?>" />
            </div>
        </div>
    </section>
    <?php } ?>
    <section class="section-lg-space">
        <div class="container" style="max-width: 900px">
            <div class="row">
                <h2 class="text-center">Learn More</h2>                                
            </div>
            <div class="row section-lg-space">
                <div class="col-md-6 col-sm-12 col-lg-5">
                    <div class="no-flip-card-container h-100">
                        <div class="card d-flex h-100 justify-content-start">
                            <div class="card-front d-flex flex-column justify-content-start">
                                <div class="card-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/brochure.svg" alt="brochure" />
                                </div>
                                <h4 class="mt-4">Download full technical brochure</h4>
                            </div>                                    
                        </div>    
                    </div>    
                </div>
                <div class="col-md-0 col-lg-2"></div>
                <div class="col-md-6 col-sm-12 col-lg-5">
                    <a href="/contact">
                        <div class="no-flip-card-container h-100">
                            <div class="card d-flex h-100 justify-content-start">
                                <div class="card-front d-flex flex-column justify-content-start">
                                    <div class="card-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/send.svg" alt="brochure" />
                                    </div>
                                        <h4 class="mt-4">Get it touch</h4>
                                </div>                                    
                            </div>    
                        </div>    
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-lg-space">
        <div class="cp-bg cp-bg-80 section-lg-padding">
            <div class="container related-products-container">
                <h2 class="text-center">Related Products</h2>
                <div class="row my-5">
                    <?php 
                    foreach ($product_list as $product){ 
                        setup_postdata( $product ); ?>
                    <div class="col-md-6 col-sm-12 col-lg-4 mb-5 mb-lg-0">
                        <div class="card card-small">
                            <a href="<?php echo get_the_permalink($product->ID) ?>" style="color: inherit">
                            <div class="product-img text-center"><?php echo get_the_post_thumbnail($product->ID) ?></div>
                            <h4 class="mt-5"><?php echo get_the_title($product->ID) ?></h4>
                            <div class="product-meta mt-2 w-100">
                                <div class="d-flex align-items-center justify-content-lg-start justify-content-sm-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/takeoff_fill.svg" >
                                    <p class="mb-0 ms-3">Max takeoff: <?php echo get_field('max_takeoff', $product->ID) ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-lg-start justify-content-sm-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/payload_fill.svg" >
                                    <p  class="mb-0 ms-3">Max payload: <?php echo get_field('max_payload', $product->ID) ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-lg-start justify-content-sm-center ">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/flight_time_fill.svg">
                                    <p class="mb-0 ms-3">Flight time: <?php echo get_field('flight_time', $product->ID) ?></p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <?php } wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
    
</main><!-- #main -->

<?php
get_footer();
