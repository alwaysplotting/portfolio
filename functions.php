<?php
/**
 * Cartel functions and definitions
 *
 * You're better off not touching anything here unless you know what you're doing
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */


// Include The Foundry Theme Options Panel
include_once (get_template_directory(). '/foundry-settings.php');

// Add theme CSS files
function load_udt_styles() {
	global $wp_styles;
	// wp_enqueue_style('cartel-style', get_stylesheet_uri());
	wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', false, false, 'all');
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox-1.3.4.css', false, false, 'all');
	wp_enqueue_style('epicfullscreen', get_template_directory_uri() . '/css/epicfullscreen.css', false, false, 'all');
	wp_enqueue_style('epicslider', get_template_directory_uri() . '/css/epicslider.css', false, false, 'all');
	wp_enqueue_style('udt_style', get_template_directory_uri() . '/style.css', false, false, 'all');
	wp_enqueue_style('udt_shortcodes', get_template_directory_uri() . '/css/udt_shortcodes.css', false, false, 'all');
	// wp_enqueue_style('udt-custom-content', get_option('home') . '?udt-custom-content=css', array('udt_style','epicfullscreen','udt_shortcodes'), false, 'all');
	wp_enqueue_style('udt_media_queries', get_template_directory_uri() . '/css/udt_media_queries.css', array('udt_style','epicfullscreen','udt_shortcodes'), false, 'all');
}

// Add theme JS files
function load_udt_scripts() {
	wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js', array('jquery'), false, true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), false, true);
	wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox-1.3.4.pack.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('epicHover-fadeZoom', get_template_directory_uri() . '/js/jquery.epicHover-fadeZoom.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('epicfullscreen', get_template_directory_uri() . '/js/jquery.epicfullscreen.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('epicslider', get_template_directory_uri() . '/js/jquery.epicslider.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('masonry', get_template_directory_uri() . '/js/jquery.masonry.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('mobile-touch-swipe', get_template_directory_uri() . '/js/jquery.mobile-touch-swipe-1.0.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('cartel-common', get_template_directory_uri() . '/js/common.js', array('jquery','jquery-ui','fancybox','epicHover-fadeZoom','epicfullscreen','flexslider'), false, true);
	wp_enqueue_script('shortcodes', get_template_directory_uri() . '/js/udt_shortcodes.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('gmaps', 'http://maps.googleapis.com/maps/api/js?sensor=false', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('contact', get_template_directory_uri() . '/js/contact.js', array('jquery','jquery-ui','cartel-common'), false, true);

	$s_easing=array('easeInQuad','easeInQuad','easeInOutQuad','easeInCubic','easeOutCubic','easeInOutCubic','easeInQuart','easeOutQuart','easeInOutQuart','easeInQuint','easeOutQuint','easeInOutQuint','easeInSine','easeOutSine','easeInOutSine','easeInExpo','easeOutExpo','easeInOutExpo','easeInCirc','easeOutCirc','easeInOutCirc');

	wp_localize_script( 'cartel-common', 'udt_global_vars', array(
		'template_dir' => get_template_directory_uri().'/',
		'contact_form_required_fields_label_ajax' => returnOptionValue('contact_form_required_fields_label_ajax'),
		'contact_form_warning' => returnOptionValue('contact_form_warning'),
		'contact_form_email_warning' => returnOptionValue('contact_form_email_warning'),
		'contact_form_error' => returnOptionValue('contact_form_error'),
		'contact_form_success_message' => returnOptionValue('contact_form_success_message'),
		'scrollToTopSpeed' => returnOptionValue('scroll_to_top_speed'),
		'epic_slider_slideshow' => returnOptionValue('epic_slider_slideshow'),
		'epic_slider_autoplay' => returnOptionValue('epic_slider_autoplay'),
		'epic_slider_navigation_style' => returnOptionValue('epic_slider_navigation_style'),
		'epic_slider_slide_timer' => returnOptionValue('epic_slider_slide_timer'),
		'epic_slider_slide_animation_speed' => returnOptionValue('epic_slider_slide_animation_speed'),
		'epic_slider_slide_animation' => returnOptionValue('epic_slider_slide_animation'),
		'epic_slider_mobile_slide_animation' => returnOptionValue('epic_slider_mobile_slide_animation'),
		'epic_slider_easing' => returnOptionValue('epic_slider_easing'),
		'flexslider_autoplay' => returnOptionValue('flexslider_autoplay'),
		'flexslider_slide_timer' => returnOptionValue('flexslider_slide_timer'),
		'flexslider_slide_animation_speed' => returnOptionValue('flexslider_slide_animation_speed'),
		'thumb_rollover_color' => '#' . returnOptionValue('thumb_rollover_color'),
		'thumb_rollover_text_color' => '#' . returnOptionValue('thumb_rollover_text_color'),
		'thumb_rollover_opacity' => returnOptionValue('thumb_rollover_opacity'),
		'thumb_rollover_padding' => returnOptionValue('thumb_rollover_padding'),
		'thumb_rollover_zoom_factor' => returnOptionValue('thumb_rollover_zoom_factor'),
		'rollover_logo' => returnUploadedImageByID('rollover_logo'),
		'background_image_opacity' => returnOptionValue('background_image_opacity'),
		'background_image_overlay_pattern_on_off' => returnOptionValue('background_image_overlay_pattern_on_off'),
		'epic_slider_overlay_pattern_on_off' => returnOptionValue('epic_slider_overlay_pattern_on_off'),
		'epic_slider_slideshow' => returnOptionValue('epic_slider_slideshow'),
		'epic_slider_autoplay' => returnOptionValue('epic_slider_autoplay'),
		'epic_slider_navigation_style' => returnOptionValue('epic_slider_navigation_style'),
		'epic_slider_slide_timer' => returnOptionValue('epic_slider_slide_timer'),
		'epic_slider_slide_animation_speed' => returnOptionValue('epic_slider_slide_animation_speed'),
		'epic_slider_slide_animation' => returnOptionValue('epic_slider_slide_animation'),
		'epic_slider_mobile_slide_animation' => returnOptionValue('epic_slider_mobile_slide_animation'),
		'epic_slider_easing' => $s_easing[intval(returnOptionValue('epic_slider_easing'))],
		'map_controls' => returnOptionValue('map_controls'),
		'map_image_marker' => returnUploadedImageByID('map_marker')
	) );
}

if(!is_admin()) {
	if (function_exists('load_udt_styles')) {
		add_action('wp_enqueue_scripts', 'load_udt_styles');
	}
	if (function_exists('load_udt_scripts')) {
		add_action('wp_enqueue_scripts', 'load_udt_scripts');
	}
}

if ( ! isset( $content_width ) ) $content_width = 605;

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain( 'cartel', get_template_directory() . '/languages' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'cartel' ),
));

// Add support for Featured Image in blog posts and pages
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 605, 340, true );
}

