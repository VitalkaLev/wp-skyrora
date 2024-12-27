<?php /* Template Name: Contacts-Page */ ?>

<?php get_header(); ?>

<?php if( get_field('acf_header_style') == 'opacity'){ ?>
	<main class="main">
<?php } else { ?>
	<main class="main main--landing">
<?php }  ?>	

<?php 

while ( have_rows('acf_all_components') ) : the_row(); 
    if( get_row_layout() == 'acf_component_banner_others') { 

        get_template_part('components/page/banner/component'); 

    } 
endwhile; ?>

<?php while ( have_rows('acf_all_components') ) : the_row(); 


    if( get_row_layout() == 'acf_component_quote_others') { 

        get_template_part('components/page/quote/component'); 

    } 


    if( get_row_layout() == 'acf_component_social_links') { 

        get_template_part('components/page/social-links/component'); 

    } 
    
    
    if( get_row_layout() == 'acf_component_product_clone_table') { 

        get_template_part('components/page/table/component'); 

    } 


    if( get_row_layout() == 'acf_component_parthers') { 

        get_template_part('components/page/partners.list/component'); 

    } 
    
    
    if( get_row_layout() == 'acf_component_product_clone_list_records') { 

        get_template_part('components/page/records.list/component'); 

    } 
    

    if( get_row_layout() == 'acf_component_list_technology_others') { 

        get_template_part('components/page/technology.list/component'); 

    } 


    if( get_row_layout() == 'acf_component_list_vacancy_others') { 

        get_template_part('components/page/vacancy.list/component'); 

    } 
    

    if( get_row_layout() == 'acf_component_list_internships_others') { 

        get_template_part('components/page/internship.list/component'); 
        
    } 
    

    if( get_row_layout() == 'acf_component_list_products_others') { 

        get_template_part('components/page/products.list/component'); 

    } 
    
    
    if( get_row_layout() == 'acf_component_title_others') { 

        get_template_part('components/page/title/component'); 

    } 
    
    
    if( get_row_layout() == 'acf_component_content_others') { 

        get_template_part('components/page/paragraph/component'); 

    } 
    
    
    if( get_row_layout() == 'acf_component_parameters_list_others') { 

        get_template_part('components/page/table/component'); 
         
    } 


    if( get_row_layout() == 'acf_component_video_others') { 

        get_template_part('components/page/video/component');    

    } 
    
    
    if( get_row_layout() == 'acf_component_about_corporate') { 

        get_template_part('components/page/corporate-value/component');  

    } 
    
    
    if( get_row_layout() == 'acf_component_advisory_board') { 

        get_template_part('components/page/advisory-board/component');    

    } 

    
    if( get_row_layout() == 'acf_component_about_team_amount') { 

        get_template_part('components/page/team-amount/component');    

    } 
    

    if( get_row_layout() == 'acf_component_team_list') { 

        get_template_part('components/page/team.list/component');    

    } 
    
    
    if( get_row_layout() == 'acf_component_personal_list') { 

        get_template_part('components/page/personal.list/component');  

    } 
    
    
    if( get_row_layout() == 'acf_component_parthers') { 

        get_template_part('components/page/parthers.list/component');

    } 
    

    if( get_row_layout() == 'acf_component_news_list') { 

        get_template_part('components/page/news.list/component');   
        
    } 
    

    if( get_row_layout() == 'acf_component_news_cat_others') { 

        get_template_part('components/page/news.list/component'); 
        
    } 
    

    if( get_row_layout() == 'acf_component_product_news') { 

        get_template_part('components/page/news.list/component');    

    } 

    
    if( get_row_layout() == 'acf_component_contacts') { 

        get_template_part('components/page/contacts/component');  

    } 
    
    if( get_row_layout() == 'acf_component_twitter') { 

        get_template_part('components/page/twitter/component'); 
        
    } 
endwhile; ?>

  
    
    </main>
            
<?php get_footer(); ?>