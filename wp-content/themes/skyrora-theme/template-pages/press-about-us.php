<?php /* Template Name: Press About Us */ 

get_header(); 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$cat_name = get_queried_object()->name;
$cat_id = get_queried_object();  
?>

<main class="main main--landing">
    <section class="section section-media-menu section__dark-template">
        <div class="container">
            <div class="media-menu js-tags js-category">
                <div class="media-menu__categories">
                    <button type="button" class="media-menu__categories-btn js-category-open">
                        <svg width="1em" height="1em" class="icon icon-categories ">
                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-categories"></use>
                        </svg>
                        <span>Category</span>
                    </button>
                <div class="media-menu__categories-content">
                    <ul>
                        <li>
                            <a href="<?=HOME?>/blog/">ALL news</a>
                        </li>
                        <?php $news_categories = get_field('acf_cat_navigation_menu','option'); 
                        foreach( $news_categories as $cat_item ){ ?>
                            <?php if( $cat_item->slug == get_queried_object()->slug ) { ?>
                            <li>
                                <a href="<?php echo esc_url( get_term_link($cat_item) ); ?>" class="active">
                                    <?php echo $cat_item->name; ?>
                                </a>
                            </li>
                            <?php } else { ?>
                            <li>
                                <a href="<?php echo esc_url( get_term_link($cat_item) ); ?>">
                                    <?php echo $cat_item->name; ?>
                                </a>
                            </li>
                            <?php } ?>
                        <?php }  ?>

                        <?php $page_navigate = get_field('acf_pages_navigation_menu','option'); 
                        foreach( $page_navigate as $page_item ){ 
                            // var_dump($page_item); ?>
                            <?php if( $page_item->post_name == get_queried_object()->post_name ) { ?>
                            <li>
                                <a href="<?php echo esc_url( get_page_link($page_item->ID)); ?>" class="active">
                                    <?php echo $page_item->post_title; ?>
                                </a>
                            </li>
                            <?php } else { ?>
                            <li>
                                <a href="<?php echo esc_url( get_page_link($page_item->ID) ); ?>">
                                    <?php echo $page_item->post_title; ?>
                                </a>
                            </li>
                            <?php } ?>
                        <?php }  ?>
                    </ul>
                </div>
                <button type="button" class="media-menu__tags-btn js-tags-open">
                <span>all TAGs</span>
                    <svg width="1em" height="1em" class="icon icon-arrDown ">
                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrDown"></use>
                    </svg>
                </button>
                </div>
                <div class="media-menu__tags">
                    <div class="media-menu__tags-content js-tags-content">
                        <ul>
                            <?php $news_tags = get_field('acf_tag_navigation_menu','option'); 
                            foreach( $news_tags as $tag_item ){  ?>
                                <li>
                                    <a href="<?php echo esc_url( get_term_link($tag_item->term_id) ); ?>">
                                        #<?php echo $tag_item->name; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="media-menu__content-category-mobile js-category-content"></div>
            </div>
        </div>
    </section>

    <section class="section news js-viewport-checker invisible section__dark-template">
        <div class="container">
            <div class="section-top">
            
                <h1 class="h2">
                    <?php the_title();  ?>
                </h1>
                    <div class="section-top__txt js-collapse">
                        <?php the_field('acf_press_about_us_title_description'); ?>
                        <?php if(!empty(get_field('acf_press_about_us_full_description'))) { ?>
                            <div class="js-collapse-content">
                                <p>
                                    <?php echo get_field('acf_press_about_us_full_description'); ?>
                                </p>
                            </div>
                            <button type="button" class="link-line js-collapse-btn">
                                <span class="decor--show">read more</span>
                                <span class="decor--hide">Hide text</span>
                            </button>
                        <?php } ?>
                    </div> 
            </div>
            <div class="news__collage">
            <div class="row">
                <?php 
                    $press_about_us = get_field('acf_press_about_us_selected_post');

                    $press_about_us_args = array(
                        'posts_per_page' => 10,
                        'post_type' => 'press',
                        'orderby' => 'date', 
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'post__in' => $press_about_us,
                        'paged' => get_query_var('paged'),
                    );
                
                $index = 1;
                $press_posts = new WP_Query($press_about_us_args); 

                if( $press_posts->have_posts() ): ?>

                    <?php while ( $press_posts->have_posts() ) : $press_posts->the_post();
                        if( $index <= 2 || ( $index >= 6 && $index <= 7 ) ){ ?>

                            <div class="col-lg-12 col-md-12 col-24 index-<?php echo $index?>">
                                <?php if( get_field('ac_post_advanced_link_choice', $press_posts->ID ) == 'yes' ){ ?>
                                    <a href="<?php echo get_field('ac_post_advanced_link', $press_posts->ID)  ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $press_posts->ID) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                <?php } else { ?>
                                    <a href="<?php echo get_the_permalink($press_posts->ID); ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $press_posts->ID) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                <?php } ?>  
                                        <div class="news-banner__picture">
                                            <div class="h-object-fit">
                                                <picture>
                                                    <source srcset="<?php echo get_the_post_thumbnail_url($press_posts->ID , 'large'); ?>" type="image/webp" />
                                                    <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($press_posts->ID , 'large'); ?>"/>
                                                    <?php echo wp_get_attachment_image(get_post_thumbnail_id($press_posts->ID , 'large')); ?>
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="news-banner__info">
                                            <div class="news-banner__info-top">
                                                <?php 
                                                    $tags = get_the_tags($press_posts->ID);

                                                    if( !empty($tags) ){
                                                        foreach( $tags as $tag ){
                                                            echo '<span>#' . $tag->name . '</span>';
                                                        }
                                                    }
                                                ?>
                                            </div>
                                            <div class="news-banner__info-main">
                                                <h4>
                                                    <?php echo get_the_title($press_posts->ID); ?>
                                                </h4>
                                                <time datetime="<?php echo get_the_date('Y-m-d' , $press_posts->ID); ?>">
                                                    <?php echo get_the_date('d.m.Y' , $press_posts->ID); ?>
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                            </div>

                        <?php } 
    
                
                        elseif( ( $index >= 3 && $index <= 5 )  || $index >= 8 )  { ?>

                            <div class="col-lg-8 col-md-12 col-24 index-<?php echo $index?>">

                                <?php if( get_field('ac_post_advanced_link_choice', $press_posts->ID ) == 'yes' ){ ?>
                                    <a href="<?php echo get_field('ac_post_advanced_link', $press_posts->ID)  ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $press_posts->ID) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                <?php } else { ?>
                                    <a href="<?php echo get_the_permalink($press_posts->ID); ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $press_posts->ID) == 'yes' ){ echo 'target="_blank"'; } ?>>
                                <?php } ?>  

                                    <div class="news-item__picture">
                                        <div class="h-object-fit">
                                            <picture>
                                                <source srcset="<?php echo get_the_post_thumbnail_url($press_posts->ID, 'large'); ?>" type="image/webp" />
                                                <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($press_posts->ID, 'large'); ?>"/>
                                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($press_posts->ID) , 'large'); ?>
                                            </picture>
                                        </div>
                                    </div>
                                    <div class="news-item__info">
                                        <div class="news-item__info-top">
                                            <?php 
                                                $tags = get_the_tags($press_posts->ID);

                                                if( !empty($tags) ){
                                                    foreach( $tags as $tag ){
                                                        echo '<span>#' . $tag->name . '</span>';
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <div class="news-item__info-main">
                                            <h4>
                                                <?php echo get_the_title($press_posts->ID); ?>
                                            </h4>
                                            <time datetime="<?php echo get_the_date('Y-m-d' , $press_posts->ID); ?>">
                                                <?php echo get_the_date('d.m.Y' , $press_posts->ID); ?>
                                            </time>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php } 

                        $index++;

                    endwhile; wp_reset_postdata(); ?>
                
                <?php endif;  ?>

            </div>
            </div>


            <?php echo custom_pagination($pages = '', $range = 3 , $press_posts); ?>

            
        </div>
    </section>   
</main>

<?php get_footer(); ?>