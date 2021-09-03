<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php  

/*
Funciones: Una funcion es un pequeño bloque de codigo que va a relaizar una funcion en especifico.Para crear una funcion en php es de la sigueinte forma: ponemos la palabra function despues poenmos el nombre que va a tener esa funcion luego colocamos los parentesis en donde van a ir nuestro parametros y por ultimo abrimos y cerramos llaves

Para poder ejecutar la funcion se debe llamarla mediante el nombre y poner los parentesis y poner punto y coma
*/
 
 function saludar(){
	print("Hola <br>");

}

function adios(){
	print("Adios");
}

saludar(); //Aqui estoy llamando a la funcion para que funcione el pagina web y el llamado simpre debe ser fuera de la funcion
adios();


                               //Parametros en una Funcion
 //Parametros: Los parametros son las variables que van a servir como referencia para nuestra funcion y ste parametro solo va a funcionar en esa funcion, los parametros van dentro de los parentesis
function crearTitulo($titulo){
	print("<h1>$titulo</h1>");
}

crearTitulo("Hola Aaron Ortiz"); // al momento de llamar a una funcion con parametros debemos llenar los parametros que me piden o si no va a salir un error

crearTitulo("Adios PHP"); // Una funcion puede ser usada de manera indefenida



                                //Retorno de Valores para Funciones



function suma($numero1,$numero2){
    
    $resultado=$numero1+$numero2;
    return $resultado;

}
 
 $valorRetornado=suma(5,10); //cuando a una funcion se le aplica la opcion de return para que nos devuelva el resultado de la operacion simpre a esa funcion de le debe almacenar en una variable para que se impima el resultado
 
 print($valorRetornado); // aqui unicamente lo que hago simplemente es imprimir la  variable en donde esta almacenada esa funcion




?>
<body>

</body>
</html>