// Add various image sizes required by Cartel
if (function_exists('add_image_size')) {
	add_image_size( 'udt-full-width-image', 870, 490, true );
	add_image_size( 'udt-blog-grid-thumb', 257, 197, true );
	add_image_size( 'udt-portfolio-thumb-1', 286, 196, true );
	add_image_size( 'udt-portfolio-thumb-2', 286, 398, true );
	add_image_size( 'udt-portfolio-thumb-3', 578, 398, true );
	add_image_size( 'udt-portfolio-thumb-4', 578, 196, true );
}

// Read more should link to top of page
function remove_more_jump_link($link) { 
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

// Widget support
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'blog-sidebar',
		'name' => 'Blog Sidebar',
		'description' => 'This sidebar is used in the blog section. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'contact-sidebar',
		'name' => 'Contact Page Sidebar',
		'description' => 'This sidebar is used in the contact page. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'first-footer-widget-area',
		'name' => 'First Footer Widget Area',
		'description' => 'The first widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'  => '</h4>',
	));
	register_sidebar(array(
		'id' => 'second-footer-widget-area',
		'name' => 'Second Footer Widget Area',
		'description' => 'The second widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'  => '</h4>',
	));
	register_sidebar(array(
		'id' => 'third-footer-widget-area',
		'name' => 'Third Footer Widget Area',
		'description' => 'The third widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'  => '</h4>',
	));
}

// Add custom fields to media uploader for pages, posts & portfolios
function page_attachment_fields_to_edit($form_fields, $post) {
	if(get_post_type($post->post_parent)=='page' || get_post_type($post->post_parent)=='post' || get_post_type($post->post_parent)=='udt_portfolio') {		
		$form_fields["udt_slide_display_opt"]["label"] = __("<abbr title='Display Options'>Display Opt...</abbr>", 'cartel');
		$form_fields["udt_slide_display_opt"]["input"] = "html";
		$form_fields["udt_slide_display_opt"]["html"] = "
		<select name='attachments[{$post->ID}][udt_slide_display_opt]' id='attachments[{$post->ID}][udt_slide_display_opt]' style='width:100%;'>
			<option value='none'";
			if(get_post_meta($post->ID, "_udt_slide_display_opt", true)=='none'){ $form_fields["udt_slide_display_opt"]["html"] .="selected='selected'"; }
			$form_fields["udt_slide_display_opt"]["html"] .=">Default</option>
			<option value='slider'";
			if(get_post_meta($post->ID, "_udt_slide_display_opt", true)=='slider'){ $form_fields["udt_slide_display_opt"]["html"] .="selected='selected'"; }
			$form_fields["udt_slide_display_opt"]["html"] .=">Display in Featured Slider</option>
			<option value='video-youtube'";
			if(get_post_meta($post->ID, "_udt_slide_display_opt", true)=='video-youtube'){ $form_fields["udt_slide_display_opt"]["html"] .="selected='selected'"; }
			$form_fields["udt_slide_display_opt"]["html"] .=">Display Featured Video (Youtube)</option>
			<option value='video-vimeo'";
			if(get_post_meta($post->ID, "_udt_slide_display_opt", true)=='video-vimeo'){ $form_fields["udt_slide_display_opt"]["html"] .="selected='selected'"; }
			$form_fields["udt_slide_display_opt"]["html"] .=">Display Featured Video (Vimeo)</option>
		</select>";
		$form_fields["udt_slide_display_opt"]["helps"] = "Select how to display this image.";
		
		$form_fields["udt_slide_link_url"]["label"] = __("<abbr title='Slide Link URL'>Slide Link U...</abbr>", 'cartel');
		$form_fields["udt_slide_link_url"]["value"] = get_post_meta($post->ID, "_udt_slide_link_url", true);
		$form_fields["udt_slide_link_url"]["helps"] = "If Display Option is set to Display in Slider and you want this entire slide to be a link, enter the link URL here.";
		
		$form_fields["udt_slide_video_url"]["label"] = __("Video URL", 'cartel');
		$form_fields["udt_slide_video_url"]["value"] = get_post_meta($post->ID, "_udt_slide_video_url", true);
		$form_fields["udt_slide_video_url"]["helps"] = "If Display Option is set to Display Featured Video, enter Youtube / Vimeo video ID here.";
	}
	return $form_fields;
}
add_filter("attachment_fields_to_edit", "page_attachment_fields_to_edit", null, 2);

// Save custom fields for media uploader in pages, posts & portfolios
function page_gallery_attachment_fields_to_save($post, $attachment) {
	if(get_post_type($post['post_parent'])=='page' || get_post_type($post['post_parent'])=='post' || get_post_type($post['post_parent'])=='udt_portfolio') {
		if($attachment['udt_slide_display_opt']=='video-youtube' || $attachment['udt_slide_display_opt']=='video-vimeo'){
			if( trim($attachment['udt_slide_video_url']) == '' ){
				// adding our custom error
				$post['errors']['udt_slide_display_opt']['errors'][] = '';
				$post['errors']['udt_slide_video_url']['errors'][] = __('ERROR: Video URL must be set!', 'cartel');
			} else {
				update_post_meta($post['ID'], '_udt_slide_video_url', $attachment['udt_slide_video_url']);
			}
		} else {
			update_post_meta($post['ID'], '_udt_slide_video_url', $attachment['udt_slide_video_url']);
		}
		update_post_meta($post['ID'], '_udt_slide_display_opt', $attachment['udt_slide_display_opt']);
		update_post_meta($post['ID'], '_udt_slide_link_url', $attachment['udt_slide_link_url']);
	}
	return $post;
}
add_filter("attachment_fields_to_save", "page_gallery_attachment_fields_to_save", null, 2);

// Predefined custom fields for posts
$key_post = "_udt_post_meta";
$meta_boxes_post = array(
	"display_title" => array(
		"name" => "display_title",
		"title" => "Display Title",
		"description" => 'This field can be used to add a title with &lt;span&gt; tags within, enabling title font and color variations.'
	),
	"display_media" => array(
		"name" => "display_media",
		"title" => "Blog Index Media Display Options",
		"description" => 'Select what type of featured media to display on the blog index for this post.'
	),
	"background_image" => array(
		"name" => "background_image",
		"title" => "Background Image",
		"description" => 'Enter the URL to the background image you would like to use for this post.'
	)
);

function create_post_meta_box() {
	global $key_post;
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'new-meta-boxes', __('Post Options','cartel'), 'display_post_meta_box', 'post', 'normal', 'high');
	}
}

