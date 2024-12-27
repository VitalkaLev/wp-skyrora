
<div id="section-<?php echo get_row_index(); ?>" class="container article-container">
    <article class="article-landing">
        <?php if( get_sub_field('acf_product_quote_option') == 'style-1' ){ ?>  
            
            <blockquote>
                <p>
                    <?php the_sub_field('acf_product_contents_quote'); ?>
                </p>
                <?php if( get_sub_field('acf_product_author_name') ){ ?>
                    <span>
                        <?php echo get_sub_field('acf_product_author_name'); ?>
                    </span>
                <?php } ?>
            </blockquote>

        <?php } else { ?>

            <div class="article-simple-quote">
                <blockquote>
                    <p>
                        <?php the_sub_field('acf_product_contents_quote'); ?>
                    </p>
                    <?php
                    if( get_sub_field('acf_product_author_name') ){ ?>
                        <span>
                            <?php echo get_sub_field('acf_product_author_name'); ?>
                        </span>
                    <?php } ?>
                </blockquote>
            </div> 

        <?php } ?>
    </article>
</div>