
<div id="section-<?php echo get_row_index(); ?>" class="container characteristics-list">
    <ul>
        <?php if( have_rows('acf_product_contents_content_table') ): ?>
            <?php while( have_rows('acf_product_contents_content_table') ): the_row(); ?>
                <li>
                    <span>
                        <?php the_sub_field('acf_product_contents_content_table_name'); ?>
                    </span>
                    <span>
                        <?php the_sub_field('acf_product_contents_content_table_value'); ?>
                    </span>
                </li>
        <?php endwhile; ?> <?php endif; ?>
    </ul>
</div>