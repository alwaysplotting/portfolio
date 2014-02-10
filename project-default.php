<?php
/**
 * The template part for displaying the default project layout.
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

		$udt_blog_image = '<div class="featured-media-container clearfix">
			<div class="flexslider">
				<ul class="slides">';

			foreach ( $attachments as $attachment ) {
				$slide_display_opt = get_post_meta( $attachment->ID, '_udt_slide_display_opt', true );
				$slide_link_url = get_post_meta( $attachment->ID, '_udt_slide_link_url', true );

				if($slide_display_opt=='slider') {
					$udt_blog_image .= '<li>';
					
					if($slide_link_url!='') {
						$udt_blog_image .= '<a href="'.$slide_link_url.'">';
					}
					
					$udt_blog_image .= wp_get_attachment_image($attachment->ID,'udt-full-width-image');
					
					if($slide_link_url!='') {
						$udt_blog_image .= '</a>';
					}
					
					if(wp_get_attachment_metadata($attachment->ID)) {
						if($attachment->post_excerpt !='') {
							$udt_blog_image .= '<p class="flex-caption">'.$attachment->post_excerpt.'</p>';
						} else if($attachment->post_content !='') {
							$udt_blog_image .= '<p class="flex-caption">'.$attachment->post_content.'</p>';
						}
					}
					
					$udt_blog_image .= '</li>'."\n";
					
					$udt_slider_count++;
				}

			}

		$udt_blog_image .= '</ul>
			</div>
		</div>';

		if($udt_slider_count>1) {
			echo $udt_blog_image;
		} else if($udt_slider_count==1) {
			$udt_blog_image = '<div class="featured-media-container clearfix">';
				$udt_blog_image .= 'Please upload multiple images to the slider.';
			$udt_blog_image .= '</div>';
			echo $udt_blog_image;
		} else if ( has_post_thumbnail() ) { // Check if the post has a Post Thumbnail assigned to it.
			$slide_display_opt = get_post_meta( get_post_thumbnail_id(), '_udt_slide_display_opt', true );
			$slide_video_url = get_post_meta( get_post_thumbnail_id(), '_udt_slide_video_url', true );
			
			if($slide_display_opt=='video-youtube' || $slide_display_opt=='video-vimeo') {
				$udt_blog_image = '<div class="featured-media-container clearfix">';
				$udt_blog_image .= '<div class="video">';
				if($slide_display_opt=='video-youtube') {
					$udt_blog_image .= '<iframe src="http://www.youtube.com/embed/'.$slide_video_url.'?autohide=2&amp;disablekb=0&amp;fs=1&amp;hd=0&amp;loop=0&amp;rel=0&amp;showinfo=0&amp;showsearch=0&amp;wmode=transparent" frameborder="0" allowfullscreen></iframe>';
				} else if($slide_display_opt=='video-vimeo') {
					$udt_blog_image .= '<iframe src="http://player.vimeo.com/video/'.$slide_video_url.'?title=0&amp;byline=0&amp;portrait=0&amp;color='.returnOptionValue('vimeo_controls_color').'&amp;autoplay=0&amp;loop=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
				}
				$udt_blog_image .= '</div>';
				$udt_blog_image .= '</div>';

			} else {
				$udt_blog_image = '<div class="featured-media-container clearfix">'.get_the_post_thumbnail($post->ID,'udt-full-width-image').'</div>';
			}
			
			echo $udt_blog_image;
		}

	} else if ( has_post_thumbnail() ) { // Check if the post has a Post Thumbnail assigned to it.
		$udt_blog_image = '';
			
		$slide_display_opt = get_post_meta( get_post_thumbnail_id(), '_udt_slide_display_opt', true );
		$slide_video_url = get_post_meta( get_post_thumbnail_id(), '_udt_slide_video_url', true );
		
		if($slide_display_opt=='video-youtube' || $slide_display_opt=='video-vimeo') {
			$udt_blog_image = '<div class="featured-media-container clearfix">';
			$udt_blog_image .= '<div class="video">';
			if($slide_display_opt=='video-youtube') {
				$udt_blog_image .= '<iframe src="http://www.youtube.com/embed/'.$slide_video_url.'?autohide=2&amp;disablekb=0&amp;fs=1&amp;hd=0&amp;loop=0&amp;rel=0&amp;showinfo=0&amp;showsearch=0&amp;wmode=transparent" frameborder="0" allowfullscreen></iframe>';
			} else if($slide_display_opt=='video-vimeo') {
				$udt_blog_image .= '<iframe src="http://player.vimeo.com/video/'.$slide_video_url.'?title=0&amp;byline=0&amp;portrait=0&amp;color='.returnOptionValue('vimeo_controls_color').'&amp;autoplay=0&amp;loop=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
			}
			$udt_blog_image .= '</div>';
			$udt_blog_image .= '</div>';

		} else {
			$udt_blog_image = '<div class="featured-media-container clearfix">'.get_the_post_thumbnail($post->ID,'udt-full-width-image').'</div>';
		}
		
		echo $udt_blog_image;
	}

	echo '<section class="pages clearfix">';
		the_content('',FALSE);
	echo '</section>';

	?>

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