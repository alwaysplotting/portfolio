/*------------------------------------------------------------------------

//GENERAL FUNCTONS ///////////////////////////////////////////////////////

-------------------------------------------------------------------------*/

jQuery(document).ready(function($) {

	/*vars used throughout*/
	var toggleMenu = $('.mobileMenuToggle'),			//Mobile menu ref.
		menuLink = $('ul.menu li, .menu ul li').not('.widget_nav_menu .menu li'),
		lightboxTransition = 'fade',				//Fancybox transition type
		overlayOpacity =0.8,						//Fancybox overlay opacity
		overlayColor = '#000',						//Fancybox overlay color	
		videoWidth = 663,							//Fancybox video width
		videoHeight = 374;							//Fancybox video height
		lazyload = true;							//Whether to use lazy load or not
	
	//MOBILE MENU ---------------------------------------------------------------------------/
	/* Clone navigation for mobile */
	$('#header-inner header nav').clone().addClass('mobile-nav').appendTo('#header-inner header');
	$('.mobile-nav').find('ul').addClass('mobile-navigation');
	
	/* Use mobile navigation on iPad Landscape */
	if(navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Android/i)) {
		$('#header-inner').addClass('is_tablet');
		$('#header-inner .mobile-nav').css('display','block');
		$('#header-inner ul.navigation, #header-inner ul.mobile-navigation').css('display','none');
		$('#header-inner .mobileMenuToggle').css('display','block');
		$('.menu').not('.mobile-nav .menu').css({display:'none'});
	}
	$('.mobileMenuToggle').on('click', function() {
		if($(this).hasClass('open')) {
			$('ul.mobile-navigation').slideUp('normal','easeInOutQuint');
			$(this).removeClass('open');
		} else {
			$('ul.mobile-navigation').slideDown('normal','easeInOutQuint');
			$(this).addClass('open');
		}
		return false;
	});

	//SUB MENU ------------------------------------------------------------------------------/
	menuLink.on({						 
		mouseenter: function () {
			if($(this).children('ul').length && $(window).width() > 767) {
				$(this).children('ul').css({display:'block',opacity:0,top:'43px'}).stop().animate({opacity:1,top:'45px'},400);
			}
		},
		mouseleave: function () {
			if($(this).children('ul').length  && $(window).width() > 767) {
				$(this).children('ul').stop().animate({opacity:0,top:'43px'}, 400, function() {
					$(this).hide();
				});
			}
		}
	});

	//VIDEO RESIZE -------------------------------------------------------------------------/
	var resizeVideos = function() {
		$('.video').not('.project-display .video').each(function() {
			$(this).height(($(this).width()/1.777)+'px')
/*			.width($(window).width()+'px');
*/			$(this).find('embed, object, iframe').height(($(this).width()/1.777)+'px').width($(window).width()+'px');
		});
	};
	
	$(window).bind('resize', function() {
		resizeVideos();
	});
	resizeVideos();

	//LIGHTBOX SPECIFIC ---------------------------------------------------------------------/
	var udt_use_fancybox = true;
	if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i)){
			udt_use_fancybox = false;
	}
	if(udt_use_fancybox==true) {
		/*lightbox-img
		-------------------------------*/
		$('a.lightbox').fancybox({
			'transitionIn'		: lightboxTransition,
			'transitionOut'		: lightboxTransition,
			'titlePosition'		: 'over',
			'padding'			: '0',
			'overlayOpacity'	: overlayOpacity,
			'overlayColor'		: overlayColor,
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
				var obj = currentArray[ currentIndex ];
				var target = $(obj).parent();
				if($(target).next().hasClass('fancybox-html')) {
					if ($(target).next().length && $(obj).attr('rel')) {
						return  '<span id="fancybox-title-over">' + '<div class="fancybox-num"> Image:'+(currentIndex + 1) + ' / ' + currentArray.length+'</div>'+($(target).next().html()) + '</span>';
					} else {
						return  '<span id="fancybox-title-over">' + ($(target).next().html()) + '</span>';
					}
				} else if($(obj).attr('rel') && $(obj).attr('title')) {
					return  '<span id="fancybox-title-over">' + '<div class="fancybox-num"> Image:'+ (currentIndex + 1) + ' / ' + currentArray.length + '</div> '+ (title.length?''+title:'') + '</span>';
				} else if($(obj).attr('rel')) {
					return  '<span id="fancybox-title-over">' + '<div class="fancybox-num" style="margin-bottom:0px"> Image:'+(currentIndex + 1) + ' / ' + currentArray.length+'</div>'+'</span>';
				} else if($(obj).attr('title')) {
					return  '<span id="fancybox-title-over">' +(title.length ?''+title :'') + '</span>';
				} else {
					$('#fancybox-title-over').hide();
				}
			},
			'onComplete' : function() {
				if($(window).width()<=767) {
					$('.fancybox-title-over').css({display:'none'});
				} else {
					$('.fancybox-title-over').hide().fadeIn('slow');
				}
			}
		});
		/*lightbox-gallery
		-------------------------------*/
		$('.gallery-icon a').filter(function() { return $(this).attr('href').match(/([a-z\-_0-9\/\:\.]*\.(jpg|jpeg|png|gif))/i); }).fancybox({
			'transitionIn'		: lightboxTransition,
			'transitionOut'		: lightboxTransition,
			'titlePosition'		: 'over',
			'padding'			: '0',
			'overlayOpacity'	: overlayOpacity,
			'overlayColor'		: overlayColor,
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
				var obj = currentArray[ currentIndex ];
				var target = $(obj).parent();
				
				if($(target).next().hasClass('fancybox-html')) {
					if ($(target).next().length && $(obj).attr('rel')) {
						return  '<span id="fancybox-title-over">' + '<div class="fancybox-num"> Image:'+(currentIndex + 1) + ' / ' + currentArray.length+'</div>'+($(target).next().html()) + '</span>';
					} else {
						return  '<span id="fancybox-title-over">' + ($(target).next().html()) + '</span>';
					}
				} else if($(target).parent().children('dd.wp-caption-text.gallery-caption').length!=0) {
					return  '<span id="fancybox-title-over">' + $(target).parent().children('dd.wp-caption-text.gallery-caption').html() + '</span>';
				} else {
					$('#fancybox-title-over').hide();
				}
			},
			'onComplete' : function() {
				if($(window).width()<=767) {
					$('.fancybox-title-over').css({display:'none'});
				} else {
					$('.fancybox-title-over').hide().fadeIn('slow');
				}
			}
		});
		
		/*lightbox-media
		-------------------------------*/
		$('a.lightbox-iframe').fancybox({
			'transitionIn'		: lightboxTransition,
			'transitionOut'		: lightboxTransition,
			'padding'			: '0',	
			'titlePosition'		: 'outside',
			'width'				: videoWidth,
			'height'			: videoHeight,
			'overlayOpacity'	: overlayOpacity,
			'overlayColor'		: overlayColor,
			'autoscale'			: false,
			'type'				: 'iframe',
			'swf'				: {
			'wmode'				: 'transparent',
			'allowfullscreen'	: 'true'},
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
				var obj = currentArray[ currentIndex ];
				var target = $(obj).parent();
				if($(target).next().hasClass('fancybox-html')) {
					return  '<span>' + ($(target).next().html()) + '</span>';
				}
			},
			'onComplete':function(){
				if($(window).width()<=767) {
					$('.fancybox-title-outside').css({display:'none'});
				} else {
					$('.fancybox-title-outside').hide().fadeIn('slow').removeClass('fancybox-title-over');
				}
			}
		});
		$('a.lightbox-soundcloud').fancybox({
			'transitionIn' : lightboxTransition,
			'transitionOut' : lightboxTransition,
			'padding' : '0',
			'titlePosition' : 'outside',
			'width' : videoWidth,
			'height' : 166,
			'overlayOpacity' : overlayOpacity,
			'overlayColor' : overlayColor,
			'autoscale' : false,
			'type' : 'iframe',
			'swf' : {
			'wmode' : 'transparent',
			'allowfullscreen' : 'true'},
			'titleFormat' : function(title, currentArray, currentIndex, currentOpts){
				var obj = currentArray[ currentIndex ];
				var target = $(obj).parent(); 
				if($(target).next().hasClass('fancybox-html')) {
				return '<div>' + ($(target).next().html()) + '</div>';
				}
			},
			'onComplete':function(){
				if($(window).width()<=767){
					$('.fancybox-title-outside').css({display:'none'});
				} else {
					$('.fancybox-title-outside').hide().fadeIn('slow').removeClass('fancybox-title-over');
				}
			}
		});
	}

	//TO TOP BUTTON ---------------------------------------------------------------------/
	var scrollSpeed='normal';
	
	if(udt_global_vars.scrollToTopSpeed==1) {
		scrollSpeed='slow';
	} else if(udt_global_vars.scrollToTopSpeed==2) {
		scrollSpeed='fast';
	}
	
	jQuery('.back-to-top').click(function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, scrollSpeed);
		return false;
	});


	// Map -------------------------------------------------------------------------------/
	function initializeMap() {
		$('.map').each(function() {
			
			var map_id, map_lat, map_long, map_zoom, map_marker, map_info_title='', map_info_content='', m_controls=true;

			if(udt_global_vars.map_controls==0) {
				m_controls=false;
			}
			
			if($(this).attr('id')!='') {
				map_id=$(this).attr('id');
			}
			if($(this).attr('data-map-lat')!='') {
				map_lat=$(this).attr('data-map-lat');
			}
			if($(this).attr('data-map-long')!='') {
				map_long=$(this).attr('data-map-long');
			}
			if($(this).attr('data-map-zoom')!='') {
				map_zoom=parseInt($(this).attr('data-map-zoom'));
			}
			if($(this).attr('data-map-marker')!='') {
				map_marker=$(this).attr('data-map-marker');
			}
			if($(this).attr('data-map-info-title')!='') {
				map_info_title=$(this).attr('data-map-info-title');
			}
			if($(this).attr('data-map-info-content')!='') {
				map_info_content=$(this).attr('data-map-info-content');
			}
			
			var myLatlng = new google.maps.LatLng(map_lat, map_long);
			var myOptions = {
				zoom: map_zoom,
				center: myLatlng,
				mapTypeControl: m_controls,
				zoomControl: m_controls,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(document.getElementById(map_id),myOptions);
			
			if(map_marker=='custom') {
				var image = new google.maps.MarkerImage( udt_global_vars.map_image_marker ,
					new google.maps.Size(100, 52),
					new google.maps.Point(0,0),
					new google.maps.Point(50, 52));
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					icon: image
				});
			} else {
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map
				});
			}
			
			if(map_info_title!='' || map_info_content!='') {
				var contentString = '<p style="margin-bottom:0px"><strong>'+map_info_title+'</strong></p><p>'+map_info_content+'</p>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(map,marker);
				});
			}

		});
	}
	initializeMap();
});

