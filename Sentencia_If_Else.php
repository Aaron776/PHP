<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php  
//Estructura Condiccional If-Else, esta estructura lo que hace es una comparacion logica y dependiendo la respuesta ejecuta una serie de instrucciones que nosotros le demos



//Estructura de como hacer un if-else en php, dentro del parentesis se pone la condicion:
if (5<3){
	print("Es cierto que 5 es mayor que tres");
}else{
	print("Esta compracion no es correcta");
}

// Tambien podemos tener varios if-else multiple(elseif)
print("<br>");

$calificacion=6;
if ($calificacion>=7) {
	print("Usted paso el semestre");
} elseif ($calificacion<7 && $calificacion>=5) {

	print("Usted se quedo a supletorios");

}else{
	print("Usted perdio el semestre");
}


?>
<body>

</body>
</html>