function display_post_meta_box() {
	global $post, $meta_boxes_post, $key_post;
	?>
	<div class="form-wrap">
		<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key_post . '_wpnonce', false, true );
		foreach($meta_boxes_post as $meta_box) {
			$data = get_post_meta($post->ID, $key_post, true);
			?>
			<?php if($meta_box[ 'name' ]=='display_title') {?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='display_media') {?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<select id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" style="min-width:200px;">
						<option value="featured-image" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'featured-image'); ?>>Featured Image</option>
						<option value="featured-media" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'featured-media'); ?>>Featured Slider/Video</option>
					</select>
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='background_image') {?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php }
		} ?>
	</div>
<?php
}

function save_post_meta_box( $post_id ) {
	global $post, $meta_boxes_post, $key_post;
	if(isset($post)) {
		foreach( $meta_boxes_post as $meta_box ) {
			if(isset($_POST[ $meta_box[ 'name' ] ])) {
				$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
			}
		}
		if(isset($_POST[ $key_post . '_wpnonce' ])) {
			if ( !wp_verify_nonce( $_POST[ $key_post . '_wpnonce' ], plugin_basename(__FILE__) ) )
			return $post_id;
		} else {
			return $post_id;
		}
		if ( !current_user_can( 'edit_post', $post_id ))
		return $post_id;
		update_post_meta( $post_id, $key_post, $data );
	}
}
add_action( 'admin_menu', 'create_post_meta_box' );
add_action( 'save_post', 'save_post_meta_box' );

// Predefined custom fields for pages
$key = "_udt_page_meta";
$meta_boxes = array(
	"display_title" => array(
		"name" => "display_title",
		"title" => "Display Title",
		"description" => 'This field can be used to add a title with &lt;span&gt; tags within, enabling title font and color variations.'
	),
	"background_image" => array(
		"name" => "background_image",
		"title" => "Background Image",
		"description" => 'Enter the URL to the background image you would like to use for this post.'
	)
);

function create_page_meta_box() {
	global $key;
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'new-meta-boxes', __('Page Options','cartel'), 'display_page_meta_box', 'page', 'normal', 'high');
	}
}

function display_page_meta_box() {
	global $post, $meta_boxes, $key;
	
	if(get_option('show_on_front')=='page' && get_option( 'page_for_posts')==$post->ID) { ?>
		
		<div class="form-wrap">
			<p>The optional title and background image for the blog section can be set in Foundry.</p>
		</div>

	<?php } else { ?>

		<div class="form-wrap">
			<?php
			wp_nonce_field( plugin_basename( __FILE__ ), $key . '_wpnonce', false, true );
			foreach($meta_boxes as $meta_box) {
				$data = get_post_meta($post->ID, $key, true);
				?>
				<?php if($meta_box[ 'name' ]=='display_title') { ?>
					<div class="form-field">
						<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
						<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
						<p><?php echo $meta_box[ 'description' ]; ?></p>
					</div>
				<?php } else if($meta_box[ 'name' ]=='background_image') {?>
					<div class="form-field">
						<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
						<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
						<p><?php echo $meta_box[ 'description' ]; ?></p>
					</div>
				<?php }
			} ?>
		</div>

	<?php }
}

function save_page_meta_box( $post_id ) {
	global $post, $meta_boxes, $key;
	if(isset($post)) {
		foreach( $meta_boxes as $meta_box ) {
			if(isset($_POST[ $meta_box[ 'name' ] ])) {
				$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
			}
		}
		if(isset($_POST[ $key . '_wpnonce' ])) {
			if ( !wp_verify_nonce( $_POST[ $key . '_wpnonce' ], plugin_basename(__FILE__) ) )
			return $post_id;
		} else {
			return $post_id;
		}
		if ( !current_user_can( 'edit_post', $post_id ))
		return $post_id;
		update_post_meta( $post_id, $key, $data );
	}
}
add_action( 'admin_menu', 'create_page_meta_box' );
add_action( 'save_post', 'save_page_meta_box' );

// Custom taxonomies for portfolios
function create_portfolio_taxonomies() {
	$port_tx_labels = array(
		'name'                       => _x( 'Portfolio Categories', 'taxonomy general name', 'cartel' ),
		'singular_name'              => _x( 'Portfolio Category', 'taxonomy singular name', 'cartel' ),
		'search_items'               => __( 'Search Portfolio Categories', 'cartel' ),
		'popular_items'              => __( 'Popular Portfolio Categories', 'cartel' ),
		'all_items'                  => __( 'All Portfolio Categories', 'cartel' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Portfolio Category', 'cartel' ),
		'update_item'                => __( 'Update Portfolio Category', 'cartel' ),
		'add_new_item'               => __( 'Add New Portfolio Category', 'cartel' ),
		'new_item_name'              => __( 'New Portfolio Category Name', 'cartel' ),
		'separate_items_with_commas' => NULL,
		'add_or_remove_items'        => __( 'Add or remove Portfolio Categories', 'cartel' ),
		'choose_from_most_used'      => __( 'Choose from the most used Portfolio Categories', 'cartel' ),
		'not_found'                  => __( 'No Portfolio Categories found.', 'cartel' ),
		'menu_name'                  => __( 'Portfolio Categories', 'cartel' )
	);
	register_taxonomy('portfolio_category','udt_portfolio',array(
		'hierarchical' => false,
		'labels' => $port_tx_labels,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'portfolio/category', 'with_front' => false )
	));
}
add_action( 'init', 'create_portfolio_taxonomies' );

// Custom post type for portfolios
function create_portfolio_post_type() {
	register_post_type( 'udt_portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio', 'cartel' ),
				'singular_name' => __( 'Portfolio', 'cartel' ),
				'all_items' => __( 'All Projects', 'cartel' ),
				'add_new' => __( 'Add New Project', 'cartel' ),
				'add_new_item' => __( 'Add New Project', 'cartel' ),
				'edit_item' => __( 'Edit Project', 'cartel' ),
				'new_item' => __( 'New Project', 'cartel' ),
				'view_item' => __( 'View Project', 'cartel' ),
				'search_items' => __( 'Search Projects', 'cartel' ),
				'not_found' => __( 'No Projects found', 'cartel' ),
				'not_found_in_trash' => __( 'No Projects found in Trash', 'cartel' ),
			),
			'description' => 'Each page represents a project.',
			'public' => true,
			'has_archive' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'hierarchical' => false,
			'supports' => array('title','editor','page-attributes','thumbnail','revisions'),
			'rewrite' => array('slug'=>'portfolio','with_front'=>false),
		)
	);
}
add_action( 'init', 'create_portfolio_post_type' );

