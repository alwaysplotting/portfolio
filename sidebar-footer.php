<?php
/**
 * The footer widget areas
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */
?>

<?php
if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
	)
		return;
?>

	<div id="footer-top" class="clearfix">
		<footer>

		<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
			<div class="column_one_third column-footer-widget">
				<ul class="footer-widget">
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
				</ul>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
			<div class="column_one_third column-footer-widget">
				<ul class="footer-widget">
					<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</ul>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
			<div class="column_one_third column-footer-widget last">
				<ul class="footer-widget">
					<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
				</ul>
			</div>
		<?php endif; ?>

			<div class="clear"></div>
		</footer>
	</div>