<?php 

//La progrmacion orientada a obejtos se basa en cuatro elemenbtos que son:Clases,Objetos,Propiedades(atributos) y Funciones(metodos)


//Una clase es como una plantilla o un modelo que nos va a servir para poder crear obejtos de esa clase,ara crear una clase en php se hace de la siguiente forma usando la pabara class, cuando ponemos los atributos de una clase siempre debemos poner su modicador de acceso(public o private)


//En PHP  para que recnozca que hemos creado una clase el nombre del archivo debe llevar el ".class.php" para que sepa que es una clase

   
   class Automovil{

   	//Atributos
   	public $color="Azul";
   	public $precio=23000;

   	//Metodos

   	function acelerar(){
   		print("El automovil esta acelerando");
	}

   	function frenar(){
   		echo "El automovil se freno";

   	}

   	
   	   }


 ?>