// When the document is ready
$(document).ready(function () {

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
            $(this).append('<h1>test</h1>');
        }
    });

});