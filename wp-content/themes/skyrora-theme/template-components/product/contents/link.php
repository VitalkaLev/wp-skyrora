<div id="section-<?php echo get_row_index(); ?>" class="container landing-links">
    <?php 
        $color = get_sub_field('acf_color_button');
        $option = get_sub_field('acf_options_button');
    ?>

    <?php if( $option == 'link'){ ?>

        <a href="<?php echo get_sub_field('acf_product_contents_content_link'); ?>" class="button button--<?php echo $color; ?>">
            <span>
                <?php the_sub_field('acf_product_contents_content_link_name'); ?>
            </span>
            <svg width="1em" height="1em" class="icon icon-arrow-right ">
                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
            </svg>
        </a>

    <?php } elseif( $option == 'formTwo' ){ ?>

        <button type="button" data-popup-name="popup-book" class="button button--<?php echo $color; ?> js-popup-btn">
            <span>
                <?php the_sub_field('acf_product_contents_content_link_name'); ?>             
            </span>
            <svg width="1em" height="1em" class="icon icon-arrow-right">
                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>            
            </svg>
        </button>

    <?php } else { ?>

        <button type="button" data-popup-name="popup-mail" class="button button--<?php echo $color; ?> js-popup-btn">
            <span>
                <?php the_sub_field('acf_product_contents_content_link_name'); ?>
            </span>
            <svg width="1em" height="1em" class="icon icon-arrow-right">
                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
            </svg>
        </button>

    <?php } ?>
</div>