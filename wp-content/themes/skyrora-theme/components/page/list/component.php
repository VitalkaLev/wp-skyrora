<style>
  
    .article-chapter ol {
        counter-reset: listCounter;                                              
        list-style-type: none;
    }

    .article-chapter ol li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        font-size: 1.8rem;
        line-height: 1.6em;
    }

    .article-chapter ol li:not(:last-child) {
        margin-bottom: 1rem;
    }

    .article-chapter ol li::before {
        counter-increment: listCounter;            
        content: counter(listCounter) ". "; 
        color: #2A5DEA;
        margin-right: 2rem;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        width: 8px;
        height: 8px;                                      
    }
    
</style>
<div id="section-<?php echo get_row_index(); ?>" class="container article-container">
    <article class="article-landing">
        <div class="article-chapter">
            <?php 
            
            if( get_sub_field('acf_page_list_option') == 'circle' ){
                echo '<ul>';
            } else {
                echo '<ol>';
            } ?>
                <?php if( have_rows('acf_product_contents_list') ): ?>
                    <?php while( have_rows('acf_product_contents_list') ): the_row(); ?>
                        <li>
                            <?php the_sub_field('acf_product_contents_list_content'); ?>
                        </li>
                <?php endwhile; ?> <?php endif; ?>
                
            <?php if( get_sub_field('acf_page_list_option') == 'circle' ){
                echo '</ul>';
            } else {
                echo '</ol>';
            } ?>
        </div>
    </article>
</div>




  
