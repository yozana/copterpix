<section class="awards-section section-lg-space">        
    <div class="container">
        <div class="row ">   
            <h2 class="text-center section-title-center"><?php echo get_field('awards_title', 'options') ?></h2>
            <div class="awards-container d-flex justify-content-center align-items-center pt-5">
                <?php    
                while( have_rows('awards', 'options')) : the_row();
                ?>   
                <div class="awards-item text-center">                    
                    <img src="<?php echo get_sub_field('awards_icon') ?>" alt="award" class="rounded" />                                
                </div>

                <?php endwhile ?>
            </div>
        </div>
    </div>
</section>