$(function() {
	if(window.innerHeight < 880) {
		$('.section[data-section="mansard"]').css({
			height: (window.innerHeight - $('.header').height()) + 'px',
		});
	}
});