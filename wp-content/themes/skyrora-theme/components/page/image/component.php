<div id="section-<?php echo get_row_index(); ?>" class="container landing-video">
    <div class="landing-video__content">
        <figure>
            <div class="picture__wrapper">
                <picture class="h-object-fit">
                    <!-- <img src="<php echo get_sub_field('acf_page_image')['url']; ?>" 
                        alt="<php echo get_sub_field('acf_page_image')['alt']; ?>" 
                        title="<php echo get_sub_field('acf_page_image')['title'];
                     ?>"> -->
                      <?php skyrora_image(get_sub_field('acf_page_image')['id'], 1200, 700, 'lazy'); ?>
                </picture>
            </div>
            <?php if( get_sub_field('acf_page_image')['caption'] ){ ?>
                <figcaption>
                    <?php echo get_sub_field('acf_page_image')['caption']; ?>
                </figcaption>
            <?php } ?>
        </figure>
    </div>
</div>