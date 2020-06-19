<?php
class Motos {

   var $honda;
   var $suzuki;
   var $kawasaki;

   function Verdura($honda, $susuki, $kawasaki)
   {
       $this->honda = $honda;
       $this->susuki = $susuki;
       $this->kawasaki = $kawasaki;
   }
    //Metodos
   {
    /*
    Una funcion se empieza con la palabre "function" segudo de nombre que el programador le quiera colocar es de su eleccion, esta funciones son variables asigandos por el programador para asignar el parametro que este le coloque.
    */
   function una_honda()
   {
      return $this->honda;
    }

   function una_susuki()
   {
      return $this->suzuki;
    }
   
    function una_kawasaki()
   {
      return $this->kawasaki;
    }
  }
}
?>