


<?php if( wp_is_mobile() ){ ?>

    <section id="section-<?php echo get_row_index(); ?>" class="section products products--mobile">
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
                        'order'          => 'ASC',
                        'post_status'    => 'publish',
                        'post__in'       =>  $product_ids,
                        'orderby'        => 'post__in',
                    );
                    
                    $products = get_posts($product_args); 
        
                    if( $products ): ?>
                    
                        <?php foreach( $products as $product_index => $product ):  ?>
                            <?php if( $product_index < 5 ){ ?>
                                <a href="<?php the_permalink($product->ID); ?>" class="js-product product">
                                    <div class="product__info">
                                        <div class="product__info-top">
                                            <h4>
                                                <?php echo get_the_title($product->ID); ?>
                                            </h4>
                                            <p>
                                                <?php echo get_field('acf_product_short_content', $product->ID); ?>
                                            </p>
                                        </div>
                                        <div class="product__info-read">
                                            <span>Read more</span>
                                            <svg width="1em" h="eight1em" class="icon icon-arrow-right ">
                                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product__picture">
                                        <picture>
                                            <?php if( get_field('acf_product_hover', $product->ID) ){ ?>
                                                <video class="product__video lazy" autoplay muted loop decoding="async">
                                                    <source src="<?php echo esc_url(get_field('acf_product_hover', $product->ID)); ?>" type="video/webm">
                                                </video>
                                            <?php } ?>
                                            <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product->ID),array( 128, 656) ); ?>"/>
                                            <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product->ID),array( 128, 656)); ?>" type="image/webp" />
                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($product->ID), array( 128, 656)); ?>
                                        </picture>
                                    </div>
                                </a>
                            <?php } else { ?>
                                <a href="<?php the_permalink($product->ID); ?>" class="product--horizontal product">
                                    <div class="product__info">
                                        <div class="product__info-top">
                                            <h4>
                                                <?php echo get_the_title($product->ID); ?>
                                            </h4>
                                            <p>
                                                <?php echo get_field('acf_product_short_content', $product->ID); ?>
                                            </p>
                                        </div>
                                        <div class="product__info-read">
                                            <span>Read more</span>
                                            <svg width="1em" h="eight1em" class="icon icon-arrow-right ">
                                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product__picture">
                                        <picture>
                                            <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product->ID),array( 220, 220) ); ?>"/>
                                            <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product->ID),array( 220, 220)); ?>" type="image/webp" />
                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($product->ID), array( 220, 220)); ?>
                                        </picture>
                                    </div>
                                </a>
                            <?php } ?>

                            

                        <?php endforeach; wp_reset_postdata(); ?>
                    
                    <?php endif; ?>
                
                </div>
            </div>
        </div>
    </section>

<?php } else { ?>

    <section id="section-<?php echo get_row_index(); ?>" class="section products">
        <div class="container">
            <div class="section-top">
                <h2>
                    <?php echo get_sub_field('acf_others_product_title'); ?>
                </h2>
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
        
                    if( $products ): ?>
                    
                        <?php foreach( $products as $product_index => $product ):  ?>
                            <?php if( $product_index < 5 ){ ?>
                                <a href="<?php the_permalink($product->ID); ?>" class="js-product product">
                                    <div class="product__info">
                                        <div class="product__info-top">
                                            <h4>
                                                <?php echo get_the_title($product->ID); ?>
                                            </h4>
                                            <p>
                                                <?php echo get_field('acf_product_short_content', $product->ID); ?>
                                            </p>
                                        </div>
                                        <div class="product__info-read">
                                            <span>Read more</span>
                                            <svg width="1em" h="eight1em" class="icon icon-arrow-right ">
                                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product__picture">
                                        <?php if( get_field('acf_product_gallery', $product->ID) ){ ?>
                                            <div data-imgSrc="<?=THEME?>/dist/s/images/useful/rotatedProducts/<?php the_field('acf_product_gallery_prefix', $product->ID); ?>/{frame}.png" 
                                            data-spinAmount="<?php echo get_field('acf_product_gallery_count', $product->ID); ?>" class="spritespin"></div>
                                        <?php } ?>
                                        <picture>
                                            <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product->ID),array( 128, 656) ); ?>"/>
                                            <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product->ID),array( 128, 656)); ?>" type="image/webp" />
                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($product->ID), array( 128, 656)); ?>
                                        </picture>
                                    </div>
                                </a>
                            <?php } else { ?>
                                <a href="<?php the_permalink($product->ID); ?>" class="product--horizontal product">
                                    <div class="product__info">
                                        <div class="product__info-top">
                                            <h4>
                                                <?php echo get_the_title($product->ID); ?>
                                            </h4>
                                            <p>
                                                <?php echo get_field('acf_product_short_content', $product->ID); ?>
                                            </p>
                                        </div>
                                        <div class="product__info-read">
                                            <span>Read more</span>
                                            <svg width="1em" h="eight1em" class="icon icon-arrow-right ">
                                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product__picture">
                                        <?php if( get_field('acf_product_gallery', $product->ID) ){ ?>
                                            <div data-imgSrc="<?=THEME?>/dist/s/images/useful/rotatedProducts/<?php the_field('acf_product_gallery_prefix', $product->ID); ?>/{frame}.png" 
                                            data-spinAmount="<?php echo get_field('acf_product_gallery_count', $product->ID); ?>" class="spritespin"></div>
                                        <?php } ?>
                                        <picture>
                                            <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product->ID),array( 220, 220) ); ?>"/>
                                            <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product->ID),array( 220, 220)); ?>" type="image/webp" />
                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($product->ID), array( 220, 220)); ?>
                                        </picture>
                                    </div>
                                </a>
                            <?php } ?>

                            

                        <?php endforeach; wp_reset_postdata(); ?>
                    
                    <?php endif; ?>
                
                </div>
            </div>
        </div>
    </section>

<?php } ?>