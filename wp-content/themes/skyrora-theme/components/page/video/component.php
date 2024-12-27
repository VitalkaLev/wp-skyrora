<div id="section-<?php echo get_row_index(); ?>" class="test about about-block js-viewport-checker checker-visible">
    <div class="about__inner">
        <div class="about__video">
            <video autoplay playsinline muted loop poster="<?=THEME?>/dist/s/images/useful/-stub.webp" loading="lazy" class="lazy">
                <source src="<?php the_sub_field('acf_page_video'); ?>" type="video/mp4">
            </video>
        </div>
        <?php if( get_sub_field('acf_others_video_content') ){ ?>
            <div class="container">
                <div class="about__content">
                    <div class="row">
                        <div class="col-md-14 col-24">
                            <article>
                                <p>
                                    <?php the_sub_field('acf_others_video_content'); ?>
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>