jQuery(document).ready(function($) {

	/*epic hover plugin
	---------------------*/
	$(function() {
		$('.thumb, .gallery-icon').epicHoverFadeZoom({
			overlayColor: '#fff',											//Hex: #xxxx
			fontColor: '#222',												//Hex: #xxxx
			captionDirection: 'topToBottom', 								//String: caption slide in/out direction
			opacity: 0.8,													//Integer: 0-1
			transitionSpeed: 500,											//Integer: transitions speed, in milliseconds
			easing: 'swing',												//String: easing method - see http://jqueryui.com/demos/effect/easing.html
			padding: 0,														//Integer: padding
			mobileActive:false,												//Boolean: whether to activate/deactivate for mobile
			zoomFactor: 1.05,												//Float: zoom factor
			// rolloverLogo: udt_global_vars.rollover_logo
		});
	});
	
	/*flex slider
	---------------------*/
	//init flex slider
	$('.flexslider').flexslider({
		animation: "fade",
		slideDirection: "horizontal",
		slideshow: parseInt(udt_global_vars.flexslider_autoplay),
		slideshowSpeed: parseInt(udt_global_vars.flexslider_slide_timer),
		animationDuration: parseInt(udt_global_vars.flexslider_slide_animation_speed),
		directionNav: true,
		controlNav: true
	});

});

