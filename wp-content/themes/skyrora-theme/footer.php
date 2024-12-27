<?php $theme_locations = get_nav_menu_locations(); ?>
      <footer class="footer">
        <div class="container">
          <div class="footer__content">
            <?php if( 
                    !is_home() and 
                    !is_front_page()  and  
                    !is_singular('post') and 
                    !is_singular('product') and
                    !is_singular('list_technology') and
                    !is_singular('list_vacancy') and
                    !is_singular('personal') and
                    !is_paged()
                  ){ ?>
              <div class="breadcrumbs">
                <div class="breadcrumbs__inner">
                    <?php 
                        the_breadcrumbs();
                    ?>
                </div>
              </div>
              <?php } else { ?>
                <?php if( !is_home() and !is_front_page() and !is_singular('post') and !is_paged() ){ ?>
                  <div class="breadcrumbs">
                    <div class="breadcrumbs__inner">
                      <ul class="breadcrumbs__list" itemtype="http://schema.org/BreadcrumbList">
                        <li class="breadcrumb__item" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                          <a class="link link_gr h-link-seo" href="<?=HOME?>" itemprop="item">
                            <span itemprop="name">Skyrora</span>
                          </a>
                          <svg width="1em" height="1em" class="icon icon-arrow-right">
                            <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                          </svg>
                          <meta itemprop="position" content="1">
                        </li>
                        <li>

                          <?php if(is_singular('product') ){ ?>
                            <a href="<?=HOME?>/products/">
                              <span>Products</span>
                            </a>
                          <?php } ?>

                          <?php if(is_singular('list_technology') ){ ?>
                            <a href="<?=HOME?>/technology/">
                              <span>Technology</span>
                            </a>
                          <?php } ?>

                          <?php if(is_singular('list_vacancy') ){ ?>
                            <a href="<?=HOME?>/career/">
                              <span>SPACE CAREERS</span>
                            </a>
                          <?php } ?>

                          <?php if(is_singular('personal') ){ ?>
                            <a href="<?=HOME?>/who-we-are/">
                              <span>About us</span>
                            </a>
                          <?php } ?>

                          <svg width="1em" height="1em" class="icon icon-arrow-right">
                            <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                          </svg>
                        </li>
                        
                        <li class="breadcrumb__item">
                          <span class="breadcrumbs__current"><?=get_the_title();?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                <?php } 
                    if( is_paged() ){ ?>
                      <div class="breadcrumbs breadcrumbs--archive">
                      <div class="breadcrumbs__inner">
                      <ul class="breadcrumbs__list" itemtype="http://schema.org/BreadcrumbList">
                        <li class="breadcrumb__item" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                          <a class="link link_gr h-link-seo" href="<?=HOME?>" itemprop="item" aria-label="breadcrumbs">
                            <span itemprop="name">Skyrora</span>
                          </a>
                          <svg width="1em" height="1em" class="icon icon-arrow-right">
                            <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                          </svg>
                          <meta itemprop="position" content="1">
                        </li>
                        <li>
                            <a href="<?=HOME?>/blog" aria-label="breadcrumbs">
                              <span>Media</span>
                            </a>
                          <svg width="1em" height="1em" class="icon icon-arrow-right">
                            <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                          </svg>
                        </li>
                        
                        <li class="breadcrumb__item">
                          
                            <?php if( is_tag() ){
                              $tag_id = get_queried_object()->term_id; ?>
                              <a href="<?php echo esc_url( get_category_link( $tag_id ) );?>" aria-label="breadcrumbs">
                            <?php } else { 
                              $category_id = get_queried_object()->term_id;  ?>
                              <a href="<?php echo esc_url( get_category_link( $category_id ) );?> " aria-label="breadcrumbs">
                            <?php } ?>

                            <span><?=get_queried_object()->name;?></span>
                          </a>
                          <svg width="1em" height="1em" class="icon icon-arrow-right">
                            <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                          </svg>
                        </li>

                        <li class="breadcrumb__item">
                          <span class="breadcrumbs__current">page-<?=get_query_var('paged');?></span>
                        </li>
                      </ul>
                    </div>
                      </div>
                   <?php  } ?>
              <?php } ?>

            <div class="footer__content-main row">
              
              <?php 
              $columns = get_field('acf_footer_column','option');
              if( $columns ){
                foreach( $columns as $column ){ ?>
                  <div class="js-collapse col-lg-4 col-md-8 col-24">
                    <button type="button" class="footer__content-collapseMobileBtn js-collapse-btn" aria-label="footer collapse">
                      <span>
                        <?php 
                          echo $column['acf_footer_menu_list'][0]['acf_footer_page_name']; 
                        ?>
                      </span>
                      <svg width="1em" height="1em" class="icon icon-down ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-down"></use>
                      </svg>
                    </button>
                    <ul class="js-collapse-content">
                      <?php 
                      if( $column['acf_footer_menu_list'] ){
                        foreach( $column['acf_footer_menu_list'] as $item ){ ?>
                          <li>
                            <?php if( !empty($item['acf_footer_page_url']) ){ ?>
                              <a href="<?php echo esc_url($item['acf_footer_page_url']); ?>" aria-label="footer-nav">
                                <?php echo esc_html($item['acf_footer_page_name']); ?>
                              </a> 
                            <?php } else { ?>
                              <span>
                                <?php echo esc_html($item['acf_footer_page_name']); ?>
                              </span>
                            <?php } ?>
                          </li>
                        <?php } 
                      } ?>
                    </ul>
                  </div>
                <?php } 
              }?>
              
            </div>
            <div class="footer__content-bottom">
            <span>
              <?php the_field('acf_footer_copyright' , 'option'); ?>
            </span>
              <div class="content-media">
                <?php 
                
                if( have_rows('acf_footer_social','option') ){
                  while( have_rows('acf_footer_social','option') ) { the_row(); 
                  $icon = get_sub_field('acf_footer_social_icon', 'option'); ?>

                  <a href="<?php echo get_sub_field('acf_footer_social_link', 'option'); ?>" aria-label="social">
                    <svg width="1em" height="1em" class="icon icon-<?php echo $icon; ?>">
                      <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-<?php echo $icon; ?>"></use>
                    </svg>
                  </a>

                <?php } } ?>

              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
