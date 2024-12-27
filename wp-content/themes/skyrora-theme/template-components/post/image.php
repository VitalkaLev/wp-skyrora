
<figure>
    <picture>
        <?php echo wp_get_attachment_image( get_sub_field('acf_post_image')['id'] ,'large'); ?>
    </picture>
    <?php if( get_sub_field('acf_post_image')['caption'] ){ ?>
        <figcaption>
            <?php echo get_sub_field('acf_post_image')['caption']; ?>
        </figcaption>
    <?php } ?>

</figure>