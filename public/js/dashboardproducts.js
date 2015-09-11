$(document).ready(function () {


    $.ajax({
        method: "POST",
        url: API_URL + '/dashboard/products/' + resto_id + '/0/12',
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        console.log(msg);

        $.each(msg.products, function(index,item) {
            console.log(item.id+" "+item.name);

            product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="'+item.photo+'"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';

        });

        $('#resto_products').html(product_html);

        /*$.each(msg.products, function( index, value ) {
            console.log( index + ": " + value );
        });*/

        //$('#log').html(msg.ack);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        alert("Request failed: " + textStatus);
    });

});

var product_html = '';
var resto_id = 5;
const API_URL = 'http://localhost/RestaurantAtHomeAPI/';

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

$('#newProductModal').on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget); // Button that triggered the modal
    var title = button.data('title'); // Extract info from data-* attributes
    var product_id = button.data('id');

    var product = '';

    $.ajax({
        method: "POST",
        url: API_URL  + 'product/' + product_id,
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        product = msg;
        console.log(product);
        $('#prodName').val(product.name);
        $('#prodDescription').val(product.description);
    }).fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
    });

    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text(title);
    //modal.find('.modal-body input').val(title);


});