// Predefined custom fields for custom Portfolio post type
$key_portfolio = "_udt_portfolio_meta";
$meta_boxes_portfolio = array(
	"display_title" => array(
		"name" => "display_title",
		"title" => "Display Title",
		"description" => 'This field can be used to add a title with &lt;span&gt; tags within, enabling title font and color variations.'
	),
	"page_layout" => array(
		"name" => "page_layout",
		"title" => "Page Layout",
		"description" => 'Select the layout you would like to use for this project. If you select "Without Featured Media", the Featured Image is still required for the portfolio index thumbnail.'
	),
	"display_media_size" => array(
		"name" => "display_media_size",
		"title" => "Portfolio Index Thumbnail Size Options",
		"description" => 'Select which thumbnail size to display for this project on the portfolio index.'
	),
	"display_media_caption" => array(
		"name" => "display_media_caption",
		"title" => "Portfolio Index Thumbnail Caption",
		"description" => 'Enter the caption to display when rolling over the thumbnail for this project on the portfolio index. Leave this blank if you wish to display the rollover logo instead. The rollover logo is set in Foundry.'
	),
	"background_image" => array(
		"name" => "background_image",
		"title" => "Background Image",
		"description" => 'Enter the URL to the background image you would like to use for this post.'
	)
);

function create_portfolio_meta_box() {
	global $key_portfolio; 
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'portfolio-meta-boxes', __('Portfolio Options','cartel'), 'display_portfolio_meta_box', 'udt_portfolio', 'normal', 'high' );
	}
}

function display_portfolio_meta_box() {
	global $post, $meta_boxes_portfolio, $key_portfolio;
	?>
	<div class="form-wrap">
		<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key_portfolio . '_wpnonce', false, true );
		foreach($meta_boxes_portfolio as $meta_box) {
			$data = get_post_meta($post->ID, $key_portfolio, true);
			?>
			<?php if($meta_box[ 'name' ]=='display_title') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='page_layout') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<select id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" style="min-width:200px;">
						<option value="default" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'default'); ?>>Default</option>
						<option value="full-width-slider" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'full-width-slider'); ?>>Full-width Slider</option>
						<option value="without-featured-media" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'without-featured-media'); ?>>Without Featured Media</option>
					</select>
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='display_media_size') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<select id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" style="min-width:200px;">
						<option value="udt-portfolio-thumb-1" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'udt-portfolio-thumb-1'); ?>>286px * 196px</option>
						<option value="udt-portfolio-thumb-2" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'udt-portfolio-thumb-2'); ?>>286px * 398px</option>
						<option value="udt-portfolio-thumb-3" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'udt-portfolio-thumb-3'); ?>>578px * 398px</option>
						<option value="udt-portfolio-thumb-4" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'udt-portfolio-thumb-4'); ?>>578px * 196px</option>
					</select>
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='display_media_caption') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='background_image') {?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php }
		}?>
	</div>
<?php
}

function save_portfolio_meta_box( $post_id ) {
	global $post, $meta_boxes_portfolio, $key_portfolio;
	if(isset($post)) {
		foreach( $meta_boxes_portfolio as $meta_box ) {
			if(isset($_POST[ $meta_box[ 'name' ] ])) {
				$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
			}
		}
		if(isset($_POST[ $key_portfolio . '_wpnonce' ])) {
			if ( !wp_verify_nonce( $_POST[ $key_portfolio . '_wpnonce' ], plugin_basename(__FILE__) ) )
			return $post_id;
		} else {
			return $post_id;
		}
		if ( !current_user_can( 'edit_post', $post_id )) {
			return $post_id;
		}
		update_post_meta( $post_id, $key_portfolio, $data );
	}
}

add_action( 'admin_menu', 'create_portfolio_meta_box' );
add_action( 'save_post', 'save_portfolio_meta_box' );

// Custom post type for shortcode sliders
function create_slider_post_type() {
	register_post_type( 'udt_shortcode_slider',
		array(
			'labels' => array(
				'name' => __( 'Shortcode Sliders', 'cartel' ),
				'singular_name' => __( 'Shortcode Slider', 'cartel' ),
				'all_items' => __( 'All Shortcode Sliders', 'cartel' ),
				'add_new_item' => __( 'Add New Shortcode Slider', 'cartel' ),
				'edit_item' => __( 'Edit Shortcode Slider', 'cartel' ),
				'new_item' => __( 'New Shortcode Slider', 'cartel' ),
				'view_item' => __( 'View Shortcode Slider', 'cartel' ),
				'search_items' => __( 'Search Shortcode Sliders', 'cartel' ),
				'not_found' => __( 'No Shortcode Sliders found', 'cartel' ),
				'not_found_in_trash' => __( 'No Shortcode Sliders found in Trash', 'cartel' ),
				'menu_name' => __( 'Sc. Sliders', 'cartel' ),
			),
			'description' => 'Create Sliders that you later can place on pages using the slider shortcode.',
			'public' => false,
			'has_archive' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'hierarchical' => true,
			'supports' => array('title','editor'),
			'rewrite' => false
		)
	);
}
add_action( 'init', 'create_slider_post_type' );

// Add custom fields to media uploader for Slider custom post type
function slider_attachment_fields_to_edit($form_fields, $post) {
	if(get_post_type($post->post_parent)=='udt_shortcode_slider') {
		$form_fields["udt_slide_link_url"]["label"] = __("<abbr title='Slide Link URL'>Slide Link U...</abbr>", 'cartel');
		$form_fields["udt_slide_link_url"]["value"] = get_post_meta($post->ID, "_udt_slide_link_url", true);
		$form_fields["udt_slide_link_url"]["helps"] = "If you want the entire slide to be a link, enter the link URL here.";
	}
	return $form_fields;
}
add_filter("attachment_fields_to_edit", "slider_attachment_fields_to_edit", null, 2);

// Save custom fields for media uploader in Slider custom post type
function slider_attachment_fields_to_save($post, $attachment) {
	if(get_post_type($post['post_parent'])=='udt_shortcode_slider') {
		update_post_meta($post['ID'], '_udt_slide_link_url', $attachment['udt_slide_link_url']);
	}
	return $post;
}
add_filter("attachment_fields_to_save", "slider_attachment_fields_to_save", null, 2);

// Template for comments
function udt_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>" style="float:left;margin-top:0;">
			<?php if ($comment->comment_approved == '0') : ?>
				<p>Your comment is awaiting approval</p>
			<?php endif; ?>
			
			<div class="comment-avatar">
				<?php echo get_avatar( $comment, 60 ); ?>
			</div>

			<div class="commentary">
				<div class="comment-author"><?php comment_author_link(); ?></div>
				<div class="comment-meta"><?php comment_date(); ?> <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'], 'before' => ' - ' ) ) ); ?> <?php edit_comment_link( __( 'Edit', 'cartel' ), ' - ' ); ?></div>
				<?php comment_text(); ?>
			</div>
		</div>

<?php }

// Shortcodes

// Add support for shortcodes in widgets
if (!is_admin()) {
	add_filter('widget_text', 'do_shortcode', 11);
	add_filter('widget_title', 'do_shortcode', 11);
}

