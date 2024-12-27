<section id="section-<?php echo get_row_index(); ?>" class="section news js-viewport-checker invisible">
        <div class="container">
            <div class="news__top">
                <h1 class="h2" style="color:black;">
                    <?php echo get_sub_field('acf_others_news_section_title'); ?>
                </h1>
            </div>
            <div class="news__collage">
                <div class="row news__row">
                <?php 
                
                    $news_others_ids = get_sub_field('acf_others_news_relationship');

                    $news_others_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'post__in' => $news_others_ids,
                        'orderby'  => 'post__in',
                        'order' => 'ASC',
                        'orderby' => 'date', 
                        'post_status' => 'publish',
                    );

                    $news = get_posts($news_others_args); 

                    if( $news ): ?>

                        <?php foreach( $news as $news_others_index => $news_others_item ): 
                            
                            $news_id = $news_others_item->ID;
                            $news_image_id = get_post_thumbnail_id( $news_id );?>

                            <?php if( $news_others_index < 1 ){ ?>

                                <div class="col-lg-16 col-md-12 col-24">
                                    
                                    <?php if( get_field('ac_post_advanced_link_choice', $news_id ) == 'yes' ){ ?>
                                        <a href="<?php echo get_field('ac_post_advanced_link', $news_id)  ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $news_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                    <?php } else { ?>
                                        <a href="<?php echo get_the_permalink($news_id); ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $news_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                    <?php } ?> 

                                        <div class="news-banner__picture test">
                                            <div class="h-object-fit">
                                                <?php skyrora_image($news_image_id, 780, 440, ); ?>
                                            </div>
                                        </div>
                                        <div class="news-banner__info">
                                            <div class="news-banner__info-top">
                                                <?php 

                                                    $tags = get_the_tags($news_id);

                                                    if( !empty($tags) ){
                                                        foreach( $tags as $tag ){
                                                            echo '<span>#' . $tag->name . '</span>';
                                                        }
                                                    }

                                                ?>
                                            </div>
                                            <div class="news-banner__info-main">
                                                <h4>
                                                    <?php echo get_the_title($news_id); ?>
                                                </h4>
                                                <time datetime="<?php echo get_the_date('Y-m-d' , $news_id); ?>">
                                                    <?php echo get_the_date('d.m.Y' , $news_id); ?>
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <?php } elseif( $news_others_index == 1 ){ ?>

                                    <div class="col-lg-8 col-md-12 col-24">
                                        <?php if( get_field('ac_post_advanced_link_choice', $news_id ) == 'yes' ){ ?>
                                            <a href="<?php echo get_field('ac_post_advanced_link', $news_id)  ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $news_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                        <?php } else { ?>
                                            <a href="<?php echo get_the_permalink($news_id); ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $news_id) == 'yes' ){ echo 'target="_blank"'; } ?>>>
                                        <?php } ?> 
                                            <div class="news-banner__picture">
                                                <div class="h-object-fit">
                                                    <?php skyrora_image($news_image_id,380, 440, ); ?>
                                                </div>
                                            </div>
                                            <div class="news-banner__info">
                                                <div class="news-banner__info-top">
                                                    <?php 

                                                        $tags = get_the_tags($news_id);

                                                        if( !empty($tags) ){
                                                            foreach( $tags as $tag ){
                                                                echo '<span>#' . $tag->name . '</span>';
                                                            }
                                                        }

                                                    ?>
                                                    
                                                </div>
                                                <div class="news-banner__info-main">
                                                    <h4>
                                                        <?php echo get_the_title($news_id); ?>
                                                    </h4>
                                                    <time datetime="<?php echo get_the_date('Y-m-d' , $news_id); ?>">
                                                        <?php echo get_the_date('d.m.Y' , $news_id); ?>
                                                    </time>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                  
                            <?php } else { ?>

                                <div class="col-lg-8 col-md-12 col-24">
                                    <?php if( get_field('ac_post_advanced_link_choice', $news_id ) == 'yes' ){ ?>
                                        <a href="<?php echo get_field('ac_post_advanced_link', $news_id)  ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $news_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                    <?php } else { ?>
                                        <a href="<?php echo get_the_permalink($news_id); ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $news_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                    <?php } ?> 
                                        <div class="news-item__picture">
                                            <div class="h-object-fit">
                                                <?php skyrora_image($news_image_id,280, 336, ); ?>
                                            </div>
                                        </div>
                                        <div class="news-item__info">
                                            <div class="news-item__info-top">
                                                <?php 

                                                    $tags = get_the_tags($news_id);

                                                    if( !empty($tags) ){
                                                        foreach( $tags as $tag ){
                                                            echo '<span>#' . $tag->name . '</span>';
                                                        }
                                                    }

                                                ?>
                                            </div>
                                            <div class="news-item__info-main">
                                                <h4>
                                                    <?php echo get_the_title($news_id); ?>
                                                </h4>
                                                <time datetime="<?php echo get_the_date('Y-m-d' , $news_id); ?>">
                                                    <?php echo get_the_date('d.m.Y' , $news_id); ?>
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