

    
        <?php

            $tag = get_sub_field('acf_page_title_helper');

            if( $tag  == 'h2'){ ?>

                <div id="section-<?php echo get_row_index(); ?>" class="container constructor-title"> 

                    <?php echo '<' . $tag . '>';

                        the_sub_field('acf_product_contents_title'); 

                    echo '</' . $tag . '>'; ?>

                </div>

            <?php } else { ?>

                <div id="section-<?php echo get_row_index(); ?>" class="container constructor-subtitle article-simple-quote"> 

                    <?php echo '<' . $tag . '>';

                        the_sub_field('acf_product_contents_title'); 

                    echo '</' . $tag . '>'; ?>

                </div>

            
            <?php } ?>
