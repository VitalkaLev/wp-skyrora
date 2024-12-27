
<div id="section-<?php echo get_row_index(); ?>" class="team team--personal">
    <div class="container">
        <div class="row">
            <?php $personal_ids = get_sub_field('acf_personal_list_others');

            $personal_args = array(
                'post_type' => 'personal',
                'posts_per_page' => -1,
                'post__in' => $personal_ids,
                'orderby'  => 'post__in',
            );

            $personals = get_posts($personal_args); 

            if( $personals ): ?>

            <?php foreach( $personals as $personal ):  ?>

                <div class="col-md-8 col-12 col-xx">
                    <div class="team-member team-member--small">
                        <div class="team-member__photo">
                            <div class="h-object-fit test">
                                <picture>
                                    <source srcset="<?php echo get_the_post_thumbnail_url($personal->ID,array(  280, 336  )); ?>" type="image/webp" />
                                    <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($personal->ID,array(  280, 336 ) ); ?>"/>
                                    <?php echo wp_get_attachment_image(get_post_thumbnail_id($personal->ID)); ?>
                                </picture>
                            </div>
                        </div>
                        <div class="team-member__article">
                            <div class="team-member__article-top">
                                <span>
                                    <?php echo get_the_title($personal->ID); ?>
                                </span>
                                <span>
                                    <?php the_field('acf_personal_job', $personal->ID); ?>    
                                </span>
                            </div>
                            <p>
                                <?php echo get_the_excerpt($personal->ID); ?>
                            </p>
                        </div>
                        <a href="<?php echo get_the_permalink($personal->ID) ?>" class="team-member__link">
                            <span>Read more</span>
                            <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                
            <?php endforeach; wp_reset_postdata(); ?>
                
            <?php endif;  ?>

        </div>
    </div>
</div>