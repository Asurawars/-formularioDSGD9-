<?php
class Materiales
{
	public $nombre;
	public $tipo;
	public $peso;
	public $longitud;
	public $utilidad;

	final public function almacenar()
	{
		print "Encerrar";
	}
}
class hierro extends Materiales
{
	// Dara error:
	public function almacenar()
	{
		print "Guardar";
	}
}
$aluminio = new hierro();
$aluminio->almacenar(); //Cannot override
?>