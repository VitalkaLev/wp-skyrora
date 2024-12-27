
<div class="container article-container">
    <article class="article-landing">   
        <div class="article-media">
            <div class="content-media">
                <?php         
                    if( have_rows('acf_social_links_repeater') ){
                        while( have_rows('acf_social_links_repeater') ) { the_row(); 
                        $social_icon = get_sub_field('acf_social_links_repeater_lcon', 'option'); ?>

                        <a href="<?php echo get_sub_field('acf_social_links_repeater_link', 'option'); ?>">
                            <svg width="1em" height="1em" class="icon icon-<?php echo $social_icon; ?>">
                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-<?php echo $social_icon; ?>"></use>
                            </svg>
                        </a>
                    <?php }
                } ?>
            </div>
        </div>
    </article>
</div>
