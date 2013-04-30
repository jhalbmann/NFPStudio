jQuery(document).ready(function($) {
	ddpowerzoomer.init($)

	jQuery('#lookbook #subnav li, #look #subnav li').each(function(idx) {
		if (idx % 4) {
			return;
		} else {
			jQuery(this).nextAll(':lt(3)').andSelf().wrapAll('<ul/>');
		}
	}).parent().unwrap();

	jQuery('#img .close').click(function(){
		jQuery('#img').hide();
		return false;
	});

	jQuery('#video_link').click(function(){
		jQuery('#img').hide();
		jQuery('#video').show();
		return false;
	});

	jQuery('#video .close').click(function(){
		jQuery('#video').hide();
		jQuery('#img').show();
		return false;
	});

	jQuery('.close img').fadeTo(0, 0.25);
	
	jQuery('.close a').hover(
		function(){
			jQuery(this).children('img').fadeTo('fast', 1);
		},
		function(){
			jQuery(this).children('img').fadeTo('fast', 0.25);
		}
	);
	
	jQuery('#about .close').click(function(){
		jQuery('#content').hide();
		jQuery('body').css({'background-image': 'url(/wordpress/wp-content/themes/1.1/img/shop_bg.jpg)'});
		return false;
	});
	
	jQuery('#about #content .press-thumb').hover(
		function(){
			jQuery(this).find('span').show();
		},
		function(){
			jQuery(this).find('span').hide();
		}
	);
	
	jQuery('#events .close').click(function(){
		jQuery('#content').hide();
		jQuery('body').css({'background-image': 'url(/wordpress/wp-content/themes/1.1/img/shop_bg.jpg)'});
		return false;
	});

	jQuery('#contact .close').click(function(){
		jQuery('#content').hide();
		jQuery('body').css({'background-image': 'url(/wordpress/wp-content/themes/1.1/img/shop_bg.jpg)'});
		return false;
	});
	
	jQuery('.row img').fadeTo(0, 0.6);
	jQuery('.row a').hover(
		function(){
			jQuery(this).children('img').fadeTo('fast', 1);
		},
		function(){
			jQuery(this).children('img').fadeTo('fast', 0.6);
		}
	);

	jQuery('#thumbs a').first().addClass('current');
	jQuery('.thumb a').each(function() {
		if(jQuery(this).hasClass('current')) {
		}else{
			jQuery(this).children('img').fadeTo(0, 0.6);
		}
	});
	var firstFullImage = jQuery('#thumbs a').first().attr('href');
	jQuery('#img .full-image.first').attr({
		src: firstFullImage,
		width: '587',
		height: 'auto'
	});
	jQuery('#img .full-image').addpowerzoom({
		defaultpower: 2,
		powerrange: [2,5],
		largeimage: firstFullImage,
		magnifiersize: [250,250]
	});
	jQuery('.thumb a').hover(
		function(){
			jQuery(this).children('img').fadeTo('fast', 1);
		},
		function(){
			jQuery('.thumb a').each(function() {
			if(jQuery(this).hasClass('current')) {
				jQuery(this).children('img').css({opacity:1});
			}
			else{
				jQuery(this).children('img').fadeTo('fast', 0.6);
			}
		});
	});

	jQuery('#thumbs .thumb a').on({
		click: function() {
			ddpowerzoomer.$magnifier.outer.remove();
			var fullImage = jQuery(this).attr('href');
			jQuery('#thumbs a').removeClass('current');
			jQuery('#img .full-image.first').removeClass('first');
			jQuery(this).addClass('current');
			jQuery('.thumb a').each(function() {
				if(jQuery(this).hasClass('current')) {
					jQuery(this).children('img').css({opacity:1});
				}
				else {
					jQuery(this).children('img').fadeTo(0, 0.6);
				}
			});
			ddpowerzoomer.init($)
			jQuery('#img .full-image').attr('src', fullImage);
			jQuery('#img .full-image').addpowerzoom({
				defaultpower: 2,
				powerrange: [2,5],
				largeimage: fullImage,
				magnifiersize: [250,250]
			});
			return false;
		}
	});
});
