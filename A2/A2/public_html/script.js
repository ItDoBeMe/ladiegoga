
$(document).ready(function () {
    $('#male img').click(function () {
        var thmb = this;
        var src = this.src;
        $('#glavna').hide(1, function () {
            thmb.src = this.src;
            $(this).show()[0].src = src;
        });
        var naziv = src.split('/');
        $("#naziv").text(naziv[naziv.length-1].replace('.jpg', ''));
    });
});
