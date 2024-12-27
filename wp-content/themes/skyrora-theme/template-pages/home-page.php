<?php /* Template Name: Home-Page */ ?>

<?php get_header(); ?>

<?php if( get_field('acf_header_style') == 'opacity'){ ?>
	<main class="main">
<?php } else { ?>
	<main class="main main--landing">
<?php }  ?>	
        <?php get_template_part('components/home-components'); ?>
    </main>
            
<?php get_footer(); ?>