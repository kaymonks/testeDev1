$(document).ready(function () {
    function expandirMenu() {
        var width = 300;
        if ($("#divMenuEsquerdo").width() > 70) {
            width = 70;
            $("#logoMenu").fadeOut(250);
            $(".divSubMenu").fadeOut(250);
            $(".textoMenu").fadeOut(250);
            $(".setasMenu").fadeOut(250);
            $(".setasMenu").removeClass("glyphicon-menu-up");
            $(".setasMenu").addClass("glyphicon-menu-down");
        } else {
            $(".setasMenu").fadeIn(750);
            $(".textoMenu").fadeIn(750);
            $("#logoMenu").fadeIn(750);
        }
        $("#divMenuEsquerdo").animate({
            width: width
        });
        if (width == 300 && $("#paginaExpandida").val() != '') {
            expandirSubMenu($("#paginaExpandida").val());
            $("#paginaExpandida").val('');
        }
    }

});