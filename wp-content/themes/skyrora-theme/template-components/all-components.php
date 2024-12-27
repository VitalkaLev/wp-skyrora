<?php while ( have_rows('acf_all_components') ) : the_row(); 
  if( get_row_layout() == 'acf_component_banner_others') { 

    get_template_part('template-components/others/banner'); 

} endwhile; ?>


<section class="section section-constructor">

    <?php while ( have_rows('acf_all_components') ) : the_row(); 

        if( get_row_layout() == 'acf_component_quote_others') { 

            get_template_part('template-components/others/quote'); 

            

            
        } if( get_row_layout() == 'acf_component_social_links') { 

            get_template_part('template-components/product/social-links'); 



        } if( get_row_layout() == 'acf_component_product_clone_table') { 

            get_template_part('template-components/product/contents/table'); 



        } if( get_row_layout() == 'acf_component_product_clone_list_records') { 

            get_template_part('template-components/product/contents/list-records'); 



        } if( get_row_layout() == 'acf_component_product_clone_one_column') { 

            get_template_part('template-components/product/contents/one-column'); 
    


        } if( get_row_layout() == 'acf_component_product_clone_list_stages') { 

            get_template_part('template-components/product/contents/list-stages'); 



        } if( get_row_layout() == 'acf_component_product_clone_launch_pad') { 

            get_template_part('template-components/product/contents/list-launch-pad'); 



            
        } if( get_row_layout() == 'acf_component_product_clone_slider') { 

            get_template_part('template-components/product/contents/slider'); 


    
        } if( get_row_layout() == 'acf_component_product_clone_product_look') { 

            get_template_part('template-components/product/product_look'); 








            



        } if( get_row_layout() == 'acf_component_product_look') { 

            get_template_part('template-components/product/product-look'); 




        } if( get_row_layout() == 'acf_component_list_technology_others') { 

            get_template_part('template-components/others/list-technology'); 


        } if( get_row_layout() == 'acf_component_list_vacancy_others') { 

            get_template_part('template-components/others/list-vacancy'); 



        } if( get_row_layout() == 'acf_component_list_internships_others') { 

            get_template_part('template-components/others/list-internship'); 

            

        } if( get_row_layout() == 'acf_component_list_products_others') { 

            get_template_part('template-components/others/products'); 


        } if( get_row_layout() == 'acf_component_title_others') { 

            get_template_part('template-components/others/title'); 


        } if( get_row_layout() == 'acf_component_content_others') { 

            get_template_part('template-components/others/content'); 



        } if( get_row_layout() == 'acf_component_parameters_list_others') { 

            get_template_part('template-components/others/parameters-list'); 


                        
                        
        } if( get_row_layout() == 'acf_component_about_team_amount') { 

            get_template_part('template-components/others/team-amount');    


            
        } if( get_row_layout() == 'acf_component_video_others') { 

            get_template_part('template-components/others/video');    


        } if( get_row_layout() == 'acf_component_about_corporate') { 

            get_template_part('template-components/others/about-corporate');    



        } if( get_row_layout() == 'acf_component_advisory_board') { 

            get_template_part('template-components/others/advisory-board');    


            
        } if( get_row_layout() == 'acf_component_about_team_amount') { 

            get_template_part('template-components/others/about-team-amount');    


        } if( get_row_layout() == 'acf_component_team_list') { 

            get_template_part('template-components/others/about-team-list');   


        } if( get_row_layout() == 'acf_component_personal_list') { 

            get_template_part('template-components/others/about-personal-list');   

            

        } if( get_row_layout() == 'acf_component_parthers') { 

            get_template_part('template-components/others/list-parthers');   



        } if( get_row_layout() == 'acf_component_news_nav') { 

            get_template_part('template-components/others/news-nav');    


             
        } if( get_row_layout() == 'acf_component_news_list') { 

            get_template_part('template-components/others/news-others');    


        } if( get_row_layout() == 'acf_component_news_cat_others') { 

            get_template_part('template-components/others/news-cat');  
            
            

        } if( get_row_layout() == 'acf_component_product_news') { 

            get_template_part('template-components/others/news-v3');   


            
        } if( get_row_layout() == 'acf_component_contacts') { 

            get_template_part('template-components/others/contacts');   


        } if( get_row_layout() == 'acf_component_twitter') { 

            get_template_part('template-components/others/twitter');  
            

    } endwhile; ?>

</section>  