jQuery(window).load(function(){
	jQuery('.epic-fullscreen').epicFullscreen({
		background:'transparent',
		opacity: udt_global_vars.background_image_opacity,
		pattern: parseInt(udt_global_vars.background_image_overlay_pattern_on_off)
	});
});

jQuery(window).load(function() {
	var direction_nav=true;
	if(udt_global_vars.epic_slider_navigation_style=='bullets'){
		direction_nav=false;
	}
	jQuery('.epic-slider').epicSlider({
		loop : true,																		//Boolean: whether slideshow should loop or not	
		slideShow: parseInt(udt_global_vars.epic_slider_slideshow),							//Boolean: use slideshow or not
		autoPlay: parseInt(udt_global_vars.epic_slider_autoplay),							//Boolean: autoplay uplon load or not
		slideShowInterval : parseInt(udt_global_vars.epic_slider_slide_timer, 10),			//Integer: slideshow cycling speed, in milliseconds
		transitionSpeed : parseInt(udt_global_vars.epic_slider_slide_animation_speed, 10),	//Integer: transitions speed, in milliseconds
		shuffleSlides:false,																//Boolean: shuffle slides or not
		stack:false,																		//Boolean: whether slides should stack
		parallax:true,																		//Boolean: whether parallax effect should be used or not
		parallaxFactor:.7,																	//Integer:0-.4
		easing : udt_global_vars.epic_slider_easing,										//String: easing method - see http://jqueryui.com/demos/effect/easing.html
		fx : udt_global_vars.epic_slider_slide_animation,									//String: none, fade, leftToRight, topToBottom 
		fxmobile : udt_global_vars.epic_slider_mobile_slide_animation,						//String: mobile effect -  none, fade, leftToRight, topToBottom 
		pattern :true,				//Boolean: add pattern or not
		directionNav:direction_nav															//Boolean: direction nav or control nav
	});
});

