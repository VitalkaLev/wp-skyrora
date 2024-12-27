<div id="section-<?php echo get_row_index(); ?>" class="constructor-title">
    <h2>Look other products</h2>
    <a href="<?=HOME?>/products" class="link-line">
        <span>Open all products</span>
        <svg width="1em" height="1em" class="icon icon-arrow-right ">
            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
        </svg>
    </a>
</div>

<div class="container recommended-block">
    <div class="row">
        <?php 
        
            $look_product_ids = get_sub_field('acf_product_look_other', false , false);

            $look_product_args = array(
                'post_type' => 'product',
                'posts_per_page' => 3,
                'post__in' => $look_product_ids,
                'orderby'  => 'post__in',
            );

            $look_products = get_posts($look_product_args); 

            if( $look_products ): ?>
            <?php foreach( $look_products as $look_product ):
                 $product_id = $look_product->ID;
                 $product_image_id = get_post_thumbnail_id( $product_id );  ?>

                <div class="col-lg-8 col-md-12">
                    <a href="<?php the_permalink($product_id); ?>" class="js-product product">
                        <div class="product__info">
                            <div class="product__info-top">
                                <?php if( get_the_title($product_id) ){ ?>
                                    <h4>
                                        <?php echo get_the_title($product_id); ?>
                                    </h4>
                                <?php } ?>
                                
                                <?php if( get_field('acf_product_short_content', $product_id) ){ ?>
                                    <p>
                                        <?php echo get_field('acf_product_short_content', $product_id); ?>
                                    </p>
                                <?php } ?>
                            </div>
                            <div class="product__info-read"><span>Read more</span>
                                <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="product__picture">
                            <?php skyrora_image($product_image_id, 220, 220, ); ?>
                        </div>
                    </a>

                </div>
                <?php endforeach; wp_reset_postdata(); ?>
                
                <?php endif; ?>
            
        
    </div>
    <div class="constructor-mobile-link">
        <a href="<?=HOME?>/products" class="link-line">
            <span>Open all products</span>
            <svg width="1em" height="1em" class="icon icon-arrow-right ">
                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
            </svg>
        </a>
    </div>
</div>