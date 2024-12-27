
    <?php  while ( have_rows('acf_post_flexible') ) : the_row(); 
                    
                    if( get_row_layout() == 'acf_component_post_slider') { 
            
                        get_template_part('template-components/post/slider'); 
            
                        
            
                    } if( get_row_layout() == 'acf_component_post_title') { 
            
                        get_template_part('template-components/post/title'); 
        
        
                        
                    } if( get_row_layout() == 'acf_component_post_content') { 
            
                        get_template_part('template-components/post/content'); 
        
        
        
                        
                    } if( get_row_layout() == 'acf_component_post_link') { 
            
                        get_template_part('template-components/post/link'); 
        
        
                        
                    } if( get_row_layout() == 'acf_component_post_image') { 
            
                        get_template_part('template-components/post/image'); 
        
        
        
                        
                    } if( get_row_layout() == 'acf_component_post_video') { 
            
                        get_template_part('template-components/post/video'); 
        
        
                        
                    } if( get_row_layout() == 'acf_component_post_list') { 
            
                        get_template_part('template-components/post/list'); 
    
        
                        
                    } if( get_row_layout() == 'acf_component_post_quote') { 
            
                        get_template_part('template-components/post/quote'); 
            
            
                    } if( get_row_layout() == 'acf_component_post_table') { 
            
                        get_template_part('template-components/post/table'); 
            
            
} endwhile; ?>
                            