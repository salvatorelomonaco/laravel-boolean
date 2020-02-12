require('./bootstrap');

$(document).ready(function() {
    $('i').click(function() {
        $(this).parent().next('.container-risposta').toggleClass('active')
    })
})
