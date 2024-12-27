<?php
/**
 *  Template Name: Media Page 
 *
 */

get_header(); 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$cat_name = get_queried_object()->name;
$cat_id = get_queried_object();   
?>

<main class="main main--landing main--white">

<section class="section section-media-menu">
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
                        <a href="<?=HOME?>/blog">ALL news</a>
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
                    foreach( $page_navigate as $page_item ){ ?>
                        <?php if( $page_item->post_name == get_queried_object()->post_name ) { ?>
                        <li>
                            <a href="<?php echo esc_url( $page_item->guid ); ?>" class="active">
                                <?php echo $page_item->post_title; ?>
                            </a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a href="<?php echo esc_url( $page_item->guid ); ?>">
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
                                <a href="<?=HOME?>/blog/tag/<?php echo $tag_item->slug; ?>">
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

<section class="section news js-viewport-checker invisible">
    <div class="container">
        <div class="section-top">
        
            <h1 class="h2" style="color:black; font-weight: bold;">
                <?php if( is_tag() ){ echo "#"; } ?><?php echo single_cat_title( '', false ); ?>
            </h1>

            <?php  if( category_description() && !is_paged() ) { ?>

                <div class="section-top__txt js-collapse" style="color:black;">

                    
                        <?php  
                            $taxonomy_slug = 'category';
                            $primary_cat_id = get_post_meta( $cat_id, 'epc_primary_' . $taxonomy_slug , true );
                            $category_description = category_description( $primary_cat_id );
                            $array_string = explode(" ", $category_description);
                            $array_cut = array_slice($array_string, 0, 12);
                            $short_cat = implode(" ", $array_cut);

                            the_field('acf_post_cat_addtional', $cat_id );
                            echo $short_cat;
                           
                         ?>
                    

                    <div class="js-collapse-content">
                      <p>
                        <?php
                            
                            $array_string = explode(" ", $category_description);
                            $array_cut = array_slice($array_string, 13, 9999);
                            $cut_cat = implode(" ", $array_cut);
                            echo $cut_cat;
                          
                        ?>
                      </p>
                    </div>
                    <button type="button" class="link-line js-collapse-btn">
                        <span class="decor--show">read more</span>
                        <span class="decor--hide">Hide text</span>
                    </button>
                </div>

          <?php } ?>
            
        </div>
        <div class="news__collage">
          <div class="row">
            <?php 

                if( is_tag() ){

                    $news_cat_args = array(
                    'posts_per_page' => 10,
                    'post_type' => 'post',
                    'orderby' => 'date', 
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'paged' => get_query_var('paged'),
                    'tag_id' => get_queried_object()->term_id ,
                    );

                } else {
                
                    $news_cat_args = array(
                        'posts_per_page' => 10,
                        'post_type' => 'post',
                        'orderby' => 'date', 
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'cat' => get_queried_object()->term_id ,
                        'paged' => get_query_var('paged'),
                    );

                }
            
            $index = 1;
            $news_cat = new WP_Query($news_cat_args); 

            if( $news_cat->have_posts() ): ?>

                <?php while ( $news_cat->have_posts() ) : 
                    $news_cat->the_post();
                    $news_id = $news_cat->ID ;
                    $news_image_id = get_post_thumbnail_id( $news_id );

                    if( $index <= 2 || ( $index >= 6 && $index <= 7 ) ){ ?>

                        <div class="col-lg-12 col-md-12 col-24 index-<?php echo $index?>">
                            <?php if( get_field('ac_post_advanced_link_choice', $news_cat->ID ) == 'yes' ){ ?>
                                <a href="<?php echo get_field('ac_post_advanced_link', $news_cat->ID)  ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $news_cat->ID) == 'yes' ){ echo 'target="_blank"'; } ?>>
                            <?php } else { ?>
                                <a href="<?php echo get_the_permalink($news_cat->ID); ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $news_cat->ID) == 'yes' ){ echo 'target="_blank"'; } ?>>
                            <?php } ?>  
                                    <div class="news-banner__picture">
                                        <div class="h-object-fit">
                                            <?php skyrora_image($news_image_id, 512, 512, ); ?>
                                        </div>
                                    </div>
                                    <div class="news-banner__info">
                                        <div class="news-banner__info-top">
                                            <?php 
                                                $tags = get_the_tags($news_cat->ID);

                                                if( !empty($tags) ){
                                                    foreach( $tags as $tag ){
                                                        echo '<span>#' . $tag->name . '</span>';
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <div class="news-banner__info-main">
                                            <h4>
                                                <?php echo get_the_title($news_cat->ID); ?>
                                            </h4>
                                            <time datetime="<?php echo get_the_date('Y-m-d' , $news_cat->ID); ?>">
                                                <?php echo get_the_date('d.m.Y' , $news_cat->ID); ?>
                                            </time>
                                        </div>
                                    </div>
                                </a>
                        </div>

                    <?php } 
   
            
                    elseif( ( $index >= 3 && $index <= 5 )  || $index >= 8 )  { ?>

                        <div class="col-lg-8 col-md-12 col-24 index-<?php echo $index?>">

                            <?php if( get_field('ac_post_advanced_link_choice', $news_cat->ID ) == 'yes' ){ ?>
                                <a href="<?php echo get_field('ac_post_advanced_link', $news_cat->ID)  ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $news_cat->ID) == 'yes' ){ echo 'target="_blank"'; } ?>>
                            <?php } else { ?>
                                <a href="<?php echo get_the_permalink($news_cat->ID); ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $news_cat->ID) == 'yes' ){ echo 'target="_blank"'; } ?>>
                            <?php } ?>  

                                <div class="news-item__picture">
                                    <div class="h-object-fit">
                                        <?php skyrora_image($news_image_id, 512, 512, ); ?>
                                    </div>
                                </div>
                                <div class="news-item__info">
                                    <div class="news-item__info-top">
                                        <?php 

                                            $tags = get_the_tags($news_cat->ID);

                                            if( !empty($tags) ){
                                                foreach( $tags as $tag ){
                                                    echo '<span>#' . $tag->name . '</span>';
                                                }
                                            }

                                        ?>
                                    </div>
                                    <div class="news-item__info-main">
                                        <h4>
                                            <?php echo get_the_title($news_cat->ID); ?>
                                        </h4>
                                        <time datetime="<?php echo get_the_date('Y-m-d' , $news_cat->ID); ?>">
                                            <?php echo get_the_date('d.m.Y' , $news_cat->ID); ?>
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


        <?php echo custom_pagination($pages = '', $range = 3 , $news_cat); ?>

        
    </div>
</section>
              
        
       
</main>

<?php 

get_footer();