<?php get_header(); ?>

<main class="main"> 

    <?php  while ( have_rows('acf_product_flexible') ) : the_row(); 
                    
        if( get_row_layout() == 'acf_component_product_banner') { 

            get_template_part('template-components/product/banner'); 

    } endwhile; ?>

    <section class="section section-constructor">
    <?php  while ( have_rows('acf_product_flexible') ) : the_row(); 
                        
                        if( get_row_layout() == 'acf_component_product_contents') { 
            
                            get_template_part('template-components/product/contents'); 


            
                        } if( get_row_layout() == 'acf_component_product_list_records') { 
            
                            get_template_part('template-components/product/contents/list-records'); 



                        } if( get_row_layout() == 'acf_component_product_list_technologies') { 
            
                            get_template_part('template-components/product/contents/list-technologies'); 



                            
                        } if( get_row_layout() == 'acf_component_product_list_box') { 
            
                            get_template_part('template-components/product/contents/list-box'); 



            
                        } if( get_row_layout() == 'acf_component_product_contents_slider') { 
            
                            get_template_part('template-components/product/contents/slider'); 
                
                            
                
                        } if( get_row_layout() == 'acf_component_product_contents_title') { 
                
                            get_template_part('template-components/product/contents/title'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_content') { 
                
                            get_template_part('template-components/product/contents/content'); 
            
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_link') { 
                
                            get_template_part('template-components/product/contents/link'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_image') { 
                
                            get_template_part('template-components/product/contents/image'); 
            
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_video') { 
                
                            get_template_part('template-components/product/contents/video'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_list') { 
                
                            get_template_part('template-components/product/contents/list'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_list_stages') { 
                
                            get_template_part('template-components/product/contents/list-stages'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_list_launch_pad') { 
                
                            get_template_part('template-components/product/contents/list-launch-pad'); 
            
            
                            
                        } if( get_row_layout() == 'acf_component_product_contents_quote') { 
                
                            get_template_part('template-components/product/contents/quote'); 
                
                
            
                        } if( get_row_layout() == 'acf_component_product_contents_table') { 
                
                            get_template_part('template-components/product/contents/table'); 
                    
                    
            
                        } if( get_row_layout() == 'acf_component_product_look') { 
            
                            get_template_part('template-components/product/product-look'); 
            
                    } endwhile; ?>
    </section>

    <?php while ( have_rows('acf_product_flexible') ) : the_row(); 

        if( get_row_layout() == 'acf_component_product_news') { 

            get_template_part('template-components/product/news'); 

        } 

    endwhile; ?>
        
</main>	
		
<?php get_footer();
