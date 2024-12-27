

<div id="section-<?php echo get_row_index(); ?>" class="about about-block js-viewport-checker">
    <div class="about__inner">
        <?php if(  get_sub_field('acf_others_video_show_media') == 'acf_others_video_show' ){ ?>
            <div class="about__video">
                <video autoplay="autoplay" playsinline muted loop="loop" poster="<?=THEME?>/dist/s/images/useful/-stub.webp">
                    <source src="<?php echo get_sub_field('acf_others_video')['url'] ; ?>" type="video/mp4"/>
                </video>
            </div>
        <?php } else { ?>
                <div data-rellax-speed="-8" class="about__video rellax-video about--image">
                    <picture>
                        <?php echo wp_get_attachment_image( get_sub_field('acf_others_video_image') ,'large'); ?>
                    </picture>
                </div>
        <?php } ?>

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
    </div>
</div>

