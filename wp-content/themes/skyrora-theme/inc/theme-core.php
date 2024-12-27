<?php


add_filter( 'aioseo_next_link', 'aioseo_filter_next_link' );
function aioseo_filter_next_link( $next ) {
   return '';
}



add_filter( 'aioseo_canonical_url', 'aioseo_filter_canonical_url' );
function aioseo_filter_canonical_url( $url ) {
	return '';
}

remove_filter( 'aioseop_canonical_url', 'filter_aioseop_canonical_url', 10, 1 ); 
remove_action( 'wp_head', '_wp_render_title_tag', 1 );





function swipex_deregister_styles()    { 
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}
add_action( 'wp_print_styles', 'swipex_deregister_styles', 100 );




// seo
add_action('admin_bar_menu', function() {
    remove_action('wp_before_admin_bar_render', 'wp_customize_support_script');
}, 50);


// Колонка миниатюры в списке записей админки
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Миниатюра');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
 if($column_name === 'riv_post_thumbs'){
        the_post_thumbnail( array(50, 50) );
    }
}



// user delete field 
function true_hide_contacts( $contactmethods ) {
	unset($contactmethods['linkedin']);
	unset($contactmethods['myspace']);
	unset($contactmethods['pinterest']);
	unset($contactmethods['soundcloud']);
	unset($contactmethods['twitter']);
	unset($contactmethods['tumblr']);
	unset($contactmethods['wikipedia']);
	unset($contactmethods['facebook']);
	unset($contactmethods['youtube']);
	unset($contactmethods['instagram']);
	unset($contactmethods['twitter']);
	return $contactmethods;
}
add_filter('user_contactmethods', 'true_hide_contacts', 10, 1);

add_filter('the_content', 'do_shortcode');

add_filter('excerpt_more', function($more) {
	return '...';
});


function skyrora_disable_comments() {
    // Set the post types where you want to disable comments
    $post_types = get_post_types();

    foreach ($post_types as $post_type) {
        // Disable comments and trackbacks
        remove_post_type_support($post_type, 'comments');
        remove_post_type_support($post_type, 'trackbacks');
    }

    // Close comments on the front end
    update_option('comments_notify', 0);
    update_option('default_comment_status', 'closed');
    update_option('comment_moderation', 1);
}

// Hook into the init action to disable comments
add_action('init', 'skyrora_disable_comments');


function custom_pagination_rewrite() {

    // Add the new rule
    add_rewrite_rule(
        '^blog/category/(.+?)/page/?([0-9]{1,})/?$',
        'index.php?category_name=$matches[1]&paged=$matches[2]',
        'top'
    );

}
add_action('init', 'custom_pagination_rewrite');

function custom_pagination_query_vars($query_vars) {
    $query_vars[] = 'paged';
    return $query_vars;
}
add_filter('query_vars', 'custom_pagination_query_vars');

