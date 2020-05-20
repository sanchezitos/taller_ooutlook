<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <script src="js/libs/modernizr-2.6.2.min.js"></script>
        <title></title>
    </head>
    <body>
        <div id="men"
             <ul class="nav nav-tabs" id="nav">
                <li role="presentation"><a href="index.php">Contactos</a></li>
                <li role="presentation"><a href="" id="nue"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo</a></li>
            </ul>
        </div>
        <script>
            $('#nu').click(function (evt) {
                $("#lado").load("nuevo.php");
            });
        </script>
        <br>
        <br>
        <div id="contac">
            <form id="cont">
                <?php
                include 'conecta.php';
                $bd = conectar();
                $cad = "select * from contactos order by nombres";
                $res = mysql_query($cad, $bd);
                while ($row = mysql_fetch_array($res)) {
                    echo "<input type='radio' id='myRadio' name='myRadio' value='$row[0]'>";
                    echo "<img src='img/2.png'/><b> </b>";
                    echo "<small>$row[1]</small>";
                    echo "<br>";
                }
                mysql_close($bd)
                ?>
            </form>
        </div>
        <div id="lin"></div>
        <div id="lado">

        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/cod.js"></script>
        <script gumby-touch="js/libs" src="js/libs/gumby.js"></script>
        <script src="js/libs/ui/gumby.retina.js"></script>
        <script src="js/libs/ui/gumby.fixed.js"></script>
        <script src="js/libs/ui/gumby.skiplink.js"></script>
        <script src="js/libs/ui/gumby.toggleswitch.js"></script>
        <script src="js/libs/ui/gumby.checkbox.js"></script>
        <script src="js/libs/ui/gumby.radiobtn.js"></script>
        <script src="js/libs/ui/gumby.tabs.js"></script>
        <script src="js/libs/ui/gumby.navbar.js"></script>
        <script src="js/libs/ui/jquery.validation.js"></script>
        <script src="js/libs/gumby.init.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
