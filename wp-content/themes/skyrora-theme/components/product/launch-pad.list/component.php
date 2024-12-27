
<div id="section-<?php echo get_row_index(); ?>" class="container launch-block">
    <div class="row">

        <?php $pad_ids = get_sub_field('acf_product_contents_content_list_launch_pad', false , false );

        $pad_args = array(
            'post_type' => 'stage',
            'posts_per_page' => -1,
            'post__in' => $pad_ids,
            'orderby'  => 'post__in',
        );

        $pads = get_posts($pad_args); 

        if( $pads ): ?>

            <?php foreach( $pads as $pad ):  ?>
                <div class="col-md-12">   
                    <a href="javascript: void(0)" rel="nofollow" class="product--horizontal product--column-mobile product--large-picture product">
                        <div class="product__info">
                            <div class="product__info-top">

                                <?php if( get_the_title($pad->ID) ){ ?>
                                    <h4>
                                        <?php echo get_the_title($pad->ID); ?>
                                    </h4>
                                <?php } ?>
                                
                                <?php if( get_field('acf_product_short_content', $pad->ID) ){ ?>
                                    <p>
                                        <?php echo get_field('acf_product_short_content', $pad->ID); ?>
                                    </p>
                                <?php } ?>
                                
                            </div>
                        </div>
                        <div class="product__picture">
                            <picture>
                                <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($pad->ID),array( 178, 274 ) ); ?>"/>
                                <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($pad->ID),array( 178, 274 )); ?>" type="image/webp" />
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($pad->ID), array( 178, 274 )); ?>
                            </picture>
                        </div>
                    </a>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>

        <?php endif; ?>

    </div>
</div>