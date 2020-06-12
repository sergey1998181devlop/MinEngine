$(function() {
	function keyler_tooltip(id, square) {
		return	'<div class="keyler-content-information-list-item">'+
					'<div class="keyler-content-information-list-item__number">'+id+'</div>'+
					'<div class="keyler-content-information-list-item-info">'+
						'<div class="keyler-content-information-list-item-info__name">Келлер</div>'+
						'<div class="keyler-content-information-list-item-info__square">'+square+' м2</div>'+
					'</div>'+
				'</div>'
	};

	if(window.innerWidth > 999) {
		$('.keyler-content-information-picture').mapSvg({
		  source: "/template/modules/keyler/img/keyler.svg",
		  width: '90%',
		  colors: {
		  	background: 'transparent',
		  	selected: 'transparent',
		  	hover: 'transparent',
		  	base: 'transparent'
		  },
		  tooltips: {
		  	mode: function(tooltip, region) {
		  		return keyler_tooltip(region.id, region.globalOptions.regions[region.id].square);
		  	}
		  },
		  regions: {
		  	1: {square: '3.06'},
		  	2: {square: '4.05'},
		  	3: {square: '4.06'},
		  	4: {square: '3.06'},
		  	5: {square: '4.12'},
		  	6: {square: '3.38'},
		  	7: {square: '3.68'},
		  	8: {square: '4.59'},
		  	9: {square: '3.46'},
		  	10: {square: '3.68'},
		  }
		});
	}
});