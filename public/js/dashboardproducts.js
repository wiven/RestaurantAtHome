$(document).ready(function () {
    getProducts();

    $('#productForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        live: 'enabled',
        locale: 'nl_BE',
        fields: {
            ProductName: {
                validators: {
                    notEmpty: { },
                    stringLength: {
                        min: 3,
                        max: 80
                    }
                }
            },
            ProductType: {
                validators: {
                    notEmpty: { },
                    digits: {
                        min: 1, max: 1
                    }
                }
            },
            ProductPrice: {
                validators: {
                    notEmpty: { },
                    numeric: { }
                }
            },
            ProductLoyalty: {
                validators: {
                    notEmpty: { },
                    integer: { },
                    greaterThan: {
                        value: 1
                    }
                }
            },
            ProductDescription: {
                validators: {
                    stringLength: {
                        min: 3,
                        max: 45
                    }
                }
            },
            ProductPhoto: {
                validators: {
                    file: {
                        extension: 'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152   // 2048 * 1024
                    }
                }
            },
            ProductSlots: {
                validators: {
                    notEmpty: { },
                    integer: { },
                    greaterThan: {
                        value: 1
                    }
                }
            }
        }
    })
        .on('success.form.fv', function(e) {
            e.preventDefault();

            if($('#productModalSubmit').text() == "Product bewerken") {
                var editedProduct = Array();

                editedProduct["producttypeId"] = $('#ProductType').children(':selected').attr('value');
                editedProduct["promotionId"] = prodPromoId;
                editedProduct["name"] = $('#ProductName').val();
                editedProduct["description"] = $('#ProductDescription').val();
                editedProduct["photo"] = $('#ProductPhoto').val();
                editedProduct["price"] = $('#ProductPrice').val();
                editedProduct["slots"] = $('#ProductSlots').val();
                editedProduct["loyaltyPoints"] = $('#ProductLoyalty').val();

                updateProduct(editedProduct, resto_id, existingProdId);
            } else {
                var _product = {
                    'restaurantId': resto_id,
                    'producttypeId':$('#ProductType').children(':selected').attr('value'),
                    'promotionId':null,
                    'name':$('#ProductName').val(),
                    'description':$('#ProductDescription').val(),
                    'photo':$('#ProductPhoto').val(),
                    'price':$('#ProductPrice').val(),
                    'slots':$('#ProductSlots').val(),
                    'loyaltyPoints':$('#ProductLoyalty').val()
                };

                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": API_URL+"product",
                    "method": "POST",
                    "headers": {
                        "content-type": "application/json"
                    },
                    "processData": false,
                    "data": JSON.stringify(_product)
                }

                // creating new product
                $.ajax(settings).done(function (response) {
                    response = JSON.parse(response.substr(1, response.length-2));

                    if(response.id !== 0) {
                        new_product_id = response.id;
                        relatedProducts = $('#ProductRelatedProducts').val();

                        if(relatedProducts != null) {
                            if(relatedProducts.length != 0) {
                                relatedProducts.split(new_product_id, 1);
                                // setting up related product of newly created product (if any)
                                $.each(relatedProducts, function(index,item) {
                                    relateProducts(new_product_id, item);
                                });
                            }
                        }

                        $('#productForm').data('formValidation').resetForm();
                        $(submitBtn).removeClass('disabled');
                        $(submitBtn).prop('disabled', false);
                        $('#newProductModal').hide();
                        location.reload(true);
                    }
                });
            }

            $('#newProductModal').modal('hide');
        }).on('err.form.fv', function(e) {
            e.preventDefault();

            setTimeout(function() {
                $(submitBtn).removeClass('disabled');
                $(submitBtn).prop('disabled', false);
            }, 1000);
        });

    $('#ProductRelatedProducts').chosen({
        disable_search_threshold: 3,
        no_results_text: 'Oeps, geen producten gevonden!',
        placeholder_text_multiple: 'Zoek een gerelateerd product',
        search_contains: true,
        width: '100%',
        max_selected_options: 3
    });
});

function getProducts() {
    $.ajax({
        method: "GET",
        //url: API_URL + 'dashboard/products/' + resto_id + '/0/12',
        url: API_URL + 'restaurant/product/all/' + resto_id,
        //url: API_URL + 'restaurant/product/all/' + resto_id,
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        //console.log(msg);
        if(msg.length != 0) {
            $('#resto_products').html('');
            $.each(msg, function(index,item) {
                if(item.photo != null) {
                    product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="'+item.photo.url+'"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';
                } else {
                    product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="http://lorempixel.com/600/480/food/"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';
                }

                //console.log(product_html);
            });

            $('#resto_products').html(product_html);
            $('#resto_products .thumbnail img').matchHeight();
        } else {
            $('#resto_products').html('<div class="alert alert-info text-center" role="alert" id="no_products_msg"><span class="fa fa-info-circle fa-fw"></span> Er zijn  nog geen producten te vinden.<br /><a href="#" data-toggle="modal" data-title="Nieuw product aanmaken" data-target="#newProductModal" data-backdrop="static" id="btn_new_product">Klik hier</a> om een nieuw product aan te maken.</div>');
        }
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        alert("Request failed: " + textStatus);
    });
}

