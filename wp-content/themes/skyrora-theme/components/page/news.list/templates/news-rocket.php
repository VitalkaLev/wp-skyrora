<section id="section-<?php echo get_row_index(); ?>" class="section news js-viewport-checker checker-visible news--rocket">
    <div class="container">
        <h2>
            <?php echo get_sub_field('acf_others_news_title_section')  ?>
        </h2> 
        <div class="row news__row">

            <?php $product_post_ids = get_sub_field('acf_others_news_list');

            $product_post_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post__in'       =>  $product_post_ids,
                'orderby'        => 'post__in', 
                'order' => 'ASC',
                'orderby' => 'date', 
                'post_status' => 'publish',
            );

            $product_posts = get_posts($product_post_args); 

            if( $product_posts ): ?>
            <?php foreach( $product_posts as $product ): 
                 $product_id = $product->ID;
                 $product_image_id = get_post_thumbnail_id( $product_id );
                  ?>
                <div class="col-lg-8 col-md-12 col-24">
                    <?php if( get_field('ac_post_advanced_link_choice', $product_id ) == 'yes' ){ ?>
                        <a href="<?php echo get_field('ac_post_advanced_link', $product_id)  ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $product_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                    <?php } else { ?>
                        <a href="<?php echo get_the_permalink($product_id); ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $product_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                    <?php } ?> 
                        <div class="news-item__picture">
                            <div class="h-object-fit">
                                <?php skyrora_image($product_image_id,178, 274, ); ?>
                            </div>
                        </div>
                        <div class="news-item__info">
                            <div class="news-item__info-top">
                                <?php 

                                    $tags = get_the_tags($product_id);

                                    if( !empty($tags) ){
                                        foreach( $tags as $tag ){
                                            echo '<span>#' . $tag->name . '</span>';
                                        }
                                    }

                                ?>
                            </div>
                            <div class="news-item__info-main">
                                <h4>
                                    <?php echo get_the_title($product_id); ?>
                                </h4>
                                <time datetime="<?php echo get_the_date('Y-m-d' , $product_id); ?>">
                                    <?php echo get_the_date('d.m.Y' , $product_id); ?>
                                </time>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>