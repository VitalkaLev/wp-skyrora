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

                <?php foreach( $teams as $team ):  

                    $image_id = get_post_thumbnail_id($team->ID); ?>

                    <div class="col-md-6 col-8 col-xs">
                        <div class="team-member team-member--small">
                            <div class="team-member__photo">
                                <div class="h-object-fit">
                                    <?php skyrora_image($image_id, 180, 246, 'lazy'); ?>
                                </div>
                            </div>
                            <div class="team-member__article">
                                <div class="team-member__article-top">
                                
                                    <?php if( get_the_title($team->ID) ){ ?>
                                        <span>
                                            <?php echo get_the_title($team->ID); ?>
                                        </span>
                                    <?php } ?>

                                    <?php if( get_field('acf_team_job', $team->ID) ){ ?>
                                        <span>
                                            <?php echo get_field('acf_team_job', $team->ID); ?>    
                                        </span>
                                    <?php } ?>

                                </div>
                            </div>
                            
                        </div>
                    </div>

                <?php endforeach; wp_reset_postdata(); ?>
                
            <?php endif;  ?>
        </div>
    </div>
</div>