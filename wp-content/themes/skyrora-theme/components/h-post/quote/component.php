    
<?php if( get_sub_field('acf_post_quote_option') == 'style-1' ){ ?>  
    
    <blockquote>
        <p>
            <?php echo get_sub_field('acf_post_quote'); ?>
        </p>
        <?php if( get_sub_field('acf_post_author_name') ){ ?>
            <span>
                <?php echo get_sub_field('acf_post_author_name'); ?>
            </span>
        <?php } ?>
    </blockquote>

<?php } else { ?>

    <div class="article-simple-quote">
        <blockquote>
            <p>
                <?php echo get_sub_field('acf_post_quote'); ?>
            </p>
            <?php if( get_sub_field('acf_post_author_name') ){ ?>
                <span>
                    <?php echo get_sub_field('acf_post_author_name'); ?>
                </span>
            <?php } ?>
        </blockquote>
    </div> 

<?php } ?>