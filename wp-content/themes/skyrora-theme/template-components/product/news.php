<section id="section-<?php echo get_row_index(); ?>" class="section news js-viewport-checker checker-visible">
    <div class="container">
        <h2>
            <?php echo get_sub_field('acf_product_news_title_section')  ?>
        </h2> 
        <div class="row news__row">

            <?php $product_post_ids = get_sub_field('acf_news_product_list');

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
            <?php foreach( $product_posts as $product_post ):  
                $id = $product_post->ID;
                $image_id = get_post_thumbnail_id($id)
                ?>
                <div class="col-lg-8 col-md-12 col-24">
                    <?php if( get_field('ac_post_advanced_link_choice', $id ) == 'yes' ){ ?>
                        <a href="<?php echo get_field('ac_post_advanced_link', $id)  ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                    <?php } else { ?>
                        <a href="<?php echo get_the_permalink($id); ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                    <?php } ?> 
                        <div class="news-item__picture">
                            <picture class="h-object-fit">
                                <?php skyrora_image($image_id, 380, 235, ); ?>
                            </picture>
                        </div>
                        <div class="news-item__info">
                            <div class="news-item__info-top">
                                <span>
                                    <?php
                                        $tags = get_the_tags($id);
                                        if ($tags){
                                                $first_child = $tags[0];
                                                echo $first_child->name;
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="news-item__info-main">
                                <h4>
                                    <?php echo get_the_title($id); ?>
                                </h4>
                                <time>
                                    <?php echo get_the_date('d.m.Y' , $id); ?>
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