<div id="section-<?php echo get_row_index(); ?>" class="container landing-video">
    <div class="landing-video__content">
            <figure>
                <picture class="h-object-fit">
                    <?php echo wp_get_attachment_image( get_sub_field('acf_product_contents_image')['id'] ,'large'); ?>
                </picture>
            </figure>
            <?php if( get_sub_field('acf_product_contents_image')['caption'] ){ ?>
                <div class="container">
                    <div class="about__content">
                        <div class="row">
                            <div class="col-md-14 col-24">
                                <article>
                                    <figcaption>
                                        <p>
                                            <?php echo get_sub_field('acf_product_contents_image')['caption']; ?>
                                        </p>
                                    </figcaption>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
</div>
