$(function(e) {
	var contact_slider = new Swiper('.contact-content-slider.swiper-container', {
		speed: 600,
		navigation: {
		    nextEl: '.contact-content-slider-wrap .swiper-button-next',
		    prevEl: '.contact-content-slider-wrap .swiper-button-prev',
		},
		spaceBetween: 80
	});
	/*
	contact_slider.on('slideChange', function() {
		var current_slide = $('.contact-content-slider-wrap-slide-desc__title.active');
		$('.contact-content-slider-wrap-slide-desc__title.active').fadeOut({
			duration: 200,
			complete: function() {
				current_slide.removeClass('active');
				var next_slide = $('.contact-content-slider-wrap-slide-desc__title[data-slide-number="'+contact_slider.activeIndex+'"]');
				next_slide.fadeIn({
					duration: 200,
					complete: function() {
						next_slide.addClass('active');
					}
				});
			}
		});
	});*/

});