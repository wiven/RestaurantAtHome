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