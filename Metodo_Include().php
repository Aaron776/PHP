<?php 
//El metodo include() permite relacionar esta pagina php con otro archivo o pagina php y usar todo el codigo que esta creado en esos archivos externos, basicamente se usa para no repetir codigo que tenemos en otro archivo y que queremos utilizar
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
		include("Arreglos.php");

	 ?>

	 <br>
	<h3>Contenido Secundario: </h3>
	<?php
	include("Variables.php");

	  ?>
</div>
</body>
</html>