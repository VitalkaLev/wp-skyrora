<?php
// add_action( 'wp_enqueue_scripts', 'swipex_loadmore_scripts' );
 
// function swipex_loadmore_scripts() {
	
// }

//  load 

add_action( 'wp_ajax_load-more', 'swipex_loadmore' );
add_action( 'wp_ajax_nopriv_load-more', 'swipex_loadmore' );
 
function swipex_loadmore() {
 
	$count = $_POST[ 'count' ];
	$offset = $_POST['offset'];
	
	$offset = $offset * 10;
	
	$shop_args = [
		'numberposts' => 10,
		'post_type' => 'press',
		'orderby' => 'date', 
		'order' => 'DESC',
		'post_status' => 'publish',
		'suppress_filters' => false,
		'offset' => $offset,
	];
	$index = 1;
	$press_posts = new WP_Query($shop_args);
	if( $press_posts->have_posts() ): ?>
		<?php while ( $press_posts->have_posts() ) : $press_posts->the_post(); 
		setup_postdata($press_posts);
		$press_id = get_the_id($press_posts); 
		
			if( $index <= 2 || ( $index >= 6 && $index <= 7 ) ){ ?>

				<div class="col-lg-12 col-md-12 col-24 index-<?php echo $index?>">
					<?php if( get_field('ac_post_advanced_link_choice', $press_id ) == 'yes' ){ ?>
						<a href="<?php echo get_field('ac_post_advanced_link', $press_id)  ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $press_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
					<?php } else { ?>
						<a href="<?php echo get_the_permalink($press_id); ?>" class="news-banner" <?php if( get_field('ac_post_advanced_link_tab', $press_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
					<?php } ?>  
							<div class="news-banner__picture">
								<div class="h-object-fit">
									<picture>
										<source srcset="<?php echo get_the_post_thumbnail_url($press_id , 'large'); ?>" type="image/webp" />
										<source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($press_id , 'large'); ?>"/>
										<?php echo wp_get_attachment_image(get_post_thumbnail_id($press_id , 'large')); ?>
									</picture>
								</div>
							</div>
							<div class="news-banner__info">
								<div class="news-banner__info-top">
									<?php 
										$tags = get_the_tags($press_id);

										if( !empty($tags) ){
											foreach( $tags as $tag ){
												echo '<span>#' . $tag->name . '</span>';
											}
										}
									?>
								</div>
								<div class="news-banner__info-main">
									<h4>
										<?php echo get_the_title($press_id); ?>
									</h4>
									<time datetime="<?php echo get_the_date('Y-m-d' , $press_id); ?>">
										<?php echo get_the_date('d.m.Y' , $press_id); ?>
									</time>
								</div>
							</div>
						</a>
				</div>

			<?php } 

	
			elseif( ( $index >= 3 && $index <= 5 )  || $index >= 8 )  { ?>

				<div class="col-lg-8 col-md-12 col-24 index-<?php echo $index?>">

					<?php if( get_field('ac_post_advanced_link_choice', $press_id ) == 'yes' ){ ?>
						<a href="<?php echo get_field('ac_post_advanced_link', $press_id)  ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $press_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
					<?php } else { ?>
						<a href="<?php echo get_the_permalink($press_id); ?>" class="news-item" <?php if( get_field('ac_post_advanced_link_tab', $press_id) == 'yes' ){ echo 'target="_blank"'; } ?>>
					<?php } ?>  

						<div class="news-item__picture">
							<div class="h-object-fit">
								<picture>
									<source srcset="<?php echo get_the_post_thumbnail_url($press_id, 'large'); ?>" type="image/webp" />
									<source media="(min-width: 769px)" srcset="<?php echo get_the_post_thumbnail_url($press_id, 'large'); ?>"/>
									<?php echo wp_get_attachment_image(get_post_thumbnail_id($press_id) , 'large'); ?>
								</picture>
							</div>
						</div>
						<div class="news-item__info">
							<div class="news-item__info-top">
								<?php 
									$tags = get_the_tags($press_id);

									if( !empty($tags) ){
										foreach( $tags as $tag ){
											echo '<span>#' . $tag->name . '</span>';
										}
									}
								?>
							</div>
							<div class="news-item__info-main">
								<h4>
									<?php echo get_the_title($press_id); ?>
								</h4>
								<time datetime="<?php echo get_the_date('Y-m-d' , $press_id); ?>">
									<?php echo get_the_date('d.m.Y' , $press_id); ?>
								</time>
							</div>
						</div>
					</a>
				</div>

			<?php } 

			$index++;

		endwhile; wp_reset_postdata(); ?>
		
	
	<?php endif;  

	
	die;
 
}