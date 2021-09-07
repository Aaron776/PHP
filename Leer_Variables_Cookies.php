<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php  
//La función isset() nos permite evaluar si una variable está definida o no solo eso

 if (isset($_COOKIE['Nombre_Persona'])&& isset($_COOKIE['Calificacion_Persona'])) {
 	echo "La variable cookie nombre contiene: ";
 	echo $_COOKIE['Nombre_Persona'];
 	print("<br>");
 	echo "La variable cookie calificacion contiene: ";
 	echo $_COOKIE['Calificacion_Persona'];
 }else{
 	print("Esas cookies no existen");
 }


?>
<body>

</body>
</html>