// Shortcode for clear
function sc_clear( $atts ) {
	extract( shortcode_atts( array(
		'clear' => 'both',
		'float' => ''
	), $atts ) );
	$output_styles='style="';
	if($clear=='left' || $clear=='right') {
		$output_styles.='clear:'.$clear.';';
	} else {
		$output_styles.='clear:both;';
	}
	if($float!='') {
		$output_styles.=' float:'.$float.';';
	}
	$output_styles.='"';
	$output='<div '.$output_styles.'></div>';
	return $output;
}
add_shortcode('clear', 'sc_clear');

// Shortcode for span
function sc_span( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
		'style' => ''
	), $atts ) );
	$output='<span ';
	if($class!='') $output.= 'class="'.$class.'" ';
	if($style!='') $output.= 'style="'.$style.'"';
	$output.='>'.$content.'</span>';
	return $output;
}
add_shortcode('span', 'sc_span');

// Shortcode for divider
function sc_divider( $atts ) {
	extract( shortcode_atts( array(
		'margin_top' => '0px',
		'margin_bottom' => '30px',
		'style' => ''
	), $atts ) );
	$margin_styles='';
	if($margin_top!='') {
		$margin_styles.='margin-top:'.$margin_top.'; ';
	}
	if($margin_bottom!='') {
		$margin_styles.='margin-bottom:'.$margin_bottom.'; ';
	}
	$output='<div class="divider"';
	if($style!='' || $margin_styles!='') $output.= ' style="'.$margin_styles.''.$style.'"';
	$output.='></div>';
	return $output;
}
add_shortcode('divider', 'sc_divider');

// Shortcode for column_one_half
function sc_column_one_half( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_half">'.$content.'</div>';
	return $output;
}
add_shortcode('column_one_half', 'sc_column_one_half');

// Shortcode for column_one_half_last
function sc_column_one_half_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_half last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_one_half_last', 'sc_column_one_half_last');

// Shortcode for column_one_third
function sc_column_one_third( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_third">'.$content.'</div>';
	return $output;
}
add_shortcode('column_one_third', 'sc_column_one_third');

// Shortcode for column_one_third_last
function sc_column_one_third_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_third last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_one_third_last', 'sc_column_one_third_last');

// Shortcode for column_one_fourth
function sc_column_one_fourth( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_fourth">'.$content.'</div>';
	return $output;
}
add_shortcode('column_one_fourth', 'sc_column_one_fourth');

// Shortcode for column_one_fourth_last
function sc_column_one_fourth_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_fourth last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_one_fourth_last', 'sc_column_one_fourth_last');

// Shortcode for column_two_thirds
function sc_column_two_thirds( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_two_thirds">'.$content.'</div>';
	return $output;
}
add_shortcode('column_two_thirds', 'sc_column_two_thirds');

// Shortcode for column_two_thirds_last
function sc_column_two_thirds_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_two_thirds last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_two_thirds_last', 'sc_column_two_thirds_last');

// Shortcode for column_three_fourths
function sc_column_three_fourths( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_three_fourths">'.$content.'</div>';
	return $output;
}
add_shortcode('column_three_fourths', 'sc_column_three_fourths');

// Shortcode for column_three_fourths_last
function sc_column_three_fourths_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_three_fourths last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_three_fourths_last', 'sc_column_three_fourths_last');

// Shortcode for message_box
function sc_message_box( $atts, $content = null) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='') {
		$style_output='style="'.$style.'"';
	}
	$content = do_shortcode(shortcode_unautop( $content ));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="message_box" '.$style_output.'>'.wptexturize(wpautop($content)).'</div>';
	return $output;
}
add_shortcode('message_box', 'sc_message_box');

// Shortcode for pre
function sc_pre( $atts, $content = null) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='') {
		$style_output='style="'.$style.'"';
	}
	$output='<pre '.$style_output.'>'.$content.'</pre>';
	return $output;
}
add_shortcode('pre', 'sc_pre');

// Shortcode for drop cap
function sc_drop_cap( $atts, $content = null) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='') {
		$style_output='style="'.$style.'"';
	}
	$output='<span class="dropcap" ';
	$output.=$style_output.'>';
	$output.=$content;
	$output.='</span>';
	return $output;
}
add_shortcode('drop_cap', 'sc_drop_cap');

// Shortcode for blockquotes
function sc_blockquote( $atts, $content = null) {
	extract( shortcode_atts( array(
		'blockquote_style' => '',
		'align' => '',
		'text_align' => '',
		'cite' => '',
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='' || $text_align!='') {
		$style_output='style="';
	}
	if($style!='') {
		$style_output.=$style.' ';
	}
	if($text_align=='left' || $text_align=='right' || $text_align=='center' || $text_align=='justify') {
		$style_output.='text-align:'.$text_align.'; ';
	}
	if($text_align=='center') {
		$style_output.='background-position:center 15px; ';
	}
	if($style!='' || $text_align!='') {
		$style_output.='"';
	}
	$output='<blockquote class="';
	if($blockquote_style!='') {
		$output.=$blockquote_style.' ';
	}
	if($align=='left' || $align=='right') {
		$output.=$align;
	}
	$output.='" '.$style_output.'>';
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output.=wpautop(wptexturize($content));
	if($cite!='') $output.='<p class="blockquote_cite">'.$cite.'</p>';
	$output.='</blockquote>';
	return $output;
}
add_shortcode('blockquote', 'sc_blockquote');

// Shortcode for highlights
function sc_highlight( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'highlight_type' => 'bold',
		'color' => '',
		'style' => ''
	), $atts ) );
	if($highlight_type!='bold' && $highlight_type!='italic' && $highlight_type!='mark') {
		$highlight_type='bold';
	}
	if($highlight_type=='bold') {
		$output='<strong';
	}
	if($highlight_type=='italic') {
		$output='<em';
	}
	if($highlight_type=='mark') {
		$output='<mark';
	}
	
	if($color!='') {
		$output.=' class="'.$color.'"';
	}
	
	if($style!='') {
		$output.=' style="'.$style.'"';
	}
	
	$output.='>'.$content;
	
	if($highlight_type=='bold') {
		$output.='</strong>';
	}
	if($highlight_type=='italic') {
		$output.='</em>';
	}
	if($highlight_type=='mark') {
		$output.='</mark>';
	}
	
	return $output;
}
add_shortcode('highlight', 'sc_highlight');

