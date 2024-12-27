<div id="section-<?php echo get_row_index(); ?>" class="about about-block js-viewport-checker checker-visible">
    <div class="about__inner">
        <div class="about__video">
            <video autoplay="autoplay" loading="lazy" decoding="async" playsinline muted loop="loop"  >
                <source src="<?php echo get_sub_field('acf_product_contents_video')['url']; ?>" type="video/mp4">
            </video>
        </div>
        <?php if( get_sub_field('acf_component_product_video_content') ){ ?>
            <div class="container">
                <div class="about__content">
                    <div class="row">
                        <div class="col-md-14 col-24">
                            <article>
                                <p>
                                    <?php the_sub_field('acf_component_product_video_content'); ?>
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>