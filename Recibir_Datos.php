<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recepcion de Datos</title>
</head>
<?php  

      print("El nombre que enviaste de la pagina anterior es: ");
      print ($_REQUEST['nombre']);  // para poder recibir datos de una formulario html usamos la variable Request y ponemos corchetes y entre los corchetes ponemos el name del campo del formulario que queremos recibir la informacion
      print("<br>");

                        

                        //Recibir infromacion de un Radio Button
        
        

      $numero1=$_REQUEST['num1'];
      print("El Valor del numero 1 que ingresaste es: $numero1");

      print("<br>");

      $numero2=$_REQUEST['num2'];
      print("El Valor del numero 2 que ingresaste es: $numero2");

     echo "<br>";

      if ($_REQUEST['operacion']=="suma") {                    
            $suma=$_REQUEST['num1']+$_REQUEST['num2'];
            print("El resultado de la suma es: $suma");
            
      }elseif ($_REQUEST['operacion']=="resta") {
            $resta=$_REQUEST['num1']-$_REQUEST['num2'];
            print("El resultado de la resta es: $resta");
      }
    
    echo"<br>";

                              //Recibir Informacion de un Select
      
       if ($_REQUEST['Operacion']=="multiplicar") {                    
            $multiplicacion=$_REQUEST['num1']*$_REQUEST['num2'];
            print("El resultado de la multiplicacion es: $multiplicacion");
            
      }elseif ($_REQUEST['Operacion']=="dividir") {
            $division=$_REQUEST['num1']/$_REQUEST['num2'];
            print("El resultado de la division es: $division");
      }


 




                             //Recibir Informacion de un TextArea
       print("<br>");
       print("Su correo electronico es: ");
       print($_REQUEST['correo']);
       
     print("<br>");
      print("El mensaje que usted mando es: ");
      print($_REQUEST['mensaje']);





      //Una forma de recibir informacion desde html para PHP es almacenar la funcion $_Request en una variable y luego mandar a llamar o imprimri esa variable como lo hago en la seccion "Recibir informacion de un Radio Button", y otra forma de hacerlo es imprimir o llamar directamente al $_Request como lo hago en la seccion que dice "Recibir informacion de un Text Area"

    

                                                //Matrices Predefinidas

      //$_SERVER :esta matriz ayuda para observar informacion de nuestro servidor como rutas, cabeceras, direccion ip de nuestros usuarios

      //$_ENV : esta matriz va a contener informacion acerca de donde se esta ejecutando nuestro entorno php

      //$_SESSION : va a contener la variables de sesion que nosotros declaremos como por ejemplo en paginas de login

      //$_GET : esta matriz o variable va a contener las variables que nosotros vamos a recibir

      //$_POST : esta matriz o variable va a contener las variables que nosotros vamos a mandar

      //$_COOKIE : esta variable o matriz va a contener las variables que nosotros queremos almcenar en nuestro cookies

      //$_REQUEST: esta matriz va a contener todas las variables almacenadas que se encuentren almacendas en la matriz o variables post,get y cookies


      //$_FILES : esta variable o matriz va a contener infromacion de los archivos que nosotros enviamos

      //$GLOBALS: esta matriz va a contener la infromacion de todas las variables definidas


      ?>
<body>


</body>
</html>