<div class="l-modals">

    <div id="popup-book" class="popup-layout js-popup-content">
        <div class="popup-wrap">
            <div class="popup-inner">
                <div class="popup-top">
                    <div class="container">
                        <div class="popup-top__row">
                            <a href="<?=HOME?>" class="popup-top__logo" aria-label="logo">
                                <svg width="1em" height="1em" class="icon icon-logo ">
                                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                                </svg>
                            </a>
                            <button type="button" class="popup-top__close js-popup-close" aria-label="close">
                                <svg width="1em" height="1em" class="icon icon-close ">
                                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div> 
                <div class="popup-main">          
                    <div class="container">
                        <div role="form" class="wpcf7" id="wpcf7-f5-o2" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                              <p role="status" aria-live="polite" aria-atomic="true"></p> 
                              <ul></ul>
                            </div>
                            <span class="popup-main__ttl">Book a flight</span>
                            <form action="/#wpcf7-f5-o2" method="post" class="popup-form js-form-check wpcf7-form init" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="5">
                                    <input type="hidden" name="_wpcf7_version" value="5.5.6">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-o2">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                    <input type="hidden" name="_wpcf7_recaptcha_response" value="03ANYolqusSrufQ-42x0ZCIq8llZFXsp6yHD914TYUAdfZAIaCb3dVGQexuV6vTe8AteKwFOOaXxi75AIyLXZg2G_U3Xkstfv7uhXaXS0MXBgS6AV5u_thTqz4rSZNkHs_OL_VrEguuz7K7f7ZhyNVktiQI8VpN9WYLXQtKB2t-FZ_Com008qH8LqltwOeTZDfPB7QyDhFKds9HZJWeGsan3o9WzXd23bg38vVBKGSu2P0p1RShMBCzi8n5i0XlKyrCmgtLA_pVuyvjcZtdgKAnyL9n3uSU2iWnkt0eY1xpNFAs3GYhks4XCgofaZ9R4go7HhlhRZjxaIaWNpg46q7GPspHUJS5_f1JM0-WBPHVsPIT_uAK9T9xVnBqQblXyLMQsRqvPkWcJ5ogMjR3ZaKFDptmIwNkd6e7tqte7IhLcSYV-3BCf43KBBnvv2X0kQA-2lvqD5vs2YQnRqMOHLlIPAhfwZyAHqEpAGsZqRrLZWno9ZNH-mayNEmNSM8TeNc6gEcSy8Vjdrm">
                                </div>
                                <div class="popup-form__inner">
                                    <div class="popup-form__row">
                                        <?php 
                                            echo swipex_input_text( 'flight-name', 'Your Name', 'Name', ''); 
                                            echo swipex_input_text( 'flight-company', 'Company Name', 'Company', ''); 
                                        ?>
                                    </div>
                                    <div class="popup-form__row">
                                        <?php echo swipex_input_email( 'flight-email', 'Enter your Email', 'Email', ''); ?>
                                    </div>
                                    <div class="popup-form__row">
                                        <?php echo swipex_input_text( 'flight-phone', 'Enter Phone Number', 'Phone', '');?>
                                    </div>
                                    <?php echo swipex_input_textarea( 'flight-message', 'Enter you message', 'Message', ''); ?>
                                </div>
                                <?php echo swipex_submit('order'); ?>
                                <span class="wpcf7-spinner"></span>
                                <span class="ajax-loader"></span>
                                <div class="wpcf7-response-output" aria-hidden="true">Thank you for your message. It has been sent.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-indicate" class="popup-layout js-popup-content">
        <div class="popup-wrap">
            <div class="popup-inner">
                <div class="popup-top">
                    <div class="container">
                    <div class="popup-top__row">
                        <a href="<?=HOME?>" class="popup-top__logo">
                        <svg width="1em" height="1em" class="icon icon-logo ">
                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                        </svg></a>
                        <button type="button" class="popup-top__close js-popup-close">
                        <svg width="1em" height="1em" class="icon icon-close ">
                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                        </svg>
                        </button>
                    </div>
                    </div>
                </div>
                <div class="popup-main"> 
                    <div class="container"> 
                    <div role="form" class="wpcf7" id="wpcf7-f1745-o2" lang="en-US" dir="ltr" style="width: 100%;">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true">
                                    
                                </p> 
                                <ul></ul>
                            </div>
                            <span class="popup-main__ttl">INDICATE INTEREST</span>
                            <form action="/#wpcf7-f1745-o2" method="post" class="popup-form js-form-check wpcf7-form init" data-status="init" style="width: 100%;">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="1745">
                                <input type="hidden" name="_wpcf7_version" value="5.5.6">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1745-o2">
                                <input type="hidden" name="_wpcf7_container_post" value="0">
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                <input type="hidden" name="_wpcf7_recaptcha_response" value="03ANYolqt4DMmW55XDzk6HqvEOg78VWmaa34ObYIHHtkv3Wj1ScT65QRsGZoWDGNw8f_Y5CtO3l-r_84wGkDidNEtG1X6JXN1qa6OGH1-3oPnLS2JyydO6DNatzO1ycGH2d-eO9D-aNv3tmIoMTC6arrF71GcjBCHgeFJDTLxral28W_OtOfSP2ohrtbh5XbjE2mNo1HES6NyzN8BlNNsZ6iiDLUV74TsHimCesb70bYWCAt-LDJ55Op13oKg9P8JV67ZsVVqYA0--KBbuXbQ25uPAVJYf-iYBvi07YrlrankIR5cweH-pTWMPQX2u8Dhcxq6qsBcDMoc9xFGZSmPkksQZq2teyHfV4Zb3wsiLGgGCTgJZGeaV3AaNBSXZtC3wni8ZeTDzoA19UdNYBgf6RGOaKsC9xnBbV7hC7eEZSKDR2jwvs0FiGffAtkFJLFArp_GJfkDbCVctf3uUqsyZDz3rperwKbFtxkH5NJd8SOmBFGufEdKEZRIXTzwWHYyKqdwA_Ljg9BeUVombNKMhwQMs2lrVeo4zFw">
                            </div>
                            <div class="popup-form__inner">
                                <div class="popup-form__row">
                                    <?php 
                                        echo swipex_input_text( 'interest-name', 'Your Name', 'Name', ''); 
                                        echo swipex_input_text( 'interest-company', 'Company Name', 'Company', ''); 
                                    ?>
                                </div>
                                <div class="popup-form__row">
                                <!-- <div class="select-group"><span class="select-ttl">Country</span>
                                    <select name="i-country" class="wpcf7-form-control js-select2 wpcf7-select country_auto" aria-invalid="false" >
                                    <option value="USA" data-type="USA">USA</option>
                                    <option value="UK" data-type="UK">UK</option>
                                    <option value="China" data-type="China">China</option>
                                    <option value="Canada" data-type="Canada">Canada</option>
                                    </select>
                                </div> -->
                                    <?php echo swipex_input_email( 'interest-email', 'Enter your Email', 'Email', ''); ?>
                                </div>
                                <div class="popup-form__row">
                                    <?php echo swipex_input_text( 'interest-phone', 'Enter Phone Number', 'Phone', '');?>
                                </div>
                                <?php echo swipex_input_textarea( 'interest-message', 'Enter you message', 'Message', ''); ?>
                            </div>
                            <?php echo swipex_submit('order'); ?>
                            <span class="ajax-loader"></span>
                            <span class="wpcf7-spinner"></span>
                            <div class="wpcf7-response-output" aria-hidden="true" >Thank you for your message. It has been sent.</div>
                            </form>
                        </div>
                        <div class="container wp--popup-success" hidden>
                            <div class="popup-banner">
                                <span class="popup-main__ttl">
                                    your email has been successfully sent
                                </span>
                                <a href="<?=HOME?>/contacts/" class="button button--blue" aria-label="back">
                                    <span> back to contacts </span>
                                    <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div id="popup-mail" class="popup-layout js-popup-content">
        <div class="popup-wrap">
            <div class="popup-inner">
                <div class="popup-top">
                <div class="container">
                    <div class="popup-top__row">
                    <a href="<?=HOME?>" class="popup-top__logo" aria-label="logo">
                        <svg width="1em" height="1em" class="icon icon-logo ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                        </svg>
                    </a>
                    <button type="button" class="popup-top__close js-popup-close" aria-label="close">
                        <svg width="1em" height="1em" class="icon icon-close ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                        </svg>
                    </button>
                    </div>
                </div>
                </div>
                <div class="popup-main">
                    <div class="container">
                        <div role="form" class="wpcf7" id="wpcf7-f1714-o2" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true">
                                    
                                </p> 
                                <ul></ul>
                            </div>
                            <span class="popup-main__ttl">mail to us</span>
                            <form action="/#wpcf7-f1714-o2" method="post" class="popup-form popup-form--small js-form-check wpcf7-form init" novalidate="novalidate" data-status="init">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="1714">
                                <input type="hidden" name="_wpcf7_version" value="5.5.6">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1714-o2">
                                <input type="hidden" name="_wpcf7_container_post" value="0">
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                <input type="hidden" name="_wpcf7_recaptcha_response" value="03ANYolqv23UtV5qnXMKpTLyOPiq0FJWNT6SZ0BSRuGuxIPCFdS9KvYX1xVavmsTQ7h6i1OSQgbU_lMUMFNAR8yr1L93XmYq-Ui1ZRYjgj3lm7d89mpD8MpE7WaPgDh6hq2Os87WHiSbJZ3urCZAwqF3CT7SNLF8i2fOWXAjFyFrxFD_z1UGMG6oApReTbrsmEDf4xnGWQd3Tn6xiaGqngB1dEYsWXaVHhBqYt1FWQFfhMvUxydzg396mjzc_Pc1X7vNVXAWwL8D-scLauL3_Bq_-sqCamYtVq7qeAst4zaGiX0Ytp9pffH13LR9dIp4swXVWmr0EkVxInpdvglIa6E4LQB7mMwmU1_X_CBI24rhGuD_77Ymab3z_jwHlUCzND1ffCb6aivglyoBZqdonqWYXc4v7Cf7WBCT7WtiAAEXo8CSoRm4rMdnX58U5oJicyexSyNv5k3EidTP45mC5GTPWbd7RqFyIj9n_z1BCEWFk86f-mRXeSf6nyjNyhbJ8WTVRs82a5Lqg9">
                            </div>
                                <div class="popup-form__fields">
                                    <?php 
                                        echo swipex_input_text( 'm-name', 'Your Name', 'Name', ''); 
                                        echo swipex_input_email( 'm-email', 'Your Email', 'Mail', '');
                                        echo swipex_input_text( 'm-subject', 'Your subject', 'Enter subject', '');
                                        echo swipex_input_textarea( 'm-message', 'Enter you message', 'Message', '');
                                    ?>
                                </div>
                                <?php echo swipex_submit('send mail');?>
                                <span class="wpcf7-spinner"></span>
                                <span class="ajax-loader"></span>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                    <div class="container wp--popup-success" style="display:none;">
                        <div class="popup-banner">
                            <span class="popup-main__ttl">
                                your email has been successfully sent
                            </span>
                            <a rel="nofollow" href="<?=HOME?>/contacts" class="button button--blue" aria-label="contacts">
                                <span>
                                    back to contacts
                                </span>
                                <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup-subscribe" class="popup-layout js-popup-content">
        <div class="popup-wrap">
            <div class="popup-inner">
                <div class="popup-top">
                <div class="container">
                    <div class="popup-top__row">
                    <a href="<?=HOME?>" class="popup-top__logo" aria-label="logo">
                        <svg width="1em" height="1em" class="icon icon-logo ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                        </svg>
                    </a>
                    <button type="button" class="popup-top__close js-popup-close" aria-label="close">
                        <svg width="1em" height="1em" class="icon icon-close ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                        </svg>
                    </button>
                    </div>
                </div>
                </div>
                <div class="popup-main">
                    <div class="container">
                        <div role="form" class="wpcf7" id="wpcf7-f3840-o2" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                            <span class="popup-main__ttl">Subscribe <br>to the newsletter</span>
                            <form action="/#wpcf7-f3840-o2/" method="post" class="popup-form popup-form--small js-form-check wpcf7-form init" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="3840">
                                    <input type="hidden" name="_wpcf7_version" value="5.5.6">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f3840-o2">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                    <input type="hidden" name="_wpcf7_recaptcha_response" value="03ANYolqv6bcfaWku1WRJyGAZ8tszQ5Vh-_cFKLGQy_zVymYzYJiC1m6cwby0bLlqAHvY1w4z_wrJmYW-7S3Bg1kiNpYsbO7Rdisza68RBdxHpi2OXPdgVDsSR5zm3oOQn7RcHS5-7dhp5i7irZ3gX52XQkY3Xx6ChcXG5hKTj2LXVHmhjITSEE8FRNihaoZIy1xuxz8smDKGWNkRxcjsABYgnIQozihXRn9ci7GYJG4yLXbohvx_DbNAOE5ME9KcFR39c4sNrZEoz515LWYHM9VzfYeXNznJEkoBOvboiclooPfXIMWPoN99HZvXGDhKLFtK3dL9eCjuaLfYZNYcVaZ11heSPeIgsTlpt3tkkunEdb6avc-NhgvlND7Yh1-VEub1DAQ0jmi_myBb9jCz4WLq4Jw4hDjWhHzx0iPkTheWEsm4tLQC6b4QSVhOLOoRKX1SGty4XE9S9sp3Vr5frwBEaMXu9KGfLsOTCLLUa9uDgaZxbDN33l8tIF0CT0g6-Fip0h9ekZpUB">
                                </div>
                                <div class="popup-form__fields">
                                    <?php   
                                        echo swipex_input_text( 'subscribe-name', 'Your Name', 'Name', ''); 
                                        echo swipex_input_email( 'subdcribe-email', 'Your Email', 'Mail', '');
                                    ?>
                                </div>
                                <?php echo swipex_submit('Subscribe');?>
                                <span class="wpcf7-spinner"></span>
                                <span class="ajax-loader"></span>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>

                    </div>
                    <div class="container wp--popup-success" style="display:none;">
                        <div class="popup-banner">
                            <span class="popup-main__ttl">
                                your email has been successfully sent
                            </span>
                            <a rel="nofollow" href="<?=HOME?>/contacts" class="button button--blue" aria-label="contacts">
                                <span>
                                    back to contacts
                                </span>
                                <svg width="1em" height="1em" class="icon icon-arrow-right ">
                                    <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

  <?php wp_footer(); ?>

  </body>
</html>