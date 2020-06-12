$(function(e) {

	$('.header-menu-button').click(function(e) {
		$(this).toggleClass('active');
		$('.header-menu-list').toggleClass('active');
	});

	if(window.innerHeight >= 880) {

		var arrSections = new Object();
		$('.section').each(function(index,val) {
			arrSections[$(val).data('section')] = index+1;
		});

		$('#fullpage').fullpage({
			scrollHorizontally: true,
		});
		$.fn.fullpage.setAllowScrolling(true);

		$('.header-menu-list-links > a').click(function(e) {
			if($(this).attr('href') == '') {
				e.preventDefault();
				$('.header-menu-button').toggleClass('active');
				$('.header-menu-list').toggleClass('active');
				$().fullpage.moveTo(arrSections[$(this).data('section')]);
			}
		});

	} else {

		$('.header-menu-list-links > a').click(function(e) {
			if($(this).attr('href') == '') {
				e.preventDefault();
				$('html, body').animate({
	                scrollTop: $('.section[data-section='+$(this).data('section')+']').offset().top - 100
	            }, 500);
	            $('.header-menu-button').toggleClass('active');
				$('.header-menu-list').toggleClass('active');
	        }
		});

	}

});

/*
main
about
comfort
contact
design
keyler
layout
location
mansard
*/