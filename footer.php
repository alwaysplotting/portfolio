<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */
?>

<div id="footer-wrapper">
	
	<?php get_sidebar('footer'); ?>

	<div id="footer-bottom">

		<div id="footer-bottom-inner-wrapper">

			<footer>

				<?php
				$networks['behance']['network_name']='Behance';
				$networks['behance']['network_class']='behance';

				$networks['deviantart']['network_name']='DeviantArt';
				$networks['deviantart']['network_class']='deviantart';

				$networks['dribbble']['network_name']='Dribbble';
				$networks['dribbble']['network_class']='dribbble';
				
				$networks['facebook']['network_name']='Facebook';
				$networks['facebook']['network_class']='facebook';
				
				$networks['flickr']['network_name']='Flickr';
				$networks['flickr']['network_class']='flickr';
				
				$networks['forrst']['network_name']='Forrst';
				$networks['forrst']['network_class']='forrst';
				
				$networks['googleplus']['network_name']='Google+';
				$networks['googleplus']['network_class']='googleplus';

				$networks['instagram']['network_name']='Instagram';
				$networks['instagram']['network_class']='instagram';
				
				$networks['linkedin']['network_name']='LinkedIn';
				$networks['linkedin']['network_class']='linkedin';
				
				$networks['myspace']['network_name']='Myspace';
				$networks['myspace']['network_class']='myspace';

				$networks['pinterest']['network_name']='Pinterest';
				$networks['pinterest']['network_class']='pinterest';
				
				$networks['rss']['network_name']='RSS';
				$networks['rss']['network_class']='rss';
				
				$networks['skype']['network_name']='Skype';
				$networks['skype']['network_class']='skype';

				$networks['soundcloud']['network_name']='SoundCloud';
				$networks['soundcloud']['network_class']='soundcloud';
				
				$networks['tumblr']['network_name']='Tumblr';
				$networks['tumblr']['network_class']='tumblr';

				$networks['twitter']['network_name']='Twitter';
				$networks['twitter']['network_class']='twitter';
				
				$networks['vimeo']['network_name']='Vimeo';
				$networks['vimeo']['network_class']='vimeo';

				$networks['vine']['network_name']='Vine';
				$networks['vine']['network_class']='vine';

				$networks['youtube']['network_name']='YouTube';
				$networks['youtube']['network_class']='youtube';
				
				$snsCounter=0;
				
				$social_color_class='black';
				if(returnOptionValue('social_link_icon_color')!='') {
					$social_color_class=returnOptionValue('social_link_icon_color');
				}

				$outputSns='<ul class="connect '.$social_color_class.'">';
				
				if(returnOptionValue('sns_type_1')!='0') {
					if(isset($networks[returnOptionValue('sns_type_1')]['network_class'])) {
						$outputSns.='<li><a href="'.returnOptionValue('sns_url_1').'" title="'.$networks[returnOptionValue('sns_type_1')]['network_name'].'" class="'.$networks[returnOptionValue('sns_type_1')]['network_class'].'">'.$networks[returnOptionValue('sns_type_1')]['network_name'].'</a></li>';
						$snsCounter++;
					}
				}
				
				if(returnOptionValue('sns_type_2')!='0') {
					if(isset($networks[returnOptionValue('sns_type_2')]['network_class'])) {
						$outputSns.='<li><a href="'.returnOptionValue('sns_url_2').'" title="'.$networks[returnOptionValue('sns_type_2')]['network_name'].'" class="'.$networks[returnOptionValue('sns_type_2')]['network_class'].'">'.$networks[returnOptionValue('sns_type_2')]['network_name'].'</a></li>';
						$snsCounter++;
					}
				}
				
				if(returnOptionValue('sns_type_3')!='0') {
					if(isset($networks[returnOptionValue('sns_type_3')]['network_class'])) {
						$outputSns.='<li><a href="'.returnOptionValue('sns_url_3').'" title="'.$networks[returnOptionValue('sns_type_3')]['network_name'].'" class="'.$networks[returnOptionValue('sns_type_3')]['network_class'].'">'.$networks[returnOptionValue('sns_type_3')]['network_name'].'</a></li>';
						$snsCounter++;
					}
				}
				
				if(returnOptionValue('sns_type_4')!='0') {
					if(isset($networks[returnOptionValue('sns_type_4')]['network_class'])) {
						$outputSns.='<li><a href="'.returnOptionValue('sns_url_4').'" title="'.$networks[returnOptionValue('sns_type_4')]['network_name'].'" class="'.$networks[returnOptionValue('sns_type_4')]['network_class'].'">'.$networks[returnOptionValue('sns_type_4')]['network_name'].'</a></li>';
						$snsCounter++;
					}
				}
				
				if(returnOptionValue('sns_type_5')!='0') {
					if(isset($networks[returnOptionValue('sns_type_5')]['network_class'])) {
						$outputSns.='<li><a href="'.returnOptionValue('sns_url_5').'" title="'.$networks[returnOptionValue('sns_type_5')]['network_name'].'" class="'.$networks[returnOptionValue('sns_type_5')]['network_class'].'">'.$networks[returnOptionValue('sns_type_5')]['network_name'].'</a></li>';
						$snsCounter++;
					}
				}
				
				if(returnOptionValue('sns_type_6')!='0') {
					if(isset($networks[returnOptionValue('sns_type_6')]['network_class'])) {
						$outputSns.='<li><a href="'.returnOptionValue('sns_url_6').'" title="'.$networks[returnOptionValue('sns_type_6')]['network_name'].'" class="'.$networks[returnOptionValue('sns_type_6')]['network_class'].'">'.$networks[returnOptionValue('sns_type_6')]['network_name'].'</a></li>';
						$snsCounter++;
					}
				}
				
				$outputSns.='</ul>';
				
				if($snsCounter>0) {
					echo $outputSns;
				}
				?>

				<!--copyright info-->
				<p class="footer-copyright"><?php echo stripslashes(html_entity_decode(returnOptionValue('footer_copyright'),ENT_QUOTES,"UTF-8")); ?></p>

<!-- 				<a class="back-to-top" title="<?php _e('Back to top', 'cartel'); ?>" href="#"><?php _e('Back to top', 'cartel'); ?></a>
 -->
			</footer>

		</div>

	</div>

</div>

<?php
global $fullscreen_background_image;

if(is_home()) {
	if(returnOptionValue('blog_index_background_image')!='') {
		echo '<div id="fullscreen-1" class="epic-fullscreen" data-image="'.returnOptionValue('blog_index_background_image').'"></div>';
	} else if(returnOptionValue('global_background_image')!='') {
		echo '<div id="fullscreen-1" class="epic-fullscreen" data-image="'.returnOptionValue('global_background_image').'"></div>';
	}
} else {
	if(returnOptionValue('global_background_image')!='' && (!isset($fullscreen_background_image) || $fullscreen_background_image=='')) {
		echo '<div id="fullscreen-1" class="epic-fullscreen" data-image="'.returnOptionValue('global_background_image').'"></div>';
	} else if(isset($fullscreen_background_image) && $fullscreen_background_image!='') {
		echo '<div id="fullscreen-1" class="epic-fullscreen" data-image="'.$fullscreen_background_image.'"></div>';
	}
}
?>

<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */
wp_footer();
?>

</body>
</html>