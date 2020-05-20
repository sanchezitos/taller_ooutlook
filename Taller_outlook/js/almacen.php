<?php
include 'conexion.php';
$bd = conectar();
session_start();


if (!$_SESSION) {
    echo '<script language = javascript>
self.location = "index.html"
</script>';
}
if (isset($_GET["var"]) && !empty($_GET["var"])) {
    $sucu = $_GET["var"];
} else {
    $_GET["var"] = true;
}

$id_usuario = $_SESSION['idadministrador'];
$consulta = "select idalmacen,almacen from Almacenes where idadministrador=$id_usuario";
$consulta1 = "select idalmacen,almacen from Almacenes where idadministrador=$id_usuario";
$consulta2 = "select idsucursales,sucursal,idadministrador from Sucursales inner join Almacenes on Almacenes.idalmacen=Sucursales.idalmacen where idadministrador=$id_usuario";
$consulta22 = "select idsucursales,sucursal,idadministrador from Sucursales inner join Almacenes on Almacenes.idalmacen=Sucursales.idalmacen where idadministrador=$id_usuario";
$consulta3 = "SELECT idtelefono, idadministrador, telefono FROM Telefono INNER JOIN Sucursales ON Sucursales.idsucursales = Telefono.idsucursales INNER JOIN Almacenes ON Almacenes.idalmacen = Sucursales.idalmacen WHERE idadministrador=$id_usuario and Sucursales.idsucursales=$sucu";
$consulta222 = "select idsucursales,sucursal,idadministrador from Sucursales inner join Almacenes on Almacenes.idalmacen=Sucursales.idalmacen where idadministrador=$id_usuario ";

