$(function() {
	//$('.main-slider').css('height', window.innerHeight - $('.header').height());
	if(typeof($().fullpage.getFullpageData) == 'undefined') $('.main-slider').css('height', window.innerHeight);
	$('.main-slider').css('padding-top', $('.header').height());
	$('.main-slider').slick({
		slidesToShow: 1,
 		slidesToScroll: 1,
 		dots: false,
 		arrows: false,
 		speed: 600,
 		autoplay: true,
  		autoplaySpeed: 5000
	});
	var main_slider = $('.main-slider').slick('getSlick');
	var current_slide = 0;

	$('.main-slider-slide__background').css('opacity', 0);
	$('.main-slider-slide__text').css('opacity', 0);

	$(main_slider.$slides[main_slider.currentSlide]).find('.main-slider-slide__background').animate({opacity: 0.55}, 800);
	$(main_slider.$slides[main_slider.currentSlide]).find('.main-slider-slide__text').animate({opacity: 1}, 600);
	$(main_slider.$slides[main_slider.currentSlide]).find('.main-slider-logo').animate({opacity: 1}, 600);

	$('.main-slider').on('afterChange', function(){
		if(main_slider.currentSlide == current_slide) return;
		$('.main-slider-slide__background').css('opacity', 0);
		$('.main-slider-slide__text').css('opacity', 0);
		$('.main-slider-logo').css('opacity', 0);
		$(main_slider.$slides[main_slider.currentSlide]).find('.main-slider-slide__background').animate({opacity: 0.55}, 800);
		$(main_slider.$slides[main_slider.currentSlide]).find('.main-slider-slide__text').animate({opacity: 1}, 600);
		$(main_slider.$slides[main_slider.currentSlide]).find('.main-slider-logo').animate({opacity: 1}, 600);
		current_slide = main_slider.currentSlide;
	});

	$('.main-slider-slide__button').click(function(e) {
		if($(this).data('action') == 'popup') {
			e.preventDefault();
			$.magnificPopup.open({
				items: {
			    	src: 'https://www.youtube.com/watch?v=bDVUZbkJ3o4'
			  	},
			  	type: 'iframe'
			});
		} else if($(this).data('action') == 'slide_to') {
			e.preventDefault();
			if(typeof($().fullpage.getFullpageData) == 'undefined') {
				$('html, body').animate({
	                scrollTop: $('.section[data-section="contact"]').offset().top - 100
	            }, 500);
			} else {
				$().fullpage.moveTo(10);
			}
		}
	});
});