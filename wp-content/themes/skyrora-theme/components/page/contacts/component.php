<section id="section-<?php echo get_row_index(); ?>"  class="banner--landing banner--contacts section banner js-viewport-checker checker-visible full-visible">

        <?php 
        if( get_sub_field('acf_contacts_options') == 'show_video' ){ 
           
            get_template_part('components/page/contacts/templates/background-video');

        } else {

            get_template_part('components/page/contacts/templates/background');
            
        } ?>


        <div class="container">
            <div class="banner__content banner__content-contacts">
                <div class="banner__content-txt">
                    <span class="title-sub">
                        <?php echo get_sub_field('acf_contacts_subtitle') ?>
                    </span>
                    <h1 class="title-visible title-full-visible main-title-visible">
                        <?php the_title() ?>
                    </h1>
                </div>
                <div class="banner__contacts-list">
                    <ul>
                    
                        <?php while( have_rows('acf_contacts_list') ) : the_row(); ?>

                            <li>
                                <?php if( get_sub_field('acf_contacts_list_title') ){ ?>
                                    <h6>
                                        <?php echo get_sub_field('acf_contacts_list_title') ?>
                                    </h6>
                                <?php } ?>
                              
                                <?php if( get_sub_field('acf_contacts_list_content') ){ ?>
                                    <p>
                                        <?php echo get_sub_field('acf_contacts_list_content') ?>
                                    </p>
                                <?php } ?>
                              
                                <?php if( get_sub_field('acf_contacts_list_link') ){ 
                                    $string = preg_replace('/\s+/', '', get_sub_field('acf_contacts_list_link') ); ?>
                                   
                                    <a href="<?php echo $string ?>">
                                        <?php echo get_sub_field('acf_contacts_list_link_name') ?>
                                    </a>
                                <?php } ?>
                                

                            </li>

                        <?php endwhile; ?>
                    </ul>
                
                <button type="button" data-popup-name="popup-mail" class="button button--blue js-popup-btn">
                    <span>Message us</span>
                    <svg width="1em" height="1em" class="icon icon-arrow-right ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                    </svg>
                </button>
                </div>
            </div>
        </div>
</section>