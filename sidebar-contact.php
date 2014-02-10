<?php
/**
 * The Sidebar for the contact section
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */
?>
		<aside class="sidebar">
		
			<ul>
			
			<?php
			if ( ! dynamic_sidebar( 'contact-sidebar' ) ) : ?>
			
				<li id="search" class="widget-container widget_search">
					<?php get_search_form(); ?>
				</li>
				
			<?php endif; // end widget area ?>
			
			</ul>
			
		</aside>