function deleteProduct(prodId) {
    $.ajax({
        method: "GET",
        url: API_URL + 'product/delete/' + prodId,
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        return true;
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR);
        alert("Request failed: " + textStatus);
    });
}

function updateProduct(values, restoId, prodId) {
    var transferData = {
        "id": prodId,
        "restaurantId": restoId,
        "producttypeId": values["producttypeId"],
        "promotionId": values["promotionId"],
        "name": values["name"],
        "description": values["description"],
        "photo": values["photo"],
        "price": values["price"],
        "slots": values["slots"],
        "loyaltyPoints": values["loyaltyPoints"]
    };

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": API_URL+"product",
        "method": "PUT",
        "headers": {
            "content-type": "application/json",
            "hash": "bade6027da78136bdd57a3c574d7afb4af1395d9"
        },
        cache: false,
        "processData": false,
        "data": JSON.stringify(transferData)
    }

    $.ajax(settings).done(function (response) {
        //console.log();
    });
}

function relateProducts(newProdId, relatedProd) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": API_URL+"product/related/"+newProdId+"/"+relatedProd,
        "method": "POST",
        "headers": {
            "content-type": "application/json"
        },
        "processData": false
    }

    // creating new product link
    $.ajax(settings).done(function (response) {
        //console.log(response);
    });
}

$('#ProductRelatedProducts').on('chosen:maxselected', function(evt, params) { $('#ProductRelatedProductsError').addClass('label label-danger'); });

var product_html = '';
var resto_id = 2, counter = 0, new_product_id = 0, existingProdId = 0;
var prodPromoId = 0;
//const API_URL = 'http://localhost/RestaurantAtHomeAPI/';
const API_URL = 'http://test.restaurantathome.be/api/';
var productTypes, submitBtn = '', temp = '';
var relatedProducts = Array();

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

