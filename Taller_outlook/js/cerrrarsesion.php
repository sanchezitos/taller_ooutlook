<?php 
session_start();

if ($_SESSION['idadministrador'])
{	
	session_destroy();
	echo '<script language = javascript>
	alert("su sesion se cerro correctamente")
	self.location = "index.html"
	</script>';}
?>

