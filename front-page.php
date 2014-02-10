<?php
/**
 * The template for the front page.
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */

get_header(); ?>

<?php

$blog_layout=returnOptionValue('blog_index_layout');

if(is_home() && $blog_layout=='grid') { ?>
	<div id="content-wrapper" class="grid-layout">
<?php } else { ?>
	<div id="content-wrapper">
<?php } ?>

	<?php if(is_home()) : ?>

		<section class="pages clearfix">

			<div id="section-title">
				<?php echo stripslashes(html_entity_decode(returnOptionValue('blog_title'))); ?>
			</div>

			<?php

			if(is_search()) {
				get_template_part( 'loop', 'index-regular' );
			} else {
				if($blog_layout=='regular') {
					get_template_part( 'loop', 'index-regular' );
				} else if($blog_layout=='grid') {
					get_template_part( 'loop', 'index-grid' );
				}
			}

			?>

		</section>

	<?php else :

		if ( have_posts() ) while ( have_posts() ) : the_post();

		$udt_page_meta=get_post_meta($post->ID, '_udt_page_meta', true);

		if(isset($udt_page_meta['background_image']) && $udt_page_meta['background_image']!='') {
			$fullscreen_background_image=$udt_page_meta['background_image'];
		}

		?>

		<section class="homepage">

			<!--section title-->
			<div id="section-title">
				<h1><?php
				if(isset($udt_page_meta['display_title']) && $udt_page_meta['display_title']!='') {
					echo $udt_page_meta['display_title'];
				} else {
					the_title();
				}
				?></h1>
			</div>
			<!--end section title-->

			<?php
			if($post->post_content!='') { ?>
				<section class="pages clearfix">

					<?php the_content('',FALSE); ?>

				</section>
			<?php }

			if(returnOptionValue('front_page_layout')=='portfolio-grid') {
				
				$my_args_portfolio = array(
					'post_type' => 'udt_portfolio',
					'numberposts' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'suppress_filters' => false
				);
				$udt_portfolio = get_posts( $my_args_portfolio );
				$count_udt_portfolio = count($udt_portfolio);
				$udt_portfolio_counter = 0;

				if($count_udt_portfolio>0) {

					$porfolio_terms = get_terms( 'portfolio_category' );
					$porfolio_terms_count=0;

					if ( $porfolio_terms && ! is_wp_error( $porfolio_terms ) ) {

						if(returnOptionValue('display_portfolio_filter') == '1') {

							if($post->post_content!='') {
								echo '<div class="portfolio-filter-wrapper portfolio-filter-wrapper-below-content">';
							} else {
								echo '<div class="portfolio-filter-wrapper">';
							}

							echo '<a href="#" title="All" data-category-slug="all" class="active">All</a> / ';

							foreach ( $porfolio_terms as $porfolio_term ) {
								echo '<a href="'. get_term_link($porfolio_term) .'" title="' . esc_attr($porfolio_term->name) . '" data-category-slug="' . esc_attr($porfolio_term->slug) . '">' . $porfolio_term->name . '</a>';
								$porfolio_terms_count++;
								if($porfolio_terms_count < count($porfolio_terms)) { echo ' / '; }
							}

							echo '</div>';

						}

					}

					echo '<div id="grid" class="clearfix">';

					foreach ( $udt_portfolio as $udt_project ) {
						$udt_portfolio_meta=get_post_meta($udt_project->ID, '_udt_portfolio_meta', true);
						
						$project_terms = get_the_terms( $udt_project->ID, 'portfolio_category' );

						$project_categories='';
						if ( $project_terms && ! is_wp_error( $project_terms ) ) {
							$project_categories = array();
							foreach ( $project_terms as $project_term ) {
								$project_categories[] = $project_term->slug;
							}
							$project_categories = join( " ", $project_categories );
						}

						$display_media_size='udt-portfolio-thumb-1';
						$thumb_type='thumb-type-1';
						if (has_post_thumbnail($udt_project->ID)) {
							if(isset($udt_portfolio_meta['display_media_size']) && $udt_portfolio_meta['display_media_size']!='') {
								$display_media_size=$udt_portfolio_meta['display_media_size'];
								if($display_media_size=='udt-portfolio-thumb-1') {
									$thumb_type='thumb-type-1';
								} else if($display_media_size=='udt-portfolio-thumb-2') {
									$thumb_type='thumb-type-2';
								} else if($display_media_size=='udt-portfolio-thumb-3') {
									$thumb_type='thumb-type-3';
								} else if($display_media_size=='udt-portfolio-thumb-4') {
									$thumb_type='thumb-type-4';
								}
							}
							$project_thumbnail_id = get_post_thumbnail_id( $udt_project->ID );
							$image_src=wp_get_attachment_image_src($project_thumbnail_id, $display_media_size);
							$display_media_caption='';
							if(isset($udt_portfolio_meta['display_media_caption']) && $udt_portfolio_meta['display_media_caption']!='') {
								$display_media_caption='data-caption="'.$udt_portfolio_meta['display_media_caption'].'"';
							}
							echo '<div class="thumb '.$thumb_type.'" data-project-categories="'.$project_categories.'">
								<a href="'.get_permalink($udt_project->ID).'" title="'.esc_attr($udt_project->post_title).'" '.$display_media_caption.'>
									<img src="'.$image_src[0].'" alt="'.esc_attr($udt_project->post_title).'">
								</a>
							</div>';
						}
					}

					echo '</div>';
				}
			}

		endwhile; // end of the loop. ?>

		</section>

	<?php endif; ?>

</div>

<?php get_footer(); ?>