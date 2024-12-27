
<div id="section-<?php echo get_row_index(); ?>"  class="container constructor-infos">
    <div class="row">

        <?php $internships_ids = get_sub_field('acf_others_list_internships', false , false);

        $internships_args = array(
            'post_type' => 'list_internships',
            'posts_per_page' => -1,
            'post__in' => $internships_ids,
            'orderby'  => 'post__in',
        );

        $internships = get_posts($internships_args); 

        if( $internships ): ?>

            <?php foreach( $internships as $internship ):  ?>

                <div class="col-lg-8 col-md-12">
                    <a href="<?php the_permalink($internship->ID); ?>" class="info-item--small info-item">
                    
                        <div class="info-item__info">
                            <div class="info-item__info-content">
                                <div class="info-item__info-content-top">
                                    <span>
                                        <?php echo get_field('acf_internship_subtitle', $internship->ID); ?>
                                    </span>
                                    <h4>
                                        <?php echo get_the_title($internship->ID); ?>
                                    </h4>
                                </div>
                                <div class="info-item__info-content-bottom">
                                    <span>
                                        <?php echo get_field('acf_internship_short_content', $internship->ID); ?>
                                    </span>
                                    <div class="info-item__info-read">
                                        <span>Read more</span>
                                        <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
</div>