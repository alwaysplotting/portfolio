<?php
/**
 * The template for displaying portfolio projects.
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */

get_header(); ?>

<!--start content-->
<div id="content-wrapper">

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
	
	$udt_post_meta=get_post_meta($post->ID, '_udt_portfolio_meta', true);

	if(isset($udt_post_meta['background_image']) && $udt_post_meta['background_image']!='') {
		$fullscreen_background_image=$udt_post_meta['background_image'];
	}

	if($udt_post_meta['page_layout']=='default') {
		get_template_part('project','default');
	} else if($udt_post_meta['page_layout']=='full-width-slider') {
		get_template_part('project','full-width-slider');
	} else if($udt_post_meta['page_layout']=='without-featured-media') {
		get_template_part('project','without-featured-media');
	}

	endwhile; // end of the loop.
	?>

</div>

<?php get_footer(); ?>