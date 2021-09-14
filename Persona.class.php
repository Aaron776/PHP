
<?php  
class Persona{

      //Atributos
       public $name="Aaron Ortiz";
       private $age=30;
       public $direccion="El Valle";

       //Constructor
       function __construct($nom,$eda,$dir){
          $this->name=$nom;
          $this->age=$eda;
          $this->direccion=$dir;

       }
      


      private function saludar(){
         echo "Hola Aaron";
      } 

      public function despedir(){
         echo "Adios Aaron";
      }

     


      }
?>
