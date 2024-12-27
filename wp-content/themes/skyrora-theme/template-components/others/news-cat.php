
<?php 
    $cat = get_sub_field('acf_others_cat_news_category'); 
    $cat_link = $cat->slug;
    $cat_name = $cat->name;
    $cat_id = $cat->term_id;
?>

<section id="section-<?php echo get_row_index(); ?>"  class="section news js-viewport-checker invisible">
        <div class="container">
            <div class="news__top">
                
                <h2>
                    <?php echo $cat_name; ?>
                </h2>
                
                <a href="<?=HOME?>/category/<?php echo $cat_link; ?>/" class="link-line">
                    <span>Open all news</span>
                    <svg width="1em" height="1em" class="icon icon-arrow-right ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                    </svg>
                </a>
            </div>
            <div class="news__collage">
              <div class="row news__row">

                <?php $news_cat_ids = get_field('acf_others_cat_news_list');

                $news_cat_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'order' => 'DESC',
                    'cat' => $cat_id ,
                    'post_type' => 'post',
                    'orderby' => 'date', 
                    'post_status' => 'publish',
                );

                $news_cat_index = -1;
                $news_cat_item = new WP_Query($news_cat_args); 

            if( $news_cat_item->have_posts() ): ?>

                <?php while ( $news_cat_item->have_posts() ) : $news_cat_item->the_post(); $news_cat_index++;

                         if( $news_cat_index < 2 ){ ?>

                            <div class="col-lg-12 col-md-12 col-24">
                                
                                <a href="<?php echo get_the_permalink($news_cat_item->ID); ?>" class="news-banner">
                                    <div class="news-banner__picture">
                                        <div class="h-object-fit">
                                            <picture>
                                                <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_cat_item->ID),array(  512, 512  )); ?>" type="image/webp" />
                                                <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_cat_item->ID),array(  512, 512 ) ); ?>"/>
                                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($news_cat_item->ID), array( 512, 512 )); ?>
                                            </picture>
                                        </div>
                                    </div>
                                    <div class="news-banner__info">
                                        <div class="news-banner__info-top">
                                            <span># 
                                                <?php
                                                    $categories = get_the_category($news_cat_item->ID);
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
                                                <?php echo get_the_title($news_cat_item->ID); ?>
                                            </h4>
                                            <time>
                                                <?php echo get_the_date('d.m.Y' , $news_cat_item->ID); ?>
                                            </time>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php } else { ?>

                            <div class="col-lg-8 col-md-12 col-24">
                                <a href="<?php echo get_the_permalink($news_cat_item->ID); ?>" class="news-item">
                                    <div class="news-item__picture">
                                        <div class="h-object-fit">
                                            <picture>
                                                <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_cat_item->ID),array(  280, 336  )); ?>" type="image/webp" />
                                                <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($news_cat_item->ID),array(  280, 336 ) ); ?>"/>
                                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($news_cat_item->ID), array( 280, 336 )); ?>
                                            </picture>
                                        </div>
                                    </div>
                                    <div class="news-item__info">
                                        <div class="news-item__info-top">
                                            <span># 
                                                <?php
                                                    $categories = get_the_category($news_cat_item->ID);
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
                                                <?php echo get_the_title($news_cat_item->ID); ?>
                                            </h4>
                                            <time>
                                                <?php echo get_the_date('d.m.Y' , $news_cat_item->ID); ?>
                                            </time>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php } 

                endwhile; wp_reset_postdata(); ?>
                            
                <?php endif;  ?>

              </div>
            </div>
            <div class="news__mobile-line">
                <a href="<?php echo $cat_link; ?>" class="link-line">
                    <span>Open all news</span>
                    <svg width="1em" height="1em" class="icon icon-arrow-right ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                    </svg>
                </a>
            </div>
        </div>
</section>