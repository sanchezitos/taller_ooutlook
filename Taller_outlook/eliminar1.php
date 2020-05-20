<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar</title>
    </head>
    <body>
        <h1>Eliminar contacto</h1>
        <?php
        include 'conecta.php';
        $bd = conectar();
        $radio = $_POST["txtide"];
        $cad = "DELETE FROM contactos where identificacion=$radio";
        $res = mysql_query($cad, $bd);
        if ($res) {
           header("Location:index.php");  
            
        } else {
            echo 'Esta mal :/';
            mysql_error();
        }
        ?>
    </body>
</html>
