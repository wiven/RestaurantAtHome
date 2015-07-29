$(document).ready(function () {

	var Kortrijk = new google.maps.LatLng(50.81948, 3.25773);
	var Zele = new google.maps.LatLng(51.07043, 4.02642);

	var locations = [
		['<span class="resto_pointer">Thuis</span>', 51.07043, 4.02642, 4],
		['<span class="resto_pointer">Lesley</span>', 51.07453, 4.03257, 5],
		['<span class="resto_pointer">Tante Kristien</span>', 51.01458, 4.00242, 3],
		['<span class="resto_pointer">Thomas De Pauw</span>', 51.09932, 3.84445, 2],
		['<span class="resto_pointer">Werk</span>', 50.72592, 4.22001, 1]
	];

	var map = new google.maps.Map(document.getElementById('map_search_pane'), {
		zoom: 11,
		center: Zele,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		disableDefaultUI: true,
		zoomControl: true
	});

	var infowindow = new google.maps.InfoWindow();

	var marker, i;

	var image = '../../public/img/resto_marker.png';

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			icon: image
		});

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}

	$('.btn_more_resto_info').on('click', function (e) {
		e.preventDefault();
		alert('ok');
	});

	$('.btnNoInvite').on('click', function (e) {
		e.preventDefault();
		$('.inviteRestoModal').modal('hide');
	});

	$('.resto_pointer').on('click', function () {
		var scroll_to = $('.resto_result:first-child').offset().top - 91;
		$('html,body').animate({
				scrollTop: scroll_to
			},
			'slow');

		$('.resto_result:first-child').css('background-color', '#eee');
	});
});
