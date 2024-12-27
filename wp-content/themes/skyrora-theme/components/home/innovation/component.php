
<section class="section about js-viewport-checker">
    <div class="about__inner">
        
        <?php if(  get_sub_field('acf_home_box_v1_show_media') == 'acf_home_box_v1_video_show' ){
            get_template_part('components/home/innovation/templates/background-video');
        } else { 
            get_template_part('components/home/innovation/templates/background');
        } ?>

        <div class="container">
        
            <div data-rellax-percentage="0.2" class="about__content">
                <div class="row">
                    <div class="col-md-14 col-24">
                        <?php if( have_rows('acf_group_left') ): ?>
                            <?php while( have_rows('acf_group_left') ): the_row(); ?>
                                <article>
                                    <?php if( get_sub_field('acf_home_box_v1_title')){ ?>
                                        <h2>
                                            <?php the_sub_field('acf_home_box_v1_title'); ?>
                                        </h2>
                                    <?php } ?>

                                    <?php if( get_sub_field('acf_home_box_v1_content') ){ ?>
                                        <p>
                                            <?php the_sub_field('acf_home_box_v1_content'); ?>
                                        </p>
                                    <?php } ?>
                                </article>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-10 col-24">
                        <?php if( have_rows('acf_group_right') ): ?>
                            <?php while( have_rows('acf_group_right') ): the_row(); ?>
                                <?php if( have_rows('acf_home_box_v1_list') ): ?>
                                    <ul>
                                        <?php while( have_rows('acf_home_box_v1_list') ): the_row(); ?>
                                            <li>
                                                <span>
                                                    <?php the_sub_field('acf_home_box_v1_list_content'); ?>
                                                </span>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
       
        </div>
    </div>
</section>