/*grid
---------------------*/
/*init*/
jQuery(function($){
	var masonry_cols = 3;
	var masonry = $('#grid');
	calculateCols();
	// initialize masonry
	masonry.masonry({
		itemSelector: '#grid .thumb',
		columnWidth:Math.round((masonry.width()/ masonry_cols))
	});
	/*resize*/
	jQuery(window).resize(function(){
		calculateCols();
		masonry.masonry({
			itemSelector: '#grid .thumb',
			isAnimated: false,
			columnWidth:Math.round((masonry.width() / masonry_cols))
		});
	});
	function calculateCols (){
		if(masonry.width() <= 290) {
			masonry_cols=1;
		} else if(masonry.width() <= 426){
			 masonry_cols=3;
		}else{
			masonry_cols=3;
		}
	}
});

/* Portfolio Filter */
jQuery(function($) {
	$('.portfolio-filter-wrapper a').click(function() {
		if(navigator.userAgent.match(/Android/i) || 
		navigator.userAgent.match(/webOS/i) || 
		navigator.userAgent.match(/iPhone/i) || 
		navigator.userAgent.match(/iPod/i) || 
		navigator.userAgent.match(/BlackBerry/i)) {
			return;
		}

		var udt_current_filter_category = $(this).data('category-slug');
		$('.portfolio-filter-wrapper a').each(function() {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		if(udt_current_filter_category=='all') {
			$('#grid div.thumb').fadeTo(400, 1);
			$('#grid div.thumb').each(function() {
				$(this).removeClass('no_overlay');
			});
		} else {
			$('#grid div.thumb').each(function() {
				var udt_current_project_categories = $(this).data('project-categories').split(' ');
				if(jQuery.inArray(udt_current_filter_category, udt_current_project_categories)==-1) {
					$(this).fadeTo(400, 0.2);
					$(this).addClass('no_overlay');
				} else {
					$(this).fadeTo(400, 1);
					$(this).removeClass('no_overlay');
				}
			});
		}
		return false;
	});
});

/* Add rel attribute to link in WP Galleries */
jQuery(document).ready(function($) {
	$('.gallery').each(function() {
		if($(this).attr('id')) {
			$(this).find('dl dt a').attr('rel',$(this).attr('id'));
		}
	});
});