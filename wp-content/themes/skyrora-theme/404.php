<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package swipeks
 */

get_header(); ?>


<div class="l-wrapper">
      <main class="main main--error">
        <div class="main-error__top">
          <a href="<?=HOME?>">
            <svg width="1em" height="1em" class="icon icon-logo ">
              <use xlink:href="<?=THEME?>s/images/useful/svg/theme/symbol-defs.svg#icon-logo"></use>
            </svg></a>
          </div>
        <div class="main-error__middle">
          <span class="main-error__middle-num">4</span>
          <span class="main-error__middle-txt">PAGE NOT FOUND</span>
          <span class="main-error__middle-num">4</span>
        </div>
        
      </main> 
    </div>

<?php get_footer(); ?> 
     
      
    

