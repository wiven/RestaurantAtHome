const API_URL = 'http://playground.restaurantathome.be/api/';

$(document).ready(function() {
    console.log( "ready!" );

    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        weekStart: 1,
        language: "nl-BE",
        autoclose: true,
        todayHighlight: true
    });

    $('.timepicker').timepicker({
        template: false,
        showInputs: false,
        minuteStep: 5,
        template: "modal",
        maxHours: 24,
        showMeridian: false,
        defaultTime: 'current'
    });

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": API_URL + 'restaurantdetail/6',
        "method": "GET",
        "headers": {
            "Access-Control-Allow-Origin":  '*',
            "content-type": "application/json",
            "Pragma": "no-cache",
            "Cache-Control": "no-cache",
            "Expires": 0
        },
        "cache": false,
        "processData": false
    };

    $.ajax(settings).always(function (response, textStatus, errorThrown) {
        console.log('getRestaurant');
        response = JSON.parse(response.responseText.substr(1, response.responseText.length - 2));
        console.log(response);
    });
});