<section id="section-<?php echo get_row_index(); ?>"  class="banner--landing banner--contacts section banner js-viewport-checker checker-visible full-visible">

        

        <?php if(  get_sub_field('acf_contacts_options') == 'show_video' ){ ?>
           
            <div id="bannerVideoId" data-src="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" data-srcfallback="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" class="banner__video">
                <video autoplay="autoplay" playsinline muted loop="loop" class="bv-video" data-prevent-transform="true">
                    <source src="<?php echo get_sub_field('acf_contacts_video') ?>" type="video/mp4">
                </video>
            </div>

        <?php } else { ?>
                
            <div id="bannerVideoId" data-src="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" data-srcfallback="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" class="banner__video">
                <div class="bv-video-wrap bv-video-wrap-0" style="position: relative; overflow: hidden; z-index: 10;">
                    <video autoplay="autoplay" playsinline muted loop="loop" poster="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" class="bv-video" preload="metadata" style="position: absolute; z-index: 1;">
                        <source src="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        <?php } ?>


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
                              
                                <?php if( get_sub_field('acf_contacts_list_link') ){ ?>
                                    <a href="<?php echo get_sub_field('acf_contacts_list_link') ?>">
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