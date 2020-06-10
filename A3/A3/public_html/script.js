$(document).ready(function () {

    $("#dropdown").change(function () {
        $("iframe").attr('src', 'https://naslovi.net/vremenska-prognoza/' + $("#dropdown").val());
    });

});