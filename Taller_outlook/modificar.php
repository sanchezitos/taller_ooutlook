<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar</title>
    </head>
    <body>
        <h1>Editar contacto</h1>
        <form name='mod' method='post' action='modificar1.php'>
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
           
            Nombre
            <br>
            <input type='text' name='txtnom'  id='txtnom'  required value="<?php echo $row[1]; ?>"> 
            <br>
            <br>
            Identificación
            <br>
            <input type='number' name='txtide' id='txtide' readonly="" value="<?php echo $row[0]; ?>"> 
            <br>
            <br>

            Telefono
            <br>
            <input type='number' name='txttel' id='txttel' min='1000' required value="<?php echo $row[2]; ?>"> 
            <br>
            <br>
            Dirección
            <br>
            <input type='text' name='txtdir' id='txtdir' required value= "<?php echo $row[3]; ?>">    
            <br>
            <br>
            <input type="submit" value="Guardar">
            <input type='button' onClick="location.href = 'index.php'" value='Cancelar'><br>
        </form>
    </body>
</html>
