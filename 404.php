<?php
/**
 * The Template for displaying 404 Page Not Found.
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */

get_header(); ?>

<!--start content-->
<div id="content-wrapper">

	<section class="pages clearfix">

		<!--start section title-->
		<div id="section-title">
			<h1><?php _e( 'Page Not Found', 'cartel' ); ?></h1>
		</div>
		<!--end section title-->

		<!--start content left-->
		<div class="content-inner-left">

			<p><?php _e( 'Oops! The page you requested could not be found. Perhaps searching will help.', 'cartel' ); ?></p>

		</div>

		<?php get_sidebar(); ?>

	</section>

</div>
<!--end content-->
		
<?php get_footer(); ?>