<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar</title>
    </head>
    <body>
        <h1>Eliminar contacto</h1>
        <form name='mod' method='post' action='eliminar1.php'>
            <?php
            include 'conecta.php';
            $bd = conectar();
            $radio = $_REQUEST['ide'];
            $cad = "select * from contactos where identificacion=$radio";
            $res = mysql_query($cad, $bd);
            if (!$res) {
                echo "Error" . mysql_error();
            } else {
                $row = mysql_fetch_array($res);
            }
            ?>
            <h2><?php echo $row[1];?></h2>
           
            Identificación
            <br>
            <input type='number' name='txtide' readonly id='txtide' value="<?php echo $row[0]; ?>"> 
            <br>
            <br>
            <input type="submit" value="Eliminar">
            <input type='button' onClick="location.href = 'index.php'" value='Cancelar'><br>
        </form>
    </body>
</html>
