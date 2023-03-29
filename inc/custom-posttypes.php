<?php

function copterpix_register_my_cpts()
{

	/**
	 * Post Type: Transactions .
	 */

	$labels = [
		"name" => __("Products ", "copterpix"),
		"singular_name" => __("Product", "copterpix"),
	];

	$args = [
		"label" => __("Products ", "copterpix"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,        
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => ["slug" => "products", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-airplane",
		"supports" => ["title", "editor", "custom-fields", "thumbnail"],
		"taxonomies" => ["category"],
		"show_in_graphql" => false,
	];

	register_post_type("products", $args);
    
    $labels = [
		"name" => __("News ", "copterpix"),
		"singular_name" => __("News", "copterpix"),
	];

	$args = [
		"label" => __("News ", "copterpix"),
		"labels" => $labels,
		"description" => "",
        'menu_position'=>5,
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,        
		"show_in_rest" => true,		
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => ["slug" => "news", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-justify",
		"supports" => ["title", "editor", "custom-fields", "thumbnail"],		
		"show_in_graphql" => false,
	];
    register_post_type("news", $args);   
}

add_action('init', 'copterpix_register_my_cpts');

