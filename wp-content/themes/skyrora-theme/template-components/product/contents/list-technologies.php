<div id="section-<?php echo get_row_index(); ?>" class="container">
        
        <div class="technologies__content">
            
            <?php $technologies_ids = get_sub_field('acf_product_list_technologies');

            $technologies_args = array(
                'post_type' => 'technology',
                'posts_per_page' => -1,
                'post__in' => $technologies_ids,
                'orderby'  => 'post__in',
            );

            $technologies = get_posts($technologies_args); 

            if( $technologies ): ?>

                <?php foreach( $technologies as $technology ):  ?>

                    <a href="<?php the_permalink($technology->ID); ?>" class="info-item">
                        <div class="info-item__info">
                            <div class="info-item__info-content">
                                <div class="info-item__info-content-top">
                                    <span>
                                        <?php echo get_field('acf_technology_subtitle', $technology->ID); ?>
                                    </span>
                                    <h3>
                                        <?php echo get_the_title($technology->ID); ?>
                                    </h3>
                                </div>
                                <div class="info-item__info-content-bottom">
                                    <p>
                                        <?php echo get_field('acf_technology_short_content', $technology->ID); ?>
                                    </p>
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
                            <picture>
                                <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($technology->ID,array( 560, 580 ) ); ?>"/>
                                <source srcset="<?php echo get_the_post_thumbnail_url($technology->ID,array( 560, 580 )); ?>" type="image/webp" />
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($technology->ID), array( 560, 580 )); ?>
                            </picture>
                        </div>
                    </a>

                <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
