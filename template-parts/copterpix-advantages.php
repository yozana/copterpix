<section id="advantages" class="section-lg-space-top">
    <div class="container">
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
</section>