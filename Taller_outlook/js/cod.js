$(document).ready(function () {
    $('#cont input').on('change', function () {
        $("#men").html("<li role='presentation'><a href='index.php'>Contactos</a></li>\n\
                        <li role='presentation'><a href='nuevo.php' id='nue'> <span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Nuevo</a></li>\
                        <li role='presentation' ><a href='modificar.php' id='mod' >Modificar</a></li>\n\
                        <li role='presentation'><a href='eliminar.php' id='eli'><span class='glyphicon glyphicon-minus' aria-hidden='true'></span>Eliminar</a></li>");
        var red = "<?php ?>";
        var radio = $("input[name='myRadio']:checked").val();
        $("#lado").load("mostrar.php", {ide: radio});
        $('#mod').click(function (evt) {
            evt.preventDefault();
//            $("#lado").html(radio);
            $("#lado").load("modificar.php", {ide: radio});
        });
        $('#eli').click(function (evt) {
            evt.preventDefault();
            $("#lado").load("eliminar.php", {ide: radio});
        });
        $('#nue').click(function (evt) {
            evt.preventDefault();
            $("#lado").load("nuevo.php");
        });
    });
     $('#nue').click(function (evt) {
            evt.preventDefault();
            $("#lado").load("nuevo.php");
        });
});

