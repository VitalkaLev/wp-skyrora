<?php  while ( have_rows('acf_product_flexible') ) : the_row(); 
                    
        if( get_row_layout() == 'acf_component_product_banner') { 

            get_template_part('components/page/banner/component'); 

    } endwhile; ?>

    <section class="section section-constructor">

        <?php get_template_part('components/page-components'); ?>

        <?php  while ( have_rows('acf_product_flexible') ) : the_row(); 
         
            if( get_row_layout() == 'acf_component_product_contents_list_stages') { 
    
                get_template_part('components/product/stages.list/component');  

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



            if( get_row_layout() == 'acf_component_product_contents_list_launch_pad') { 
    
                get_template_part('components/product/launch-pad.list/component'); 

            } 
            
            
            if( get_row_layout() == 'acf_component_product_look') { 

                get_template_part('components/product/products-look.list/component'); 

            } 

        endwhile; ?>
    </section>

    <?php while ( have_rows('acf_product_flexible') ) : the_row(); 

        if( get_row_layout() == 'acf_component_product_news') { 

            get_template_part('components/product/news.list/component'); 

        } 

    endwhile; ?>