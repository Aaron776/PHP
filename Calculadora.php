<?php 
$numero1=$_GET['num1'];
$numero2=$_GET['num2'];
$operacion=$_GET['operacion'];
 
 switch ($operacion) {
 	case 'suma':
 		$resultado=$numero1+$numero2;
 		echo "La suma es: ".$resultado;
 		break;
 	case 'resta':
 		$resultado=$numero1-$numero2;
 		echo "La resta es: ".$resultado;
 		break;
 	case 'multiplicacion':
 		$resultado=$numero1*$numero2;
 		echo "La multiplicacion es: ".$resultado;
 		break;
 	case 'division':
 		$resultado=$numero1/$numero2;
 		echo "La division es: ".$resultado;
 		break;
 	default:
 	echo "No existe esa operacion";
 		
 }





 ?>