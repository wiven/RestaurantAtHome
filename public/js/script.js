$(document).ready(function () {

	$('.homepageback').backstretch([
			"http://more.restaurantathome.be/img/homepageslider/aperitiefglaasje%20met%20tomaat%20buffelmozzarella%20en%20italiaanse%20ham.jpg"
			, "http://more.restaurantathome.be/img/homepageslider/Carpaccio%20van%20zalm%20met%20sjalot%20bieslook%20en%20limoendressing.jpg"
			, "http://more.restaurantathome.be/img/homepageslider/Geroosterde%20wortelen.jpg"
			, "http://more.restaurantathome.be/img/homepageslider/Griekse%20yoghurt%20met%20bosbessen%20en%20geroosterde%20amandelschilfers.jpg"
			, "http://more.restaurantathome.be/img/homepageslider/Guacamole.jpg"
			, "http://more.restaurantathome.be/img/homepageslider/Macaroni%20met%20ham%20en%20kaas.jpg"
			, "http://more.restaurantathome.be/img/homepageslider/risotto%20milanese%20met%20crunchy%20extra's.jpg"
			, "http://more.restaurantathome.be/img/homepageslider/tomatenbruchetta.jpg"
		], {
	duration: 5000,
	fade: 750
});


	$('#back_to_results').on('click', function (e) {
		e.preventDefault();
		goBack();
	});

});

function goBack() {
	window.history.back();
}
