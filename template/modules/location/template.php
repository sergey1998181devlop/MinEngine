<div class="section" data-section="location" id="location">
	<div class="location container">
		<div class="location-header">
			<div class="location-header__title">Удобное расположение</div>
			<div class="location-header-mobile">
				<div class="location-header-mobile-item">
					<div class="location-header-mobile-item__title">Престижная локация в самом центре Москвы</div>
					<div class="location-header-mobile-item__descr">Расстояние до Садового кольца - 200 метров</div>
				</div>
				<div class="location-header-mobile-item">
					<div class="location-header-mobile-item__title">Тихая улица без оживлённого автомобильного движения</div>
					<div class="location-header-mobile-item__descr">Уланский переулок расположен в историческом центре Москвы</div>
				</div>
				<div class="location-header-mobile-item">
					<div class="location-header-mobile-item__title">5-7 минут в режиме неспешной прогулки, и Вы окажетесь в центре столичных событий!</div>
					<div class="location-header-mobile-item__descr">Транспортные развязки и метро, музеи и театры, концертные залы и деловые кварталы находятся в шаговой доступности</div>
				</div>
				<div class="location-header-mobile-item">
					<div class="location-header-mobile-item__title">200 метров до Садового кольца</div>
					<div class="location-header-mobile-item__descr">Уланский переулок начинается слева от проспекта Академика Сахарова рядом с Тургеневской площадью, проходит на северо-запад, затем поворачивает на северо-восток и идёт параллельно проспекту, пересекает Даев переулок и выходит на Садовое кольцо на Садовой-Спасской улице</div>
				</div>
			</div>
			<a class="location-header__address" href="https://yandex.ru/maps/-/COFsJ67K" target="_blank">г. Москва, Уланский переулок, <nobr>13, стр. 1</nobr></a>
		</div>
		<div class="gmap" style="height: 600px">
			<div id="gmap" style="height: 100%"></div>
		</div>
		<?/*
		<div class="location-slider">
			<?foreach($result['slider'] as $k => $slide):?>
				<div data-slide="<?=$k+1?>" class="location-slider__slide">
					<img src="<?=$slide?>" alt="">
				</div>
			<?endforeach?>
		</div>
		*/?>

		<?/*<div class="location-slider swiper-container">
		    <div class="swiper-wrapper">
		        <!-- Slides -->
				<?foreach($result['slider'] as $k => $slide):?>
			        <div data-slide="<?=$k+1?>" class="location-slider__slide swiper-slide">
			        	<img src="<?=$slide?>" alt="">
			        </div>
				<?endforeach?>
		    </div>
		    <div class="swiper-pagination"></div>
		    <a href="https://yandex.ru/maps/-/COFsJ67K" target="_blank" class="location-slider__address-link">Перейти на карту</a>
		</div>

		<div class="location-slides-description">
			<div class="location-slide-description active" data-slide="0" style="display: flex;">
				<div class="location-slide-description-element">
					<div class="location-slide-description-element__title">Престижная локация в самом центре Москвы</div>
					<div class="location-slide-description-element__subtitle">Расстояние до Садового кольца - 200 метров</div>
				</div>
				<div class="location-slide-description-element">
					<div class="location-slide-description-element__title">Тихая улица без оживлённого автомобильного движения</div>
					<div class="location-slide-description-element__subtitle">Уланский переулок расположен в историческом центре Москвы</div>
				</div>
			</div>
			<div class="location-slide-description" data-slide="1">
				<div class="location-slide-description-element">
					<div class="location-slide-description-element__title">5-7 минут в режиме неспешной прогулки, и Вы окажетесь в центре столичных событий!</div>
					<div class="location-slide-description-element__subtitle">Транспортные развязки и метро, музеи и театры, концертные залы и деловые кварталы находятся в шаговой доступности</div>
				</div>
			</div>
			<div class="location-slide-description" data-slide="2">
				<div class="location-slide-description-element">
					<div class="location-slide-description-element__title">200 метров до Садового кольца</div>
					<div class="location-slide-description-element__subtitle">Уланский переулок начинается слева от проспекта Академика Сахарова рядом с Тургеневской площадью, проходит на северо-запад, затем поворачивает на северо-восток и идёт параллельно проспекту, пересекает Даев переулок и выходит на Садовое кольцо на Садовой-Спасской улице</div>
				</div>
			</div>
		</div>*/?>
	</div>
