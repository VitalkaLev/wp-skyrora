<section id="section-<?php echo get_row_index(); ?>" class="section technologies">
    <div class="container">
        <div class="section-top">
            <h1 class="h2">
                <?php echo get_sub_field('acf_others_product_title') ?>
            </h1>

            <?php if( get_sub_field('acf_others_product_short_content') ){ ?>
                <div class="section-top__txt js-collapse">
                    <p>
                        <?php echo get_sub_field('acf_others_product_short_content');  ?>
                    </p>
                    <div class="js-collapse-content">
                        <p>
                            <?php echo get_sub_field('acf_others_product_full_content');  ?>
                        </p>
                    </div>

                    <button type="button" class="link-line js-collapse-btn">
                        <span class="decor--show">read more</span>
                        <span class="decor--hide">Hide text</span>
                    </button>
                    
                </div>
            <?php } ?>
        </div>
        <div class="technologies__content">
            
            <?php $technologies_ids = get_sub_field('acf_others_list_technology',false , false);

            $technologies_args = array(
                'post_type' => 'technology',
                'posts_per_page' => -1,
                'post__in' => $technologies_ids,
                'orderby'  => 'post__in',
            );

            $technologies = get_posts($technologies_args); 

            if( $technologies ): ?>

                <?php foreach( $technologies as $technology ): 
                     $id = $technology->ID;
                     $image_id = get_post_thumbnail_id($id) ?>

                    <a href="<?php the_permalink($id); ?>" class="info-item">
                        <div class="info-item__info">
                            <div class="info-item__info-content">
                                <div class="info-item__info-content-top">
                                    <?php if( get_field('acf_technology_subtitle', $id) ){ ?>
                                        <span>
                                            <?php echo get_field('acf_technology_subtitle', $id); ?>
                                        </span>
                                    <?php } ?>
                                    
                                    <?php if( get_the_title($id) ){ ?>
                                        <h3>
                                            <?php echo get_the_title($id); ?>
                                        </h3>
                                    <?php } ?>
                                </div>
                                <div class="info-item__info-content-bottom">

                                    <?php if( get_field('acf_technology_short_content', $id) ){ ?>
                                        <p>
                                            <?php echo get_field('acf_technology_short_content', $id); ?>
                                        </p>
                                    <?php } ?>

                                    <div class="info-item__info-read">
                                        <span>Read more</span>
                                        <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-item__picture">
                            <picture class="h-object-fit">
                                <?php skyrora_image($image_id, 500, 500, ); ?>
                            </picture>
                        </div>
                    </a>

                <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>