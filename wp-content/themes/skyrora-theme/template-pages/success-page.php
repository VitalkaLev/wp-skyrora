<?php /* Template Name: Success-Page */ ?>

<?php get_header(); ?>

<?php if( get_field('acf_header_style') == 'opacity'){ ?>
	<main class="main">
<?php } else { ?>
	<main class="main main--landing">
<?php } ?>
        <section id="success-section" class="section">
            <div class="container">
                <?php the_content(); ?>
            </div>
        <section>
    </main>
            
<?php get_footer(); ?>