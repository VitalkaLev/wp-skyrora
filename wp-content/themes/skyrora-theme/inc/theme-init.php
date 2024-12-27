<?php

// Theme defaults and registers support for various WordPress features.
function theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'theme_setup' );

// scripts front
function theme_scripts_front() {
    wp_enqueue_style( 'all', THEME . '/dist/s/css/all.css' );
	wp_enqueue_style( 'helper', THEME . '/dist/s/css/helper.css' );

    wp_enqueue_script('main', THEME . '/dist/s/js/main.js', array('jquery'), '1.0', true);

}
add_action ( 'wp_enqueue_scripts', 'theme_scripts_front' );


