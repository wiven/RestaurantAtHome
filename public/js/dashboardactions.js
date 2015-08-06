$(document).ready(function() {

    /*$('.input-group.date').datepicker({
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
    });*/

    $('#newActionModal').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget); // Button that triggered the modal
        var title = button.data('title'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-title').text(title);
        //modal.find('.modal-body input').val(title);
    });

    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        weekStart: 1,
        language: "nl-BE",
        autoclose: true,
        todayHighlight: true
    });

});