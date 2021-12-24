<?php 
//El metodo require() es bastante similar al metodo include() con la diferecia que la fotrma en que compila e diferente ya que con el include() si llamaos un archivo que no existe nos saldra warnings pero los demas archivos que llamaos se seguiran ejecutando y con el require() si llamamos un archivo inexistente toda la pagina tendra warnings asi sea que los otros archivos que llamamos esten bien
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="container">
	<h3>Contenido Principal: </h3>
	<?php 
		require("Arreglos.php");

	 ?>

	 <br>
	<h3>Contenido Secundario: </h3>
	<?php
	include("Variables.php");

	  ?>