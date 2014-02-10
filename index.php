<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */

get_header(); ?>

<?php

$blog_layout=returnOptionValue('blog_index_layout');

if(!is_search() && $blog_layout=='grid') { ?>
	<div id="content-wrapper" class="grid-layout">
<?php } else { ?>
	<div id="content-wrapper">
<?php } ?>

	<section class="pages clearfix">

		<!--start section title-->
		<?php if(!is_home()) : ?><div id="section-title">
			<h1><?php
			if(single_cat_title("", false)=='' && !is_archive()) {
				$page = get_page_by_title( single_post_title('', false) );
				if($page) {
					single_post_title();
				}
			} else if(is_archive()) {
				if ( have_posts() ) {
					the_post();

					if(is_day()) {
						echo get_the_date();
					} else if(is_month()) {
						echo get_the_date('F Y');
					} else if(is_year()) {
						echo get_the_date('Y');
					} else if(is_category()) {
						single_cat_title();
					} else {
						_e('Blog Archives','cartel');
					}

				} else {
					_e('Blog Archives','cartel');
				}

				rewind_posts();

			} else {
				single_cat_title();
			} ?></h1>
		</div>
		<?php else :
			if(stripslashes(html_entity_decode(returnOptionValue('blog_title')))!='') :
			?>
			<div id="section-title">
				<?php echo stripslashes(html_entity_decode(returnOptionValue('blog_title'))); ?>
			</div>
			<?php endif;
		endif; ?>
		<!--end section title-->

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

</div>
<!--end content-->
		
<?php get_footer(); ?>