// Shortcode for lists
function sc_list( $atts, $content = null) {
	extract( shortcode_atts( array(
		'list_style' => 'grayDot',
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='') {
		$style_output=' style="'.$style.'"';
	}
	$content=str_replace('<ul>','<ul class="'.$list_style.'"'.$style_output.'>',$content);
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output=$content;
	return $output;
}
add_shortcode('list', 'sc_list');

// Shortcode for buttons
function sc_button( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url' => '',
		'title' => '',
		'size' => 'medium',
		'color' => 'theme',
		'new_window' => 'false',
		'style' => ''
	), $atts ) );
	$output_target='';
	$output_style='';
	$classes='submit';
	if($size=='small') $classes.=' submitSmall';
	if($size=='large') $classes.=' submitLarge';
	if($color=='theme') $classes.=' submitTheme';
	if($color=='gray') $classes.=' submitGray';
	if($color=='white') $classes.=' submitWhite';
	if($color=='turquoise') $classes.=' submitTurquoise';
	if($color=='yellow') $classes.=' submitYellow';
	if($color=='orange') $classes.=' submitOrange';
	if($style!='') $output_style=' style="'.$style.'"';
	if($new_window=='true') $output_target=' target="_blank"';

	$output='<a href="'.esc_url($url).'" class="'.$classes.'"'.$output_style.' title="'.esc_attr($title).'"'.$output_target.'>'.$content.'</a>';
	return $output;
}
add_shortcode('button', 'sc_button');

// Shortcode for Twitter Timeline Widget
function sc_twitter_timeline_widget( $atts ) {
	extract( shortcode_atts( array(
		'username' => '',
		'widget_id' => '',
		'theme' => '',
		'link_color' => '',
		'chrome_nofooter' => 'false',
		'chrome_noborders' => 'false',
		'chrome_noscrollbar' => 'false',
		'chrome_transparent' => 'false',
		'border_color' => '',
		'tweet_limit' => '',
		'style' => ''
	), $atts ) );

	static $is_twitter_timeline_script_inserted = 0;

	$data_theme='';
	$data_link_color='';
	$data_chrome='';
	$data_border_color='';
	$data_tweet_limit='';

	if($theme!='') {
		$data_theme='data-theme="'.$theme.'"';
	}

	if($link_color!='') {
		$data_link_color='data-link-color="'.$link_color.'"';
	}

	if($chrome_nofooter=='true' || $chrome_noborders=='true' || $chrome_noscrollbar=='true' || $chrome_transparent=='true') {
		$data_chrome='data-chrome="';
		
		if($chrome_nofooter=='true') {
			$data_chrome.='nofooter ';
		}

		if($chrome_noborders=='true') {
			$data_chrome.='noborders';
		}

		if($chrome_noscrollbar=='true') {
			$data_chrome.='noscrollbar ';
		}

		if($chrome_transparent=='true') {
			$data_chrome.='transparent';
		}

		$data_chrome.='"';
	}

	if($border_color!='') {
		$data_border_color='data-border-color="'.$border_color.'"';
	}

	if($tweet_limit!='') {
		$data_tweet_limit='data-tweet-limit="'.$tweet_limit.'"';
	}

	$output='<div class="twitter-timeline-wrapper"';
	if($style!='') {
		$output.=' style="'.$style.'"';
	}
	$output.='>';

	$output.='<a class="twitter-timeline" href="https://twitter.com/'.$username.'" data-widget-id="'.$widget_id.'"';
	
	if($data_theme!='') {
		$output.=' '.$data_theme;
	}

	if($data_link_color!='') {
		$output.=' '.$data_link_color;
	}

	if($data_chrome!='') {
		$output.=' '.$data_chrome;
	}

	if($data_border_color!='') {
		$output.=' '.$data_border_color;
	}

	if($data_tweet_limit!='') {
		$output.=' '.$data_tweet_limit;
	}

	$output.='>Tweets by @'.$username.'</a>';

	if($is_twitter_timeline_script_inserted==0) {
		$output.='<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
	}

	$output.='</div>';

	return $output;

}
add_shortcode('twitter_timeline_widget', 'sc_twitter_timeline_widget');

// Shortcode for Social Links
function sc_social_links( $atts ) {
	extract( shortcode_atts( array(
		'behance' => '',
		'deviantart' => '',
		'dribbble' => '',
		'facebook' => '',
		'flickr' => '',
		'forrst' => '',
		'googleplus' => '',
		'instagram' => '',
		'linkedin' => '',
		'myspace' => '',
		'pinterest' => '',
		'rss' => '',
		'skype' => '',
		'soundcloud' => '',
		'tumblr' => '',
		'twitter' => '',
		'vimeo' => '',
		'vine' => '',
		'youtube' => '',
		'style' => ''
	), $atts ) );
	$udt_sm_list=array();
	foreach ($atts as $key => $value) {
		if($key!='style') {
			$udt_sm_list[]=$key;
		}
	}

	$social_color_class='black';
	if(returnOptionValue('social_link_icon_color')!='') {
		$social_color_class=returnOptionValue('social_link_icon_color');
	}
	
	$output='<ul class="socialSmall '.$social_color_class.'" style="'.$style.'">';
	foreach($atts as $key => $val) {
		if(in_array($key,$udt_sm_list) && $val!='') {
			$output.='<li><a class="'.strtolower(trim($key)).'" href="'.trim($val).'" target="_blank"></a></li>';
		}
	}
	$output.='</ul>';
	return $output;
}
add_shortcode('social_links', 'sc_social_links');

// Shortcode for Google Maps
function sc_google_maps($atts, $content = null) {
	extract(shortcode_atts(array(
		'id' => 'map_canvas',
		'lat' => '',
		'long' => '',
		'zoom' => '',
		'marker' => 'default',
		'info_title' => '',
		'info_content' => '',
		'width' => '100%',
		'height' => '300px',
		'style' => ''
	), $atts));
	return '<div class="map" id="'.$id.'" style="width:'.$width.'; height:'.$height.'; '.$style.'" data-map-lat="'.$lat.'" data-map-long="'.$long.'" data-map-zoom="'.$zoom.'" data-map-marker="'.$marker.'" data-map-info-title="'.$info_title.'" data-map-info-content="'.$info_content.'"></div>';
}
add_shortcode("map", "sc_google_maps");

// Shortcode for videos
function sc_video( $atts ) {
	extract( shortcode_atts( array(
		'type' => 'youtube',
		'url' => '',
		'width' => '100%',
		'height' => 'auto',
		'player_id' => 'player1',
		'style' => ''
	), $atts ) );
	$output='<div class="video" style="width:'.$width.'; height:'.$height.'; '.$style.'">';
	if($type=='vimeo') {
		$output.='<iframe width="'.$width.'" height="'.$height.'" src="http://player.vimeo.com/video/'.$url.'?title=0&amp;byline=0&amp;portrait=0&amp;color='.returnOptionValue('vimeo_controls_color').'&amp;autoplay=0&amp;loop=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	} else if($type=='youtube') {
		$output.='<iframe  width="'.$width.'" height="'.$height.'" src="http://www.youtube.com/embed/'.$url.'?autohide=2&amp;disablekb=0&amp;fs=1&amp;hd=0&amp;loop=0&amp;rel=0&amp;showinfo=0&amp;showsearch=0&amp;wmode=transparent" frameborder="0"></iframe>';
	}
	$output.='</div>';
	return $output;
}
add_shortcode('video', 'sc_video');

