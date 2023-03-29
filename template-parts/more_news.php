<?php 
$posts = get_posts(array(
    'post_type'        => 'news',  
    'numberposts'      => 5,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'exclude'          => get_the_ID(),
))

?>
<div class="more-news-outer">
    <h4 class="mb-5">More News</h4>
    <?php if ($posts) {
    foreach ($posts as $post){
        setup_postdata($post);
        ?>
        
        <div class="more-news-outer d-flex justify-content-between align-items-center my-3">
            <img class="rounded more-news-image me-2" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="" />
            <div class="py-1 more-news-excerpt d-flex justify-content-between flex-column">
                <?php echo get__excerpt() ?>
            </div>
        </div>
        
        
        <?php
    }
    wp_reset_postdata();
    }?>
    
</div>