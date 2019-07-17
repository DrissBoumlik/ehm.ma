(function($) {
	'use strict';
	
	if (document.getElementById("map")) {

	google.maps.event.addDomListener(window, 'load', init);

	function init() {
		"use strict";
		var mapOptions = {
			zoom: 14,
			center: new google.maps.LatLng(40.672324, -74.357372), // New York
			styles: [
		{
			"featureType": "landscape",
			"stylers": [
				{
					"hue": "#FFA800"
					},
				{
					"saturation": 0
				},
				{
					"lightness": 0
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "road.highway",
			"stylers": [
				{
					"hue": "#53FF00"
				},
				{
					"saturation": -73
				},
				{
					"lightness": 40
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "road.arterial",
			"stylers": [
				{
					"hue": "#FBFF00"
				},
				{
					"saturation": 0
				},
				{
					"lightness": 0
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "road.local",
			"stylers": [
				{
					"hue": "#00FFFD"
				},
				{
					"saturation": 0
				},
				{
					"lightness": 30
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "water",
			"stylers": [
				{
					"hue": "#00BFFF"
				},
				{
					"saturation": 6
				},
				{
					"lightness": 8
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "poi",
			"stylers": [
				{
					"hue": "#679714"
				},
				{
					"saturation": 33.4
				},
				{
					"lightness": -25.4
				},
				{
					"gamma": 1
				}
			]
		}
	]
		};

		var mapElement = document.getElementById('map');

		var map = new google.maps.Map(mapElement, mapOptions);

		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(40.672324, -74.357372),
			map: map,
			icon: 'http://unicoderbd.com/theme/html/unigreen/gardening/images/marker.png',
			title: 'Snazzy!'
		});
	}
}

})(jQuery);
