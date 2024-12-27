
    <section id="section-<?php echo get_row_index(); ?>" class="section products products--desktop">
        <div class="container">
            <div class="section-top">
                <h1 class="h2">
                    <?php echo get_sub_field('acf_others_product_title'); ?>
                </h1>
                <div class="section-top__txt js-collapse">
                    <p>
                        <?php echo get_sub_field('acf_others_product_short_content')  ?>
                    </p>
                    <div class="js-collapse-content">
                        <?php echo get_sub_field('acf_others_product_full_content')  ?>
                    </div>
                    <button type="button" class="link-line js-collapse-btn">
                        <span class="decor--show">read more</span>
                        <span class="decor--hide">Hide text</span>
                    </button>
                </div>
            </div>
            <div class="products__collage">
                <div class="grid-container grid-container--type1">

                    <?php $product_ids = get_sub_field('acf_others_list_products');
                
                    $product_args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'post__in' => $product_ids,
                        'orderby'  => 'post__in',
                        'order'          => 'ASC',
                        'post_status'    => 'publish',
                    );
                    
                    $products = get_posts($product_args); 
        
                    if( $products ): 
                    
                        foreach( $products as $product_index => $product ): 
                            $product_id = $product->ID;
                            $product_image_id = get_post_thumbnail_id( $product_id );

                            if( $product_index == 0){ ?>
                                <a href="<?php the_permalink($product->ID); ?>" class="js-product product product--first">
                                    <div class="product__info">
                                        <div class="product__info-top">
                                            <?php if( get_the_title($product->ID) ){ ?>
                                                <h4>
                                                    <?php echo get_the_title($product->ID); ?>
                                                </h4>
                                            <?php } ?>

                                            <?php if( get_field('acf_product_short_content', $product->ID) ){ ?>
                                                <p>
                                                    <?php echo get_field('acf_product_short_content', $product->ID); ?>
                                                </p>
                                            <?php } ?>
                                        </div>
                                        <div class="product__info-read">
                                            <span>Read more</span>
                                            <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product__picture">
                                        <?php if( get_field('acf_product_hover', $product_id) ){ ?>
                                            <video class="product__video" loop="loop" muted="muted" loading="lazy" decoding="async" poster="<?php skyrora_image_url($product_image_id, 150, 880, ); ?>">
                                                <source src="<?php echo esc_url(get_field('acf_product_hover', $product_id)); ?>" type="video/webm">
                                                <source src="<?php echo esc_url(get_field('acf_product_hover_safary', $product_id)); ?>" type="video/quicktime">
                                            </video>
                                        <?php } ?>
                                    </div>
                                </a>
                            <?php } 

                            elseif( $product_index > 0 && $product_index < 5 ){ ?>
                                <a href="<?php the_permalink($product->ID); ?>" class="js-product product product--second">
                                    <div class="product__info">
                                        <div class="product__info-top">
                                            <?php if( get_the_title($product->ID) ){ ?>
                                                <h4>
                                                    <?php echo get_the_title($product->ID); ?>
                                                </h4>
                                            <?php } ?>

                                            <?php if( get_field('acf_product_short_content', $product->ID) ){ ?>
                                                <p>
                                                    <?php echo get_field('acf_product_short_content', $product->ID); ?>
                                                </p>
                                            <?php } ?>
                                        </div>
                                        <div class="product__info-read">
                                            <span>Read more</span>
                                            <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product__picture">
                                        <?php if( get_field('acf_product_hover', $product_id) ){ ?>
                                            <video class="product__video" muted="muted" loop="loop" loading="lazy" decoding="async" poster="<?php skyrora_image_url($product_image_id, 130, 394, ); ?>">
                                                <source src="<?php echo esc_url(get_field('acf_product_hover', $product_id)); ?>" type="video/webm">
                                                <source src="<?php echo esc_url(get_field('acf_product_hover_safary', $product_id)); ?>" type="video/quicktime">
                                            </video>
                                        <?php } ?>
                                    </div>
                                </a>
                            <?php }

                            else { ?>
                                <a href="<?php the_permalink($product->ID); ?>" class="product--horizontal product product--last">
                                    <div class="product__info">
                                        <div class="product__info-top">

                                            <?php if( get_the_title($product->ID) ){ ?>
                                                <h4>
                                                    <?php echo get_the_title($product->ID); ?>
                                                </h4>
                                            <?php } ?>

                                            <?php if( get_field('acf_product_short_content', $product->ID) ){ ?>
                                                <p>
                                                    <?php echo get_field('acf_product_short_content', $product->ID); ?>
                                                </p>
                                            <?php } ?>

                                        </div>
                                        <div class="product__info-read">
                                            <span>Read more</span>
                                            <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product__picture">
                                        <?php skyrora_image($product_image_id, 180, 220, ); ?>
                                    </div>
                                </a>
                            <?php } 

                        endforeach; wp_reset_postdata(); 
                    
                    endif; ?>
                
                </div>
            </div>
        </div>
    </section>

