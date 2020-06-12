$(function(e) {
	$('.layout-content-slider').slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
		dots: true,
		arrows: false,
  		infinite: true,
  		autoplay: true,
  		autoplaySpeed: 5000,
  		fade: true,
  		cssEase: 'linear'
	});
	$('.layout-content-slider-select__item').click(function(e) {
		if($(this).hasClass('active')) return;
		var floor = $(this).data('floor');
		$('.layout-content-slider-select__item.active').removeClass('active');
		$(this).addClass('active');
		console.log(`.layout-content-plane-element[data-floor="${floor}"]`);
		console.log($(`.layout-content-plane-element[data-floor="${floor}"]`));
		$('.layout-content-plane-element.active').removeClass('active').fadeOut({
			duration: 200,
			done: function(e) {
				$(`.layout-content-plane-element[data-floor="${floor}"]`).addClass('active').fadeIn();
			}
		});
		$('.layout-content-slider.active').removeClass('active').fadeOut({
			duration: 200,
			done: function(e) {
				$(`.layout-content-slider[data-floor="${floor}"]`).addClass('active').fadeIn({
					duration: 200,
					done: function(e) {
						$(this).slick('resize', function(e) {
							console.log('resized');
						});
						$(this).slick('slickGoTo',0);
					}
				});
			}
		});
	});
});