    <div id="section-<?php echo get_row_index(); ?>" class="container gallery">
        <div class="gallery__content">
            <div class="js-swiper-pictures swiper-container swiper-container--pictures">
                <div class="swiper-wrapper">
                    <?php $slider = get_sub_field('acf_product_contents_slider');
                    foreach ( $slider as $slide ): ?>
                        <div class="swiper-slide">
                            <div data-swiper-parallax-x="50%" class="gallery__content-picture">
                                <div class="h-object-fit">
                                    <?php echo wp_get_attachment_image( $slide ,'large'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <button type="button" class="swiper-button swiper-button-prev">
                <svg width="1em" height="1em" class="icon icon-sw-arrow-left ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-sw-arrow-left"></use>
                </svg>
            </button>

            <button type="button" class="swiper-button swiper-button-next">
                <svg width="1em" height="1em" class="icon icon-sw-arrow-right ">
                  <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-sw-arrow-right"></use>
                </svg>
            </button>

            <div class="swiper-pagination"></div>
        </div>
    </div>