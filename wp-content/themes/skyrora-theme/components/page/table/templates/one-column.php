<div id="section-<?php echo get_row_index(); ?>" class="container article-chapter one--column">
    <div class="characteristics-list characteristics-list--oneCol">
        <ul>
            <?php if( have_rows('acf_product_one_column_repeater') ): ?>
            <?php while( have_rows('acf_product_one_column_repeater') ): the_row(); ?>
                <li>
                    <span>
                        <?php the_sub_field('acf_product_one_column_repeater_title'); ?>
                    </span>
                    <span>
                        <?php the_sub_field('acf_product_one_column_repeater_content'); ?>
                    </span>
                </li>
            <?php endwhile; ?> <?php endif; ?>
        </ul>
    </div>              
</div>