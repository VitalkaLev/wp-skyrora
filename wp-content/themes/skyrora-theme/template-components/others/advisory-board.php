<div id="section-<?php echo get_row_index(); ?>"  class="team">
    <div class="container">
        <div class="row">
            <?php $board_ids = get_sub_field('acf_advisory_board',false , false);

                $board_args = array(
                    'post_type' => 'board',
                    'posts_per_page' => -1,
                    'order'          => 'ASC',
                    'post_status'    => 'publish',
                    'post__in'       =>  $board_ids,
                    'orderby'        => 'post__in',
                );

                $boards = get_posts($board_args); 

                if( $boards ): ?>

                    <?php foreach( $boards as $board_item ):  ?>

                        <div class="col-md-8 col-12 col-xx">
                            <div class="team-member team-member--large">
                                <div class="team-member__photo">
                                    <?php if( get_field('acf_board_skill', $board_item->ID) ){ ?>
                                        <span>
                                            <?php echo get_field('acf_board_skill', $board_item->ID); ?>
                                        </span>
                                    <?php } ?>
                                    <div class="h-object-fit">
                                        <picture>
                                            <source srcset="<?php echo get_the_post_thumbnail_url($board_item->ID,array(  280, 336  )); ?>" type="image/webp" />

                                            <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($board_item->ID,array(  280, 336 ) ); ?>"/>

                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($board_item->ID), array( 280, 336 )); ?>
                                        </picture>
                                    </div>
                                </div>
                                <div class="team-member__article">
                                    <div class="team-member__article-top">
                                        <span>
                                            <?php echo get_the_title($board_item->ID); ?>
                                        </span>
                                        <span>
                                            <?php echo get_field('acf_board_job', $board_item->ID); ?>
                                        </span>
                                    </div>
                                    <p>
                                        <?php echo get_the_excerpt($board_item->ID); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; wp_reset_postdata(); ?>
                
                <?php endif;  ?>

        </div>
    </div>
</div>