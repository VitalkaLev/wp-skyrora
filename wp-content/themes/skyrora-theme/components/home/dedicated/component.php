<?php if( have_rows('acf_group_left') ): ?>
    <?php while( have_rows('acf_group_left') ): the_row(); ?>
        <?php if( get_sub_field('acf_home_box_v4_image') ){ ?>
            <section class="section--nextIsVideo section about-dedicated-mod js-viewport-checker checker-visible" style="background-image: url(<?php echo get_sub_field('acf_home_box_v4_image'); ?>);">
        <?php } else { ?>
            <section class="section--nextIsVideo section about-dedicated-mod js-viewport-checker checker-visible">
        <?php } ?>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="container">
        <div class="about-dedicated__inner">
            <div class="about__content--dedicated-mod">
                <?php 
                if( have_rows('acf_group_right') ): 
                    while( have_rows('acf_group_right') ): the_row();  ?>
                        <?php if( get_sub_field('acf_home_box_v4_title') ): ?>
                            <h2>
                                <?php the_sub_field('acf_home_box_v4_title'); ?>
                            </h2>
                        <?php endif; ?>
                    <?php endwhile; 
                endif; ?>
            
                <?php 
                if( have_rows('acf_group_right') ): 
                    while( have_rows('acf_group_right') ): the_row(); 

                        if( have_rows('acf_home_box_v4_right_list') ){ ?>
                            <ul>
                                <?php while( have_rows('acf_home_box_v4_right_list') ){ the_row(); ?>
                    
                                    <li>
                                        <span class="icon-wrap">
                                           <?php get_template_part('components/home/dedicated/templates/image'); ?>
                                        </span>

                                        <?php if( get_sub_field('acf_home_box_v4_right_list_content') ){ ?>
                                            <span>
                                                <?php the_sub_field('acf_home_box_v4_right_list_content'); ?>
                                            </span>
                                        <?php } ?>
                                        
                                    </li>

                                <?php }  ?>

                            </ul>
                        <?php }  
                    endwhile; 
                endif; ?>
                
                <?php if( have_rows('acf_group_left') ): ?>
                    <?php while( have_rows('acf_group_left') ): the_row(); ?>
                
                        <button type="button" data-popup-name="popup-book" class="button button--blue js-popup-btn">
                            <span>
                                <?php the_sub_field('acf_home_box_v4_btn_name'); ?>
                            </span>
                            <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                            </svg>
                        </button>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

</section>