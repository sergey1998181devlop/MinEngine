$(function(e) {
	let floors_slider = new Swiper('.floors-content-slider', {
		speed: 600,
		navigation: {
			nextEl: '.floors-content-slider .swiper-button-next',
			prevEl: '.floors-content-slider .swiper-button-prev',
		},
		spaceBetween: 80
	});
});