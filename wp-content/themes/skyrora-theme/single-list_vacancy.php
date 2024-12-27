<?php get_header(); ?>

<main class="main main--landing">
    <section class="section article-landing article-landing--long">
       <?php  while ( have_rows('acf_product_flexible') ) : the_row(); 


                        
                        if( get_row_layout() == 'acf_component_product_contents') { 
            
                            get_template_part('components/product/card/component'); 
            
            
                        } 
                        
                        if( get_row_layout() == 'acf_component_social_links') { 
            
                            get_template_part('components/page/social-links/component'); 
            
            
                        }
            
            
                        if( get_row_layout() == 'acf_component_product_button_share') { 
            
                            get_template_part('components/page/social-share/component'); 
            
            
                        }
            
            
                        
                            
            
                        if( get_row_layout() == 'acf_component_page_one_column') { 
            
                            get_template_part('components/page/table/templates/one-column'); 
            
                        } 
            
            
                        if( get_row_layout() == 'acf_component_page_two_column') { 
                        
                            get_template_part('components/page/table/templates/two-column'); 
            
                        } 
            
            
            
                        if( get_row_layout() == 'acf_component_page_three_column') { 
                        
                            get_template_part('components/page/table/templates/three-column'); 
            
                        } 
            
                        if( get_row_layout() == 'acf_component_product_list_records') { 
                        
                            get_template_part('components/page/records.list/component'); 
            
                        } 
            
            
                        
            
                        if( get_row_layout() == 'acf_component_product_list_technologies') { 
                        
                            get_template_part('components/page/technology.list/component'); 
            
                        } 
                        
            
                        if( get_row_layout() == 'acf_component_product_contents_slider') { 
            
                            get_template_part('components/page/slider/component'); 
                
                            
                
                        } if( get_row_layout() == 'acf_component_product_contents_title') { 
                
                            get_template_part('components/product/title/component'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_content') { 
                
                            get_template_part('components/product/paragraph/component'); 
            
            
            
                        } if( get_row_layout() == 'acf_component_product_contents_list') { 
                
                            get_template_part('components/product/list/component'); 
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_link') { 
                
                            get_template_part('components/page/link/component'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_image') { 
                
                            get_template_part('components/product/image/component'); 
            
                            
                        
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_list_stages') { 
                
                            get_template_part('components/product/stages.list/component'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_list_launch_pad') { 
                
                            get_template_part('components/product/launch-pad.list/component'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_quote') { 
                
                            get_template_part('components/page/quote/component'); 
            
            
                        } if( get_row_layout() == 'acf_component_title_others') { 
                
                            get_template_part('components/page/title/component'); 
            
                
                        } if( get_row_layout() == 'acf_component_product_contents_video') { 
                
                            get_template_part('components/product/video/component'); 
            
            
            
                        } if( get_row_layout() == 'acf_component_product_contents_table') { 
                
                            get_template_part('components/product/table/component'); 
                    
                    
            
                        } if( get_row_layout() == 'acf_component_product_look') { 
            
                            get_template_part('components/product/products-look.list/component'); 
            
                    } endwhile; ?>
    </section>
</main>	
		
<?php get_footer();