$('#newProductModal').off().on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget); // Button that triggered the modal
    var title = button.data('title'); // Extract info from data-* attributes
    var product_id = button.data('id');
    existingProdId = button.data('id');

    var modal = $(this);
    modal.find('.modal-title').text(title);
    submitBtn = modal.find('[type="submit"]');

    //modal.find('.modal-body input').val(title);

    // get all the categories
    $.ajax({
        method: "GET",
        "url": API_URL+"manage/producttype/all/",
        dataType: "jsonp",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (msg) {
        var categoryList = $('#ProductType');

        // first empty the dropdown menu and populate with default value@
        categoryList.empty();
        categoryList.append('<option value=""></option>');

        $.each(msg, function(index,item) {
            categoryList.append('<option value="'+item.id+'">'+item.name+'</option>');
        });
    }).fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
    });

    // modal for updating an existing product
    if(product_id != undefined) {
        var product = '';
        submitBtn.text('Product bewerken');
        $('#ProductDelete').show();

        // getting product info
        $.ajax({
            method: "GET",
            url: API_URL  + 'product/' + product_id,
            dataType: "jsonp",
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }
        }).done(function (msg) {
            product = msg;
            //console.log(product);
            $('#ProductName').val(product.name);
            $('#ProductType').val(product.producttypeId);
            $('#ProductPrice').val(product.price);
            $('#ProductLoyalty').val(product.loyaltyPoints);
            $('#ProductDescription').val(product.description);
            //$('#ProductPhoto').val(product.photo);
            $('#ProductSlots').val(product.slots);
            prodPromoId = product.promotionId;
        }).fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });

        // getting all the products, to show the related ones
        $.ajax({
            method: "GET",
            url: API_URL  + 'restaurant/product/all/' + resto_id,
            dataType: "jsonp",
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }
        }).done(function (msg) {
            product = msg;
            //console.log(product);

            var select_to_add = $('#ProductRelatedProducts');

            select_to_add.empty();
            select_to_add.append('<option value=""></option>');

            $.each(msg, function(index, item) {
                select_to_add.append($('<option></option>').val(item.id).html(item.name));
            });

            // getting info about existing product links
            $.ajax({
                method: "GET",
                url: API_URL  + 'product/related/' + product_id,
                dataType: "jsonp",
                crossDomain: true,
                xhrFields: {
                    withCredentials: true
                }
            }).done(function (msg) {
                product = msg;

                /*var select_to_add = $('#ProductRelatedProducts');

                select_to_add.empty();
                select_to_add.append('<option value=""></option>');*/

                var relatedProducts = Array();

                $.each(msg, function(index, item) {
                    relatedProducts.push(item.id);
                    //$('#ProductRelatedProducts').val(item.id);
                    $('#ProductRelatedProducts').val(relatedProducts);
                    //select_to_add.append($('<option></option>').val(item.id).html(item.name));
                });

                $('#ProductRelatedProducts').trigger('chosen:updated');
            }).fail(function (jqXHR, textStatus) {
                alert("Request failed: " + textStatus);
            });

            select_to_add.trigger('chosen:updated');
        }).fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });

    // modal for creating a new product
    } else {
        submitBtn.text('Product aanmaken');
        $('#ProductDelete').hide();

        $.ajax({
            method: "GET",
            url: API_URL  + 'restaurant/product/all/' + resto_id,
            dataType: "jsonp",
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }
        }).done(function (msg) {
            product = msg;
            //console.log(product);

            var select_to_add = $('#ProductRelatedProducts');

            select_to_add.empty();
            select_to_add.append('<option value=""></option>');

            $.each(msg, function(index, item) {
                select_to_add.append($('<option></option>').val(item.id).html(item.name));
            });

            select_to_add.trigger('chosen:updated');
        }).fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });

        $('#ProductName').val('');
        $('#ProductType').val('');
        $('#ProductPrice').val('');
        $('#ProductLoyalty').val('');
        $('#ProductDescription').val('');
        $('#ProductPhoto').val('');
        $('#ProductSlots').val('');

        var newProduct = {
            "restaurantId": resto_id,
            "producttypeId": $('#ProductType').val(),
            "name": $('#ProductName').val(),
            "description": $('#ProductDescription').val(),
            "loyaltyPoints": $('#ProductLoyalty').val(),
            "photo": $('#ProductPhoto').val(),
            "price": $('#ProductPrice').val(),
            "slots": $('#ProductSlots').val()
        };

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": API_URL+"product",
            "method": "POST",
            "headers": {
                "content-type": "application/json"
            },
            "processData": false,
            "data": JSON.stringify(newProduct)
        }

        //console.log(JSON.stringify(newProduct));

        /*$.ajax(settings).done(function (response) {
            console.log(response);
        });*/

        $('#ProductDelete').removeClass('hidden');
    }

    $(submitBtn).off().on('click', function(evt) {
        evt.preventDefault();
        $('body').css('opacity', 0.5);
        $(this).addClass('disabled');
        $(this).prop('disabled', true);
        //console.log($('#ProductRelatedProducts').val());
        $('#productForm').submit();
    });

    $('#ProductDelete').off().on('click', function(evt) {
        evt.preventDefault();
        var button = $(e.relatedTarget); // Button that triggered the modal
        var product_id = button.data('id');

        //console.log(product_id);

        swal({
            title: "Bent u zeker dat u dit product wil verwijderen?",
            text: "Let op: dit is onomkeerbaar!",
            cancelButtonText: "Annuleren",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        },
        function(){
            setTimeout(function(){
                deleteProduct(product_id);
                swal("Product werd verwijderd!");


                setTimeout(function(){
                    location.reload(true);
                }, 1000);


            }, 500);
        });
    });

    /*$('#ProductRelatedProducts').on('change', function (e) {
        console.log($(this).val());
    });*/
});

$('#newProductModal').on('hide.bs.modal', function() {
    $('#productForm').data('formValidation').resetForm();
    $('#productModalSubmit').removeClass('disabled');
    $('#productModalSubmit').prop('disabled', false);
    $('body').css('opacity', 1);
});

$('#productSearch').on('keyup', function() {
    searchProducts($(this).val());
});

$('#productCategorieSearch').on('change', function(evt) {
    evt.preventDefault();

    if($(this).val().length != 0) {
        if($('#productSearch').val().length != 0) {
            searchCombined($('#productSearch').val(), $(this).val());
        } else {
            searchProductsCategory($(this).val());
        }
    } else {
        if($('#productSearch').val().length != 0) {
            searchProducts($('#productSearch').val());
        } else {
            getProducts();
        }
    }
});

