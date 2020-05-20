<?php

include 'conecta.php';
$bd = conectar();
echo $radio = $_REQUEST['ide'];
$ide = $_POST["txtide"];
$nom = $_POST["txtnom"];
$tel = $_POST["txttel"];
$dir = $_POST["txtdir"];

$cad = "UPDATE contactos SET  nombres='$nom', telefono='$tel', direccion='$dir' where identificacion='$ide'";
$res = mysql_query($cad, $bd);

if($res){
    header("Location:index.php");
}else{
    echo 'Esta mal :/';
    mysql_error();
}
?>

