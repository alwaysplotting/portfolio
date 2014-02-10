<?php
/**
 * The Template for displaying all single posts.
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
		
		$udt_post_meta=get_post_meta($post->ID, '_udt_post_meta', true);

		if(isset($udt_post_meta['background_image']) && $udt_post_meta['background_image']!='') {
			$fullscreen_background_image=$udt_post_meta['background_image'];
		}

		?>
			
		<?php if(stripslashes(html_entity_decode(returnOptionValue('blog_title')))) { ?>
			<!--section title-->
			<div id="section-title">
				<?php echo stripslashes(html_entity_decode(returnOptionValue('blog_title'))); ?>
			</div>
			<!--end section title-->
		<?php } ?>
				
		<!--start content left-->
		<div class="content-inner-left">
				
			<!--start post-->
			<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
					
				<div class="blog-post-content">
						
					<?php
					if($count_attachments>1) { // Check if the post has multiple images assigned to it.

						$udt_blog_image = '<div class="blog-post-featured-media">
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
									
									$udt_blog_image .= wp_get_attachment_image($attachment->ID,'post-thumbnail');
									
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
							$udt_blog_image = '<div class="blog-post-featured-media">';
								$udt_blog_image .= 'Please upload multiple images to the slider.';
							$udt_blog_image .= '</div>';
							echo $udt_blog_image;
						} else if ( has_post_thumbnail() ) { // Check if the post has a Post Thumbnail assigned to it.
							$slide_display_opt = get_post_meta( get_post_thumbnail_id(), '_udt_slide_display_opt', true );
							$slide_video_url = get_post_meta( get_post_thumbnail_id(), '_udt_slide_video_url', true );
							
							if($slide_display_opt=='video-youtube' || $slide_display_opt=='video-vimeo') {
								$udt_blog_image = '<div class="blog-post-featured-media">';
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
								$udt_blog_image = '<div class="blog-post-featured-media">'.get_the_post_thumbnail().'</div>';

								$blog_post_media_type='type-image';
							}
							
							echo $udt_blog_image;
						}

					} else if ( has_post_thumbnail() ) { // Check if the post has a Post Thumbnail assigned to it.
						$udt_blog_image = '';
							
						$slide_display_opt = get_post_meta( get_post_thumbnail_id(), '_udt_slide_display_opt', true );
						$slide_video_url = get_post_meta( get_post_thumbnail_id(), '_udt_slide_video_url', true );
						
						if($slide_display_opt=='video-youtube' || $slide_display_opt=='video-vimeo') {
							$udt_blog_image = '<div class="blog-post-featured-media">';
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
							$udt_blog_image = '<div class="blog-post-featured-media">'.get_the_post_thumbnail().'</div>';

							$blog_post_media_type='type-image';
						}
						
						echo $udt_blog_image;
					}
					?>

					<h1 class="blog-post-title"><?php
					if(isset($udt_post_meta['display_title']) && $udt_post_meta['display_title']!='') {
						echo $udt_post_meta['display_title'];
					} else {
						the_title();
					}
					?></h1>
							
					<div class="blog-post-meta">
						<?php echo '<span>'.get_the_date('d').'/'.get_the_date('m').'/'.get_the_date('Y').'</span>'; ?> | 
						<?php echo __('Comments:', 'cartel').' <a href="'.get_comments_link().'" title="'.esc_attr(get_comments_number()).'">'.get_comments_number().'</a>'; ?> | 
						<?php echo __('Posted by:', 'cartel').' '. get_the_author_link(); ?> | 
						<?php echo __('In:', 'cartel') .' '. get_the_category_list(', ','single',$post->ID); ?>
					</div>
					
					<?php the_content('',FALSE); ?>
							
					<div class="clear"></div>

					<?php wp_link_pages( array('before' => '<p class="wp-link-pages">Pages: ', 'after' => '</p>') ); ?>

					<?php the_tags( '<p class="post-tags">Tags: ', ', ', '</p>' ); ?>

				</div>
				
			</article>
			<!--end post-->

			<?php comments_template(); ?>

		</div>
			
		<?php endwhile; // end of the loop. ?>
		
		<?php get_sidebar(); ?>
		
	</section>

</div>
<!--end content-->

<?php get_footer(); ?>