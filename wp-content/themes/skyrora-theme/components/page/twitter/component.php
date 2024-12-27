<section id="section-<?php echo get_row_index(); ?>"  class="section news js-viewport-checker invisible section--twitter">
    <div class="container">
        <div class="news__top news__top--mobileCol">
            <h2>
                <?php echo get_sub_field('acf_others_twitter_title');  ?>
            </h2>
            <a href="<?php echo get_sub_field('acf_others_twitter_link')  ?>" class="link-line">
                <span>
                    <?php echo get_sub_field('acf_others_twitter_lable') ?>
                </span>
                <svg width="1em" height="1em" class="icon icon-arrow-right ">
                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                </svg>
            </a>
        </div>
        <div class="news__twitter">
            <a data-tweet-limit="3" href="https://twitter.com/Skyrora_Ltd?ref_src=twsrc%5Etfw" class="twitter-timeline">
                <?php echo get_sub_field('acf_others_twitter_line')  ?>
            </a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</section>