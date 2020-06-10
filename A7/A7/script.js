
$(document).ready(function () {
    $("select:eq(0)").change(function () {
        var linija = $("select:eq(0)").val();

        $.ajax({
            url: './popuniSmerove.php',
            type: 'post',
            data: {linija: linija},
            success: function (result) {
                if (result === "") {
                    $('select:eq(1)')
                            .find('option')
                            .remove()
                            .end()
                            .append('<option value=""></option>')
                            ;
                }
                if (result !== "") {

                    objekat = JSON.parse(result);

                    $('select:eq(1)')
                            .find('option')
                            .remove()
                            .end()
                            .append('<option value=""></option>')
                            ;

                    for (var i = 0; i < objekat.smerovi.length; i++) {
                        $('select:eq(1)').append('<option value="' + objekat.smerovi[i] + '">' + objekat.smerovi[i] + '</option>');
                    }

                }
            }
        });

    });
});