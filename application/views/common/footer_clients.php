<?php
/**
 * Restaurant At Home
 *
 * This file contains:
 * - The footer tags and main js
 *
 * @package	RestoAtHome
 * @author	A collaboration of: WiVen Web Solutions - VDW Web - KolorFlux
 * @copyright	Copyright (c) 2014 - 2015
 * @copyright
 * @license	*
 * @link	http://restaurantathome.be
 * @since	Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
</div><!-- end wrap -->
<!--
    <footer class="footer">
        <div class="container">
            <p class="text-muted">&COPY; Restaurant At Home</p>
        </div>
    </footer>-->


    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!--<script src="<?php echo public_url(); ?>js/script.js"></script>-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- jQuery UI (necessary for some other plugins) -->
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="<?php echo public_url(); ?>js/jquery.ui.touch-punch.min.js"></script>

    <script type="text/javascript">
		var pos = '';
		var markersArray = [];
		var time_to_destination = '';
		var distance_to_destination = '';

        $(document).ready(function() {
			if(navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function(position) {
				pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

				//console.log("'"+pos+"'");
				//console.log($('#finish_address').text());


				//calculateDistances(pos, $('#finish_address').text());

				}, function() {
					handleNoGeolocation(true);
				});
			} else {
				// Browser doesn't support Geolocation
				handleNoGeolocation(false);
			}


			$('#contact_type_btns a').on('click', function(e) {
			    //e.preventDefault();

			    $('#contact_type_btns a').removeClass('btn-success');
			    $('#contact_type_btns a').addClass('btn-primary');

			    $(this).removeClass('btn-primary');
			    $(this).addClass('btn-success');
			});

			$('body').scrollspy({ target: '#results_map' });

			var map_height = $("body").innerHeight()-$("header").height();

			$('#results_map').height(map_height);

			//$('body').css('padding-top', $('#topnav').outerHeight());

			if(!(document.URL).includes("contact")) {
			    $('body').css('padding-top', '71px');
			}

            if((document.URL).includes("search")) {
			    var margin_all_results = parseInt($('#filterrow').outerHeight()) + parseInt($('#filterrow').css('margin-bottom').substring(0,$('#filterrow').css('margin-bottom').length-2));
            }

			/*$('#all_results').css('padding-top', margin_all_results);*/

            var rating_given = 0;

			$('#myTab a').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			});

			$('.filter_btns').on('click', function() {
				$('.more_filters_section').slideToggle();
				$(".filter_btns").toggle();
			});

			$("#slider-range").slider({
				range: true,
				min: 5,
				max: 100,
				step: 5,
				values: [ 15, 50],
				slide: function( event, ui ) {
					$("#min_price").text(ui.values[0]);
					$("#max_price").text(ui.values[1]);
				}
			});

			$("#slider-range-distance").slider({
				range: true,
				min: 1,
				max: 50,
				step: 1,
				values: [ 1, 10],
				slide: function( event, ui ) {
					$("#min_distance").text(ui.values[0]);
					$("#max_distance").text(ui.values[1]);
				}
			});

			$('#min_price').text($("#slider-range").slider("values", 0));
			$('#max_price').text($("#slider-range").slider("values", 1));
			//$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

			$('#min_distance').text($("#slider-range-distance").slider("values", 0));
			$('#max_distance').text($("#slider-range-distance").slider("values", 1));

			$('.ui-widget-header').css('background', '#337ab7');
			$('.ui-corner-all').css('border-radius', '10px');
			$('#slider-range').css('margin-top', '10px');
			$('#slider-range').css('border-radius', '10px');
			$('#slider-range').css('height', '2px');

			$('#slider-range-distance').css('margin-top', '10px');
			$('#slider-range-distande').css('border-radius', '10px');
			$('#slider-range-distance').css('height', '2px');

			$('.ui-slider-range').css('margin-top', '-2px');
			$('.ui-slider-range').css('border', '2px solid #337ab7');
			$('.ui-slider-handle').css('border', '2px solid #337ab7');
			$('.ui-slider-handle').css('background', '#fff');
			$('.ui-slider-handle').css('margin-top', '-4px');

			//$('#myTab a:last').tab('show'); // Select last tab

			$('#show_only_opened_restos').on('click', function() {
				var isChecked = $("#show_only_opened_restos input:checkbox")[0];

				if($(isChecked).attr('checked') == 'checked') {
					$(isChecked).attr('checked', false);
				} else {
					$(isChecked).attr('checked', 'checked');
				}
			});

			$('#show_only_connected_restos').on('click', function() {
				var isChecked = $("#show_only_connected_restos input:checkbox")[0];

				if($(isChecked).attr('checked') == 'checked') {
					$(isChecked).attr('checked', false);
				} else {
					$(isChecked).attr('checked', 'checked');
				}
			});

            $('img.star_rating').mouseover(function() {
                if(rating_given == 0) {
                    $(this).attr('src', '../public/img/star_full.png');
                    $(this).prevAll().attr('src', '../public/img/star_full.png');
                }
            });

            $('img.star_rating').mouseout(function() {
                if(rating_given == 0) {
                    $(this).attr('src', '../public/img/star_empty.png');
                    $(this).prevAll().attr('src', '../public/img/star_empty.png');
                }
            });

            $('img.star_rating').on('click', function() {
                $(this).attr('src', '../public/img/star_full.png');
                $(this).prevAll().attr('src', '../public/img/star_full.png');
                rating_given = 1;
            });

			function isTouchDevice(){
				return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
			}

			if(isTouchDevice()===false) {
				$('[data-toggle="tooltip"]').tooltip();
			}

            $('.adlistitem').html('<img src="http://placehold.it/'+($('.adlistitem').innerWidth()-30)+'x100" />');

            $('.inviteRestoBtn').on('click', function() {
                $(this).text('Restaurant uitgenodigd');
                $(this).addClass('disabled');

                /*
                var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
            });*/
            });

            $('.add_as_favorite').on('click', function() {
				$('#loginModal').modal('show');

				/*
                if($(this).css('opacity') == 1) {
                    $(this).css('opacity', 0.3);
                    $(this).attr('data-original-title', 'Toegevoegd aan favorieten');
                } else {
                    $(this).css('opacity', 1.0);
                    $(this).attr('data-original-title', 'Voeg toe aan favorieten');
                }*/
            });

			//$('#myModal').modal('show');

			$('.login_link').on('click', function() {
				$('#loginModal').modal('show');
			});

			if(pos != '') {
				$('.resto_maps_viewer').attr('title', calculateDistanceAndTimeToResto("Lokerenbaan 100, 9240 Zele"));
			} else {
				$('.resto_maps_viewer').attr('title', 'Bekijk het restaurant op de kaart');
			}

			$('.resto_maps_viewer').on('click', function() {
				var resto = $(this).attr("data-restaurant");
				var adres = $(this).context.innerText;
				var adres = $(this).context.textContent;

				if(pos != '') {
					calculateDistances(pos, adres);
					setTimeout(function(){
						$('#resto_name_map').text(resto+' ('+distance_to_destination+' - '+time_to_destination+' rijden)');
						$('.resto_maps_viewer').attr('title', distance_to_destination+' - '+time_to_destination+' rijden');
						$('.resto_maps_viewer').attr('data-original-title', distance_to_destination+' - '+time_to_destination+' rijden');
					}, 2000);

				} else {
					$('#resto_name_map').text(resto);
				}

				//console.log(pos);
				//console.log(adres);


				//$('#resto_name_map').text(resto);

				$("#map_resto_overview").html('<iframe src="https://maps.google.com/maps?q='+encodeURIComponent(adres)+'&amp;output=embed" height="230" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" kwframeid="1"></iframe>');
				$('#myModal').modal('show');
			});

			$('#sortbar a').on('click', function() {
				$('#resultrow').css('opacity', 0.3);

				$('#loadingModal').modal({
					keyboard: false,
					backdrop: 'static'
				});

				setTimeout(function(){
					//$('#loginModal').modal('hide');
					$('#resultrow').css('opacity', 1);
					$('#loadingModal').modal('hide');
					//$('#resultrow').html('<img src="../public/img/loader.gif" />');
				}, 2000);
			});
        });

		function calculateDistanceAndTimeToResto(address_resto) {
			calculateDistances(pos, address_resto);

			return distance_to_destination+', '+time_to_destination+' rijden)';
		}

		function handleNoGeolocation(errorFlag) {
			if (errorFlag) {
				var content = 'Error: The Geolocation service failed.';
			} else {
				var content = 'Error: Your browser doesn\'t support geolocation.';
			}

			alert(content);

			var options = {
				map: map,
				position: new google.maps.LatLng(60, 105),
				content: content
			};

			var infowindow = new google.maps.InfoWindow(options);
			map.setCenter(options.position);
		}

		function calculateDistances(start, finish) {
			var service = new google.maps.DistanceMatrixService();
			service.getDistanceMatrix({
				origins: [start],
				//origins: [origin1],
				destinations: [finish],
				//destinations: [destinationA],
				travelMode: google.maps.TravelMode.DRIVING,
				unitSystem: google.maps.UnitSystem.METRIC,
				avoidHighways: false,
				avoidTolls: false
			}, callback);
		}

		function callback(response, status) {
			if (status != google.maps.DistanceMatrixStatus.OK) {
				alert('Error was: ' + status);
			} else {
				var origins = response.originAddresses;
				var destinations = response.destinationAddresses;
				//var outputDiv = document.getElementById('outputDiv');
				//outputDiv.innerHTML = '';
				deleteOverlays();

				for (var i = 0; i < origins.length; i++) {
					var results = response.rows[i].elements;
					//addMarker(origins[i], false);
					for (var j = 0; j < results.length; j++) {
						//outputDiv.innerHTML += origins[i] + ' to ' + destinations[j] + ': ' + results[j].distance.text + ' in ' + results[j].duration.text + '<br>';
						distance_to_destination = results[j].distance.text;
						time_to_destination = results[j].duration.text;
						//outputDiv.innerHTML += results[j].distance.text + ' in ' + results[j].duration.text + '<br>';
					}
				}
			}
		}

		function deleteOverlays() {
			for (var i = 0; i < markersArray.length; i++) {
				markersArray[i].setMap(null);
			}
			markersArray = [];
		}
    </script>



</body>

</html>

<?php //EOF  -'It all ends here'-   ?>