$(function(e) {
	var location_slider = new Swiper ('.location-slider', {
		pagination: {
			el: '.location-slider .swiper-pagination',
			clickable: true
		},
		speed: 600
	});
	location_slider.on('slideChange', function(e) {
		var current_descr = $('.location-slide-description.active');
		$('.location-slide-description.active').fadeOut({
			duration: 200,
			done: function(e) {
				current_descr.removeClass('active');
				current_descr = $('.location-slide-description[data-slide='+location_slider.activeIndex+']');
				current_descr.fadeIn({
					done: function(e) {
						duration: 200,
						current_descr.addClass('active');
						current_descr.attr('style', 'display: flex');
					}
				});
			}
		});
	});
});