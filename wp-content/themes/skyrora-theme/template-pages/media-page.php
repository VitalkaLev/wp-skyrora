<?php /* Template Name: Media-Page */ ?>

<?php get_header(); ?>

	<main class="main main--landing main--white">

        <section class="section section-media-menu">
            <div class="container">
                <div class="media-menu js-tags js-category">
                    <div class="media-menu__categories">
                        <button type="button" class="media-menu__categories-btn js-category-open">
                            <svg width="1em" height="1em" class="icon icon-categories ">
                            <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-categories"></use>
                            </svg>
                            <span>Category</span>
                        </button>
                    <div class="media-menu__categories-content">
                        <ul>
                    
                            <li>
                                <a href="<?=HOME?>/blog/" class="active">ALL news</a>
                            </li>

                            <?php $news_categories = get_field('acf_cat_navigation_menu','option'); 
                            
                            foreach( $news_categories as $cat_item ){ ?>

                                <li>
                                    <a href="<?php echo esc_url( get_term_link($cat_item) ); ?>">
                                        <?php echo $cat_item->name; ?>
                                    </a>
                                </li>

                            <?php }  ?>
                            <?php $page_navigate = get_field('acf_pages_navigation_menu','option'); 
                            foreach( $page_navigate as $page_item ){ ?>
                                <?php if( $page_item->post_name == get_queried_object()->post_name ) { ?>
                                <li>
                                    <a href="<?php echo esc_url( get_page_link($page_item->ID) ); ?>" class="active">
                                        <?php echo $page_item->post_title; ?>
                                    </a>
                                </li>
                                <?php } else { ?>
                                <li>
                                    <a href="<?php echo esc_url( get_page_link($page_item->ID) ); ?>">
                                        <?php echo $page_item->post_title; ?>
                                    </a>
                                </li>
                                <?php } ?>
                            <?php }  ?>
                        </ul>
                    </div>
                    <button type="button" class="media-menu__tags-btn js-tags-open">
                    <span>all TAGs</span>
                        <svg width="1em" height="1em" class="icon icon-arrDown ">
                        <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrDown"></use>
                        </svg>
                    </button>
                    </div>
                    <div class="media-menu__tags">
                        <div class="media-menu__tags-content js-tags-content">
                            <ul>
                                <?php $news_tags = get_field('acf_tag_navigation_menu','option'); 
                                
                                foreach( $news_tags as $tag_item ){ ?>

                                    <li>
                                        <a href="<?php echo esc_url( get_term_link($tag_item->term_id) ); ?>">
                                            #<?php echo $tag_item->name; ?>
                                        </a>
                                    </li>

                                <?php }
                                
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="media-menu__content-category-mobile js-category-content"></div>
                </div>
            </div>
        </section>

    <?php while ( have_rows('acf_all_components') ) : the_row(); 

        if( get_row_layout() == 'acf_component_title_others') { 

            get_template_part('components/page/title/component'); 

        } 
        
        if( get_row_layout() == 'acf_component_news_list') { 

            get_template_part('components/page/news.list/component');   
            
        } 
        

        if( get_row_layout() == 'acf_component_news_cat_others') { 

            get_template_part('components/page/news.list/component'); 
            
        } 
        

        if( get_row_layout() == 'acf_component_product_news') { 

            get_template_part('components/page/news.list/component');    
   
        } 

       
        
        if( get_row_layout() == 'acf_component_twitter') { 

            get_template_part('components/page/twitter/component'); 
            
        } 
    endwhile; ?>
 
    </main>
            
<?php get_footer(); ?>