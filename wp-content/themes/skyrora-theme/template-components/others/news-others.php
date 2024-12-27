<section id="section-<?php echo get_row_index(); ?>" class="section news js-viewport-checker invisible">
        <div class="container">
            <div class="news__top">
                <h2>
                    <?php echo get_sub_field('acf_others_news_section_title'); ?>
                </h2>
            </div>
            <div class="news__collage">
                <div class="row news__row">
                <?php $news_others_ids = get_sub_field('acf_others_news_relationship');

                    $news_others_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'order' => 'DESC',
                        'post__in' => $news_others_ids,
                        'orderby'  => 'post__in',
                    );

                    $news = get_posts($news_others_args); 

                    if( $news ): ?>

                        <?php foreach( $news as $news_others_index => $news_others_item ):  ?>

                            <?php if( $news_others_index < 1 ){ ?>

                                <div class="col-lg-16 col-md-12 col-24">
                                    <a href="<?php echo get_the_permalink($news_others_item->ID); ?>" class="news-banner">
                                        <div class="news-banner__picture">
                                            <div class="h-object-fit">
                                                <picture>
                                                    <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_others_item->ID),array( 780, 440 )); ?>" type="image/webp" />

                                                    <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_others_item->ID),array( 780, 440 ) ); ?>"/>

                                                    <?php echo wp_get_attachment_image(get_post_thumbnail_id($news_others_item->ID), array( 780, 440 )); ?>
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="news-banner__info">
                                            <div class="news-banner__info-top">
                                                <span># 
                                                    <?php
                                                        $categories = get_the_category($news_others_item->ID);
                                                        // var_dump($tags);
                                                        if ($categories){
                                                            foreach( $categories as $category ) {
                                                                // $first_child = $category[0];
                                                                echo $category->name;
                                                            }
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="news-banner__info-main">
                                                <h4>
                                                    <?php echo get_the_title($news_others_item->ID); ?>
                                                </h4>
                                                <time datetime="<?php echo get_the_date('Y-m-d' , $news_others_item->ID); ?>">
                                                    <?php echo get_the_date('d.m.Y' , $news_others_item->ID); ?>
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <?php } elseif( $news_others_index == 1 ){ ?>

                                    <div class="col-lg-8 col-md-12 col-24">
                                        <a href="<?php echo get_the_permalink($news_others_item->ID); ?>" class="news-banner">
                                            <div class="news-banner__picture">
                                                <div class="h-object-fit">
                                                    <picture>
                                                        <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_others_item->ID),array( 380, 440 )); ?>" type="image/webp" />

                                                        <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_others_item->ID),array( 380, 440 ) ); ?>"/>

                                                        <?php echo wp_get_attachment_image(get_post_thumbnail_id($news_others_item->ID), array( 380, 440 )); ?>
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="news-banner__info">
                                                <div class="news-banner__info-top">
                                                    <span># 
                                                        <?php
                                                            $categories = get_the_category($news_others_item->ID);
                                                            // var_dump($tags);
                                                            if ($categories){
                                                                foreach( $categories as $category ) {
                                                                    // $first_child = $category[0];
                                                                    echo $category->name;
                                                                }
                                                            }
                                                        ?>
                                                    </span>
                                                    
                                                </div>
                                                <div class="news-banner__info-main">
                                                    <h4>
                                                        <?php echo get_the_title($news_others_item->ID); ?>
                                                    </h4>
                                                    <time datetime="<?php echo get_the_date('Y-m-d' , $news_others_item->ID); ?>">
                                                        <?php echo get_the_date('d.m.Y' , $news_others_item->ID); ?>
                                                    </time>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                  
                            <?php } else { ?>

                                <div class="col-lg-8 col-md-12 col-24">
                                <a href="<?php echo get_the_permalink($news_others_item->ID); ?>" class="news-item">
                                        <div class="news-item__picture">
                                            <div class="h-object-fit">
                                                <picture>
                                                    <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_others_item->ID),array(  280, 336  )); ?>" type="image/webp" />

                                                    <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_others_item->ID),array(  280, 336 ) ); ?>"/>

                                                    <?php echo wp_get_attachment_image(get_post_thumbnail_id($news_others_item->ID), array( 280, 336 )); ?>
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="news-item__info">
                                            <div class="news-item__info-top">
                                                <span># 
                                                    <?php
                                                        $categories = get_the_category($news_others_item->ID);
                                                        // var_dump($tags);
                                                        if ($categories){
                                                            foreach( $categories as $category ) {
                                                                // $first_child = $category[0];
                                                                echo $category->name;
                                                            }
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="news-item__info-main">
                                                <h4>
                                                    <?php echo get_the_title($news_others_item->ID); ?>
                                                </h4>
                                                <time datetime="<?php echo get_the_date('Y-m-d' , $news_others_item->ID); ?>">
                                                    <?php echo get_the_date('d.m.Y' , $news_others_item->ID); ?>
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            <?php } ?>

                        <?php endforeach; wp_reset_postdata(); ?>
                
                    <?php endif;  ?>
                        
                </div>
            </div>
           
        </div>
    </section>