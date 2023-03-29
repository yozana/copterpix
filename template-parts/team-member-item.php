    <div class="col-lg-3 col-md-6 col-sm-12 text-center text-lg-start">
    <img src="<?php echo get_sub_field('team_member_photo') ? get_sub_field('team_member_photo') : get_stylesheet_directory_uri() . "/assets/images/missing_person_image.webp" ?>" class="img-thumbnail team-member-img rounded-circle" alt="person" />
    </div>
    <div class="col col-lg-9 ps-5">                                        
        <div class="row py-2">
            <div class="col-lg-10 col-sm-12">
                <h3 class="small"><?php echo get_sub_field('team_member_name') ?></h3>
            </div>
            <div class="col-lg-2 col-sm-12 my-3 my-lg-0">
                <div class="d-flex justify-content-between" style="width: 100px">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/emailIcon.svg" alt="Email" />
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/linkedInIcon.svg" alt="Email" />
                </div>
            </div>                        
        </div>
        <div class="divider"></div>
        <div class="row py-3">
            <div class="team-member-title">
                <h5 class="text-primary"><?php echo get_sub_field('team_member_title') ?></h5>
            </div>
            <div class="team-member-content">
                <?php echo get_sub_field('team_member_content') ?>
            </div>
        </div>
    </div>