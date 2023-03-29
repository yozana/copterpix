<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package copterpix
 */

get_header();
?>

<main id="primary" class="site-main site-blog-single">
    <div class="gray-bg">
        <div class="container py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo get_home_url()  ?>/news">News & Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo the_title() ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container section-lg-padding">
        <div class="row g-5">
            <div class="col-lg-7 post-container">
                <div class="post-header">
                    <h4><?php echo the_title() ?></h4>
                </div>
                <div class="post-meta d-flex justify-content-start align-items-center my-5">
                    <div class="post-author d-flex justify-content-start align-items-center">
<!--                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/author.svg" alt="author" />
                        <p class="ms-1 mb-0"><?php echo get_the_author_meta('display_name', get_post_field( 'post_author', get_the_ID() )); ?></p>-->
                    </div>
                    <div class="post-creation-date d-flex justify-content-start align-items-center ms-3">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/calendar.svg" alt="Created at" />
                        <p class="ms-1 mb-0"><?php echo get_the_date() ?></p>
                    </div>
                </div>
                <div class="post-image">
                    <img class="news-img rounded" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="<?php echo the_title() ?>" />
                </div>
                <div class="my-5 social-sharer"><?php get_template_part('/template-parts/sharer') ?></div>
                <div class="post-content">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="col-lg-1 col-md-0"></div>
            <div class="col-lg-4"><?php get_template_part('/template-parts/more_news') ?></div>
            
        </div>
        
    </div>
    
</main>
<?php

get_footer();