$result = mysql_query($consulta);
$result1 = mysql_query($consulta1);
$result2 = mysql_query($consulta2);
$result22 = mysql_query($consulta22);
$result222 = mysql_query($consulta222);
$result3 = mysql_query($consulta3);
?>
<html>
    <script type="text/javascript">
        function validarLetraNumero(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8)
                return true; //Tecla de retroceso (para poder borrar) 
            // dejar la línea de patron que se necesite y borrar el resto 
            patron = /\w/; // Acepta números y letras 
            //patron = /\D/; // No acepta números 
            // 
            te = String.fromCharCode(tecla);
            return patron.test(te);
        }
    </script> 
    <script type="text/javascript">
        function validarTexto(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8)
                return true; //Tecla de retroceso (para poder borrar) 
            // dejar la línea de patron que se necesite y borrar el resto 
            patron = /[A-Za-z]/; // Solo acepta letras 
            //patron = /\d/; // Solo acepta números 
            //patron = /\w/; // Acepta números y letras 
            //patron = /\D/; // No acepta números 
            // 
            te = String.fromCharCode(tecla);
            return patron.test(te);
        }
        function selected() {
            var ben = myform.sucursal.value;
            window.location.href = ("almacen.php?var=" + ben);
        }
    </script> 
    <head>
        <title>InfinityShoes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-titillium-250.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/coin-slider.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>


    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="logo">
                        <img src="images/logo.png" id="logo" alt="logo"/>
                        <h1><a href="index.html"><span>Infinity</span>- <small>Shoes</small></a></h1>
                    </div>
                    <a href="cerrrarsesion.php"><img src="images/logout.jpg" id="logout" alt=""/></a>
                    <div class="menu_nav">
                        <ul>
                            <li><a href="admin.php"><span>Inicio</span></a> </li>
                            <li class="active"><a href="almacen.php"><span>Almacenes</span></a></li>
                            <li><a href="calzado.php"><span>Calzado</span></a></li>
                            <li><a href="registro.php"><span>Registro</span></a></li>
                            <li><a href="personal.php"><span>Personal</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div id="fondo">
                <img src="images/falmacen.jpg" id="falmacen" alt=""/>
                <div id="anadiral">
                    <h1>Añadir almacen</h1>
                    <br>
                    <div id="anaalmacen">
                        <form action="anadiralmacen.php" method = "POST">
                            <label>Nombre del almacen</label>
                            <br>
                            <input type="text" id="txtanaalmacen" onkeypress="return validarTexto(event)" name="txtanaalmacen" class="textos" required>
                            <br>
                            <input type="submit" value="Añadir">
                        </form>
                    </div>
                </div>
                <div id="borraral">
                    <h1 class="derecha">Borrar almacen</h1>
                    <br>
                    <div id="boralmacen">
                        <form action="borraralmacen.php" method = "POST">
                            <label class="derecha">Nombre del almacen</label>
                            <br>
                            <select name="Balmacen" required>
                                <option></option>
                                <?php
                                while ($fila = mysql_fetch_row($result)) {
                                    echo "<option value='" . $fila['0'] . "'> " . $fila['1'] . "</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <input type="submit" value="Eliminar">
                        </form>
                    </div>
                </div>
                <div id="anadirsu">
                    <h1>Añadir sucursal</h1>
                    <br>
                    <div id="anasucursal">
                        <form action="anadirsucursal.php" method = "POST">
                            <label>Almacen</label>
                            <br>
                            <select name="almacen" required>
                                <option></option>
                                <?php
                                while ($fila = mysql_fetch_row($result1)) {
                                    echo "<option value='" . $fila['0'] . "'> " . $fila['1'] . "</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <label>Nombre de sucursal</label>
                            <br>
                            <input type="text" id="txtanasucursal"  onkeypress="return validarLetraNumero(event)" name="txtanasucursal" class="textos" required>
                            <br>
                            <label>Dirección</label>
                            <br>    
                            <input type="text" id="txtanadsucursal" name="txtanadsucursal" class="textos" required>
                            <br>
                            <input type="submit" value="Añadir">
                        </form>
                    </div>
                </div> 
                <div id="anadirte">
                    <form action="anadirtelefono.php" method="POST">
                        <h1>Añadir telefono</h1>
                        <br>
                        <div id="anatelefono">
                            <label>Sucursal</label>
                            <br>
                            <select name="sucursal" required>
                                <option></option>
                                <?php
                                while ($fila = mysql_fetch_row($result22)) {
                                    echo "<option value='" . $fila['0'] . "'> " . $fila['1'] . "</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <label>Número de telefono</label>
                            <br>
                            <input type="number" id="txtanatelefono" max="1000000000" name="txtanatelefono" class="textos" required>
                            <br>
                            <input type="submit" value="Añadir">
                        </div>
                    </form>
                </div>
            </div> 
            <div id="borrarsu">
                <form action="borrarsucursal.php" method="POST">
                    <h1 class="derecha">Borrar sucursal</h1>
                    <br>
                    <div id="borsucursal">
                        <label class="derecha">Nombre de sucursal</label>
                        <br>
                        <select name="Bsucursal" required>
                            <option></option>
                            <?php
                            while ($fila = mysql_fetch_row($result2)) {
                                echo "<option value='" . $fila['0'] . "'> " . $fila['1'] . "</option>";
                            }
                            ?>
                        </select>
                        <br>
                        <input type="submit" value="Eliminar">
                    </div>
                </form>
            </div>
            <div id="borrarte">
                <form id= "myform" action="borrartelefono.php" method="POST">
                    <h1 class="derecha">Borrar telefono</h1>
                    <br>
                    <div id="bortelefono">
                        <label class="derecha">Sucursal</label>
                        <br>
                        <select id="sucursal" name="sucursal" required onchange="selected(this.form)">
                            <option></option>
                            <?php
                            while ($fila = mysql_fetch_array($result222)) {
                                echo "<option value='" . $fila['idsucursales'] . "'> " . $fila['sucursal'] . "</option>";
                            }
                            ?>
                        </select>
                        <br>                        
                        <label class="derecha">Telefono</label>
                        <br>
                        <select name="Btelefono" required>
                            <option></option>
                            <?php
                            while ($fila = mysql_fetch_row($result3)) {
                                echo "<option value='" . $fila['0'] . "'> " . $fila['2'] . "</option>";
                            }
                            ?>
                        </select>
                        <br>
                        <input type="submit" value="Eliminar">
                    </div>
                </form>
            </div><br>
            <br>
            <br>
        </div>
        <div class="clr"></div>
        <div class="clr"></div>
        <div class="fbg">
            <div class="fbg_resize">
                <div class="col c1">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>


                <div class="clr"></div>
            </div>
        </div>
    </div>

</body>

</html>
