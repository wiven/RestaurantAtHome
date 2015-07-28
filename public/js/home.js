$(document).ready(function () {
	$('#main_search_button').on('click', function (e) {
		e.preventDefault();

		var where = $('#addressTop').val();
		var what = $('#itemTop').val();

		console.log('Zoeken naar ' + what + ' in ' + where);
		window.location.href = './search';
		//window.location.href = './search/'+what+'/'+where;
	});
});
