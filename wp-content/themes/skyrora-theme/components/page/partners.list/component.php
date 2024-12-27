<div id="section-<?php echo get_row_index(); ?>" class="partners">
    <div class="container">
        <div class="partners__inner">

            <?php $partner_ids = get_sub_field('acf_others_parthers', false , false);

            $partner_args = array(
                'post_type' => 'parthners',
                'posts_per_page' => -1,
                'post__in' => $partner_ids,
                'orderby'  => 'post__in',
            );

            $partners = get_posts($partner_args); 

            if( $partners ): ?>

                <?php foreach( $partners as $partner ):  
                    $image_id = get_post_thumbnail_id($partner->ID);
                    ?>
                    
                        <div class="partner-item">
                            <div class="partner-item__img">
                                <picture>
                                    <?php skyrora_image($image_id, 225, 85, 'lazy'); ?>
                                </picture>
                            </div>
                        </div>
                    

                <?php endforeach; wp_reset_postdata(); ?>
                    
            <?php endif;  ?>
        
        </div>
    </div>
</div>