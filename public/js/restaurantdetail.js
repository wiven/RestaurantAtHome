$(document).ready(function() {

    $('.btn_more_resto_info').on('click', function(e) {
        e.preventDefault();
        $('.hidden_info_mobile').slideToggle();
        $(".btn_more_resto_info").toggle();
    });

    $('#product_type_chooser a').on('click', function() {
        $('#product_type_chooser a').removeClass('active');
        $(this).addClass('active');
    });

    $('.add_product_btn').on('click', function(e) {
        e.preventDefault();

        var badge_parent = $(this).parent();
        var prod_id = $(this).attr('id').substring(8);
        var original_quant = parseInt($(badge_parent).children('.badge').text());
        var quant_to_add = parseInt($("#quant_"+prod_id).val());
        var new_quant = original_quant + quant_to_add;

        /*
         alert($(badge_parent).children('.badge'));
         alert(parseInt($(badge_parent).children('.badge').text())+1);
         alert('id: "'+$(this).attr('id').substring(8) + '"');
         alert('quant_to_add: '+quant_to_add);
         */

        $(badge_parent).children('.badge').text(new_quant);
        $(badge_parent).children('.badge').show();
    });

    $('.delete_from_cart').on('click', function() {
        $(this).parent().parent().parent().remove();
    });

    $('#mapsModal').on('show.bs.modal', function () {
        $("#mapCanvas").html('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2520.716661239!2d3.2743649!3d50.8178881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c33b23b2900d8d%3A0x75420920515aaeef!2sIJzerfrontlaan+13%2C+8500+Kortrijk!5e0!3m2!1snl!2sbe!4v1429536505436" width="100%" height="450" frameborder="0" style="border:0"></iframe>');
    });

    //plugin bootstrap minus and plus
    //http://jsfiddle.net/laelitenetwork/puJ6G/
    $('.btn-number').click(function(e){
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {

                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });

    $('.input-number').focusin(function(){
        $(this).data('oldValue', $(this).val());
    });

    $('.input-number').change(function() {

        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, het maximum aantal ('+maxValue+') werd bereikt');
            $(this).val($(this).data('oldValue'));
        }


    });

    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $(window).scroll(function(){
        var shopping_list = $('#shopping_list');
        var set_width = shopping_list.outerWidth();

        if($('body').width() >= 1200) {
            if ($(this).scrollTop() > 360) {
                shopping_list.addClass('fixed');
                shopping_list.css('width', set_width+'px');
            } else {
                shopping_list.removeClass('fixed');
                shopping_list.css('width', set_width+'px');
            }
        }
    });
});

