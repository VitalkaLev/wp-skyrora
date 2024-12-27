<div class="team team--members">
    <div class="container">
        <div class="row">

            <?php $team_ids = get_sub_field('acf_team_list_others',false , false);

            $team_args = array(
                'post_type' => 'team',
                'posts_per_page' => -1,
                'order'          => 'ASC',
                'post_status'    => 'publish',
                'post__in'       =>  $team_ids,
                'orderby'        => 'post__in',
            );

            $teams = get_posts($team_args); 

            if( $teams ): ?>

            <?php foreach( $teams as $team ):  ?>

                <div class="col-md-6 col-8 col-xs">
                    <div class="team-member team-member--small">
                        <div class="team-member__photo">
                            <div class="h-object-fit test">
                                <picture>
                                    <source srcset="<?php echo get_the_post_thumbnail_url($team->ID,array(  280, 336  )); ?>" type="image/webp" />
                                    <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($team->ID,array(  280, 336 ) ); ?>"/>
                                    <?php echo wp_get_attachment_image(get_post_thumbnail_id($team->ID), array( 280, 336 )); ?>
                                </picture>
                            </div>
                        </div>
                        <div class="team-member__article">
                            <div class="team-member__article-top">
                                <span>
                                    <?php echo get_the_title($team->ID); ?>
                                </span>
                                <span>
                                    <?php echo get_field('acf_team_job', $team->ID); ?>    
                                </span>
                            </div>
                        </div>
                        
                    </div>
                </div>

            <?php endforeach; wp_reset_postdata(); ?>
                
            <?php endif;  ?>
        </div>
    </div>
</div>