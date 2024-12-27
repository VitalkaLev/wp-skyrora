<section id="section-<?php echo get_row_index(); ?>" class="section news js-viewport-checker checker-visible">
    <div class="container">
        <h2>
            <?php echo get_sub_field('acf_others_news_title_section')  ?>
        </h2> 
        <div class="row news__row">

            <?php $product_post_ids = get_sub_field('acf_others_news_list');

            $product_post_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order'          => 'DESC',
                'post_status'    => 'publish',
                'post__in'       =>  $product_post_ids,
                'orderby'        => 'post__in', 
            );

            $product_posts = get_posts($product_post_args); 

            if( $product_posts ): ?>
            <?php foreach( $product_posts as $product_post ):  ?>
                <div class="col-lg-8 col-md-12 col-24">
                    <a href="<?php the_permalink($product_post->ID); ?>" class="news-item">
                        <div class="news-item__picture">
                            <div class="h-object-fit">
                                <picture>
                                    <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product_post->ID),array( 178, 274 ) ); ?>"/>
                                    <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($product_post->ID),array( 178, 274 )); ?>" type="image/webp" />
                                    <?php echo wp_get_attachment_image(get_post_thumbnail_id($product_post->ID), array( 178, 274 )); ?>
                                </picture>
                            </div>
                        </div>
                        <div class="news-item__info">
                            <div class="news-item__info-top">
                                <span>
                                    <?php
                                        $tags = get_the_tags($product_post->ID);
                                        if ($tags){
                                                $first_child = $tags[0];
                                                echo $first_child->name;
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="news-item__info-main">
                                <h4>
                                    <?php echo get_the_title($product_post->ID); ?>
                                </h4>
                                <time>
                                    <?php echo get_the_date('d.m.Y' , $product_post->ID); ?>
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