<div id="section-<?php echo get_row_index(); ?>" class="container stages-collage">
    <div class="grid-container grid-container--type2">

        <?php $stage_ids = get_sub_field('acf_product_contents_content_list_stages', false , false );

        $stage_args = array(
            'post_type' => 'stage',
            'posts_per_page' => -1,
            'order'          => 'ASC',
            'post_status'    => 'publish',
            'post__in'       =>  $stage_ids,
            'orderby'        => 'post__in',
        );

        $stages = get_posts($stage_args); 

        if( $stages ): ?>

            <?php foreach( $stages as $stage ):  ?>
                    
                    <div class="product--horizontal product--column-mobile product">
                        <div class="product__info">
                            <div class="product__info-top">
                                <h4>
                                    <?php echo get_the_title($stage->ID); ?>
                                </h4>
                                <p>
                                    <?php echo get_field('acf_product_short_content', $stage->ID); ?>
                                </p>
                            </div>
                        </div>
                        <div class="product__picture">
                            <picture>
                                <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($stage->ID); ?>"/>
                                <source srcset="<?php echo get_the_post_thumbnail_url($stage->ID); ?>" type="image/webp" />
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($stage->ID), 'large' ); ?>
                            </picture>
                        </div>
            </div>
               
            <?php endforeach; wp_reset_postdata(); ?>

        <?php endif; ?>

    </div>
</div>