$(function() {

    /*Morris.Area({
     element: 'morris-area-chart',
     data: [{
     period: '2010 Q1',
     iphone: 2666,
     ipad: null,
     itouch: 2647
     }, {
     period: '2010 Q2',
     iphone: 2778,
     ipad: 2294,
     itouch: 2441
     }, {
     period: '2010 Q3',
     iphone: 4912,
     ipad: 1969,
     itouch: 2501
     }, {
     period: '2010 Q4',
     iphone: 3767,
     ipad: 3597,
     itouch: 5689
     }, {
     period: '2011 Q1',
     iphone: 6810,
     ipad: 1914,
     itouch: 2293
     }, {
     period: '2011 Q2',
     iphone: 5670,
     ipad: 4293,
     itouch: 1881
     }, {
     period: '2011 Q3',
     iphone: 4820,
     ipad: 3795,
     itouch: 1588
     }, {
     period: '2011 Q4',
     iphone: 15073,
     ipad: 5967,
     itouch: 5175
     }, {
     period: '2012 Q1',
     iphone: 10687,
     ipad: 4460,
     itouch: 2028
     }, {
     period: '2012 Q2',
     iphone: 8432,
     ipad: 5713,
     itouch: 1791
     }],
     xkey: 'period',
     ykeys: ['iphone', 'ipad', 'itouch'],
     labels: ['iPhone', 'iPad', 'iPod Touch'],
     pointSize: 2,
     hideHover: 'auto',
     resize: true
     });*/

    /*Morris.Donut({
     element: 'morris-donut-chart',
     data: [{
     label: "Download Sales",
     value: 12
     }, {
     label: "In-Store Sales",
     value: 30
     }, {
     label: "Mail-Order Sales",
     value: 20
     }],
     resize: true
     });*/

    /*Morris.Bar({
     element: 'morris-bar-chart',
     data: [{
     y: '2006',
     a: 100,
     b: 90
     }, {
     y: '2007',
     a: 75,
     b: 65
     }, {
     y: '2008',
     a: 50,
     b: 40
     }, {
     y: '2009',
     a: 75,
     b: 65
     }, {
     y: '2010',
     a: 50,
     b: 40
     }, {
     y: '2011',
     a: 75,
     b: 65
     }, {
     y: '2012',
     a: 100,
     b: 90
     }],
     xkey: 'y',
     ykeys: ['a', 'b'],
     labels: ['Series A', 'Series B'],
     hideHover: 'auto',
     resize: true
     });*/

});

/*$(function() {

 $('#side-menu').metisMenu();

 });*/

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $('#newActionModal').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget); // Button that triggered the modal
        var title = button.data('title'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-title').text(title);
        //modal.find('.modal-body input').val(title);
    });

    initTooltips('.fa-edit', 'top', 'Actie bewerken');
    $('[data-toggle="tooltip"]').tooltip();

    $('.order_detail_tr').on('click', function() {
        $('#orderInfoModal').modal({
            'backdrop': 'static'
        });
    });

    $('#orderInfoModal').on('show.bs.modal', function(e) {
        /*var button = $(e.relatedTarget); // Button that triggered the modal
         var title = button.data('title'); // Extract info from data-* attributes*/
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-title').text('Orderinfo');
        //modal.find('.modal-body input').val(title);
    });
});

function initTooltips(element, position, title) {
    var div = $(element);

    div.attr('data-toggle', 'tooltip');
    div.attr('data-placement', position);
    div.attr('title', title);
}