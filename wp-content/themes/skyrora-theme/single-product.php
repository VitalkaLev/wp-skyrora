<?php get_header(); ?>

<main class="main"> 

    <?php  while ( have_rows('acf_product_flexible') ) : the_row(); 
                    
        if( get_row_layout() == 'acf_component_product_banner') { 

            get_template_part('components/product/banner/component'); 

    } endwhile; ?>

    <section class="section section-constructor">

        <?php  while ( have_rows('acf_product_flexible') ) : the_row(); 
                        
            if( get_row_layout() == 'acf_component_product_contents') { 

                get_template_part('components/product/card/component'); 


            } 
            
            if( get_row_layout() == 'acf_component_social_links') { 

                get_template_part('components/page/social-links/component'); 


            }


            if( get_row_layout() == 'acf_component_product_button_share') { 

                get_template_part('components/page/social-share/component'); 


            }


            
                

            if( get_row_layout() == 'acf_component_page_one_column') { 

                get_template_part('components/page/table/templates/one-column'); 

            } 


            if( get_row_layout() == 'acf_component_page_two_column') { 
            
                get_template_part('components/page/table/templates/two-column'); 

            } 



            if( get_row_layout() == 'acf_component_page_three_column') { 
            
                get_template_part('components/page/table/templates/three-column'); 

            } 

            if( get_row_layout() == 'acf_component_product_list_records') { 
            
                get_template_part('components/page/records.list/component'); 

            } 


            

            if( get_row_layout() == 'acf_component_product_list_technologies') { 
            
                get_template_part('components/page/technology.list/component'); 

            } 
            

            if( get_row_layout() == 'acf_component_product_contents_slider') { 

                get_template_part('components/page/slider/component'); 
    
                
    
            } if( get_row_layout() == 'acf_component_product_contents_title') { 
    
                get_template_part('components/product/title/component'); 


                
            } if( get_row_layout() == 'acf_component_product_contents_content') { 
    
                get_template_part('components/product/paragraph/component'); 



            } if( get_row_layout() == 'acf_component_product_contents_list') { 
    
                get_template_part('components/product/list/component'); 

                
            } if( get_row_layout() == 'acf_component_product_contents_link') { 
    
                get_template_part('components/page/link/component'); 


                
            } if( get_row_layout() == 'acf_component_product_contents_image') { 
    
                get_template_part('components/product/image/component'); 

                
            

                
            } if( get_row_layout() == 'acf_component_product_contents_list_stages') { 
    
                get_template_part('components/product/stages.list/component'); 


                
            } if( get_row_layout() == 'acf_component_product_contents_list_launch_pad') { 
    
                get_template_part('components/product/launch-pad.list/component'); 


                
            } if( get_row_layout() == 'acf_component_product_contents_quote') { 
    
                get_template_part('components/page/quote/component'); 


            } if( get_row_layout() == 'acf_component_title_others') { 
    
                get_template_part('components/page/title/component'); 

    
            } if( get_row_layout() == 'acf_component_product_contents_video') { 
    
                get_template_part('components/product/video/component'); 



            } if( get_row_layout() == 'acf_component_product_contents_table') { 
    
                get_template_part('components/product/table/component'); 
        
        

            } if( get_row_layout() == 'acf_component_product_look') { 

                get_template_part('components/product/products-look.list/component'); 

        } endwhile; ?>
    </section>

    <?php while ( have_rows('acf_product_flexible') ) : the_row(); 

        if( get_row_layout() == 'acf_component_product_news') { 

            get_template_part('components/page/news.list/component'); 

        } 

    endwhile; ?>
        
