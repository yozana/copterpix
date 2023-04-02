<?php
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Common Product Data',
		'menu_title'	=> 'Product-Data',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Awards Settings',
		'menu_title'	=> 'Awards',
		'parent_slug'	=> 'theme-general-settings',
	));    
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
    
}


/*@FUNCTION FOR BREADCRUMBS*/

add_action ('wp_loaded', 'my_product_redirect');
function my_product_redirect() {    
    // Append the requested resource location to the URL   
    $url = $_SERVER['REQUEST_URI'];    
    if ($url === '/products/aps-300/'){
        wp_redirect( '/drone-in-a-box', 301 );
        exit;
    }
    
}    


function form_add_script()
{
	wp_localize_script(
		'copterpix-custom-js',
		'ajax_object',
		array(
			'ajax_url' => admin_url('admin-ajax.php'),
			'careers_security' 	=> wp_create_nonce('file_upload'),
			'contact_security' 	=> wp_create_nonce('form_upload'),
			'contact_form_name' => __('Please enter your name', 'copterpix'),
			'contact_form_email_required' => __('Please enter your email adress', 'copterpix'),
			'contact_form_email_error' => __('Please enter your valid email adress', 'copterpix'),
			'career_form_first_name' 	=> __('Please enter your first name', 'copterpix'),
			'career_form_last_name' 	=> __('Please enter your last name', 'copterpix'),
			'career_form_phone' 	=> __('Please enter your cell phone number', 'copterpix'),
			'career_form_email_required' 	=> __('Please enter your email adress', 'copterpix'),
			'career_form_email_error' 	=> __('Please enter your valid email adress', 'copterpix'),
			'not_found_error'	=> __('Sorry No Result Found', 'copterpix'),
		)
	);
}
add_action('wp_enqueue_scripts', 'form_add_script');

function get__excerpt($with_more = true){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 100);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    if ($with_more){
        $excerpt = $excerpt.'... <div class="read-more"><a class="fw-bold" style="font-size: 14px;" href="'.get_the_permalink().'">Continue Reading</a></div>';        
    }
    return $excerpt;
}

