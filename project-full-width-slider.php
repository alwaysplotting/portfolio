<?php
/**
 * The template part for displaying the full-width slider project layout.
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */

global $udt_post_meta;

?>

<section class="slider-full-width clearfix">

	<!--section title-->
	<div id="section-title">
		<h1><?php
		if(isset($udt_post_meta['display_title']) && $udt_post_meta['display_title']!='') {
			echo $udt_post_meta['display_title'];
		} else {
			the_title();
		}
		?></h1>
	</div>
	<!--end section title-->

	<?php
	$my_args_2 = array(
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_status' => 'inherit',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post_parent' => $post->ID
	);
	$attachments = get_posts( $my_args_2 );
	$count_attachments = count($attachments);
	$udt_slider_count = 0;

	if($count_attachments>1) { // Check if the post has multiple images assigned to it.

		$udt_blog_image = '<div id="epicSlider1" class="epic-slider slider-wrapper">
			<ul id="slides">';

			foreach ( $attachments as $attachment ) {
				$slide_display_opt = get_post_meta( $attachment->ID, '_udt_slide_display_opt', true );
				$slide_link_url = get_post_meta( $attachment->ID, '_udt_slide_link_url', true );

				if($slide_display_opt=='slider') {
					$image_attributes = wp_get_attachment_image_src($attachment->ID,'full');

					$udt_blog_image .= '<li data-image="'.$image_attributes[0].'"';
					if($slide_link_url!='') {
						$udt_blog_image .= ' data-link="'.$slide_link_url.'"';
					}
					$udt_blog_image .= '>';
					
					if(wp_get_attachment_metadata($attachment->ID)) {
						if($attachment->post_excerpt !='') {
							$udt_blog_image .= do_shortcode($attachment->post_excerpt);
						} else if($attachment->post_content !='') {
							$udt_blog_image .= do_shortcode($attachment->post_content);
						}
					}
					
					$udt_blog_image .= '</li>'."\n";
					
					$udt_slider_count++;
				}

			}

		$udt_blog_image .= '</ul>
		</div>';

		if($udt_slider_count>1) {
			echo $udt_blog_image;
		} else if($udt_slider_count==1) {
			$udt_blog_image = '<div id="epicSlider1" class="epic-slider slider-wrapper">';
				$udt_blog_image .= '<span class="errorMsg">Please upload multiple images to the slider.</span>';
			$udt_blog_image .= '</div>';
			echo $udt_blog_image;
		} else if ( has_post_thumbnail() ) { // Check if the post has a Post Thumbnail assigned to it.
			$slide_display_opt = get_post_meta( get_post_thumbnail_id(), '_udt_slide_display_opt', true );
			$slide_video_url = get_post_meta( get_post_thumbnail_id(), '_udt_slide_video_url', true );
			
			$udt_blog_image = '<div class="featured-media-container clearfix">'.get_the_post_thumbnail($post->ID,'full').'</div>';
			
			echo $udt_blog_image;
		}

	} else if ( has_post_thumbnail() ) { // Check if the post has a Post Thumbnail assigned to it.
		$udt_blog_image = '';
			
		$slide_display_opt = get_post_meta( get_post_thumbnail_id(), '_udt_slide_display_opt', true );
		$slide_video_url = get_post_meta( get_post_thumbnail_id(), '_udt_slide_video_url', true );

		$udt_blog_image = '<div class="featured-media-container clearfix">'.get_the_post_thumbnail($post->ID,'full').'</div>';

		echo $udt_blog_image;
	}

	if($post->post_content!='') { ?>
		<section class="pages clearfix">

			<?php the_content('',FALSE); ?>

		</section>
	<?php } ?>

</section>

<?php
// Portfolio pagination
$prev_project = get_previous_post();
$next_project = get_next_post();
$output_pagination='';

if(!empty($next_project) || !empty($prev_project)) {

	$my_args_portfolio_index = array(
		'post_type' => 'page',
		'numberposts' => 1,
		'meta_key' => '_wp_page_template',
		'meta_value' => 'page-udt_portfolio-index.php',
		'post_status' => 'publish'
	);
	$udt_portfolio_index = get_posts( $my_args_portfolio_index );
	if(count($udt_portfolio_index)==1) {
		$back_to_grid_url=get_permalink($udt_portfolio_index[0]->ID);
	} else {
		$back_to_grid_url=home_url();
	}
	
	$output_pagination.='<div id="folio-navigation">
		<ul>';
		if(!empty($prev_project)) {
			$output_pagination.='<li id="prevProject">
				<a href="'. get_permalink( $prev_project->ID ) .'" title="'. $prev_project->post_title .'">'. $prev_project->post_title .'</a>';
		} else {
			$output_pagination.='<li id="prevProject" class="disabled">';
		}
		$output_pagination.='</li>';

		$output_pagination.='<li id="closeProject">
				<a href="'. $back_to_grid_url .'" title="'. __('Back to Grid', 'cartel') .'"></a>
			</li>';

		if(!empty($next_project)) {
		$output_pagination.='<li id="nextProject">
				<a href="'. get_permalink( $next_project->ID ) .'" title="'. $next_project->post_title .'">'. $next_project->post_title .'</a>';
		} else {
			$output_pagination.='<li id="nextProject" class="disabled">';
		}

		$output_pagination.='</li>
		</ul>
	</div>';
	echo $output_pagination;
}

?>