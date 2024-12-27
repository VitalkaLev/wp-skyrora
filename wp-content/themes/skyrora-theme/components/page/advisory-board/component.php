
<style>
    .team-member__photo > span {
        position: absolute;
        bottom: -12px;
        left: 0px;
        background: #2a5dea;
        z-index: 99;
        width: 100%;
        text-align: center;
        box-shadow: 1px 1px 10px 1px black;
        height: 50px;
        line-height: 50px;
        text-transform: uppercase;
    }
</style>
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

                    <?php foreach( $boards as $board_item ): 
                        $id = $board_item->ID;
                        $image_id = get_post_thumbnail_id($id); ?>

                        <div class="col-md-8 col-12 col-xx">
                            <div class="team-member team-member--large">
                                <div class="team-member__photo">
                                    <?php if( get_field('acf_board_skill', $id) ){ ?>
                                        <span>
                                            <?php echo get_field('acf_board_skill', $id); ?>
                                        </span>
                                    <?php } ?>

                                    <div class="h-object-fit">
                                        <picture>
                                            <?php skyrora_image($image_id, 280, 400, 'lazy'); ?>
                                        </picture>
                                    </div>
                                </div>
                                <div class="team-member__article">
                                    <div class="team-member__article-top">
                                        
                                        <?php if( get_the_title($id) ){ ?>
                                            <span>
                                                <?php echo get_the_title($id); ?>
                                            </span>
                                        <?php } ?>

                                        <?php if( get_field('acf_board_job', $id) ){ ?>
                                            <span>
                                                <?php echo get_field('acf_board_job', $id); ?>
                                            </span>
                                        <?php } ?>

                                    </div>
                                        <?php if( get_the_excerpt($id) ){ ?>
                                            <p>
                                                <?php echo get_the_excerpt($id); ?>
                                            </p>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; wp_reset_postdata(); ?>
                
                <?php endif;  ?>
        </div>
    </div>
</div>