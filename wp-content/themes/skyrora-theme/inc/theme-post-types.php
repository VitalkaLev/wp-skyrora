<?php

function theme_post_types() {

	/**
	 * Post Type: Products.
	 */

	$labels = [
		"name" => __( "Products", "custom-post-type-ui" ),
		"singular_name" => __( "Product", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Products", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( 'slug' => false, 'with_front' => false ),  
		"query_var" => true,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/products.svg",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];

	register_post_type( "product", $args );

	/**
	 * Post Type: Team.
	 */

	$labels = [
		"name" => __( "Team", "custom-post-type-ui" ),
		"singular_name" => __( "Team", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Team", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false ,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false, "with_front" => false ],
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/personal.svg" ,
		"query_var" => false,
		"supports" => [ "title", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team", $args );

	/**
	 * Post Type: Parthners.
	 */

	$labels = [
		"name" => __( "Parthners", "custom-post-type-ui" ),
		"singular_name" => __( "Parthner", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Parthners", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false, "with_front" => false ],
		"query_var" => false,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/partners.svg",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "parthners", $args );

	/**
	 * Post Type: Personal.
	 */

	$labels = [
		"name" => __( "Personal", "custom-post-type-ui" ),
		"singular_name" => __( "Personal", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Personal", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false, "with_front" => false ],
		"query_var" => true,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/personal.svg",
		"supports" => [ "title", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];

	register_post_type( "personal", $args );

	/**
	 * Post Type: Leaders.
	 */

	$labels = [
		"name" => __( "Leaders", "custom-post-type-ui" ),
		"singular_name" => __( "Leader", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Leaders", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false , "with_front" => false ],
		"query_var" => false,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/leaders.svg",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "Leader", $args );

	/**
	 * Post Type: Stages / Cards.
	 */

	$labels = [
		"name" => __( "Stages / Cards", "custom-post-type-ui" ),
		"singular_name" => __( "Stage / Card", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Stages / Cards", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false, "with_front" => false ],
		"query_var" => false,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/stages-cards.svg",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "stage", $args );

	/**
	 * Post Type: Advisory Board.
	 */

	$labels = [
		"name" => __( "Advisory Board", "custom-post-type-ui" ),
		"singular_name" => __( "board", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Advisory Board", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false , "with_front" => false ],
		"query_var" => false,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/advisory-board.svg",
		"supports" => [ "title", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];

	register_post_type( "board", $args );

	/**
	 * Post Type: Technology.
	 */

	$labels = [
		"name" => __( "Technology", "custom-post-type-ui" ),
		"singular_name" => __( "Technology", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Technology", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false, "with_front" => false ],
		"query_var" => true,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/technology.svg",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "technology", $args );

	/**
	 * Post Type: Internships.
	 */

	$labels = [
		"name" => __( "Internships", "custom-post-type-ui" ),
		"singular_name" => __( "Internship", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Internships", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false, "with_front" => false ],
		"query_var" => true,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/internships.svg",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "list_internships", $args );

	/**
	 * Post Type: Vacancy.
	 */

	$labels = [
		"name" => __( "Vacancy", "custom-post-type-ui" ),
		"singular_name" => __( "Vacancy", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Vacancy", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => false, "with_front" => false ],
		"query_var" => true,
		"menu_icon" => HOME . "/wp-content/uploads/2021/05/vacancy.svg",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "list_vacancy", $args );
}

add_action( 'init', 'theme_post_types' );