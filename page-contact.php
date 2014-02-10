<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */
?>
<?php

$honeypot_enabled = intval(returnOptionValue('honeypot_toggle'));

if(isset($_POST['submitContact'])) {

	if($honeypot_enabled) {
		if(trim($_POST['udt_contact_honeypot']) != '') {
			$honeypotError = __('Sorry, the form was not submitted as you don\'t seem to be a human.', 'raw');
			$hasError = true;
		}
	}

	if(trim($_POST['contactName']) == '') {
		$nameError = __('Please enter your name.', 'cartel');
		$hasError = true;
	} else {
		$contactName = trim($_POST['contactName']);
	}

	if(trim($_POST['contactEmail']) == '')  {
		$emailError = __('Please enter your email address.', 'cartel');
		$hasError = true;
	} else if (!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,8})$/", trim($_POST['contactEmail']))) {
		$emailError = __('You entered an invalid email address.', 'cartel');
		$hasError = true;
	} else {
		$contactEmail = trim($_POST['contactEmail']);
	}

	$contactSubject = trim($_POST['contactSubject']);

	if(trim($_POST['contactMessage']) == '') {
		$messageError = __('Please enter a message.', 'cartel');
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$contactMessage = stripslashes(trim($_POST['contactMessage']));
		} else {
			$contactMessage = trim($_POST['contactMessage']);
		}
	}
	
	if(!isset($hasError)) {
		$emailTo = get_option('admin_email');
		$subject = $contactSubject;
		$body = $contactMessage;
		$headers = 'From: '.$contactName.' <'.$contactEmail.'>' . "\r\n" . 'Reply-To: ' . $contactEmail;

		if(wp_mail($emailTo, $subject, $body, $headers)) {
			$emailSent = true;
		}
	}
	
	if(isset($_POST['ajax'])) {
		if(isset($emailSent) && $emailSent == true) {
			die('Mail sent');
		} else if(isset($hasError) && $hasError == true) {
			die('Error');
		}
	}
}

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

		<!--start content left-->
		<div class="content-inner-left">

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

			the_content('',FALSE);

			if(returnOptionValue('contact_form_title')!='') {
				echo '<h4>'.html_entity_decode(returnOptionValue('contact_form_title')).'</h4>';
			}
			
			if(returnOptionValue('contact_form_message')!='') {
				echo wptexturize(wpautop(do_shortcode(returnOptionValue('contact_form_message'))));
			}

			?>

			<form action="<?php the_permalink(); ?>" method="post" class="form contactForm" id="contactForm" novalidate="novalidate">
				<?php if($honeypot_enabled) { ?>
				<p class="udt_honey">
					<label for="udt_contact_honeypot">Leave this field blank if you're human</label><br>
					<input type="text" name="udt_contact_honeypot" id="udt_contact_honeypot" class="text-field" placeholder="">
				</p>
				<?php } ?>
				<p><input type="text" name="contactName" class="required text-field" id="contactName" placeholder="<?php _e('Your Name*', 'cartel'); ?>" required="required"></p>
				<p><input type="email" name="contactEmail" class="required text-field" id="contactEmail" placeholder="<?php _e('E-mail*', 'cartel'); ?>" required="required"></p>
				<p><input type="text" name="contactSubject" class="text-field" id="contactSubject" placeholder="<?php _e('Subject', 'cartel'); ?>"></p>
				<textarea class="required" name="contactMessage" id="contactMessage" rows="32" cols="8" placeholder="<?php _e('Message*', 'cartel'); ?>" required="required"></textarea>
				<p><span id="msg"><?php echo returnOptionValue('contact_form_required_fields_label'); ?></span></p>
				<p style="float:left; clear:both; margin-top:10px;"><input type="submit" class="submit submitTheme submitForm" id="submitContact" value="<?php _e('Send', 'cartel'); ?>"></p>
			</form>

			<?php endwhile; // end of the loop. ?>

		</div>

		<?php get_sidebar('contact'); ?>
		
	</section>

</div>

<?php get_footer(); ?>