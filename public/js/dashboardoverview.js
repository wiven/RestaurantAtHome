$(document).ready(function () {
    $.ajax({
        method: "POST",
        url: API_URL + '/dashboard/overview/' + resto_id,
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        var newOrders = msg.newOrders;
        var activePromos = msg.activePromos;
        var openOrders = msg.openOrders;
        var partners = msg.partners;

        // checking for new orders
        if(parseInt(newOrders) !== 0) {
            if(parseInt(newOrders) === 1) {
                $('#multiple_orders').addClass('hidden');
            }
            $('#new_order_count').text(newOrders);
            $('#new_order_box').removeClass('hidden');
        } else {
            $('#new_order_box').addClass('hidden');
        }

        // checking active promos
        if(activePromos.length !== 0) {
            $.each(activePromos, function(index, value) {
                // check if usage is not null, because it's not readable for users
                if(activePromos[index].usage == null) {
                    activePromos[index].usage = 0;
                }

                var end_date = new Date(activePromos[index].toDate);
                end_date = pad(end_date.getDate(), 2) + '/' + pad((end_date.getMonth()+1), 2) + '/' + end_date.getFullYear();

                $('#active_promos_div').append('<tr><td>'+activePromos[index].name+'</td><td><span class="hidden-xs">T.e.m. </span>'+end_date+'</td><td>'+activePromos[index].usage+'<a href="#" data-toggle="modal" data-title="Actie wijzigen" data-target="#newActionModal" data-backdrop="static" data-id="'+activePromos[index].id+'" title="Actie wijzigen"><span class="fa fa-edit pull-right edit-action-icon"></span></a></td></tr>');
            });

            $('#new_order_count').text(msg.newOrders);

            $('#no_promos_msg').addClass('hidden');
            $('#active_promos').removeClass('hidden');
        } else {
            $('#no_promos_msg').removeClass('hidden');
            $('#active_promos').addClass('hidden');
        }

        // checking open orders today
        if(openOrders.length !== 0) {
            $.each(openOrders, function(index, value) {
                // check if items is not null, because it's not readable for users
                if(openOrders[index].items == null) {
                    openOrders[index].items = 0;
                }

                var collection_hour = new Date(openOrders[index].orderDateTime);
                collection_hour = pad(collection_hour.getHours(), 2) + 'u' + pad(collection_hour.getMinutes(), 2);

                $('#todays_orders_div').append('<tr class="warning order_overview"><td>'+collection_hour+'</td><td>'+openOrders[index].name+' '+openOrders[index].surname+'</td><td>'+openOrders[index].items+'</td><td>&euro; '+openOrders[index].amount+'</td></tr>');
            });

            $('#no_orders_msg').addClass('hidden');
            $('#todays_orders').removeClass('hidden');
        } else {
            $('#no_orders_msg').removeClass('hidden');
            $('#todays_orders').addClass('hidden');
        }

        // checking partners
        if(partners.length !== 0) {
            $.each(partners, function(index, value) {
                $('#partners_div').append('<a href="'+partners[index].url+'" target="_blank" class="top_resto"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="'+partners[index].photo+'"><div class="caption"><h3 id="thumbnail-label">'+partners[index].name+'</h3></div></div></div></a>');
            });

            $('#new_order_count').text(msg.newOrders);

            $('#no_promos_msg').addClass('hidden');
            $('#active_promos').removeClass('hidden');
        } else {
            $('#no_promos_msg').removeClass('hidden');
            $('#active_promos').addClass('hidden');
        }
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        alert("Request failed: " + textStatus);
    });


    // check for new orders every 30 seconds
    window.setInterval(function(){
        /*console.log('orders checked');*/
        check_new_orders(resto_id);
    }, 30000);

    //$('#promotionForm').parsley();

    Cookies.set('restoId', Base64.encode(resto_id));

    $('#PromotionStartDate').datepicker({
        format: 'dd/mm/yyyy'
    }).on('changeDate', function(e) {
        $('#promotionForm').formValidation('revalidateField', 'date');
    });

    $('#PromotionEndDate').datepicker();

    $('#promotionForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        live: 'enabled',
        locale: 'nl_BE',
        fields: {
            PromotionName: {
                validators: {
                    stringLength: {
                        min: 3,
                        max: 45
                    }
                }
            },
            PromotionType: {
                validators: {
                    notEmpty: { }
                }
            },
            PromotionStartDate: {
                validators: {
                    notEmpty: { },
                    date: {
                        format: 'DD/MM/YYYY'
                    }
                }
            },
            PromotionEndDate: {
                validators: {
                    notEmpty: { },
                    date: {
                        format: 'DD/MM/YYYY'
                    }
                }
            },
            reductionType: {
                validators: {
                    notEmpty: { }
                }
            },
            PromotionReductionAmount: {
                validators: {
                    notEmpty: { },
                    numeric: {
                        thousandsSeparator: '',
                        decimalSeparator: '.'
                    },
                    greaterThan: {
                        value: 0.1
                    },
                    lessThan: {
                        value: 100
                    }
                }
            },
            PromotionLoyaltyAmount: {
                validators: {
                    integer: { },
                    greaterThan: {
                        value: 1
                    }
                }
            },
            PromotionDescription: {
                validators: {
                    notEmpty: { },
                    stringlength: {
                        max: 100
                    }
                }
            },
            PromotionPhoto: {
                validators: {
                    file: {
                        extension: 'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152   // 2048 * 1024
                    }
                }
            },
            PromotionProduct: {
                validators: {
                    notEmpty: { }
                }
            }
        }
    })
    .on('success.form.fv', function(e) {
        e.preventDefault();
        console.log('OK');

        var updated_promotion = Array();

        updated_promotion['id'] = promotion_id,
        updated_promotion['promotiontypeId'] = "2",
        updated_promotion['restaurantId'] =  resto_id,
        updated_promotion['name'] = $('#PromotionName').val(),
        updated_promotion['productId'] = $('#PromotionProduct').attr('data-id'),
        updated_promotion['fromDate'] = $('#PromotionStartDate').val(),
        updated_promotion['toDate'] = $('#PromotionEndDate').val(),
        updated_promotion['description'] = $('#PromotionDescription').val(),
        updated_promotion['discountType'] = $('input[name="reductionType"]:checked').val(),
        updated_promotion['discountAmount'] = $('#PromotionReductionAmount').val(),
        updated_promotion['loyaltyPoints'] = $('#PromotionLoyaltyAmount').val()

        console.log(updated_promotion);

        $('input').removeClass('has-success');
    });
/*    $('#promotionForm').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            PromotionName: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'De actienaam mag niet leeg zijn'
                    },
                    stringLength: {
                        min: 3,
                        max: 45,
                        message: 'De actienaam moet tussen 3 en 45 karakters lang zijn'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            PromotionType: {
                validators: {
                    notEmpty: {
                        message: 'Het type mag niet leeg zijn'
                    }
                }
            },
            PromotionStartDate: {
                validators: {
                    notEmpty: {
                        message: 'De startdatum is vereist en mag niet leeg zijn'
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'Gelieve een juiste datum in te geven (DD/MM/YYYY)'
                    }
                }
            },
            PromotionEndDate: {
                validators: {
                    notEmpty: {
                        message: 'De einddatum is vereist en mag niet leeg zijn'
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'Gelieve een juiste datum in te geven (DD/MM/YYYY)'
                    }
                }
            },
            reductionType: {
                validators: {
                    notEmpty: {
                        message: 'Type korting mag niet leeg zijn'
                    }
                }
            },
            PromotionReductionAmount: {
                validators: {
                    notEmpty: {
                        message: 'Hoeveelheid korting mag niet leeg zijn'
                    },
                    numeric: {
                        message: 'Enkel cijfers ingeven aub',
                        separator: ','
                    },/!*
                    digits: {
                        message: 'Enkel cijfers ingeven aub',
                        thousandsSeparator: '',
                        decimalSeparator: '.'
                    },*!/
                    greaterThan: {
                        value: 1,
                        message: 'Minimum 1'
                    },
                    lessThan: {
                        value: 100,
                        message: 'Maximum 100'
                    }
                }
            },
            PromotionLoyaltyAmount: {
                validators: {
                    digits: {
                        message: 'Enkel cijfers ingeven aub'
                    },
                    greaterThan: {
                        value: 1,
                        message: 'Minimum 1'
                    }
                }
            },
            PromotionDescription: {
                validators: {
                    stringlength: {
                        max: 100,
                        message: 'test'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            website: {
                validators: {
                    uri: {
                        allowLocal: true,
                        message: 'The input is not a valid URL'
                    }
                }
            },
            phoneNumberUS: {
                validators: {
                    phone: {
                        message: 'The input is not a valid US phone number'
                    }
                }
            },
            phoneNumberUK: {
                validators: {
                    phone: {
                        message: 'The input is not a valid UK phone number',
                        country: 'GB'
                    }
                }
            },
            color: {
                validators: {
                    color: {
                        type: ['hex', 'rgb', 'hsl', 'keyword'],
                        message: 'Must be a valid %s color'
                    }
                }
            },
            colorAll: {
                validators: {
                    color: { }
                }
            },
            zipCode: {
                validators: {
                    zipCode: {
                        country: 'US',
                        message: 'The input is not a valid US zip code'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            ages: {
                validators: {
                    lessThan: {
                        value: 100,
                        inclusive: true,
                        message: 'The ages has to be less than 100'
                    },
                    greaterThan: {
                        value: 10,
                        inclusive: false,
                        message: 'The ages has to be greater than or equals to 10'
                    }
                }
            }
        }
    });*/
});

