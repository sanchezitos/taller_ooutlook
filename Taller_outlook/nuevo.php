<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo</title>
    </head>
    <body>
        <h1>Añadir contacto</h1>
        <form name='mod' method='post' action='nuevo1.php'>
            Nombre
            <br>
            <input type='text' name='txtnom'  required> 
            <br>
            <br>
            Identificación
            <br>
            <input type='number' name='txtide' required min="1000"> 
            <br>
            <br>
            Telefono
            <br>
            <input type='number' name='txttel' min='1000' required > 
            <br>
            <br>
            Dirección
            <br>
            <input type='text' name='txtdir'  required>    
            <br>
            <br>
            <input type="submit" value="Ingresar">
            <input type='button' onClick="location.href = 'index.php'" value='Cancelar'><br>
        </form>
    </body>
</html>
