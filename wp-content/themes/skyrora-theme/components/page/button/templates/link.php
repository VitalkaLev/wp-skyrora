
<?php $color = get_query_var( 'color' ); ?>

<a href="<?php echo get_sub_field('acf_product_contents_content_link'); ?>" class="button button--<?php echo $color; ?>">
    <span>
        <?php the_sub_field('acf_product_contents_content_link_name'); ?>
    </span>
    <svg width="1em" height="1em" class="icon icon-arrow-right ">
        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
    </svg>
</a>