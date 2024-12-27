
<div id="section-<?php echo get_row_index(); ?>" class="team-amount">
    <div class="container">
        <div class="row">

            <?php 
                $count = count(get_sub_field('acf_about_team_amount')); 
                if( have_rows('acf_about_team_amount') ): ?>
                    <?php while( have_rows('acf_about_team_amount') ): the_row(); ?>

                        <?php 
                        if( get_row_index() == $count or get_row_index() == '1' ){

                            echo '<div class="col-lg-8 col-md-8 col-12 col-xx  n-' . get_row_index() . '">';

                        } elseif( get_row_index() % 3 == 0 or get_row_index() % 4 == 0 ) {

                            echo '<div class="col-lg-10 col-md-8 col-12 col-xx  n-' . get_row_index() . '">';
                            
                        } else {

                            echo '<div class="col-lg-6 col-md-8 col-12 col-xx  n-' . get_row_index() . '">';
                            
                        } ?>

                            <div class="team-amount__container">

                                <span>
                                    <?php the_sub_field('acf_about_team_amount_name'); ?>
                                </span>

                                <span>
                                    <?php the_sub_field('acf_about_team_amount_content'); ?>
                                </span>
                                
                            </div>
                        </div>
                        
                    <?php endwhile; ?> 

                <?php endif; ?>

        </div>
    </div>
</div>