</main>	

      <footer class="footer">
        <div class="container">
          <div class="footer__content">
            
          <div class="breadcrumbs">
                  <div class="breadcrumbs__inner">
                    <ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                      <li class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="link link_gr h-link-seo" href="<?=HOME?>" itemprop="item">
                          <span itemprop="name">Skyrora</span>
                        </a>
                        <svg width="1em" height="1em" class="icon icon-arrow-right">
                          <use xlink:href="/wp-content/themes/skyrora-theme/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                        </svg>
                        <meta itemprop="position" content="1">
                      </li>
                      <li>

                        <a href="<?=HOME?>/products">
                          <span>Products</span>
                        </a>
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

                    <a href="<?php echo get_sub_field('acf_footer_social_link', 'option'); ?>">
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
                  <span class="popup-main__ttl">Book a flight</span>
                  <div role="form" class=" wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response" hidden>
                      <p role="status" aria-live="polite" aria-atomic="true" ></p>
                      <ul></ul>
                    </div>
                    <form action="/#wpcf7-f5-o1" method="post" class="popup-form js-form-check wpcf7-form init" novalidate="novalidate" data-status="init" style="width: 100%;">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="5">
                        <input type="hidden" name="_wpcf7_version" value="5.4.1">
                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-o1">
                        <input type="hidden" name="_wpcf7_container_post" value="0">
                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                      </div>
                      <div class="popup-form__inner">
                        <div class="popup-form__row">

                          <div class="form-group">
                            <div class="input-wrap">
                              <label for="your_name" class="input-label"><span>Name</span><sup>*</sup></label>
                              <input id="your_name" type="text" name="your-name" size="40" required="required" class="form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-text" aria-invalid="false" placeholder="Your Name">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="input-wrap">
                              <label for="your_company" class="input-label"><span>Company</span><sup>*</sup></label>
                              <input id="your_company" type="text" name="your-company" placeholder="Company Name" required="required"  class="wpcf7-text form-control wpcf7-form-control wpcf7-validates-as-required wpcf7-validates-as-company" aria-invalid="false" />
                            </div>
                          </div>
                        </div>
                        <div class="popup-form__row">
                          <!-- <div class="select-group"><span class="select-ttl">Country</span>
                            <select name="your-country" class="wpcf7-form-control js-select2 wpcf7-select country_auto" aria-invalid="false" >
                              <option value="USA" data-type="USA">USA</option>
                              <option value="UK" data-type="UK">UK</option>
                              <option value="China" data-type="China">China</option>
                              <option value="Canada" data-type="Canada">Canada</option>
                            </select>
                          </div> -->
                          <div class="form-group">
                            <div class="input-wrap">
                              <label for="your_email" class="input-label"><span>Email</span><sup>*</sup></label>
                              <input type="text" name="your-email" placeholder="Enter your Email" required="required" id="your_email" class="wpcf7-email form-control wpcf7-form-control wpcf7-validates-as-required wpcf7-validates-as-email" aria-invalid="false" />
                            </div>
                          </div>
                        </div>
                        <div class="popup-form__row">
                          <div class="form-group">
                            <div class="input-wrap">
                              <label for="your_phone" class="input-label"><span>Phone</span><sup>*</sup></label>
                              <input type="text" name="your-phone" placeholder="Enter Phone Number" required="required" id="your_phone" class="wpcf7-tel form-control wpcf7-form-control wpcf7-validates-as-required wpcf7-validates-as-tel" aria-invalid="false" />
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="your_message" class="input-label">message</label>
                            <textarea name="your-message" placeholder="Enter your Message" required="required" id="your_message" class="form-control wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required wpcf7-validates-as-textarea" aria-invalid="false"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="popup-form__submit">
                        <button type="submit" class="wpcf7-form-control wpcf7-submit button button--blue" aria-invalid="false">
                          <span>Order</span>
                          <svg width="1em" height="1em" class="icon icon-arrow-right ">
                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                          </svg>
                        </button>
                      </div>
                      <!-- <span class="ajax-loader" style="display: none;"></span> -->
                      <div class="wpcf7-response-output" aria-hidden="true" hidden></div>
                    </form>
                  </div>
                </div>
              
                <div class="container wp--popup-success" style="display:none;">
                  <div class="popup-banner">
                    <span class="popup-main__ttl">
                      your email has been successfully sent
                    </span>
                    <a rel="nofollow" href="<?=HOME?>/contacts" class="button button--blue">
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
              <div role="form" class="wpcf1745" id="wpcf7-f1745-o2" lang="en-US" dir="ltr" style="width: 100%;">
                <div class="screen-reader-response" hidden>
                  <p role="status" aria-live="polite" aria-atomic="true">Thank you for your message. It has been sent.</p>
                </div>
                <div class="container">
                  <span class="popup-main__ttl">INDICATE INTEREST</span>
                  <form action="/#wpcf7-f1745-o2" method="post" class="popup-form js-form-check wpcf7-form init" data-status="init" style="width: 100%;">
                    <div style="display: none;">
                      <input type="hidden" name="_wpcf7" value="1745">
                      <input type="hidden" name="_wpcf7_version" value="5.4.1">
                      <input type="hidden" name="_wpcf7_locale" value="en_US">
                      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1745-o2">
                      <input type="hidden" name="_wpcf7_container_post" value="0">
                      <input type="hidden" name="_wpcf7_posted_data_hash">
                    </div>
                    <div class="popup-form__inner">
                      <div class="popup-form__row">

                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="i_name" class="input-label"><span>Name</span><sup>*</sup></label>
                            <input type="text" name="i-name" size="40" id="i_name" class="form-control wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Name">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="i_company" class="input-label"><span>Company</span><sup>*</sup></label>
                            <input type="text" name="i-company" placeholder="Company Name" required="required" id="i_company" class="wpcf7-text form-control wpcf7-form-control" aria-invalid="false" />
                          </div>
                        </div>
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
                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="i_email" class="input-label"><span>Email</span><sup>*</sup></label>
                            <input type="text" name="your-email" placeholder="Enter your Email" required="required" id="i_email" class="wpcf7-email form-control wpcf7-form-control" aria-invalid="false" />
                          </div>
                        </div>
                      </div>
                      <div class="popup-form__row">
                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="i_phone" class="input-label"><span>Phone</span><sup>*</sup></label>
                            <input type="text" name="i-phone" placeholder="Enter Phone Number" required="required" id="i_phone" class="wpcf7-tel form-control wpcf7-form-control" aria-invalid="false" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-wrap">
                          <label for="i_message" class="input-label">message</label>
                          <textarea name="i-message" placeholder="Enter your Message" required="required" id="i_message" class="form-control wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="popup-form__submit">
                      <button type="submit" class="wpcf7-form-control wpcf7-submit button button--blue" aria-invalid="false">
                        <span>Order</span>
                        <svg width="1em" height="1em" class="icon icon-arrow-right ">
                          <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                    <span class="ajax-loader"></span>
                    <div class="wpcf7-response-output" aria-hidden="true" hidden>Thank you for your message. It has been sent.</div>
                  </form>
                </div>
              </div>
              <div class="container wp--popup-success" hidden>
                  <div class="popup-banner">
                    <span class="popup-main__ttl">
                      your email has been successfully sent
                    </span>
                    <a rel="nofollow" href="<?=HOME?>/contacts/" class="button button--blue">
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

      <div id="popup-mail" class="popup-layout js-popup-content">
        <div class="popup-wrap">
          <div class="popup-inner">
            <div class="popup-top">
              <div class="container">
                <div class="popup-top__row">
                  <a href="<?=HOME?>" class="popup-top__logo">
                    <svg width="1em" height="1em" class="icon icon-logo ">
                      <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
                    </svg>
                  </a>
                  <button type="button" class="popup-top__close js-popup-close">
                    <svg width="1em" height="1em" class="icon icon-close ">
                      <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-close"></use>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="popup-main">
                <div role="form" class="wpcf1714" id="wpcf7-f1714-o3" lang="en-US" dir="ltr" style="width: 100%;">
                  <div class="screen-reader-response" hidden>
                    <p role="status" aria-live="polite" aria-atomic="true">Thank you for your message. It has been sent.</p>
                  </div>
                  <div class="container"><span class="popup-main__ttl">mail to us</span>
                    <form action="/#wpcf7-f1714-o3" method="post" class="popup-form popup-form--small js-form-check wpcf7-form init" data-status="init" style="width: 100%;">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="1714">
                        <input type="hidden" name="_wpcf7_version" value="5.4.1">
                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1714-o3">
                        <input type="hidden" name="_wpcf7_container_post" value="0">
                        <input type="hidden" name="_wpcf7_posted_data_hash">
                      </div>
                      <div class="popup-form__fields">
                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="m_name" class="input-label"><span>Name</span><sup>*</sup></label>
                            <input type="text" name="m-name" placeholder="Your name" required="required" id="m_name" class="form-control wpcf7-form-control wpcf7-text" aria-invalid="false">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="m_email" class="input-label"><span>Email</span><sup>*</sup></label>
                            <input type="email" name="m-email" placeholder="Enter your Email" required="required" id="m_email" class="form-control wpcf7-form-control wpcf7-email" aria-invalid="false">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="m_subject" class="input-label"><span>Enter subject</span><sup>*</sup></label>
                            <input type="text" name="m-subject" placeholder="Your Subject" required="required" id="m_subject" class="form-control wpcf7-form-control wpcf7-text" aria-invalid="false">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-wrap">
                            <label for="m_message" class="input-label">Message</label>
                            <textarea name="m-message" placeholder="Enter your Message" required="required" id="m_message" class="form-control wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="popup-form__submit">
                        <button type="submit" class="wpcf7-form-control wpcf7-submit button button--blue" aria-invalid="false">
                          <span>Send</span>
                          <svg width="1em" height="1em" class="icon icon-arrow-right ">
                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
                          </svg>
                        </button>
                      </div>
                      <span class="ajax-loader"></span>
                      <div class="wpcf7-response-output" aria-hidden="true" hidden>Thank you for your message. It has been sent.</div>
                    </form>
                  </div>
                </div>
                <div class="container wp--popup-success" style="display:none;">
                  <div class="popup-banner">
                    <span class="popup-main__ttl">
                      your email has been successfully sent
                    </span>
                    <a rel="nofollow" href="<?=HOME?>/contacts" class="button button--blue">
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
   
