<?php /* Template Name: Test-Page */ ?>

<?php get_header(); ?>

<?php if( get_field('acf_header_style') == 'opacity'){ ?>
	<main class="main">
<?php } else { ?>
	<main class="main main--landing">
<?php }  ?>	

 <?php 
 var_dump( do_shortcode(' [contact-form-7 id="5"] ') );
 echo do_shortcode(' [contact-form-7 id="5"] ');
 
 ?>

    </main>
            
<?php get_footer(); ?>