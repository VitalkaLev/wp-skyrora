
<?php $color = get_query_var( 'color' ); ?>

<button type="button" data-popup-name="popup-indicate" class="button button--<?php echo $color; ?> js-popup-btn">
    <span>
        <?php the_sub_field('acf_product_contents_content_link_name'); ?>
    </span>
    <svg width="1em" height="1em" class="icon icon-arrow-right">
        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
    </svg>
</button>