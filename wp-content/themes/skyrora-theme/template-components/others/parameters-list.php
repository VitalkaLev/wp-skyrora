<div id="section-<?php echo get_row_index(); ?>"  class="container parameters-list">
    <ul>
        <?php if( have_rows('acf_parameters_list') ): ?>
        <?php while( have_rows('acf_parameters_list') ): the_row(); ?>
            <li>
                <span>
                    <?php echo get_sub_field('acf_parameters_list_name')  ?>
                </span>
                <span>
                    <?php echo get_sub_field('acf_parameters_list_content')  ?>
                </span>
            </li>
        <?php endwhile; ?> <?php endif; ?>
    </ul>
</div>