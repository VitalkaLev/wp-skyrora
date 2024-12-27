<figure>
    <picture>
        <img src="<?php echo get_sub_field('acf_post_image')['url']; ?>" alt="<?php echo get_sub_field('acf_post_image')['alt']; ?>" title="<?php echo get_sub_field('acf_post_image')['title']; ?>">
    </picture>
    <?php if( get_sub_field('acf_post_image')['caption'] ){ ?>
        <figcaption>
            <?php echo get_sub_field('acf_post_image')['caption']; ?>
        </figcaption>
    <?php } ?>

</figure>