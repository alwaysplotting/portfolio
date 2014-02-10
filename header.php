<?php
/**
 * The Header of our theme.
 *
 * @package WordPress
 * @subpackage Cartel
 * @since Cartel 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " - $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'cartel' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php
if(returnOptionValue('favicon')!='') {
	echo '<link rel="shortcut icon" href="'.returnUploadedImageByID('favicon').'" />'."\n";
}

include_once('g-fonts.php');

$usedFonts=array();
if(!in_array('Oswald',$usedFonts)) {
	echo '<link rel="stylesheet" href="'.$g_fonts['Oswald'][2].'" />'."\n";
	$usedFonts[]='Oswald';
}
if(!in_array('Source Sans Pro',$usedFonts)) {
	echo '<link rel="stylesheet" href="'.$g_fonts['Source Sans Pro'][2].'" />'."\n";
	$usedFonts[]='Source Sans Pro';
}
if(!in_array(returnOptionValue('title_font'),$usedFonts)) {
	echo '<link rel="stylesheet" href="'.$g_fonts[returnOptionValue('title_font')][2].'" />'."\n";
	$usedFonts[]=returnOptionValue('title_font');
}
if(!in_array(returnOptionValue('caption_font'),$usedFonts)) {
	echo '<link rel="stylesheet" href="'.$g_fonts[returnOptionValue('caption_font')][2].'" />'."\n";
	$usedFonts[]=returnOptionValue('caption_font');
}
if(!in_array(returnOptionValue('thumb_rollover_font'),$usedFonts)) {
	echo '<link rel="stylesheet" href="'.$g_fonts[returnOptionValue('thumb_rollover_font')][2].'" />'."\n";
	$usedFonts[]=returnOptionValue('thumb_rollover_font');
}

if(is_singular('udt_portfolio') || is_post_type_archive('udt_portfolio') || is_page_template('page-udt_portfolio-index.php') || is_tax('portfolio_category')) {
	echo '<style>
	header nav#primary-nav ul li.current-menu-ancestor a, header nav#primary-nav ul li.current_page_parent a {
		color:#'.returnOptionValue('menu_link_color').' !important;
	}
	</style>
	';
}

if(returnOptionValue('css_editor')!='') {
	echo '<style>'."\n";
	echo stripslashes(html_entity_decode(returnOptionValue('css_editor'),ENT_QUOTES))."\n";
	echo '</style>'."\n";
}
?>

<?php if(returnOptionValue('google_tracking_id')!='') { ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo returnOptionValue('google_tracking_id'); ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php } ?>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<!-- TYPEKIT  -->
<script type="text/javascript" src="//use.typekit.net/ydb8tkh.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body <?php body_class(); ?>>

<!--start header-->
<div id="header-wrapper">
	<div id="header-inner">
		<header>
			<!--mobileMenu toggle-->
			<div class="mobileMenuToggle"><a href=""></a></div>

			<!--navigation-->
			<nav id="primary-nav">
				<?php wp_nav_menu( array( 'container' => 'div', 'theme_location' => 'primary', 'depth' => 2 ) ); ?>
			</nav>
			<!-- logo -->
			<div id="logo">
				<a href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
<!-- 					<img src="<?php echo returnUploadedImageByID('site_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>"> -->
					<div class="name">joseph delhommer</div>
					<div class="subname">art direction & cinematography</div>
				</a>
			</div>

		</header>
		<div style="clear:both;"></div>
	</div>
	<div style="clear:both;"></div>
</div>