function searchProducts(searchTerm) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": API_URL+"dashboard/products/"+resto_id+"/0/12/1001=" + searchTerm,
        "method": "GET",
        "headers": {
            "content-type": "application/json",
            "Pragma": "no-cache" ,
            "Cache-Control": "no-cache",
            "Expires": 0
        },
        "cache": false,
        "processData": false
    }

    // creating new product
    $.ajax(settings).done(function (response) {
        response = JSON.parse(response.substr(1, response.length-2));

        product_html = '';

        $('#resto_products').html('');

        if(response.products.length != 0) {
            $('#no_products_msg').addClass('hidden');
            $.each(response.products, function(index,item) {
                if(item.photo != null) {
                    product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="'+API_URL.substr(0, API_URL.length-4)+'api/files/'+item.photo+'"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';
                } else {
                    product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="http://lorempixel.com/600/480/food/"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';
                }
            });

            $('#resto_products').html(product_html);
            $('#resto_products .thumbnail img').matchHeight();
        } else {
            if(searchTerm.length != 0) {
                $('#resto_products').html('<div class="alert alert-info text-center hidden" role="alert" id="no_products_msg"><span class="fa fa-info-circle fa-fw"></span> Er zijn geen producten gevonden met de naam "<span id="searchTermDisplay"></span>".<br /><a href="#" data-toggle="modal" data-title="Nieuw product aanmaken" data-target="#newProductModal" data-backdrop="static" id="btn_new_product">Klik hier</a> om een nieuw product aan te maken.</div>');
                $('#no_products_msg').removeClass('hidden');
                $('#searchTermDisplay').html('<strong>'+searchTerm+'</strong>');
            } else {
                getProducts();
            }
        }
    });
}

function searchProductsCategory(searchTerm) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": API_URL+"dashboard/products/"+resto_id+"/0/12/1005=" + searchTerm,
        "method": "GET",
        "headers": {
            "content-type": "application/json",
            "Pragma": "no-cache" ,
            "Cache-Control": "no-cache",
            "Expires": 0
        },
        "cache": false,
        "processData": false
    }

    $.ajax(settings).done(function (response) {
        response = JSON.parse(response.substr(1, response.length-2));

        console.log(response);
        product_html = '';

        $('#resto_products').html('');

        if(response.products.length != 0) {
            $('#no_products_msg').addClass('hidden');
            $.each(response.products, function(index,item) {
                if(item.photo != null) {
                    product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="'+API_URL.substr(0, API_URL.length-4)+'api/files/'+item.photo+'"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';
                } else {
                    product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="http://lorempixel.com/600/480/food/"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';
                }
            });

            $('#resto_products').html(product_html);
            $('#resto_products .thumbnail img').matchHeight();
        } else {
            if(searchTerm.length != 0) {
                $('#resto_products').html('<div class="alert alert-info text-center hidden" role="alert" id="no_products_msg"><span class="fa fa-info-circle fa-fw"></span> Er zijn geen producten gevonden van deze categorie.<br /><a href="#" data-toggle="modal" data-title="Nieuw product aanmaken" data-target="#newProductModal" data-backdrop="static" id="btn_new_product">Klik hier</a> om een nieuw product aan te maken.</div>');
                $('#no_products_msg').removeClass('hidden');
            } else {
                getProducts();
            }
        }
    });
}

function searchCombined(searchProd, searchCat) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": API_URL+"dashboard/products/"+resto_id+"/0/12/1001="+searchProd+"&1005=" + searchCat,
        "method": "GET",
        "headers": {
            "content-type": "application/json",
            "Pragma": "no-cache" ,
            "Cache-Control": "no-cache",
            "Expires": 0
        },
        "cache": false,
        "processData": false
    }

    $.ajax(settings).done(function (response) {
        response = JSON.parse(response.substr(1, response.length-2));

        //console.log(response);
        product_html = '';

        $('#resto_products').html('');

        if(response.products.length != 0) {
            $('#no_products_msg').addClass('hidden');
            $.each(response.products, function(index,item) {
                if(item.photo != null) {
                    product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="'+API_URL.substr(0, API_URL.length-4)+'api/files/'+item.photo+'"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';
                } else {
                    product_html += '<a href="#" data-toggle="modal" data-title="Product bewerken" data-target="#newProductModal" data-backdrop="static" data-id="'+item.id+'" class="edit_product"><div class="col-sm-6 col-md-3 col-lg-3"><div class="thumbnail"><img src="http://lorempixel.com/600/480/food/"><div class="caption"><h3 id="thumbnail-label">'+item.name+'</h3></div></div></div></a>';
                }
            });

            $('#resto_products').html(product_html);
            $('#resto_products .thumbnail img').matchHeight();
        } else {
            if((searchProd.length != 0) || (searchCat.length != 0)) {
                $('#resto_products').html('<div class="alert alert-info text-center hidden" role="alert" id="no_products_msg"><span class="fa fa-info-circle fa-fw"></span> Er zijn geen producten gevonden van deze categorie, of met deze benaming.<br /><a href="#" data-toggle="modal" data-title="Nieuw product aanmaken" data-target="#newProductModal" data-backdrop="static" id="btn_new_product">Klik hier</a> om een nieuw product aan te maken.</div>');
                $('#no_products_msg').removeClass('hidden');
            } else {
                getProducts();
            }
        }
    });
}

$('#productModalSubmit').on('click', function(evt) {
    evt.preventDefault();

    console.log($(this).val());
});