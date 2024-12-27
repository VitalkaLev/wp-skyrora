<section id="section-<?php echo get_row_index(); ?>" class="banner--landing section banner--description banner js-viewport-checker">
    <?php if (have_rows('acf_grop_left')) : ?>
        <?php while (have_rows('acf_grop_left')) : the_row(); ?>

            <?php if (get_sub_field('acf_about_banner_option') == 'show_video') { 

                get_template_part('components/page/banner/templates/background-video');

            } else { 

                get_template_part('components/page/banner/templates/background');

            } ?>

            <div class="container">
                <div class="banner__content">
                    <div class="banner__content-txt">

                        <?php if (ft(get_sub_field('acf_about_banner_subtitle'))) { ?>
                            <span class="title-sub">
                                <?php echo ft(get_sub_field('acf_about_banner_subtitle'));  ?>
                            </span>
                        <?php } ?>

                        <?php if (ft(get_sub_field('acf_about_banner_title'))) { ?>
                            <h1>
                                <?php echo ft(get_sub_field('acf_about_banner_title'));  ?>
                            </h1>
                        <?php } ?>

                        <?php if (ft(get_sub_field('acf_about_banner_content'))) { ?>
                            <p>
                                <?php echo ft(get_sub_field('acf_about_banner_content')); ?>
                            </p>
                        <?php } ?>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('acf_grop_right')) : ?>
                <?php while (have_rows('acf_grop_right')) : the_row(); ?>

                    <?php if (have_rows('acf_about_banner_nav')) : ?>
                        <div class="banner__content-list">
                            <ul>
                                <?php while (have_rows('acf_about_banner_nav')) : the_row(); ?>

                                    <li>
                                        <a href="#section-<?php echo get_sub_field('acf_about_nav_number'); ?>" data-section-nav="#section-<?php echo get_sub_field('acf_about_nav_number'); ?>">
                                            <?php echo get_sub_field('acf_about_nav_name'); ?>
                                        </a>
                                    </li>
                                    
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <?php endwhile; ?><?php endif; ?>

</section>