$(function(e) {
	var sliders = new Array();
	$('.layout-content-slider .swiper-container').each(function(index, val) {
		sliders[$(val).data('floor')] = new Swiper('.layout-content-slider .swiper-container[data-floor="'+$(val).data('floor')+'"]', {
			speed: 400,
			spaceBetween: 100,
			navigation: {
				prevEl: '.layout-content-slider .swiper-container[data-floor="'+$(val).data('floor')+'"] .swiper-button-prev',
				nextEl: '.layout-content-slider .swiper-container[data-floor="'+$(val).data('floor')+'"] .swiper-button-next'
			},
			on: {
				init: function() {
					if($(val).data('floor') !== 'floor_2') {
						$('.layout-content-slider .swiper-container[data-floor="'+$(val).data('floor')+'"]').removeClass('active');
					}
				},
				slideChange: function() {
					var key = $($(this)[0].slides[$(this)[0].activeIndex]).data('key');
					var slider_arrow = $(this)[0].$el.find('.swiper-button-prev, .swiper-button-next');
					slider_arrow.css('pointer-events','none');
					$('.layout-content-picture-list img.active').fadeOut({
						duration: 200,
						complete: function(e) {
							$(this).removeClass('active');
							$('.layout-content-picture-list img[data-key="'+key+'"]').fadeIn({
								duration: 200,
								complete: function(e) {
									$(this).addClass('active');
									slider_arrow.removeAttr('style');
								}
							});
						}
					});
				}
			}
		});
	});
	$('.layout-content-picture-select__item').click(function(e) {
		if($(this).hasClass('active')) return;
		$('.layout-content-picture-select__item').css('pointer-events','none');
		$('.layout-content-picture-select__item.active').removeClass('active');
		$(this).addClass('active');
		var current_data_floor = $(this).data('floor');
		var current_data_key = $($('.layout-content-slider .swiper-container[data-floor="'+current_data_floor+'"] .swiper-slide')[0]).data('key');
		sliders[current_data_floor].slideTo(0);
		$('.layout-content-picture-list img.active').fadeOut({
			duration: 400,
			complete: function(e) {
				$(this).removeClass('active');
				$('.layout-content-picture-list img[data-key="'+current_data_key+'"]').fadeIn({
					duration: 400,
					complete: function(e) {
						$(this).addClass('active');
						$('.layout-content-picture-select__item').removeAttr('style');
					}
				});
			}
		});
		$('.layout-content-slider .swiper-container.active').fadeOut({
			duration: 400,
			complete: function(e) {
				$(this).removeClass('active');
				$('.layout-content-slider .swiper-container[data-floor="'+current_data_floor+'"]').fadeIn({
					duration: 400,
					complete: function(e) {
						$(this).addClass('active');
						$('.layout-content-picture-select__item').removeAttr('style');
					}
				});
			}
		});
	});
	$('.layout-content-plane-element__image').magnificPopup({
	  type: 'image',
	  callbacks: {
		  open: function() {
		  	if(window.innerWidth >= 1920) {
		  		$('html').css('margin-right', 0);
		  	}
		  }
		}
	});
});