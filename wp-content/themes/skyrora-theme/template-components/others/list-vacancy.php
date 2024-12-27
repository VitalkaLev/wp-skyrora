<div id="section-<?php echo get_row_index(); ?>" class="container constructor-infos">
                        
    <h2 class="container">
        <?php echo get_sub_field('acf_others_vacancy_title') ?>
    </h2>

    <div class="row">

        <?php $vacancies_ids = get_sub_field('acf_others_list_vacancy', false , false);

        $vacancies_args = array(
            'post_type' => 'list_vacancy',
            'posts_per_page' => -1,
            'orderby'  => 'post__in',
            'order' => 'DESC',
            'post__in' => $vacancies_ids,
            'orderby'  => 'post__in',
        );

        $vacancies = get_posts($vacancies_args); 

        if( $vacancies ): ?>

            <?php foreach( $vacancies as $vacancy ):  ?>

                <div class="col-lg-8 col-md-12">
                    <a href="<?php the_permalink($vacancy->ID); ?>" class="info-item--small info-item">
                        <div class="info-item__info">
                            <div class="info-item__info-content">
                                <div class="info-item__info-content-top">
                                    <span>
                                        <?php echo get_field('acf_vacancy_subtitle', $vacancy->ID); ?>
                                    </span>
                                    <h4>
                                        <?php echo get_the_title($vacancy->ID); ?>
                                    </h4>
                                </div>
                                <div class="info-item__info-content-bottom">
                                    <span>
                                        <?php echo get_field('acf_vacancy_short_content', $vacancy->ID); ?>
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