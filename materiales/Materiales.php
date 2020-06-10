<?php
class Materiales 
{
	public $nombre;
	public $tipo;
	public $peso;
	public $longitud;
	public $utilidad;

	//Construct 

	function __construct($nombre, $tipo, $peso, $longitud, $utilidad){

		$this->nombre = $nombre;
		$this->tipo = $tipo;
		$this->peso = $peso;
		$this->longitud = $longitud;
		$this->utilidad = $utilidad;
	}
   public function mensaje()
   {
   	 return 'ha entrado a la funcion';
   }

}
   /**
    * 
    */
   class arcilla extends Materiales
   {
   	 public $precio;
	 public $tamaño;
	 public $uso;

   	public function __construct($precio, $tamaño, $uso){

   		$this->$precio = $precio;
	 	$this->$tamaño = $tamaño;
	 	$this->$uso = $uso;
   	}
 }
 
?>