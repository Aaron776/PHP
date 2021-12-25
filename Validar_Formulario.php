<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post">
		<label>Nombre: </label>
		<input type="text" name="nombre">
		<br>
		<label>Email: </label>
		<input type="emailt" name="email">
		<br>
		<label>Contraseña: </label>
		<input type="password" name="contra">
		<br>
		<button type="submit">Ingresar</button>
	</form>

<div style="background-color: red;">
<?php  
$Nombre=$_POST['nombre'];
$Email=$_POST['email'];
$Contraseña=$_POST['contra'];


//Validar Solicitud Post o sea si existen las variables con esos datos
if (isset($Nombre) && isset($Email)) {
	if ($Nombre=="") {
		print("El campo nombre no puede estar vacio <br>");
	}
	if ($Contraseña==""|| strlen($Contraseña<6)) {
		print ("El campo contraseña no puede estar vacio ni tener menos de 6 caracteres <br>");
	
	}
	if ($Email==""||strpos($Email, "@")===false) {
		print("El campo contraseña no puede estar vacio o debe tener un arroba <br>");
	
	}
	
}

?>
</div>
</body>
</html>