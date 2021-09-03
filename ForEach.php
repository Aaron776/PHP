<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php  


$dias= array('lu' => "Lunes",
			 'ju' =>"Jueves",
			 'vie' => "Viernes");


//El for each se trabaja con los arreglos y en especial con los vectores asociativos ya que estos trabajan con las claves
foreach ($dias as $key => $value) {
	print("Para la clave $key tiene el valor $value <br>");

}
echo "<br>";

$meses= array(0 => "Enero",
			  1=>"Abril",
			  2 => "Mayo");

foreach ($meses as $clave => $valor) {
	print("Para la clave $clave tiene el valor $valor <br>");
	print("La clave es: $clave <br>"); //podemos imprimir las claves o los valores si queremos
}


// Este for each lo que hace es recorer todo nuestro arreglo sin necesidad de especificar hasta donde recorrer, la plabras key y value es opcional si le quieres cambiar por otras nombres de variable (como lo hice en el ejemplo de meses)


?>
<body>
</body>
</html>