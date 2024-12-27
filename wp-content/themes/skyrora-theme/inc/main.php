<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



define('THEME', preg_replace('/https?\:\/\/(.+?)\//', '/', get_bloginfo('template_directory')  ) );


define('SITE', preg_replace('/https?\:\/\/(.+?)\//', '/', get_home_url()  ) );


define('HOME', preg_replace('/https?\:\/\/(.+?)\//', '/', get_home_url("home")  ) );






  

function placeholderImage(){

	$res = THEME . '/placeholder.jpg ';

	return $res;

}


/**
 * Remove comments and default posts
 */
function my_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'my_remove_admin_menus' );

/**
 * Remove comments and default posts from admin bar
 */
function my_adminbar_new_content() {

	global $wp_admin_bar;

	// get node for New + menu node
	$new_content_node = $wp_admin_bar->get_node('new-content');

	// change URL for node, edit for prefered link
	$new_content_node->href = admin_url( '' );

	// Update New + menu node
	$wp_admin_bar->add_node($new_content_node);

	// remove items from New Content menu
	$wp_admin_bar->remove_node('new-post');
	$wp_admin_bar->remove_node('comments');
}
add_action( 'wp_before_admin_bar_render', 'my_adminbar_new_content' );






























