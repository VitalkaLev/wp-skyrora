<?php


    if( get_row_layout() == 'acf_component_news_list') { 

        get_template_part('components/page/news.list/templates/news-home');     

    }


    if( get_row_layout() == 'acf_component_news_cat_others') { 

        get_template_part('components/page/news.list/templates/news-cat');  

    }

    if( !is_singular('product') ){
        if( get_row_layout() == 'acf_component_product_news') { 

            get_template_part('components/page/news.list/templates/news-rocket');  

        }
    }

    if( is_singular('product') ){
        if( get_row_layout() == 'acf_component_product_news') { 

            get_template_part('components/page/news.list/templates/news-product');  

        }
    }

?>