<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="get">
		<label>Nombre: </label>
		<input type="text" name="nombre">
		<br>
		<input type="radio" name="genero" value="masculino">Hombre
		<input type="radio" name="genero" value="femenino">Mujer
		<br>
		<button type="submit">Registrarse</button>
	</form>

<?php 
$Nombre=$_GET['nombre'];
$Eleccion=$_GET['genero'];

if (isset($Nombre) && isset($Eleccion)) {
	if ($Nombre=="") {
		print("El campo nombre no puede estar vacio <br>");
	}else{
		print("El nombre que usted ingreso es: ".$Nombre."<br>");
	}
	if ($Eleccion==="") {
		print ("Seleccione un genero <br>");
	} else{
		switch ($Eleccion) {
			case 'masculino':
				print ("Usted selecciono hombre <br>");
				break;
			case 'femenino':
				print ("Usted selecciono mujer ");
				break;
			
			
		}
	}
	
}

 ?>
</body>
</html>