<?php

/**
 * Template Name: HOME PAGE TEMPLATE
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
<main id="primary" class="site-main home-page">
   <section class="copterpix-hero">
       <div id="copterpix-hero-carousel" class="carousel slide" data-bs-ride="carousel">
           <div class="container">
              <ol class="carousel-indicators carousel-indicators-numbers">
                <li data-bs-target="#copterpix-hero-carousel" data-bs-slide-to="0" class="active" aria-current="true">1</li>
                <li data-bs-target="#copterpix-hero-carousel" data-bs-slide-to="1">2</li>
                <li data-bs-target="#copterpix-hero-carousel" data-bs-slide-to="2">3</li>
                <li data-bs-target="#copterpix-hero-carousel" data-bs-slide-to="3">4</li>
                <li class="carousel-control-prev" data-bs-target="#copterpix-hero-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </li>  
                <li class="carousel-control-next" data-bs-target="#copterpix-hero-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </li>
              </ol>
           </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="0">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home-hero-slide1.jpg" class="min-vh-100" alt="slide1">
              <div class="abs-drone"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hp_slider_decorated1.png" /></div>    
              <div class="carousel-caption d-md-block">
                  <div class="copterpix-hero-content">                      
                      <h1>Solve Your Most Pressing Challenges With <span class="nowrap">World-Leading</span> UAV Technology</h1>
                      <div class="details d-xl-flex align-items-center">
                          <a style="color: inherit" href="/contact" class="btn btn-outline-light text-white">Contact Us</a>                          
<!--
                          <div class="learn-more mx-4 my-3">
                              <a class="learn-more" href="/solutions"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/circle_more_light.svg" alt="learn more" style="max-height: 45px;margin-right: 5px"/> Learn More</a>
                          </div>
-->
                      </div>
                  </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Home-hero2.jpg" class="min-vh-100" alt="slide2">
              <div class="abs-drone"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hp_slider_decorated2.png" /></div>   
              <div class="carousel-caption d-md-block">
                  <div class="copterpix-hero-content">                      
                      <h1>Get the perfect drone for any mission</h1>
                      <div class="details d-xl-flex align-items-center">
                          <a style="color: inherit" href="/contact" class="btn btn-outline-light text-white">Contact Us</a>                          
<!--
                          <div class="learn-more mx-4 my-3">
                              <a class="learn-more" href="/solutions"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/circle_more_light.svg" alt="learn more" style="max-height: 45px; margin-right: 5px"/> Learn More</a>
                          </div>
-->
                      </div>
                  </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000" >
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Home-hero3.jpg" class="min-vh-100" alt="slide3">
              <div class="abs-drone"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hp_slider_decorated1.png" /></div>    
              <div class="carousel-caption d-md-block">
                  <div class="copterpix-hero-content">                      
                      <h1>Where world-leading technology meets extreme performance</h1>
                      <div class="details d-xl-flex align-items-center">
                          <a style="color: inherit" href="/contact" class="btn btn-outline-light text-white">Contact Us</a>                          
<!--
                          <div class="learn-more mx-4 my-3">
                              <a class="learn-more" href="/solutions"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/circle_more_light.svg" alt="learn more" style="max-height: 45px;margin-right: 5px"/> Learn More</a>
                          </div>
-->
                      </div>
                  </div>
              </div>
            </div>              
            <div class="carousel-item" data-bs-interval="5000" >
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Home-hero_event.jpg" class="min-vh-100" alt="slide4">
              <div class="carousel-caption d-md-block">
                  <div class="copterpix-hero-content">                      
                      <h1>CopterPIX will be presenting at SelectUSA Summit</h1>
                      <h4 class="text-white my-3">MAY 1-4, 2022<br/> Visit us at Booth A173<br/>See you there!</h4>
                      <div class="details d-xl-flex align-items-center">
                          <a style="color: inherit" href="/contact" class="btn btn-outline-light text-white">Contact Us</a>                          
                      </div>
                  </div>
              </div>
            </div>
          </div>                    
        </div>
    </section>
    <section class="about-copterpix section-lg-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 py-md-5">
                    <img src="<?php echo get_field("about_us_image") ?>" />
                </div>
                <div class="col-lg-5 py-md-5">
                    <h2 class="section-title about-title section-title-left"><?php echo get_field("about_us_title") ?></h2>
                    <p><?php echo get_field("about_us_content") ?></p>
                    <div class="btn btn-outline-dark "><a href="<?php echo get_field('about_us_link') ?>">Learn More</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-copterpix section-lg-space">
        <div class="cp-bg cp-bg-special-padding">
            <div class="container container-md" style="max-width: 768px;">
                <div class="row text-center">
                    <h2 class="section-title-center"><?php echo get_field("why_copterpix_title") ?></h2>
                    <?php echo get_field("why_copterpix_content") ?>
                </div>            
            </div>
            <div class="container">
                <?php
                    if (have_rows('copterpix_cards')): ?>
                    <div class="row py-5 g-4"> 
                        <?php    
                        while( have_rows('copterpix_cards')) : the_row();
                        ?>                        
                        <div class="col-lg-4 col-sm-12">
                            <div class="card-container">
                                <div class="card">
                                    <div class="card-front">
                                        <div class="card-icon">
                                            <img src="<?php echo get_sub_field('card_icon') ?>" alt="<?php echo get_sub_field('card_label') ?>" />
                                        </div>
                                        <h4 class="mt-4"><?php echo get_sub_field('card_label') ?></h4>
                                    </div>    
                                    <div class="card-back card">
                                        <div class="flipped-inner">
                                            <p class="flipped-description"><?php echo get_sub_field('card_hover_text') ?></p>
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
        </div> <!-- cp-bg -->
            <div class="cp-solutions-intro" style="overflow: hidden">
                <div class="container-fluid g-0">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/sahara.jpg'); border-top-left-radius: 150px; border-bottom-left-radius: 150px;background-size: cover">        
                            <div class="solutions-intro-container">                                
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5  d-flex align-items-center">
                                            <div class="intro-description">
                                            <?php echo get_field('solutions_intro_description') ?>
                                                <div class="btn btn-outline-light"><a href="<?php echo get_field('solutions_intro_link') ?>">Learn More</a></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 d-flex align-items-start">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home_drone_decoratated.png" alt="decorated drone" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>    
    <section class="products section-lg-space">
        <div class="container">
            <div class="row g-0">
                <h2 class="text-center section-title-center"><?php echo get_field('copterpix_solution_title') ?></h2>
                <?php
                $args = array(
                  'post_type' => 'products',
                  'post_status' => 'publish',                  
                  'posts_per_page'  => -1,
                  'meta_key'        => 'product_order',
	              'orderby'			=> 'meta_value',    
                  'order'				=> 'ASC',
                  'meta_query' => array(
                      array(
                        'key'    => 'show_on_homepage_slider',
                        'value'  => true,
                        'compare'=> '='
                      )
                  )
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) {
                ?>
                    <div class="products-slider">
                    <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                        <div class="product-container" data-order="<?php echo get_field('product_order') ?>">
                            <div class="card product-item">
                                <a class="d-block" href="<?php echo get_permalink(); ?>">
                                <div class="card-img">
                                    
                                    <?php if (has_post_thumbnail()) { ?>
                                        <?php if (has_post_thumbnail(get_the_ID())) { ?>
                                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo the_title() ?>" />

                                    <?php  }
                                    }
                                ?>
                                    
                                </div>
                                </a>
                            <div class="product-title">
                                <h3 class="align-left"> <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
                                <div class="learn-more"><a href="<?php echo get_permalink(); ?>"><img style="width:40px; height: 40px;" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/circle_more_dark.svg" /></a></div>
                            </div>
                            </div>
                            
                        </div>
                    
                    <?php } ?>
                </div>
                <?php 
                } 
                wp_reset_postdata(); ?>
            </div>
        </div>
      
    </section>
    <section class="clients section-lg-space">
        <div class="container">
            <div class="row g-0 section-lg-padding md-hf-padding">
                <h2 class="text-center section-title-center">Clients</h2>
            </div>
            <div class="clients-row">
                <?php if (have_rows('clients')) {
                    while( have_rows('clients')) : the_row(); ?>
                        <div class="client-item"><img class="m-auto" src="<?php echo get_sub_field('logo') ?>" /></div>
                <?php endwhile;}  ?>            
            </div>
            <div class="row text-center pt-5"><a class="pt-5 show-more" href="/clients" alt="Clients Page">View All</a></div>
        </div>
    </section>
     <?php
    if (have_rows('industries')): ?>
    <section class="industries-copterpix section-lg-space">
        <div class="cp-bg">
            <div class="container">
                <div class="row section-lg-padding">   
                    <h2 class="text-center industries_title section-title-center"><?php echo get_field('industries_title') ?></h2>
                    <?php    
                    while( have_rows('industries')) : the_row();
                    ?>   
                    <div class="col-6 col-lg-2 col-md-4 industry-item text-center my-5  my-md-0">
                        <div class="industry-container m-auto">
                            <img src="<?php echo get_sub_field('industry_icon') ?>" alt="<?php echo get_sub_field('industry_name') ?>" />
                            <p class="ind-name mt-4"><?php echo get_sub_field('industry_name') ?></p>
                        </div>
                    </div>
                    
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif;
    
    if (have_rows('awards', 'options')): 
        get_template_part('/template-parts/awards-section');
    endif ?>
    <section class="section-lg-space">
        <div class="container-fluid section-lg-padding get-in-touch">
            <div class="img-container position-relative" style="max-width: 1130px;">
                <img class="form-bg" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/get-in-touch-bg.jpg" alt="form" /> <div class="dron-decoration"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/home_drone_decoratated_contact.png" style="max-width: 500px" alt="decoration" /></div>
                <div class="form-container solutions-lg-card absolute-after-bg" style="max-width: 550px;">
                    <h2 class="text-center mb-5 section-title-center">Get In Touch</h2>
                    <?php echo do_shortcode('[contact-form-7 id="260" title="Short Vertical"]') ?>
                </div>
            </div>
            
            
        </div>        
    </section>
    <section class="global-leaders-section section-lg-space">        
        <div class="container">
            <div class="row ">   
                <h2 class="text-center section-title-center mb-5"><?php echo get_field('global_leaders_title') ?></h2>
                
                    <?php    
                    while( have_rows('global_leaders')) : the_row();
                    ?>   
                    <div class="col-lg-2 col-md-3 col-sm-6 global-uav-item text-center">                    
                        <img src="<?php echo get_sub_field('company_logo') ?>" alt="company_logo" class="rounded" />                                
                    </div>

                    <?php endwhile ?>
                
            </div>
        </div>
    </section>
    
</main><!-- #main -->

<?php
get_footer();
