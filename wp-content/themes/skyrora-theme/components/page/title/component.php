<div id="section-<?php echo get_row_index(); ?>"  class="constructor-title">
    <?php

        $tag = get_sub_field('acf_page_title_helper');


        if( $tag == 'h1'){
            echo '<h1 class="h2">';

        } else { 
            echo '<' . $tag . '>';
        }

            the_sub_field('acf_others_title'); 

        echo '</' . $tag . '>';
        
    ?>
</div>