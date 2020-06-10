$(document).ready(function () {

    var html = '';
    var random = Math.floor((Math.random() * 10) + 2);
    
    for (var i = 1; i < 14; i++) {
        html += '<tr>';
        br = 1;
        for (var j = (i - 1) * 4 + 1; j <= i * 4; j++) {

            if (j === 1) {
                html += '<td></td>';
            } else if (j % random == 1) {
                html += '<td class="bg-danger">' + Number(j) + '</td>';
            } else {
                html += '<td class="bg-success">' + Number(j) + '</td>';
            }
            br++;
            if (br === 3) {
                html += '<td></td>';
            }
        }
        br = 1;
        html += '</tr>';
    }
    $('#myTable').html(html);

    var cell;

    $('td').click(function () {
        if (!$(this).hasClass('bg-danger')) {
            $('#broj').val($(this).text());
            cell = $(this);
        } else {
            $('#broj').val("");
        }

    });

    $('#rez').click(function () {
        if($('#email').val()!=="" && $('#ip').val()!=="" && $('#broj').val()!==""){
            cell.addClass("bg-danger");
        }
        else{
            alert("Popunite podatke");
        }
    });

});

