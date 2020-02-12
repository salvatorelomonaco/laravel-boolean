require('./bootstrap');

$(document).ready(function() {
    $('.fa-plus').click(function() {
        $(this).parent().next('.container-risposta').addClass('active');
        $(this).hide();
        $(this).next().show();
    });

    $('.fa-minus').click(function() {
        $(this).parent().next('.container-risposta').removeClass('active');
        $(this).hide();
        $(this).prev().show();
    })
})
