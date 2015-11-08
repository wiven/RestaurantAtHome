$(document).ready(function() {
    $('#loyaltyForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        live: 'enabled',
        locale: 'nl_BE',
        fields: {
            loyaltyNumber: {
                validators: {
                    notEmpty: { },
                    numeric: { },
                    greaterThan: {
                        value: 0
                    }
                }
            },
            loyaltyGift: {
                notEmpty: { },
                stringLength: {
                    min: 3,
                    max: 45
                }
            }
        }
    })
    .on('success.form.fv', function(e) {
        e.preventDefault();

        $('#')
    })
    .on('err.form.fv', function(e) {
        e.preventDefault();

        setTimeout(function() {
            $('#loyaltyFormSubmit').removeClass('disabled');
            $('#loyaltyFormSubmit').prop('disabled', false);
            $('body').css('opacity', 1);
        }, 750);
    });
});

$('#loyaltyFormSubmit').on('click', function(evt) {
    evt.preventDefault();
    $('body').css('opacity', 0.5);
    $(this).addClass('disabled');
    $(this).prop('disabled', true);
    $('#loyaltyForm').submit();
});