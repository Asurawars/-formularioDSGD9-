<?php
class Autos {

   var $convertible;
   var $lujoso;
   var $deportivos;

   function Verdura($convertible, $lujoso, $deportivo)
   {
       $this->convertible = $convertible;
       $this->lujoso = $lujoso;
       $this->deportivo = $deportivo;
   }
   //Metodos
   {
    /*
    Una funcion se empieza con la palabre "function" segudo de nombre que el programador le quiera colocar es de su eleccion, esta funciones son variables asigandos por el programador para asignar el parametro que este le coloque.
    */
   function un_convertible()
   {
      return $this->convertible;
    }

   function que_lujoso()
   {
      return $this->lujoso;
    }
   
    function es_deportivo()
   {
      return $this->deportivo;
    }
  } 
}
?>