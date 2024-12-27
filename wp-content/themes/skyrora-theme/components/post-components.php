<?php  

while ( have_rows('acf_post_flexible') ) : the_row(); 

    if( get_row_layout() == 'acf_component_post_title') { 

        get_template_part('components/post/title/component'); 
        
    } 
    
    
    if( get_row_layout() == 'acf_component_post_content') { 

        get_template_part('components/post/paragraph/component'); 
 
    } 
    
    
    if( get_row_layout() == 'acf_component_post_link') { 

        get_template_part('components/post/link/component'); 

    } 
    
    if( get_row_layout() == 'acf_component_post_image') { 

        get_template_part('components/post/image/component'); 

    } 
    


    if( get_row_layout() == 'acf_component_post_list') { 

        get_template_part('components/post/list/component'); 

    } 
    
    if( get_row_layout() == 'acf_component_post_quote') { 

        get_template_part('components/post/quote/component'); 

    } 
     

endwhile; ?>