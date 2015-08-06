// When the document is ready
$(document).ready(function () {
    $('.timepicker').timepicker({
        showMeridian: false
    });

    $(".day_openings").bootstrapSwitch({
        onText: 'open',
        onColor: 'success',
        offText: 'gesloten',
        offColor: 'danger'
    });

    $('.day_openings').on('switchChange.bootstrapSwitch', function(event, state) {
        //console.log(this); // DOM element
        //console.log(event); // jQuery event
        console.log(state); // true | false

        if(state) {
            /*console.log($(this).parent().parent().next().parent('.edit_hours_link'));
            $(this).parent().parent().next().parent('.edit_hours_link').show();*/
            $(this).closest('col-sm-10').appendTo('<a href="#" class="edit_hours_link" title="Openingsuren maandag aanpassen"><span class="fa fa-edit fa-fw vcenter"></span></a>');
        } else {
            $(this).closest('.edit_hours_link').hide();
        }
    });

});