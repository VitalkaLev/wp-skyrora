<?php get_header(); ?>

<main class="main main--landing">
    <section class="section person">
        <div class="container">
            <div class="person__content">
                <div class="person__content-main">
                    <article class="article-landing">
                        <div class="article-chapter">
                            <span class="title-sub">
                                <?php the_field('acf_personal_job'); ?>
                            </span>
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                        </div>
                        <div class="article-chapter">
                            <p>
                                <?php the_field('acf_personal_full_content'); ?>
                            </p>
                        </div>
                    </article>
                   
                    
                </div>
                <aside class="person__content-aside">
                    <div class="person__content-aside-picture">
                        <div class="h-object-fit">
                            <picture>
                                <source srcset="<?php echo get_the_post_thumbnail_url($post->ID); ?>" type="image/webp" />
                                <source media="(max-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($post->ID); ?>" />
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($post->ID)); ?>
                            </picture>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <section class="section news js-viewport-checker checker-visible">
        <div class="container">
            <h2>
                <?php echo get_field('acf_personal_new_title')  ?>
            </h2>
            <div class="row news__row">

                <?php $product_post_ids = get_field('acf_personal_list_news', false , false );

                $product_post_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__in' => $product_post_ids,
                    'orderby'  => 'post__in',
                );

                $product_posts = get_posts($product_post_args); 

            if( $product_posts ): ?>
                <?php foreach( $product_posts as $product_post ):  ?>
                <div class="col-lg-8 col-md-12 col-24">
                    <a href="<?php the_permalink($product_post->ID); ?>" class="news-item">
                        <div class="news-item__picture">
                            <div class="h-object-fit">
                                <picture>
                                    <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($product_post->ID); ?>" />
                                    <source srcset="<?php echo get_the_post_thumbnail_url($product_post->ID); ?>" type="image/webp" />
                                    <?php echo wp_get_attachment_image(get_post_thumbnail_id($product_post->ID)); ?>
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
                                <?php if( get_the_title($product_post->ID) ){ ?>
                                    <h4>
                                        <?php echo get_the_title($product_post->ID); ?>
                                    </h4>
                                <?php } ?>

                                <time datetime="<?php echo get_the_date('Y-m-d' , $product_post->ID); ?>">
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
</main>

<?php get_footer();