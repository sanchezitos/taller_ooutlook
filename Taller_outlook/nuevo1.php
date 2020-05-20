<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar</title>
    </head>
    <body>
        <h1>Agregar contacto</h1>
        <?php
        include 'conecta.php';
        $bd = conectar();
        $ide = $_POST["txtide"];
        $nom = $_POST["txtnom"];
        $tel = $_POST["txttel"];
        $dir = $_POST["txtdir"];
        $cad = "INSERT INTO contactos (`identificacion`, `nombres`, `telefono`, `direccion`) VALUES ('$ide', '$nom', '$tel', '$dir');";
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
