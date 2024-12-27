<div id="section-<?php echo get_row_index(); ?>" class="partners">
    <div class="container">
        <div class="partners__inner">

            <?php $partner_ids = get_sub_field('acf_partner_list_others',false , false);

            $partner_args = array(
                'post_type' => 'parthners',
                'posts_per_page' => -1,
                'post__in' => $partner_ids,
                'orderby'  => 'post__in',
            );

            $partners = get_posts($partner_args); 

            if( $partners ): ?>

            <?php foreach( $partners as $partner ):  ?>
                <div class="partner-item">
                    <div class="partner-item__img">
                        <picture>
                            <source srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($partner->ID),array( 225, 85   )); ?>" type="image/webp" />
                            <source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url(get_post_thumbnail_id($partner->ID),array(  225, 85 ) ); ?>"/>
                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($partner->ID), array( 225, 85 )); ?>
                        </picture>
                    </div>
                </div>

            <?php endforeach; wp_reset_postdata(); ?>
                
            <?php endif;  ?>
        
        </div>
    </div>
</div>