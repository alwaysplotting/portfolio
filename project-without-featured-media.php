<?php
/**
 * The template part for displaying the project layout without featured media.
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */

global $udt_post_meta;

?>

<section class="pages clearfix">

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

	the_content('',FALSE);

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