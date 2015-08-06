// When the document is ready
$(document).ready(function () {

    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        weekStart: 1,
        language: "nl-BE",
        autoclose: true,
        todayHighlight: true
    });

    $('#set_today_active_btn').on('click', function() {
        /*var date = new Date();
        $('.datepicker').val(date.now);
        $('.datepicker').trigger('leave');*/
    });

});