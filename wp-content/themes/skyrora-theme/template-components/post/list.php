<style>
  
    .article-landing ol {
        counter-reset: listCounter;                                              
        list-style-type: none;
    }

    .article-landing ol li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        font-size: 1.8rem;
        line-height: 1.6em;
    }

    .article-landing ol li:not(:last-child) {
        margin-bottom: 1rem;
    }

    .article-landing ol li::before {
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


    <div class="article-landing">
        <?php 
        
        if( get_sub_field('acf_post_list_option') == 'circle' ){
            echo '<ul>';
        } else {
            echo '<ol>';
        } ?>
            <?php while( have_rows('acf_post_list') ): the_row(); ?>
                <li>
                    <p>
                        <?php the_sub_field('acf_post_list_content'); ?>
                    </p>
                </li>
            <?php endwhile; ?>

        <?php if( get_sub_field('acf_post_list_option') == 'circle' ){
            echo '</ul>';
        } else {
            echo '</ol>';
        } ?>
    </div>


