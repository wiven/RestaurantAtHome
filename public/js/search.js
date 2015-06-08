$(document).ready(function() {

    var Kortrijk = new google.maps.LatLng(50.81948, 3.25773);
    var Zele = new google.maps.LatLng(51.07043, 4.02642);

    var locations = [
        ['Thuis', 51.07043, 4.02642, 4],
        ['Lesley', 51.07453, 4.03257, 5],
        ['Tante Kristien', 51.01458, 4.00242, 3],
        ['Thomas De Pauw', 51.09932, 3.84445, 2],
        ['Werk', 50.72592, 4.22001, 1]
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

    //var image = '../../favicon-32x32.png';
    var image = '../../public/img/resto_marker.png';

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: image
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    /*
    $('#product_type_chooser > a').on('click', function() {
        $(this).addClass('active');
        console.log('active');
    });
    */

    $('.btn_more_resto_info').on('click', function(e) {
        e.preventDefault();
        alert('ok');
    });
});

