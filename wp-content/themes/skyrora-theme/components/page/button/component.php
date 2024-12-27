<div id="section-<?php echo get_row_index(); ?>" class="container landing-links">
    
    <?php 

        $color = set_query_var( 'color', get_sub_field('acf_color_button') );

        $option = get_sub_field('acf_options_button');
    ?>

    <?php if( $option == 'link'){ 

        get_template_part('components/page/button/templates/link'); 

    } 
    
    if( $option == 'popupBook' ){ 

        get_template_part('components/page/button/templates/popup-book'); 

    } 

    if( $option == 'popupIndicate' ){ 

        get_template_part('components/page/button/templates/popup-indicate'); 

    } 
    
    if( $option == 'popupMail' ){ 

        get_template_part('components/page/button/templates/popup-mail'); 

    }
    
    if( $option == 'popupSubscribe' ){ 

        get_template_part('components/page/button/templates/subscribe'); 

    }?>

</div>