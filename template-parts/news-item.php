<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="news-container">
        
        <div class="news-images-outer">
            <a href="<?php echo the_permalink() ?>" style="color: inherit">
            <img class="news-archive-img" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="<?php echo the_title() ?>" />
            </a>
        </div>
        <h4 class="mt-4 mb-2"><a href="<?php echo the_permalink() ?>" style="color: inherit"><?php the_title() ?></a></h4>
        <div class="news-content">
            <?php echo get__excerpt(false) ?>
            <div class="read-more-archive">
                <a class="fw-bold" style="font-size: 14px; color: #111" href="<?php echo get_the_permalink() ?>">Read More <img class="chevron-right" style="height: 5px;" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chevron-down.svg" /></a>
            </div>
        </div>        
    </div>
</div>