<?php get_header(); ?>

<main class="main main--landing"> 

    <?php  while ( have_rows('acf_product_flexible') ) : the_row(); 
                    
        if( get_row_layout() == 'acf_component_product_banner') { 

            get_template_part('template-components/product/banner'); 

    } endwhile; ?>

    <section class="section section-constructor">
        <?php  while ( have_rows('acf_product_flexible') ) : the_row(); 
                        
            if( get_row_layout() == 'acf_component_product_contents') { 

                get_template_part('template-components/product/contents'); 



            } if( get_row_layout() == 'acf_component_product_others') { 

                get_template_part('template-components/product/others'); 

        } endwhile; ?>
    </section>

    <?php while ( have_rows('acf_product_flexible') ) : the_row(); 

        if( get_row_layout() == 'acf_component_product_news') { 

            get_template_part('template-components/product/news'); 

        } 

    endwhile; ?>
        
</main>	
		
<?php get_footer();
