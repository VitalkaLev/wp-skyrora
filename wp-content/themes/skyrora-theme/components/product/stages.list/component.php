<div id="section-<?php echo get_row_index(); ?>" class="container stages-collage">
    <div class="grid-container grid-container--type2">
        <?php 

        $stage_ids = get_sub_field('acf_product_contents_content_list_stages', false , false );

        $stage_args = array(
            'post_type' => 'stage',
            'posts_per_page' => 3,
            'order'          => 'ASC',
            'post_status'    => 'publish',
            'post__in'       =>  $stage_ids,
            'orderby'        => 'post__in',
        );

        $stages = get_posts($stage_args); 

        if( $stages ): ?>
            <?php foreach( $stages as $stage ): 
                $stage_id = $stage->ID; ?>
                <div class="product--horizontal product--column-mobile product">
                    <div class="product__info">
                        <div class="product__info-top">
                        
                            <?php if( get_the_title($stage_id) ){ ?>
                                <h4>
                                    <?php echo get_the_title($stage_id); ?>
                                </h4>
                            <?php } ?>
                            
                            <?php if( get_field('acf_product_short_content', $stage_id) ){ ?>
                                <p>
                                    <?php echo get_field('acf_product_short_content', $stage_id); ?>
                                </p>
                            <?php } ?>
                            
                        </div>
                    </div>
                    <div class="product__picture">
                        <picture class="h-object-fit">
                            <?php skyrora_image(get_post_thumbnail_id($stage_id), 512, 512, ); ?>
                        </picture>
                    </div>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>