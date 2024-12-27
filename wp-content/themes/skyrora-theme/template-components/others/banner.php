<section id="section-<?php echo get_row_index(); ?>" class="banner--landing section banner--description banner js-viewport-checker">
    <?php if (have_rows('acf_grop_left')) : ?>
        <?php while (have_rows('acf_grop_left')) : the_row(); ?>

            <?php if (get_sub_field('acf_about_banner_option') == 'show_video') { ?>
                <div id="bannerVideoId" data-src="<?php echo get_sub_field('acf_about_banner_video'); ?>" class="banner__video">
                    <video autoplay="autoplay" playsinline muted loop="loop" class="bv-video" data-prevent-transform="true">
                        <source src="<?php echo get_sub_field('acf_about_banner_video'); ?>" type="video/mp4" />
                    </video>
                </div>
            <?php } else { ?>

                <div id="bannerVideoId" data-src="<?php echo get_sub_field('acf_about_banner_background')['url']; ?>" class="banner__video banner--image">
                    <div class="bv-video-wrap bv-video-wrap-0" style="position: relative; overflow: hidden; z-index: 10;">
                        <video autoplay="autoplay" playsinline muted loop="loop" poster="<?php echo get_sub_field('acf_about_banner_background')['url']; ?>" class="bv-video" preload="metadata" style="position: absolute; z-index: 1;">
                            <source src="<?php echo get_sub_field('acf_about_banner_background')['url']; ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            <?php } ?>

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