<div id="section-<?php echo get_row_index(); ?>" class="container article-container">
    <article class="article-landing">
        <div class="article-chapter">
            <ul>
                <?php if( have_rows('acf_product_contents_list') ): ?>
                    <?php while( have_rows('acf_product_contents_list') ): the_row(); ?>
                        <li>
                            <?php the_sub_field('acf_product_contents_list_content'); ?>
                        </li>
                    <?php endwhile; ?> 
                <?php endif; ?>
            </ul>
        </div>
    </article>
</div>