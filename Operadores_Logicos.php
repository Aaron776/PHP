<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php

//Operadores Logicos: Nos ayudan a obtener un valor booleano dependiendo de una comparacion logica

                        //Tipos de Operadores Logicos
//Mayor o Mayor igual(>,>=)
$comparacion=5>4;
$comparacion2=5>=4;
print($comparacion);
print("<br>");
print($comparacion2);
print("<br>");

//Menor o Menor igual(<,<=)
$comparacion3=5<6;
$comparacion4=5<=6;
print($comparacion3);
print("<br>");
print($comparacion4);
print("<br>");

//Igual a(==)
$comparacion5 = 6==6;
print($comparacion5);
print("<br>");

//Diferente a(!=)
$comparacion6 = 6!=7;
print($comparacion6);
print("<br>");

//Si queremos decir and (&&)
$numero=23;

if ($numero>=18 && $numero<100) {
	print("Usted es mayor de edad");
}else
   print("Edad Incorrecta");

print("<br>");

//Si queremos decir or (&&)
$edad=10;

if ($edad==18 || $edad>18) {
	print("Usted es mayor de edad");
}else
   print("Edad Incorrecta");




// Si se hacen comparaciones con los operadores logicos en la pantalla del navegador se mostrara el resultado booleano 1 si es verdadero y si es falso no se moestrara nada en pnatalla



?>
<body>

</body>
</html>