<section class="section banner js-viewport-checker">
    <?php
    if ( get_sub_field('acf_home_banner_show_media') == 'acf_home_banner_video_show' ) {

        get_template_part('components/home/banner/templates/background-video');

    } else {

        get_template_part('components/home/banner/templates/background');

    } ?>

    <div class="container">
        <div class="banner__content">
            <div class="banner__content-txt">
            
            <?php 
                $logo = get_sub_field('acf_home_banner_logo');
                if($logo){?>
                    <div class="banner__content-logo">
                        <?php 
                            
                            foreach( $logo as $item ){  ?>
                                <div class="banner__content-logo__item">
                                    <figure>
                                        <picture>
                                            <?php skyrora_image( $item['ID'] , 90, 25, );  ?>
                                        </picture>
                                        <?php if( $item['caption'] ){ ?>
                                            <figcaption>
                                                <?php echo $item['caption']; ?>
                                            </figcaption>
                                        <?php } ?>

                                    </figure>
                                </div>
                                    
                            <?php } ?>
                    </div>
                <?php } ?>
                <?php if (ft(get_sub_field('acf_home_banner_title'))) { ?>
                    <h1>
                        <?php echo get_sub_field('acf_home_banner_title') ?>
                    </h1>
                <?php } ?>

                <?php if (ft(get_sub_field('acf_home_banner_subtitle'))) { ?>
                    <p>
                        <?php echo get_sub_field('acf_home_banner_subtitle')  ?>
                    </p>
                <?php } ?>
            </div>
            <div class="banner__content-list decor--ml-auto">
                <div class="banner__content-scrollDown">
                    <a href="#mainPageCategoriesId" rel="nofollow" class="js-header-anchor">
                        <span>Scroll</span>
                        <svg width="1em" height="1em" class="icon icon-arrow-down ">
                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-down"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>