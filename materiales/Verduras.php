<?php
class Verdura {

   var $comestible;
   var $color;
   var $lugar;

   function Verdura($comestible, $color="verde", $lugar)
   {
       $this->comestible = $comestible;
       $this->color = $color;
       $this->lugar = $lugar;
   }
   //Metodos
   {
    /*
    Una funcion se empieza con la palabre "function" segudo de nombre que el programador le quiera colocar es de su eleccion, esta funciones son variables asigandos por el programador para asignar el parametro que este le coloque.
    */
    function es_comestible() 
    {
     return $this->comestible; 
    }

   function qué_color()
   {
      return $this->color;
    }

    function un_lugar()
   {
      return $this->lugar;
    }
  }
} 
?>