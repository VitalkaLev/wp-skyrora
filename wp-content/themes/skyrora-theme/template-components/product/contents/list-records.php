

<div id="section-<?php echo get_row_index(); ?>"  class="container leaders-container">
    <div class="leaders__content">
        <div class="row">
        <?php $leader_ids = get_sub_field('acf_product_list_records_relationship');

            $leader_args = array(
                'post_type' => 'leader',
                'posts_per_page' => -1,
                'post__in' => $leader_ids,
                'orderby'  => 'post__in',
            );

            $leaders = get_posts($leader_args); 

            if( $leaders ): 

                foreach( $leaders as $leader_index => $leader_item ):  ?>

                        <div class="col-md-12 col-24 l-<?php echo $leader_index+1; ?>">
                            <div class="leader-item">
                                <div class="leader-item__img">
                                    <picture>
                                        <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($leader_item->ID,array(160, 35 ) ); ?>"/>
                                        <source srcset="<?php echo get_the_post_thumbnail_url($leader_item->ID,array( 160, 35 )); ?>" type="image/webp" />
                                        <?php echo wp_get_attachment_image(get_post_thumbnail_id($leader_item->ID), array( 160, 35 )); ?>
                                    </picture>
                                </div>
                                <p>
                                    <?php echo get_the_title($leader_item->ID); ?>
                                </p>
                            </div>
                        </div>

                <?php endforeach; wp_reset_postdata(); ?>
        
            <?php endif;  ?>
        </div>
    </div>
</div>
