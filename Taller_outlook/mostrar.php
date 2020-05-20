<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        include 'conecta.php';
        $bd = conectar();
        $radio=$_REQUEST['ide'];
        $cad="select * from contactos where identificacion=$radio";
        $res = mysql_query($cad, $bd);
        if (!$res){
            echo "Error" . mysql_error();
        }else{
        $row=  mysql_fetch_array($res);
        echo "<h1>$row[1]</h1><br>";
        echo "<b>Identificación</b><br>";
        echo $row[0]."<br>";
        echo "<b>Telefono</b><br>";
        echo $row[2]."<br>";
        echo "<b>Dirección</b><br>";
        echo $row[3]."<br>";
        
         
        }
        
        ?>
        
        <br>
        
    </body>
</html>
