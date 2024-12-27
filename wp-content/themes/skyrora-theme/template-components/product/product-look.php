<div id="section-<?php echo get_row_index(); ?>" class="constructor-title">
    <h2 class="title-visible">Look other products</h2>
    <a href="<?=HOME?>/products" class="link-line">
        <span>Open all products</span>
        <svg width="1em" height="1em" class="icon icon-arrow-right ">
            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
        </svg>
    </a>
</div>

<div class="container recommended-block">
    <div class="row">
        <?php $look_product_ids = get_sub_field('acf_product_look_other', false , false);

            $look_product_args = array(
                'post_type' => 'product',
                'posts_per_page' => 3,
                'post__in' => $look_product_ids,
                'orderby'  => 'post__in',
            );

            $look_products = get_posts($look_product_args); 

            if( $look_products ): ?>
            <?php foreach( $look_products as $look_product ):  ?>
                <div class="col-lg-8 col-md-12">
                    <a href="<?php the_permalink($look_product->ID); ?>" class="js-product product">
                        <div class="product__info">
                            <div class="product__info-top">
                                <h4>
                                    <?php echo get_the_title($look_product->ID); ?>
                                </h4>
                                <p>
                                    <?php echo get_field('acf_product_short_content', $look_product->ID); ?>
                                </p>
                            </div>
                            <div class="product__info-read"><span>Read more</span>
                                <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                </svg>
                            </div>
                        </div>
                            
                            <picture>
                                <?php if( get_field('acf_product_hover', $look_product->ID) ){ ?>
                                    <video class="product__video lazy" autoplay muted loop decoding="async">
                                        <source src="<?php echo esc_url(get_field('acf_product_hover', $look_product->ID)); ?>" type="video/webm">
                                    </video>
                                <?php } ?>
                                <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($look_product->ID,array( 220, 220) ); ?>"/>
                                <source srcset="<?php echo get_the_post_thumbnail_url($look_product->ID,array( 220, 220)); ?>" type="image/webp" />
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($look_product->ID), array( 220, 220)); ?>
                            </picture>
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