<?php
// menu-posts

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
    wp_enqueue_style( 'dashicons' );
}

function mb_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'mb_login_url' );

function mb_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertitle', 'mb_login_title' );


function theme_admin_style() {
  global $pagenow;
    
  /*if (is_admin() && $pagenow === 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) === 'page') {
      wp_enqueue_style('admin-dark', '' . THEME . '/inc/admin/admin-dark.css');
      wp_enqueue_style('admin-front', '' . THEME . '/inc/admin/admin-front.css');
  } else{
    wp_enqueue_style('admin-theme', '' . THEME . '/inc/admin/admin.css');
  }
 */
      
}
add_action('admin_enqueue_scripts', 'theme_admin_style');

// function theme_scripts_admin() {
// 	wp_enqueue_style('admin-builder', '' . THEME . '/inc/admin/admin.css');
// }
// add_action('admin_enqueue_scripts', 'theme_scripts_admin');