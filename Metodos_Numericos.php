<?php 
//Metodo pow():Este metodo permite elevar un numero a un exponenete, esta funcion recibe dos parametros el primero es el numero que vamos a elevar y el otro es el exponente

$elevado = pow(2,6);
print("El resultado de la exponenciacion es: ".$elevado);
echo "<br>";


//Metodo sqrt(): ESte metodo permite sacar la raiz cuadrada de un numero
$raiz = sqrt(8);
print("El resultado de la raiz cuadrada es: ".$raiz);
echo "<br>";


//Metodo log(): Este metodo devuelve el resulñtado de un logaritmo de un numero, este metodo tiene dos parametros el primero es el numero que queremos sacar el logaritmo y el segundo parametro es la base auqnue este es opcional y en caso de no poner este segundo parametro el logaritmo sra en base e (logaritmo natural)
$logaritmo = log(4,7);
print("El resultado del logaritmo es: ".$logaritmo);
echo "<br>";

$logaritmo2 = log(4);
print("El resultado del logaritmo sin base es: ".$logaritmo2);
echo "<br>";


// Metodo max():Devuelve el valor más alto de todos los que se le pasan en una lista, ésta puede estar en forma de array o pasar los números directamente como varios argumentos.
$arreglo=array(1,2,3,4,5);
$maximo=max(1,2);
print("El numero mayor es: ".$maximo);
echo "<br>";


// Metodo min():Devuelve el valor menor de todos los que se le pasan en una lista, ésta puede estar en forma de array o pasar los números directamente como varios argumentos.
$arreglo1=array(0,4,3,2,4.5);
$minimo=min($arreglo1);
print("El numero menor es : ".$minimo);
echo "<br>";


//Metodo abs(): devuelve el valor absoluto del número pasado como argumento, siempre positivo, sin tener en cuenta el signo.
$absoluto=abs(-6);
print("El valor absoluto es : ".$absoluto);
echo "<br>";

//Metodo ceil():  Redondea el número pasado en el argumento al siguiente entero inmediatamente superior.
$redondeoMax=ceil(6.6);
print($redondeoMax);
echo "<br>";


//Metodo floor():  Redondea el número pasado en el argumento al número entero inmediatamente inferior.
$redondeoMin=floor(8.5);
print($redondeoMin);
echo "<br>";


//Metodo rand(): Genera un número entero aleatorio comprendido entre los números pasados en los parentesis
$aleatorio=rand(1,4);
print("El numero aleatorio es: ".$aleatorio);
echo "<br>";

//Metodo isset():Comprueba si la variable existe. Si es así devuelve verdadero (1), y si no devuelve falso ("") o sea nada;

$respuesta = isset($aleatorio);
print($respuesta)

 ?>