// Shortcode for SoundCloud
function sc_soundcloud( $atts ) {
	extract( shortcode_atts( array(
		'url' => '',
		'width' => '100%',
		'height' => '166px',
		'style' => ''
	), $atts ) );
	$style='width:'.$width.'; height:'.$height.'; '.$style;
	$output='<div class="soundcloud-wrapper" style="'.$style.'"><iframe width="'.$width.'" height="'.$height.'" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url='.$url.'"></iframe></div>';
	return $output;
}
add_shortcode('soundcloud', 'sc_soundcloud');

// Shortcode for image
function sc_image( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url' => '',
		'width' => '100%',
		'height' => 'auto',
		'align' => '',
		'caption_style' => 'impact',
		'caption_width' => '',
		'caption_align' => 'left',
		'link' => '',
		'link_title' => '',
		'style' => ''
	), $atts ) );
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);

	$output='<div class="display-image '.$align.'" style="width:'.$width.'; height:'.$height.'; '.$style.'">';
		$output.='<img width="'.$width.'"';
		if($height!='auto') {
			$output.=' height="'.$height.'"';
		}
		$output.=' src="'.$url.'">';

		if($link!='') {
			$output.='<a href="'.$link.'" title="'.$link_title.'" class="linked-display-image">'.$link_title.'</a>';
		}

		if($content!='') {
			if($caption_align=='center' || $caption_align=='center-left' || $caption_align=='center-right') {
				$output.='<div class="centered-caption-wrapper"><div class="caption-table"><div class="caption-table-cell">';
			}

			$output.='<div class="caption '.$caption_style.' '.$caption_align.'" style="width:'.$caption_width.';">'.$content.'</div>';

			if($caption_align=='center' || $caption_align=='center-left' || $caption_align=='center-right') {
				$output.='</div></div></div>';
			}
		}
	$output.='</div>';
	return $output;
}
add_shortcode('image', 'sc_image');

// Shortcode for lightboxes
function sc_lightbox( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'media_type' => 'image',
		'thumbnail_url' => '',
		'url' => '',
		'link_title' => '',
		'rollover_text' => '',
		'width' => '100%',
		'height' => 'auto',
		'align' => '',
		'style' => ''
	), $atts ) );
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	
	if($media_type=='image') {
		$output='<div class="thumb '.$align.'" style="width:'.$width.'; height:'.$height.'; '.$style.'"><a class="lightbox" href="'.esc_url($url).'" title="'.esc_attr($link_title).'" data-caption="'.esc_attr($rollover_text).'"><img src="'.esc_url($thumbnail_url).'" style="width:'.$width.'; height:'.$height.';" alt="" class="lazy" /></a>';
		$output.='</div>';
		if($content!='') { $output.='<div class="fancybox-html">'.wptexturize(wpautop($content)).'</div>'; }
	} else if($media_type=='iframe') {
		$output='<div class="thumb '.$align.'" style="width:'.$width.'; height:'.$height.'; '.$style.'"><a class="lightbox-iframe" href="'.esc_url($url).'" title="'.esc_attr($link_title).'" data-caption="'.esc_attr($rollover_text).'"><img src="'.esc_url($thumbnail_url).'" style="width:'.$width.'; height:'.$height.';" alt="" /></a></div>';
		if($content!='') { $output.='<div class="fancybox-html">'.wptexturize(wpautop($content)).'</div>'; }
	} else if($media_type=='soundcloud') {
		$output='<div class="thumb '.$align.'" style="width:'.$width.'; height:'.$height.'; '.$style.'"><a class="lightbox-soundcloud" href="https://w.soundcloud.com/player/?url='.$url.'&amp;auto_play=true&amp;show_artwork=true" title="'.esc_attr($link_title).'" data-caption="'.esc_attr($rollover_text).'"><img src="'.esc_url($thumbnail_url).'" style="width:'.$width.'; height:'.$height.';" alt="" /></a></div>';
		if($content!='') { $output.='<div class="fancybox-html">'.wptexturize(wpautop($content)).'</div>'; }
	}
	return $output;
}
add_shortcode('lightbox', 'sc_lightbox');

// Shortcode for slider
function sc_slider( $atts ) {
	extract( shortcode_atts( array(
		'id' => '',
		'size' => 'blog-width',
		'style' => ''
	), $atts ) );
	if($id=='') {
		return 'Please set the id attribute.';
	}
	if($size=='thumbnail') {
		$size_output='udt-portfolio-thumb';
		$width='286px';
		$height='196px';
	} else if($size=='full-width') {
		$size_output='udt-full-width-image';
		$width='870px';
		$height='490px';
	} else if($size=='full-size') {
		$size_output='full';
		$width='';
		$height='';
	} else {
		$size_output=array(620,349);
		$width='605px';
		$height='34px';
	}
	if(isset($width) && $width!='') {
		$style_output='style="width:'.$width.'; height:'.$height.'; '.$style.'"';
	} else {
		$style_output='style="'.$style.'"';
	}
	
	global $post;
	$tmp_post = $post;
	
	$sc_my_args = array( 'post_type' => 'udt_shortcode_slider', 'posts_per_page' => -1, 'post_id' => $id );
	$sc_my_query = new WP_Query( $sc_my_args );
	while ( $sc_my_query->have_posts() ) : $sc_my_query->the_post();
		$sc_my_args_2 = array(
			'post_type' => 'attachment',
			'post_mime_type' => 'image',
			'numberposts' => -1,
			'post_status' => 'inherit',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'post_parent' => $id
		);
		$sc_attachments = get_posts( $sc_my_args_2 );
		$count_attachments = count($sc_attachments);
		
		if($count_attachments>1) {
			$output = '<div class="flexslider" '.$style_output.'>';
				$output .= '<ul class="slides">';
				
				foreach ( $sc_attachments as $sc_attachment ) {
					
					$slide_link_url = get_post_meta( $sc_attachment->ID, '_udt_slide_link_url', true );
					
					$output .= '<li>';
					
					$image_src=wp_get_attachment_image_src($sc_attachment->ID,$size_output);
					
					if($slide_link_url!='') {
						$output .= '<a href="'.esc_url($slide_link_url).'">';
					}
					$output .= '<img src="'.esc_url($image_src[0]).'" alt="" />';
					if($slide_link_url!='') {
						$output .= '</a>';
					}
					
					if(wp_get_attachment_metadata($sc_attachment->ID)) {
						if($sc_attachment->post_excerpt !='') {
							$output .= '<p class="flex-caption">' . $sc_attachment->post_excerpt . '</p>';
						} else if($sc_attachment->post_content !='') {
							$output .= '<p class="flex-caption">' . $sc_attachment->post_content . '</p>';
						}
					}
					
					$output .= '</li>'."\n";
				}
					
				$output .= '</ul>';
			$output .= '</div>';
		} else {
			$output='Please upload multiple images to the slider.';
		}
		
	endwhile;
	
	$post = $tmp_post;
	
	return $output;
}
add_shortcode('slider', 'sc_slider');

