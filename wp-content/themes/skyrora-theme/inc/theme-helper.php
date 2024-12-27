<?php

function dd($data){
	echo '<pre>';
		var_dump($data);
	echo '</pre>';
}


function swipeks_leader_custom_link($select_data, $post_link_data, $category_link_data, $id) {
    
    $radio_button = get_field($select_data,$id);
    if($radio_button == 'post_select'){
        $post_url_data = get_field($post_link_data,$id);
        if($post_url_data){
            echo esc_url(get_permalink($post_url_data));
        }
    }
    if($radio_button == 'category_select'){
        $category_url_data = get_field($category_link_data,$id);
        if($category_url_data){
            echo esc_url(get_term_link($category_url_data));
        }
    }
}



function swipex_current_category_name($post_id){

	$postID = $post_id->ID;
	$taxonomy_slug = 'category';
	$primary_cat_id = get_post_meta( $postID, 'epc_primary_' . $taxonomy_slug , true );
	$primary_cat_name = get_cat_name($primary_cat_id); 

	return $primary_cat_name;
   
}

function swipex_current_category_link($post_id){

	$taxonomy_slug = 'category';
	$primary_cat_id = get_post_meta( $post_id, 'epc_primary_' . $taxonomy_slug , true );
	$primary_cat_link = get_category_link($primary_cat_id); 

	return $primary_cat_link;
   
}


function custom_pagination($pages = '', $range = 3 , $type)
{  
 $showitems = ($range * 2)+1;  

 global $paged;
 if(empty($paged)) $paged = 1;

 if($pages == '')
 {

     $pages = $type->max_num_pages;
	
     if(!$pages)
     {
         $pages = 1;
     }
 }   

 if(1 != $pages)
 {
	 $arr_link = rtrim( get_pagenum_link($paged - 1), '/\\'); ;
     echo "<div class='pagination'><ul>";
     if($paged > 1){ echo "<li><a href=".$arr_link.">";
	 echo "<svg width='1em' height='1em' class='icon icon-sw-arrow-left'>
		<use xlink:href='/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-sw-arrow-left'></use>
	</svg></li>"; }

     for ($i=1; $i <= $pages; $i++)
     {
         if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
         {
			 $custom_link = rtrim( get_pagenum_link($i), '/\\'); ;
             echo ($paged == $i)? "<li class='active'><span class='current'>".$i."</span></li>":"<li><a href='".$custom_link."' class='inactive' >".$i."</a></li>";
         }
     }

    
        if( $paged < $pages ){ echo "<li><a href=".get_pagenum_link($paged + 1).">";
        echo "<svg width='1em' height='1em' class='icon icon-sw-arrow-left'>
        <use xlink:href='/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-sw-arrow-right'></use>
        </svg></a></li></ul>\n"; 
        }
    }
}




// contact-form 7
add_filter('wpcf7_autop_or_not', '__return_false');

remove_filter( 'the_content', 'wpautop' );

add_filter('wpcf7_form_elements', function($content) {
    preg_match_all('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', $content,$matches);

    foreach($matches[2] as $match):
        $content = str_replace(trim($match),trim(preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $match)),$content);
    endforeach;
    return $content;
});




function wph_cut_by_words($minlen, $maxlen, $text) {  
    $len = (mb_strlen($text) > $maxlen)? mb_strripos(mb_substr($text, $minlen, $maxlen), ' ') : $maxlen;
    $cutStr = mb_substr($text, $minlen, $len);
    $temp = (mb_strlen($text) > $maxlen)? $cutStr : $cutStr;
    return $temp;
}




// set the title attribute on images inserted via the editor, and then those created as featured images
function inserted_image_titles( $html, $id ) {
	$attachment = get_post($id);
	$thetitle = $attachment->post_title;
	return str_replace('<img', '<img title="' . $thetitle . '" '  , $html);
}
add_filter( 'media_send_to_editor', 'inserted_image_titles', 15, 2 );
function featured_image_titles($attr, $attachment = null){
	$attr['title'] = get_post($attachment->ID)->post_title;
	return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'featured_image_titles', 10, 2);
















function the_field_without_wpautop( $field_name ) {
	
	remove_filter('acf_the_content', 'wpautop');
	
	the_field( $field_name );
	
	add_filter('acf_the_content', 'wpautop');
	
}







function ft( $data ){

	if( strpos( $data , '</p>')  == true ){
		$order = ['<p>','</p>'];
		return strip_tags( $data , $order );

	} else {
		return $data;
	}
}


function skyrora_get_attachment_image_no_srcset($attachment_id, $size = 'thumbnail', $icon = false, $attr = '') {
    // add a filter to return null for srcset
    add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
    $attr['loading'] = 'lazy';
    // get the srcset-less img html
    $html = wp_get_attachment_image($attachment_id, $size, $icon, $attr);
    // remove the above filter
    remove_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
    return $html;
}


function skyrora_image($image_id, $widthSize, $heightSize, $class_name = 'lazy') {
    echo skyrora_get_attachment_image_no_srcset($image_id, array($widthSize, $heightSize), false, ['class' => $class_name ] );
}

function skyrora_image_url($image_id, $widthSize, $heightSize, $class_name = 'lazy' ) {
    echo wp_get_attachment_image_url($image_id, array($widthSize, $heightSize), false );
}

function skyrora_add_lazy_loading_to_images($content) {
    // Check if content is not empty
    if (!empty($content)) {
        // Use regular expressions to add loading="lazy" to img tags
        $content = preg_replace('/<img(.*?)src=(\'|")(.*?)(\'|")(.*?)>/i', '<img$1loading="lazy" src=$2$3$4$5>', $content);
    }
    return $content;
}

// Apply the filter to the_content
add_filter('the_content', 'skyrora_add_lazy_loading_to_images');