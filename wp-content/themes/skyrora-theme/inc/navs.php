<?php

register_nav_menus(array(
	'header-menu' => 'Header menu',
));

function header_left_menu(){
	wp_nav_menu( array(
		'theme_location' => 'header-menu',
        'container' => false,
	) );
}








// footer-menu-col-1
register_nav_menus(array(
	'footer-menu-col-1' => 'Footer Menu - column 1',
));

function footer_menu_col_1(){
	wp_nav_menu( array(
		'theme_location' => 'footer-menu-col-1',
        'container'        => false,
		'items_wrap'      => '<ul class="js-collapse-content">%3$s</ul>',
	) );
}

// footer-menu-col-2
register_nav_menus(array(
	'footer-menu-col-2' => 'Footer Menu - column 2',
));

function footer_menu_col_2(){
	wp_nav_menu( array(
		'theme_location' => 'footer-menu-col-2',
        'container'        => false,
		'items_wrap'      => '<ul class="js-collapse-content">%3$s</ul>',
	) );
}

// footer-menu-col-3
register_nav_menus(array(
	'footer-menu-col-3' => 'Footer Menu - column 3',
));

function footer_menu_col_3(){
	wp_nav_menu( array(
		'theme_location' => 'footer-menu-col-3',
        'container'        => false,
		'items_wrap'      => '<ul class="js-collapse-content">%3$s</ul>',
	) );
}

// footer-menu-col-4
register_nav_menus(array(
	'footer-menu-col-4' => 'Footer Menu - column 4',
));

function footer_menu_col_4(){
	wp_nav_menu( array(
		'theme_location' => 'footer-menu-col-4',
        'container'        => false,
		'items_wrap'      => '<ul class="js-collapse-content">%3$s</ul>',
	) );
}

// footer-menu-col-5
register_nav_menus(array(
	'footer-menu-col-5' => 'Footer Menu - column 5',
));

function footer_menu_col_5(){
	wp_nav_menu( array(
		'theme_location' => 'footer-menu-col-5',
        'container'        => false,
		'items_wrap'      => '<ul class="js-collapse-content">%3$s</ul>',
	) );
}

// footer-menu-col-6
register_nav_menus(array(
	'footer-menu-col-6' => 'Footer Menu - column 6',
));

function footer_menu_col_6(){
	wp_nav_menu( array(
		'theme_location' => 'footer-menu-col-6',
        'container'        => false,
		'items_wrap'      => '<ul class="js-collapse-content">%3$s</ul>',
	) );
}

















//  header menu style


//menu ul 
add_filter( 'wp_nav_menu_args', 'filter_nav_menu_args' );
function filter_nav_menu_args( $args ) {
	if ( $args['theme_location'] === 'header-menu' ) {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'c-header-menu__list h-reset-list';
	}
	return $args;
}


// header-menu ul li
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location === 'header-menu' ) {
            $classes['class'] = 'c-header__menu-item';
	}
	return $classes;
}



//menu ul li a
function add_specific_menu_location_atts( $atts, $item, $args ) {

    if( $args->theme_location == 'header-menu' ) {
            $atts['class'] = 'c-header-menu__link';
    }
    return $atts;
    
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );










// footer style


//menu ul 
add_filter( 'wp_nav_menu_args', 'filter_nav_footer_menu_args' );
function filter_nav_footer_menu_args( $args ) {
	if ( $args['theme_location'] === 'footer-menu' ) {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'c-footer-menu__items h-reset-list'; 
	}
	return $args;
}


// footer-menu ul li
add_filter( 'nav_menu_css_class', 'filter_nav_footer_menu_css_classes', 10, 4 );
function filter_nav_footer_menu_css_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location === 'footer-menu' ) {
            $classes = ['c-footer-menu__link'];
	}
	return $classes;
}



//menu ul li a
function add_specific_footer_menu_location_atts( $atts, $item, $args ) {

    if( $args->theme_location == 'footer-menu' ) {
            $atts['class'] = 'c-footer-menu__link';
    }
    return $atts;
    
}
add_filter( 'nav_menu_link_attributes', 'add_specific_footer_menu_location_atts', 10, 3 );





