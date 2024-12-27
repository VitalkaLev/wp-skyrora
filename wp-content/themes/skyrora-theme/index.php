<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swipeks
 */

get_header();
?>

test
	<main>
	
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
						<div class="page_title">
							<h1><?php single_post_title(); ?></h1>
						</div>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					var_dump(get_post_type());

					if( get_post_type() == 'offers' ){

						get_template_part( 'template-parts/content-service' );

					} else {

						get_template_part( 'template-parts/content' );

					}
					

					

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		

	</main>
	

<?php
get_sidebar();
get_footer();