var product_html = '';
var resto_id = '5';
var promotion_id = '';

const API_URL = 'http://localhost/RestaurantAtHomeAPI/';

function check_new_orders(restoId) {
    $.ajax({
        method: "POST",
        url: API_URL + '/dashboard/neworders/' + restoId,
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        if(parseInt(msg.count) !== 0) {
            if(parseInt(msg.count) === 1) {
                $('#multiple_orders').addClass('hidden');
            } else {
                $('#multiple_orders').removeClass('hidden');
            }
            $('#new_order_count').text(msg.count);
            $('#new_order_box').removeClass('hidden');
        } else {
            $('#new_order_box').addClass('hidden');
        }
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        alert("Request failed: " + textStatus);
    });
}

function get_data(method, type, id) {
    $.ajax({
        method: method,
        url: API_URL + type + '/' + id,
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        console.log(msg);
        return msg;
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        alert("Request failed: " + textStatus);
    });
}

function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}

$('#newActionModal').on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget); // Button that triggered the modal
    var title = button.data('title'); // Extract info from data-* attributes
    var product_id = button.data('id');
    promotion_id = product_id;

    var promotion = '';

    $.ajax({
        method: "POST",
        url: API_URL  + 'promotion/' + product_id,
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        promotion = msg;

        var fromDate = new Date(promotion.fromDate);
        fromDate = pad(fromDate.getDate(), 2) + '/' + pad((fromDate.getMonth()+1), 2) + '/' + fromDate.getFullYear();

        var toDate = new Date(promotion.toDate);
        toDate = pad(toDate.getDate(), 2) + '/' + pad((toDate.getMonth()+1), 2) + '/' + toDate.getFullYear();

        $('#PromotionName').val(promotion.name);

        var opt = $('option[value='+promotion.promotiontypeId+']'), html = $('<div>').append(opt.clone()).html();
        html = html.replace(/\>/, ' selected="selected">');
        opt.replaceWith(html);

        $('#PromotionStartDate').val(fromDate);
        $('#PromotionEndDate').val(toDate);

        if(promotion.discountType == "Percentage") {
            $('#PromotionReductionType1').prop('checked', true);
            $('#PromotionReductionType2').prop('checked', false);
        } else {
            $('#PromotionReductionType1').prop('checked', false);
            $('#PromotionReductionType2').prop('checked', true);
        }
        
        $('#PromotionReductionAmount').val(promotion.discountAmount);
        $('#PromotionLoyaltyAmount').val(promotion.loyaltyPoints);
        $('#PromotionDescription').val(promotion.description);

        if(promotion.products.length !== 0) {
            $('#PromotionProduct').val(promotion.products[0].name);
            $('#PromotionProduct').attr('data-id', promotion.products[0].id);
        } else {
            $('#PromotionProduct').val('');
        }
    }).fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
    });

    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text(title);
    //modal.find('.modal-body input').val(title);


});

$('#newActionModal').on('hide.bs.modal', function(e) {
    $('#editPromotionBtn').removeClass('disabled');
    $('#promotionForm').data('formValidation').resetForm();
});

$('#editPromotionBtn').on('click', function(evt) {
    evt.preventDefault();
    $(this).addClass('disabled');
    $('#promotionForm').submit();
});