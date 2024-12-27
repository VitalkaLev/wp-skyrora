
<?php get_header(); 

$post_id = $post->ID; ?>

<main class="main main--landing main--white">
        <section class="section section-media-article">
          <div class="container">
            <div class="media-article">
              <?php
                  
                  $taxonomy_slug = 'category';
                  $primary_cat_id = get_post_meta( $post_id, 'epc_primary_' . $taxonomy_slug , true );
          
                  if( empty($primary_cat_id) ){
                    $post_cat = get_the_category($post->ID);
                    $primary_cat_id = $post_cat[0]->term_id;
                  }
                 
                  $primary_cat_name = get_cat_name($primary_cat_id); 
                  $category = get_the_category($primary_cat_id);
                  $primary_cat_link = get_category_link($primary_cat_id); 
                 
                ?>
                <div class="breadcrumbs">
                  <div class="breadcrumbs__inner">
                    <ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                      <li class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="link" href="<?=HOME?>" itemprop="item">
                          <span itemprop="name">Skyrora</span>
                        </a>
                        <svg width="1em" height="1em" class="icon icon-arrow-right">
                          <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                        </svg>
                        <meta itemprop="position" content="1">
                      </li>
                      <li>
                        <a href="<?=HOME?>/blog/" class="h-link-seo">
                          <span>Media</span>
                        </a>
                        <svg width="1em" height="1em" class="icon icon-arrow-right">
				                  <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
			                  </svg>
                      </li>
                      <li class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="link" href="<?=$primary_cat_link;?>" itemprop="item">
                          <span itemprop="name">
                            <?php 
                              if($primary_cat_name){
                                echo $primary_cat_name;
                              } else {
                                echo $category[0]->name;
                              } 
                            ?>
                          </span>
                        </a>
                        <svg width="1em" height="1em" class="icon icon-arrow-right">
                            <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                        </svg>
                        <meta itemprop="position" content="2">
                      </li>
                      <li class="breadcrumb__item">
                        <span class="breadcrumbs__current"><?=get_the_title();?></span>
                      </li>
                    </ul>

                  </div>
                </div>

              <article>
                <h1 class="h2" style="color:black; font-weight: bold;">
                    <?php the_title(); ?>
                </h1>
                <figure>
                  <picture>
                    <?php skyrora_image(get_post_thumbnail_id($post->ID), 780, 438, ); ?>
                  </picture>

                  <?php if(  get_the_post_thumbnail_caption( $post->ID ) ){ ?>
                    <figcaption>
                      <?php echo get_the_post_thumbnail_caption( $post->ID ); ?>
                    </figcaption>
                  <?php } ?>
                </figure>

                     <?php echo get_template_part('template-components/post/post-components');  ?>

              </article>
            
              <div class="media-article__tags">

                    <?php
                        $tags = get_the_tags($post_id);
                                            
                        if( $tags && ! is_wp_error($tags) ){
                            foreach($tags as $tag){
                                echo '<a class="c-tag__item" href=" '. get_category_link( $tag->term_id ) . ' ">'.$tag->name.'</a>';
                            }                         
                        }
                    ?>
             
              </div>
              <div class="media-article__author">
                <div class="media-article__author-name">
                  <div class="media-article__author-name-img">
                    <div class="h-object-fit">
                      <picture>
                        <img src="<?=HOME?>/wp-content/uploads/2021/05/photo-23.png" alt="user">
                      </picture>
                    </div>
                  </div>
                  <div class="media-article__author-name-txt">
                    <span>
                     by <?php $user_info = get_userdata($post->post_author);
                        echo $user_info->first_name; ?>
                     
                    </span>
                    <time datetime="<?php echo get_the_date('Y-m-d' , $post->ID); ?>">
                        <?php echo get_the_date( 'd.m.Y' , $post->ID ); ?>
                    </time>
                  </div>
                </div>
                <div class="media-article__author-share">
                    <span>Share it</span>
                    <div class="share__list" data-a2a-url="<?php echo get_the_permalink(); ?>" data-a2a-title="<?php echo get_the_title(); ?>" style="display: flex;">
                        <a class="share__button_facebook" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" rel="nofollow noopener" target="_blank" data-wpel-link="external">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M16 8C16 3.6 12.4 0 8 0C3.6 0 0 3.6 0 8C0 12 2.9 15.3 6.7 15.9V10.3H4.7V8H6.7V6.2C6.7 4.2 7.9 3.1 9.7 3.1C10.6 3.1 11.5 3.3 11.5 3.3V5.3H10.5C9.5 5.3 9.2 5.9 9.2 6.5V8H11.4L11 10.3H9.1V16C13.1 15.4 16 12 16 8Z" fill="#00020E"/>
                            </svg>
                        </a>
                        <a class="share__button_twitter" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&url=<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" rel="nofollow noopener" target="_blank" data-wpel-link="external">
                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.70409 10.9364L0.0486662 0H6L10.9677 7.09678L17 0H20L12.3224 9.03246L20 20H14.0487L9.05906 12.8717L3 20H0L7.70409 10.9364ZM4.35459 1.37629H3.62057L15.6937 18.6237H16.4278L4.35459 1.37629Z" fill="#00020E"/>
                            </svg>
                        </a>
                        <a class="share__button_linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" rel="nofollow noopener" target="_blank" data-wpel-link="external">
                          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.56602 18.0003H0.882679V6.40866H4.56602V18.0003ZM2.72435 4.78366C1.53268 4.78366 0.666016 3.91699 0.666016 2.72533C0.666016 1.53366 1.64102 0.666992 2.72435 0.666992C3.91602 0.666992 4.78269 1.53366 4.78269 2.72533C4.78269 3.91699 3.91602 4.78366 2.72435 4.78366ZM17.9993 18.0003H14.316V11.717C14.316 9.87533 13.5577 9.33366 12.4743 9.33366C11.391 9.33366 10.3077 10.2003 10.3077 11.8253V18.0003H6.62435V6.40866H10.091V8.03366C10.416 7.27533 11.716 6.08366 13.5577 6.08366C15.616 6.08366 17.7827 7.27533 17.7827 10.8503V18.0003H17.9993Z" fill="#00020E"/>
                          </svg>
                        </a>
                    </div>
                    

                </div>
              </div>
            </div>
          </div>
        </section>

    <?php 
        
        $relate_categories = get_the_category($post->ID);
        
        if ($relate_categories){
                $first_child = $relate_categories[0];
        }
       
        
        $relate_args = array( 
            'posts_per_page' => 3, 
            'post_type' => 'post',
            'category__in' => $first_child,
            'post__not_in' => array($post->ID),
        
        );
        
        $relate_query = new WP_Query( $relate_args );
            
        if( $relate_query ) { ?>

        <section class="section news js-viewport-checker checker-visible">
          <div class="container">

            <h2>More news</h2>

            <div class="row news__row">
                <?php while ( $relate_query -> have_posts() ) : $relate_query -> the_post(); ?>
                    <div class="col-lg-8 col-md-12 col-24">
                        <a href="<?php echo get_the_permalink($relate_query->ID ); ?>" class="news-item">
                            <div class="news-item__picture">
                                <div class="h-object-fit">
                                  <?php $attach_id = get_post_thumbnail_id($relate_query->ID); ?>
                                    <?php skyrora_image($attach_id , 780, 438, ); ?>
                                </div>
                            </div>
                            <div class="news-item__info">
                                <div class="news-item__info-top">
                                    <?php
                                        $relate_tags = get_the_tags($relate_query->ID);
                                                            
                                        if( $relate_tags && ! is_wp_error($relate_tags) ){
                                            
                                            $first_child = $relate_tags[0];
                                            echo '<span>'.$first_child->name.'</span>';
                                                                    
                                        }
                                    ?>
                                </div>
                                <div class="news-item__info-main">
                                  <?php if( get_the_title( $relate_query->ID ) ){ ?>
                                    <h4>
                                        <?php echo get_the_title( $relate_query->ID ); ?>
                                    </h4>
                                  <?php } ?>
                                    <time datetime="<?php echo get_the_date('Y-m-d' , $relate_query->ID); ?>">
                                        <?php echo get_the_date('d.m.Y' , $relate_query->ID ); ?>
                                    </time>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
        </section>

        <?php } ?>
</main>	
		


<?php get_footer();
