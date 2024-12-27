
<section class="section--environmentMain section about js-viewport-checker">
        <div class="about__inner">
            <?php if(  get_sub_field('acf_home_box_v3_show_media') == 'acf_home_box_v3_video_show' ){ 
                get_template_part('components/home/environment/templates/background-video');
             } else { 
                get_template_part('components/home/environment/templates/background');
             } ?>
            <div class="container">
              <div data-rellax-percentage="0.2" class="about__content">
                <div class="about__content-tech js-counter-checker">
                    <?php if( get_sub_field('acf_home_box_v3_title') ){ ?>
                        <h2>
                            <?php the_sub_field('acf_home_box_v3_title'); ?>
                        </h2>
                    <?php } ?>

                            <div class="about__content-tech-line">
                                <?php if( have_rows('acf_group_left') ): ?>
                                <?php while( have_rows('acf_group_left') ): the_row(); ?>
                                    <div class="about__content-tech-col">
                                        <span data-start="<?php the_sub_field('acf_home_box_v3_left_min_number'); ?>" data-end="<?php the_sub_field('acf_home_box_v3_left_max_number'); ?>" class="count-number"></span>
                                        <span>
                                            <?php the_sub_field('acf_home_box_v3_left_content'); ?>
                                        </span>
                                    </div>
                                <?php endwhile; ?><?php endif; ?>

                                <svg width="1em" height="1em" class="icon icon-longArr-right">
                                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-longArr-right"></use>
                                </svg>

                                <?php if( have_rows('acf_group_right') ): ?>
                                <?php while( have_rows('acf_group_right') ): the_row(); ?>
                                    <div class="about__content-tech-col">
                                        <span data-start="<?php the_sub_field('acf_home_box_v3_right_min_number'); ?>" data-end="<?php the_sub_field('acf_home_box_v3_right_max_number'); ?>" class="count-value"></span>
                                        <span><?php the_sub_field('acf_home_box_v3_right_content'); ?></span>
                                    </div>
                                <?php endwhile; ?><?php endif; ?>
                            </div>
                            <a href="<?php the_sub_field('acf_home_box_v3_btn_link'); ?>" class="button button--empty">
                                <span>
                                    <?php the_sub_field('acf_home_box_v3_btn_name'); ?>
                                </span>
                                <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                </svg>
                            </a>
                        </div>
               
              </div>
            </div>
        </div>
    </section>