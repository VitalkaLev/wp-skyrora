<div id="section-<?php echo get_row_index(); ?>" class="container constructor-columns">
    <div class="row">
        <?php if( have_rows('acf_product_box_repeater') ): ?>
            <?php while( have_rows('acf_product_box_repeater') ): the_row(); ?>

                <div class="col-md-12">
                    <article class="article-column">
                        <h4>
                            <?php the_sub_field('acf_product_box_repeater_name'); ?>
                        </h4>
                        <p>
                            <?php the_sub_field('acf_product_box_repeater_content'); ?>
                        </p>
                    </article>
                </div>

            <?php endwhile; ?> 
        <?php endif; ?>
    </div>
</div>