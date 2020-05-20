<?php
function conectar(){
    $bd = mysql_connect("localhost","root","");
    if (!$bd){ 
    echo "<h3>Atención</h3>";
    echo "<p>Error al conectar!</p>";
    return null;
    }
    if (!mysql_select_db("outlook",$bd)){
    echo "<h3>Atención</h3>";
    echo "<p>Base de datos no existe</p>";
    return null;
    }
    return $bd;
}
?>