</div>
<style>
	.gm-style-mtc, .gm-svpc, .gm-style-cc {
		display: none;
	}
	.gm-fullscreen-control,
	.gm-bundled-control-on-bottom .gmnoprint > div {
    	background: rgba(255,255,255,.1) !important;
	}
	.gm-bundled-control-on-bottom .gmnoprint > div > div {
		display: none;
	}
	.gm-style-iw {
	   top: 0 !important;
	   left: 0 !important;
	   border-radius: 2px 2px 0 0;
	   border: 3px solid rgba(192, 151, 123, 0.9);
	}
	.infowindow {
	font-family: "Сonstan";
	   font-size: 16px;
	   color: #C0977B;
	   background-color: #fff;
	background: #fff;
	}
</style>
<script>
	var map;
	var marker_array = new Array();
	function initMap() {
		map = new google.maps.Map(document.getElementById('gmap'), {
		  center: {lat: 55.767540, lng: 37.638649},
		  zoom: 16,
		  styles: styles
		});
		function infoCallback(infowindow, marker) {
   			return function() {
   				for(var i in marker_array) {
					marker_array[i].infowindow.close(map, marker_array[i].marker);
				}
   				marker_array.push({marker: marker, infowindow: infowindow});
   				infowindow.open(map, marker);
    		};
		}

		var marker = new google.maps.Marker({
			position: {lat: 55.768962, lng: 37.639015},
			map: map,
			title: 'Офис продаж',
			icon: {
			url: "template/modules/location/img/Office.svg",
			scaledSize: new google.maps.Size(59, 96)
		}
			});
		var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p><big><b>Премиум-апартаменты<br>«Уланский переулок»</b></big></p></div>"
   });

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));

		var marker = new google.maps.Marker({
			position: {lat: 55.768475, lng: 37.637973},
			map: map,
			title: 'Храм',
			icon: {
			url: "template/modules/location/img/Church.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});
		var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p>Храм Святителя Николая Мирликийского в Дербеневе</p></div>"
   			});

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));

		var marker = new google.maps.Marker({
			position: {lat: 55.767745, lng: 37.637973},
			map: map,
			title: 'Школа №1284',
			icon: {
			url: "template/modules/location/img/School.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});
				var infowindow = new google.maps.InfoWindow ({
      content: "<div class=infowindow><p>Школа № 1284</p></div>"
   });

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));

		var marker = new google.maps.Marker({
			position: {lat: 55.765384, lng: 37.637224},
			map: map,
			title: 'Тургеневская',
			icon: {
			url: "template/modules/location/img/Metro.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});

				var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p>5 минут до метро «Тургеневская»</p></div>"
   });

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));

		var marker = new google.maps.Marker({
			position: {lat: 55.768265, lng: 37.647820},
			map: map,
			title: 'Красные ворота',
			icon: {
			url: "template/modules/location/img/Metro.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});
				var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p>10 минут до метро «Красные ворота»</p></div>"
   });

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));

		var marker = new google.maps.Marker({
			position: {lat: 55.772313, lng: 37.632879},
			map: map,
			title: 'Сухаревская',
			icon: {
			url: "template/modules/location/img/Metro.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});
				var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p>10 минут до метро «Сухаревская»</p></div>"
   });

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));


		var marker = new google.maps.Marker({
			position: {lat: 55.769941, lng: 37.644756},
			map: map,
			title: 'Садовое кольцо',
			icon: {
			url: "template/modules/location/img/Road2.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});	
					var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p>200 метров до Садового кольца</p></div>"
   });

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));

	
		var marker = new google.maps.Marker({
			position: {lat: 55.764608, lng: 37.639311},
			map: map,
			title: 'Чистопрудный бульвар',
			icon: {
			url: "template/modules/location/img/Square.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});
				var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p>Чистопрудный бульвар</p></div>"
   });

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));


		var marker = new google.maps.Marker({
			position: {lat: 55.766582, lng: 37.632916},
			map: map,
			title: 'Сретенский бульвар',
			icon: {
			url: "template/modules/location/img/Square.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});
				var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p>Сретенский бульвар</p></div>"
   });

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));

		var marker = new google.maps.Marker({
			position: {lat: 55.769507, lng: 37.637678},
			map: map,
			title: 'Детский сад № 1184',
			icon: {
			url: "template/modules/location/img/Sad.svg",
			scaledSize: new google.maps.Size(44, 72)
		}
			});
		var infowindow = new google.maps.InfoWindow({
      content: "<div class=infowindow><p>Детский сад № 1184</p></div>"
   			});

		google.maps.event.addListener(marker, 'click', infoCallback(infowindow, marker));


	}
	var styles = [
	  {
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#191919"
	      }
	    ]
	  },
	  {
	    "elementType": "labels.icon",
	    "stylers": [
	      {
	        "visibility": "off"
	      }
	    ]
	  },
	  {
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#757575"
	      }
	    ]
	  },
	  {
	    "elementType": "labels.text.stroke",
	    "stylers": [
	      {
	        "color": "#191919"
	      }
	    ]
	  },
	  {
	    "featureType": "administrative.country",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#9e9e9e"
	      }
	    ]
	  },
	  {
	    "featureType": "administrative.land_parcel",
	    "elementType": "labels",
	    "stylers": [
	      {
	        "visibility": "off"
	      }
	    ]
	  },
	  {
	    "featureType": "administrative.locality",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#bdbdbd"
	      }
	    ]
	  },
	  {
	    "featureType": "landscape.man_made",
	    "elementType": "geometry.fill",
	    "stylers": [
	      {
	        "visibility": "on"
	      }
	    ]
	  },
	  {
	    "featureType": "landscape.man_made",
	    "elementType": "geometry.stroke",
	    "stylers": [
	      {
	        "color": "#999999"
	      }
	    ]
	  },
	  {
	    "featureType": "poi",
	    "elementType": "labels.text",
	    "stylers": [
	      {
	        "visibility": "off"
	      }
	    ]
	  },
	  {
	    "featureType": "poi",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#757575"
	      }
	    ]
	  },
	  {
	    "featureType": "poi.park",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#181818"
	      }
	    ]
	  },
	  {
	    "featureType": "poi.park",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#616161"
	      }
	    ]
	  },
	  {
	    "featureType": "poi.park",
	    "elementType": "labels.text.stroke",
	    "stylers": [
	      {
	        "color": "#1b1b1b"
	      }
	    ]
	  },
	  {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [
	      {
	        "color": "#212121"
	      }
	    ]
	  },
	  {
	    "featureType": "road",
	    "elementType": "labels.icon",
	    "stylers": [
	      {
	        "visibility": "off"
	      }
	    ]
	  },
	  {
	    "featureType": "road",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#8a8a8a"
	      }
	    ]
	  },
	  {
	    "featureType": "road.arterial",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#292929"
	      }
	    ]
	  },
	  {
	    "featureType": "road.arterial",
	    "elementType": "labels",
	    "stylers": [
	      {
	        "visibility": "simplified"
	      }
	    ]
	  },
	  {
	    "featureType": "road.highway",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#313131"
	      }
	    ]
	  },
	  {
	    "featureType": "road.highway",
	    "elementType": "labels",
	    "stylers": [
	      {
	        "visibility": "off"
	      }
	    ]
	  },
	  {
	    "featureType": "road.highway",
	    "elementType": "labels.text",
	    "stylers": [
	      {
	        "visibility": "simplified"
	      }
	    ]
	  },
	  {
	    "featureType": "road.highway.controlled_access",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#4e4e4e"
	      }
	    ]
	  },
	  {
	    "featureType": "road.local",
	    "stylers": [
	      {
	        "visibility": "simplified"
	      }
	    ]
	  },
	  {
	    "featureType": "road.local",
	    "elementType": "labels",
	    "stylers": [
	      {
	        "visibility": "off"
	      }
	    ]
	  },
	  {
	    "featureType": "road.local",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#616161"
	      }
	    ]
	  },
	  {
	    "featureType": "transit",
	    "stylers": [
	      {
	        "visibility": "off"
	      }
	    ]
	  },
	  {
	    "featureType": "transit",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#757575"
	      }
	    ]
	  },
	  {
	    "featureType": "water",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#000000"
	      }
	    ]
	  },
	  {
	    "featureType": "water",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#3d3d3d"
	      }
	    ]
	  }
	];
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfXbLIjeXk5BZVd2-T0ZQe0GsgcupIZEI&callback=initMap" async defer></script>