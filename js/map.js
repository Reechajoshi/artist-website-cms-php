$(document).ready(function(){
			var myMarkers = {"markers": [
					{"latitude": "19.035245", "longitude":"72.846878", "icon": "img/pointer.png", "baloon_text": 'Twilight Entertainment PVT LTD'},
				]
			};

			$("#map").mapmarker({
				zoom	: 15,
				center	: 'Mahim west',
				markers	: myMarkers
			});

		});