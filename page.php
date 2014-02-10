<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */

get_header(); ?>

<!--start content-->
<div id="content-wrapper">

	<section class="pages clearfix">

		<?php
		if ( have_posts() ) while ( have_posts() ) : the_post();
		
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
		
		$udt_page_meta=get_post_meta($post->ID, '_udt_page_meta', true);

		if(isset($udt_page_meta['background_image']) && $udt_page_meta['background_image']!='') {
			$fullscreen_background_image=$udt_page_meta['background_image'];
		}
		
		?>
		
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

					$blog_post_media_type='type-video';
				} else {
					$udt_blog_image = '<div class="featured-media-container clearfix">'.get_the_post_thumbnail($post->ID,'udt-full-width-image').'</div>';

					$blog_post_media_type='type-image';
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

				$blog_post_media_type='type-video';

			} else {
				$udt_blog_image = '<div class="featured-media-container clearfix">'.get_the_post_thumbnail($post->ID,'udt-full-width-image').'</div>';

				$blog_post_media_type='type-image';
			}
			
			echo $udt_blog_image;
		}

		the_content('',FALSE);

		endwhile; // end of the loop. ?>

	</section>

</div>

<?php get_footer(); ?>