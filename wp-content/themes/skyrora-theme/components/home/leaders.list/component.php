<section class="section leaders js-viewport-checker">
        <div class="container">
           
            <?php if( get_sub_field('acf_home_list_leader_title') ){ ?>

                <h2>
                    <?php echo get_sub_field('acf_home_list_leader_title');  ?>
                </h2>

            <?php } ?>

            <div class="leaders__content">
                <div class="row">
                    <?php $leader_ids = get_sub_field('acf_home_list_leaders');
                    $leader_args = array(
                        'post_type' => 'leader',
                        'posts_per_page' => 7,
                        'post__in' => $leader_ids,
                        'orderby'  => 'post__in',
                    );

                    $leaders = get_posts($leader_args); 

                        foreach( $leaders as $leader_index => $leader_item ):  ?>
                            
                            <?php if( $leader_index+1 <= 2 ){ ?>
                                <a 
                                href="<?php echo swipeks_leader_custom_link('acf_leader_radio_button', 'acf_leader_link_post', 'acf_leader_link_category', $leader_item->ID); ?>" 
                                class="col-md-12 col-24 l-<?php echo $leader_index+1; ?>">
                                    
                                    <div class="leader-item">
                                        <div class="leader-item__img">
                                            <picture>
                                                <source media="(min-width: 769px)"
                                                    srcset="<?php echo get_the_post_thumbnail_url($leader_item->ID,array(160, 35 ) ); ?>" />
                                                <source
                                                    srcset="<?php echo get_the_post_thumbnail_url($leader_item->ID,array( 160, 35 )); ?>"
                                                    type="image/webp" />
                                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($leader_item->ID), array( 160, 35 )); ?>
                                            </picture>
                                        </div>
                                        <?php if( get_the_title($leader_item->ID) ){ ?>

                                            <p>
                                                <?php echo get_the_title($leader_item->ID); ?>
                                            </p>

                                        <?php } ?>
                                    </div>
                                    
                                </a>

                            <?php } elseif( $leader_index+1 > 2 and $leader_index+1 <= 5 ){ ?>

                            <a 
                            href="<?php echo swipeks_leader_custom_link('acf_leader_radio_button', 'acf_leader_link_post', 'acf_leader_link_category', $leader_item->ID); ?>" 
                            class="col-md-8 col-24 2<?php echo $leader_index++; ?>">
                                <div class="leader-item">
                                    <div class="leader-item__img">
                                        <picture>
                                            <source media="(min-width: 769px)"
                                                srcset="<?php echo get_the_post_thumbnail_url($leader_item->ID,array(160, 35 ) ); ?>" />
                                            <source
                                                srcset="<?php echo get_the_post_thumbnail_url($leader_item->ID,array( 160, 35 )); ?>"
                                                type="image/webp" />
                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($leader_item->ID), array( 160, 35 )); ?>
                                        </picture>
                                    </div>
                                    <?php if( get_the_title($leader_item->ID) ){ ?>

                                        <p>
                                            <?php echo get_the_title($leader_item->ID); ?>
                                        </p>

                                    <?php } ?>
                                </div>
                            </a>

                            <?php } 
                                    elseif( $leader_index+1 >= 6 || $leader_index+1 <= 9 ){ ?>

                            <a 
                            href="<?php echo swipeks_leader_custom_link('acf_leader_radio_button', 'acf_leader_link_post', 'acf_leader_link_category', $leader_item->ID); ?>" 
                            class="col-md-12 col-24 <?php echo $leader_index++; ?>">
                                <div class="leader-item">
                                    <div class="leader-item__img">
                                        <picture>
                                            <source media="(min-width: 769px)"
                                                srcset="<?php echo get_the_post_thumbnail_url($leader_item->ID,array(160, 35 ) ); ?>" />
                                            <source
                                                srcset="<?php echo get_the_post_thumbnail_url($leader_item->ID,array( 160, 35 )); ?>"
                                                type="image/webp" />
                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($leader_item->ID), array( 160, 35 )); ?>
                                        </picture>
                                    </div>
                                    <?php if( get_the_title($leader_item->ID) ){ ?>

                                        <p>
                                            <?php echo get_the_title($leader_item->ID); ?>
                                        </p>

                                    <?php } ?>
                                </div>
                            </a>
                            <?php } ?>

                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>