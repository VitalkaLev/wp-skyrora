
    <?php if( have_rows('acf_post_list') ): ?>
        <?php if( get_field('acf_list_option') == 'circle' ){
            echo '<ul>';
        } else {
            echo '<ol>';
        } ?>
            <?php while( have_rows('acf_post_list') ): the_row(); ?>
                <li>
                    <p>
                        <?php the_sub_field('acf_post_list_content'); ?>
                    </p>
                </li>
            <?php endwhile; ?>
            <?php if( get_sub_field('acf_list_option') == 'circle' ){
            echo '</ul>';
        } else {
            echo '</ol>';
        } ?>
    <?php endif; ?>
