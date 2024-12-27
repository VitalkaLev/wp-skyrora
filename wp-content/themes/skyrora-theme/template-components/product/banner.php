<section id="section-<?php echo get_row_index(); ?>" class="banner--landing banner--description section banner js-viewport-checker test">
    <?php if (have_rows('acf_grop_left')) : ?>
        <?php while (have_rows('acf_grop_left')) : the_row(); ?>
        
            <?php if (get_sub_field('acf_product_banner_option') == 'show_video') { ?>
                <div id="bannerVideoId" data-src="<?php echo get_sub_field('acf_product_banner_video_file')['url']; ?>" class="banner__video">
                    <video autoplay="autoplay" playsinline muted loop="loop" class="bv-video" data-prevent-transform="true">
                        <source src="<?php echo get_sub_field('acf_product_banner_video_file')['url']; ?>" type="video/mp4" />
                    </video>
                </div>
            <?php } else { ?>

                <div id="bannerVideoId" data-src="<?php echo get_sub_field('acf_product_banner_image')['url']; ?>" class="banner__video banner--image">
                    <div class="bv-video-wrap bv-video-wrap-0" style="position: relative; overflow: hidden; z-index: 10;">
                        <video autoplay="autoplay" playsinline muted loop="loop" poster="<?php echo get_sub_field('acf_product_banner_image')['url']; ?>" class="bv-video" preload="metadata" style="position: absolute; z-index: 1;">
                            <source src="<?php echo get_sub_field('acf_product_banner_image')['url']; ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            <?php } ?>



            <div class="container">
                <div class="banner__content">
                    <div class="banner__content-txt">
                        <?php if (ft(get_sub_field('acf_product_banner_subtitle'))) { ?>
                            <span class="title-sub">
                                <?php echo get_sub_field('acf_product_banner_subtitle')  ?>
                            </span>
                        <?php } ?>


                        <?php if (ft(get_sub_field('acf_product_banner_title'))) { ?>
                            <h1>
                                <?php echo get_sub_field('acf_product_banner_title')  ?>
                            </h1>
                        <?php } ?>

                        <?php if (ft(get_sub_field('acf_product_banner_content'))) { ?>
                            <p>
                                <?php echo get_sub_field('acf_product_banner_content')  ?>
                            </p>
                        <?php } ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('acf_grop_right')) : ?>
                        <?php while (have_rows('acf_grop_right')) : the_row(); ?>
                            <div class="banner__content-list">
                                <ul>
                                    <?php if (have_rows('product_navigation_by_page')) : ?>
                                        <?php while (have_rows('product_navigation_by_page')) : the_row(); ?>
                                            <li>
                                                <a href="#section-<?php echo get_sub_field('acf_product_nav_section_index'); ?>" data-section-nav="#section-<?php echo get_sub_field('acf_product_nav_section_index'); ?>">
                                                    <?php echo get_sub_field('acf_product_nav_section_name'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            

</section>