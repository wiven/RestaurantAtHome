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
});

