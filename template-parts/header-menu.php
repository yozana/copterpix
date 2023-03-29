<?php
$locations = get_nav_menu_locations();
$menu_items = wp_get_nav_menu_items('Main Menu');
$terms = get_categories(
    array(
        'type'          => 'products',        
        'exclude'       => '1', //uncategorized,
        
    )); 
$sorted_cats = array();
foreach($terms as $cat){
	$cat_order = get_field('category_order', 'category_'. $cat->term_id);
	$sorted_cats[$cat_order] = $cat;
}
ksort($sorted_cats);

?>

<div id="cp-navigation" class="cp-navigation <?php echo is_singular('news') || is_post_type_archive('news') ? 'blogs-page' : '' ?>" style="top: 32px">
    <div class="container-fluid g-lg-3 g-0">
        <nav class="navbar navbar-dark fixed-top navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo home_url() ?>"><img id="company-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo_white.svg" alt="company logo"  /></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto my-3 mt-lg-0 mb-lg-0">   
              <?php
                $menu_list = '';
                foreach( $menu_items as $menu_item ) {
                    $is_mega_menu = in_array('products-mega-menu', $menu_item->classes);
                    if( $menu_item->menu_item_parent == 0) {

                        $parent = $menu_item->ID;

                        $menu_array = array();
                        foreach( $menu_items as $submenu ) {
                            if( $submenu->menu_item_parent == $parent ) {
                                $bool = true;
                                $menu_array[] = '<li><a class="dropdown-item" href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";                                                                    
                            }
                        }
                        ob_start();
                        if( $bool == true && count( $menu_array ) > 0 && !$is_mega_menu ) {
                            ?>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $menu_item->title ?> </a>

                                <ul class="dropdown-menu" data-bs-popper="static">
                                <?php echo implode( "\n", $menu_array ); ?>
                                </ul>
                        <?php        
                        } else {
                            if (!$is_mega_menu){
                                ?>
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo $menu_item->url ?>'"> <?php echo $menu_item->title ?> </a>
                            <?php        
                            } else {
                                //mega menu
                                ?>
                                <li class="nav-item mega-menu dropdown position-static">
                                    <a class="nav-link mm-parent dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo $menu_item->title ?> </a>
                                
                                    <div class="dropdown-menu w-100 mt-0" aria-labelledby="productsDropdown" style="
                                border-top-left-radius: 0;border-top-right-radius: 0;">
                                        <div class="container-fluid" style="max-width: 1650px">
                                            <div class="row my-4">
                                                <?php
                                                foreach ($sorted_cats as $key=>$term){                                                  
                                                    $product_args = array(
                                                        'post_type'=>'products', 
                                                        'category' => $term->term_id,
                                                        'meta_key'        => 'product_order',
                                                        'orderby'			=> 'meta_value',    
                                                        'order'				=> 'ASC',
                                                    );
                                                    $product_list = get_posts($product_args); 
                                                ?>  
                                                   <div class="col-md-6 col-lg-4 mb-3 mb-lg-0 px-lg-4">
                                                    <div class="row">                                                        
                                                        <div class="col-5">
                                                            <div class="category-img-box rounded d-flex justify-content-center align-items-center">
                                                            <img class="img-fluid text-center" alt="category" src="<?php echo get_field('category_image', 'category_' . $term->term_id) ?>" /></div>
                                                        </div>
                                                        <div class="col-7 p-0">
                                                            <div class="subtitle text-white" style="line-height: 1.1; max-width: 295px;" ><?php echo get_field('menu_display_name', 'category_' . $term->term_id) ?></div>
                                                            <hr class="line-divider" />
                                                            <?php 
                                                            
                                                                foreach ($product_list as $product){                                                                      ?>
                                                                    <div class="mb-2"><a class="product-item" href="/products/<?php echo $product->post_name ?>"><?php echo $product->post_title ?></a></div>
                                                                    <?php
                                                                }
                                                                wp_reset_postdata();
                                                            ?>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <?php } ?>                                                
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    }
                }
                ?>
                </li>
                  <?php
                $response = ob_get_contents();
		        ob_end_clean();
                echo $response;
              ?>    
              </ul>
<!--              <a class="search-site" href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/search.svg" alt="search"  /></a>-->
              <a class="btn btn-primary text-white" type="button" href="/contact">Contact Us</a>
            </div>
          </div>
        </nav>
    </div>
</div><!-- #site-navigation -->