// Shortcode for accordion
function sc_accordion( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	return '<dl class="accordion" style="'.$style.'">'.$content.'</dl>';
}
add_shortcode("accordion", "sc_accordion");

// Shortcode for accordion_label
function sc_accordion_label( $atts, $content = null ) {
	/*extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );*/
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	return '<dt><a href="#"><span>+</span> '.wptexturize($content).'</a></dt>';
}
add_shortcode("accordion_label", "sc_accordion_label");

// Shortcode for accordion_content
function sc_accordion_content( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	return '<dd style="'.$style.'">'.wptexturize(wpautop($content)).'</dd>';
}
add_shortcode("accordion_content", "sc_accordion_content");

// Shortcode for tabs
function sc_tabs( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'labels' => '',
		'style' => ''
	), $atts ) );
	if($labels=='') {
		return 'Please set the labels attribute.';
	}
	$labels=explode(',',$labels);
	$label_ref_count=1;
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="tabs" style="'.$style.'">';
	$output.='<ul class="tabs_nav">';
	foreach($labels as $label) {
		$output.='<li><a href="#" data-label_ref="'.$label_ref_count.'">'.trim($label).'</a></li>';
		$label_ref_count++;
	}
	$output.='</ul>';
	$output.=$content.'</div>';
	return $output;
}
add_shortcode("tabs", "sc_tabs");

// Shortcode for tab
function sc_tab( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'label_ref' => '',
		'style' => ''
	), $atts ) );
	if($label_ref=='') {
		return 'Please set the label_ref attribute.';
	}
	$content = do_shortcode(shortcode_unautop( $content ));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	return '<div class="tabs_content" data-label_ref="'.$label_ref.'" style="'.$style.'">'.wptexturize(wpautop($content)).'</div>';
}
add_shortcode("tab", "sc_tab");

// Shortcode for pricing_table
function sc_pricing_table( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'columns' => '1',
		'style' => ''
	), $atts ) );
	$classes='pricing_table';
	if($columns=='2') {
		$classes.=' pricing_table_two_cols';
	} else if($columns=='3') {
		$classes.=' pricing_table_three_cols';
	} else if($columns=='4') {
		$classes.=' pricing_table_four_cols';
	} else if($columns=='5') {
		$classes.=' pricing_table_five_cols';
	}
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="'.$classes.'" style="'.$style.'">';
	$output.=$content.'</div>';
	return $output;
}
add_shortcode("pricing_table", "sc_pricing_table");

// Shortcode for pricing_table_column
function sc_pricing_table_column( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="pricing_table_col" style="'.$style.'">';
	$output.=$content.'</div>';
	return $output;
}
add_shortcode("pricing_table_column", "sc_pricing_table_column");

// Shortcode for charts
function sc_chart( $atts ) {
	extract( shortcode_atts( array(
		'data' => '',
		'style' => ''
	), $atts ) );
	$output='<div class="chart-container" style="'.$style.'">';
	if($data!='') {
		$data=explode(';',$data);
		
		$output.='<ul class="chart">';
		
		foreach($data as $row) {
			$row=explode(':',$row);
			if(isset($row[0]) && $row[0]!='') {
				$output.='<li style="width:'.trim($row[1]).';">';
					$output.='<h6>'.trim($row[0]).'</h6>';
					$output.='<div>'.trim($row[1]).'</div>';
				$output.='</li>';
			}
		}
		
		$output.='</ul>';
	} else {
		$output.='Please enter data in the data attribute.';
	}
	$output.='</div>';
	return $output;
}
add_shortcode('chart', 'sc_chart');

// Shortcode for EpicSlider Caption
function sc_epicslider_caption( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'caption_type' => 'elegant',
		'caption_position' => 'bottom-left',
		'caption_width' => '',
		'style' => ''
	), $atts ) );
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);

	$output='<div class="es-caption" style="'.$style.'"';

	if($caption_type!='') {
		$output.=' data-caption="'.$caption_type.'"';
	}
	if($caption_position!='') {
		$output.=' data-caption-position="'.$caption_position.'"';
	}
	if($caption_width!='') {
		$output.=' data-caption-width="'.$caption_width.'"';
	}

	$output.='>';
	
	$output.=$content;

	$output.='</div>';
	return $output;
}
add_shortcode('epicslider_caption', 'sc_epicslider_caption');

// Convert hex to RGB
function hex2rgb($hex) {
	$hex = str_replace("#", "", $hex);
	
	if(strlen($hex) == 3) {
		$r = hexdec(substr($hex,0,1).substr($hex,0,1));
		$g = hexdec(substr($hex,1,1).substr($hex,1,1));
		$b = hexdec(substr($hex,2,1).substr($hex,2,1));
	} else {
		$r = hexdec(substr($hex,0,2));
		$g = hexdec(substr($hex,2,2));
		$b = hexdec(substr($hex,4,2));
	}
	$rgb = array($r, $g, $b);
	return $rgb;
}

// Dynamic stylesheet
function udt_custom_wp_request( $wp ) {
	if (!empty( $_GET['udt-custom-content'] ) && $_GET['udt-custom-content'] == 'css') {
		// get theme options
		header( 'Content-Type: text/css' );
		require 'custom-css.php';
		exit;
	}
}
add_action( 'parse_request', 'udt_custom_wp_request' );

// Add divider between custom fields in WordPress Media Modal
function amp_admin_head() {
	echo '<style>
		.compat-item table.compat-attachment-fields {
			margin-top:11px;
			padding-top:11px;
			border-top:1px solid #e5e5e5;
			box-shadow:inset 0 1px 0 #ffffff;
		}
		.compat-item table.compat-attachment-fields tr {
			margin-bottom:11px;
			padding-bottom:11px;
			border-bottom:1px solid #e5e5e5;
			box-shadow:0 1px 0 #ffffff;
		}
	</style>';
}
add_action('admin_head', 'amp_admin_head');

// Override wplink.js
function wpse22643_override_wplink( $hook ) {
	wp_register_script(
		'override-wplink', 
		get_stylesheet_directory_uri() . '/js/override-wplink.js',
		array( 'jquery' ),
		'',
		TRUE
	);
	wp_enqueue_script( 'override-wplink' );
}
add_action( 'admin_print_scripts-post.php',     'wpse22643_override_wplink' );
add_action( 'admin_print_scripts-post-new.php', 'wpse22643_override_wplink' );

?>