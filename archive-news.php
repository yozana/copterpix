<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package copterpix
 */

get_header();

$posts = get_posts(array(
    'post_type'        => 'news',  
    'numberposts'      => 9,
    'orderby'          => 'date',
    'order'            => 'DESC'
    
))
?>

<main id="primary" class="site-main site-blog-archive">
    <div class="gray-bg">
        <div class="container py-5">
            <h2>News & Events</h2>
        </div>
    </div>
    <div class="container section-lg-space">
        <div class="row g-5">
                <?php
                foreach ($posts as $post) {
                    setup_postdata($post);
            
                    get_template_part('/template-parts/news-item');                    
                }
                wp_reset_postdata();
                ?>            
        </div>      
    </div>
</main><!-- #main -->

<?php

get_footer();
