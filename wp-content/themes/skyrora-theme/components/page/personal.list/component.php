
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

            <?php foreach( $personals as $personal ):  
                $image_id = get_post_thumbnail_id($personal->ID);
                ?>

                <div class="col-md-8 col-12 col-xx">
                    <div class="team-member team-member--small">
                        <div class="team-member__photo">
                            <div class="h-object-fit">
                                <?php skyrora_image($image_id, 180, 246, 'lazy'); ?>
                            </div>
                        </div>
                        <div class="team-member__article">
                            <div class="team-member__article-top">

                                <?php if( get_the_title($personal->ID) ){ ?>
                                    <span>
                                        <?php echo get_the_title($personal->ID); ?>
                                    </span>
                                <?php } ?>

                                <?php if( get_field('acf_personal_job', $personal->ID) ){ ?>
                                    <span>
                                        <?php the_field('acf_personal_job', $personal->ID); ?>    
                                    </span>
                                <?php } ?>

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