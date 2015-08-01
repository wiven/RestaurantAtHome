$(document).ready(function() {
    $( "#datepicker" ).datepicker({
        dateFormat: "dd/mm/yyyy",
        todayHighlight: true,
        language: 'nl-BE',
        weekStart: 1,
        todayHighlight: true,
        disableTouchKeyboard: true,
        immediateUpdates: true
    });
    $( "#addon1" ).click(function(){$( "#datepicker" ).datepicker( "show" )});

    $('#timepicker').timepicker({
        template: false,
        showInputs: false,
        minuteStep: 5,
        template: "modal",
        maxHours: 24,
        showMeridian: false,
        defaultTime: 'current'
    });
});