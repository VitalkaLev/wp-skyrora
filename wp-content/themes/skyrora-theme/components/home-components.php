
<?php 

    while ( have_rows('acf_home_components') ) : the_row(); 

        if( get_row_layout() == 'acf_component_home_banner') { 

            get_template_part('components/home/banner/component'); 



        } if( get_row_layout() == 'acf_component_home_list_products') { 

            get_template_part('components/home/products.list/component'); 



        } if( get_row_layout() == 'acf_component_home_box_v4') { 

            get_template_part('components/home/dedicated/component'); 




        } if( get_row_layout() == 'acf_component_home_box_v3') { 

            get_template_part('components/home/environment/component'); 




        } if( get_row_layout() == 'acf_component_home_box_v1') { 

            get_template_part('components/home/innovation/component'); 



        } if( get_row_layout() == 'acf_component_news_list') { 

            get_template_part('components/home/news.list/component'); 

            



        } if( get_row_layout() == 'acf_home_list_leaders') { 

            get_template_part('components/home/leaders.list/component'); 


        }

    endwhile; 

?>