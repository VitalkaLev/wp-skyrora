<div class="article-chapter">
    <?php if( have_rows('acf_post_list') ): ?>
        <ul>
            <?php while( have_rows('acf_post_list') ): the_row(); ?>
                <li>
                    <p>
                        <?php the_sub_field('acf_post_list_content'); ?>
                    </p>
                </li>
            <?php endwhile; ?>
        </ul> 
    <?php endif; ?>
</div>
