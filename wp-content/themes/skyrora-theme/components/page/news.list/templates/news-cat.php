
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
                
                <a href="<?=HOME?>/blog/category/<?php echo $cat_link; ?>" class="link-line">
                    <span>Open all news</span>
                    <svg width="1em" height="1em" class="icon icon-arrow-right ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                    </svg>
                </a>
            </div>
            <div class="news__collage">
              <div class="row">

                <?php $news_cat_ids = get_field('acf_others_cat_news_list');

                $news_cat_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'cat' => $cat_id ,
                    'order' => 'DESC',
                    'orderby' => 'date', 
                    'post_status' => 'publish',
                );

                $news_cat_index = -1;
                $news_cat_item = new WP_Query($news_cat_args); 

            if( $news_cat_item->have_posts() ): ?>

                <?php while ( $news_cat_item->have_posts() ) : 
                $news_cat_item->the_post(); 
                $news_cat_index++;
                $news_id = $news_cat_item->ID ;
                $news_image_id = get_post_thumbnail_id( $news_id );

                         if( $news_cat_index < 2 ){ ?>

                            <div class="col-lg-12 col-md-12 col-24">
                                
                                <?php if( get_field('ac_post_advanced_link_choice', $news_id  ) == 'yes' ){ ?>
                                        <a href="<?php echo get_field('ac_post_advanced_link', $news_item->ID)  ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $news_id ) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                    <?php } else { ?>
                                        <a href="<?php echo get_the_permalink($news_id ); ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $news_id ) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                    <?php } ?> 
                                    <div class="news-banner__picture">
                                        <div class="h-object-fit">
                                            <?php skyrora_image($news_image_id, 512, 512, ); ?>
                                        </div>
                                    </div>
                                    <div class="news-banner__info">
                                        <div class="news-banner__info-top">
                                            
                                                <?php 

                                                    $tags = get_the_tags($news_id );

                                                    if( !empty($tags) ){
                                                        foreach( $tags as $tag ){
                                                            echo '<span>#' . $tag->name . '</span>';
                                                        }
                                                    }

                                                ?>
                                            
                                        </div>
                                        <div class="news-banner__info-main">
                                            <h4>
                                                <?php echo get_the_title($news_id ); ?>
                                            </h4>
                                            <time datetime="<?php echo get_the_date('Y-m-d' , $news_id ); ?>">
                                                <?php echo get_the_date('d.m.Y' , $news_id ); ?>
                                            </time>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php } else { ?>

                            <div class="col-lg-8 col-md-12 col-24">
                                
                                <?php if( get_field('ac_post_advanced_link_choice', $news_id  ) == 'yes' ){ ?>
                                    <a href="<?php echo get_field('ac_post_advanced_link', $news_id )  ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $news_id ) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                <?php } else { ?>
                                    <a href="<?php echo get_the_permalink($news_id ); ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $news_id ) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                <?php } ?> 

                                    <div class="news-item__picture">
                                        <div class="h-object-fit">
                                            <?php skyrora_image($news_image_id, 280, 336, ); ?>
                                        </div>
                                    </div>
                                    <div class="news-item__info">
                                        <div class="news-item__info-top">
                                            <?php 

                                                $tags = get_the_tags($news_id );

                                                if( !empty($tags) ){
                                                    foreach( $tags as $tag ){
                                                        echo '<span>#' . $tag->name . '</span>';
                                                    }
                                                }
                                                
                                            ?>
                                        </div>
                                        <div class="news-item__info-main">
                                            <h4>
                                                <?php echo get_the_title($news_id ); ?>
                                            </h4>
                                            <time datetime="<?php echo get_the_date('Y-m-d' , $news_id ); ?>">
                                                <?php echo get_the_date('d.m.Y' , $news_id ); ?>
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
                <a href="<?=HOME?>/blog/category/<?php echo $cat_link; ?>" class="link-line">
                    <span>Open all news</span>
                    <svg width="1em" height="1em" class="icon icon-arrow-right ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                    </svg>
                </a>
            </div>
        </div>
</section>