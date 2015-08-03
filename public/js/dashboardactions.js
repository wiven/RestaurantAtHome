/*$(document).ready(function() {

    /!*$('.input-group.date').datepicker({
        format: "dd/mm/yyyy",
        language: "nl",
        todayHighlight: true
    });*!/

    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy'
    });

    $( "#datepicker" ).datepicker({
        dateFormat: "dd/mm/yy",
        todayHighlight: true
    });


    /!*$('#timepicker').timepicker({
        template: false,
        showInputs: false,
        minuteStep: 5,
        template: "modal",
        maxHours: 24,
        showMeridian: false,
        defaultTime: 'current'
    });*!/

    /!*$(function () {
        $('#datetimepicker1').datetimepicker();
    });*!/
});*/


// When the document is ready
$(document).ready(function () {

    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        weekStart: 1,
        language: "nl-BE",
        autoclose: true,
        todayHighlight: true
    });

});