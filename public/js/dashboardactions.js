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

    initTooltips('.fa-edit', 'top', 'Actie bewerken');

    /*$('.fa-edit').attr('data-toggle', 'tooltip');
    $('.fa-edit').attr('data-placement', 'top');
    $('.fa-edit').attr('title', 'Actie bewerken');*/

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

    $('#futureactions').dataTable( {
        "paging":   false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Dutch.json"
        }
    } );

    $('[data-toggle="tooltip"]').tooltip();

});

function initTooltips(element, position, title) {
    var div = $(element);

    div.attr('data-toggle', 'tooltip');
    div.attr('data-placement', position);
    div.attr('title', title);
}