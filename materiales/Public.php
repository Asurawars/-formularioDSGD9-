<?php
class Materiales
{
	public $nombre;
	public $tipo;
	public $peso;
	public $longitud;
	public $utilidad;

	public function almacenar()
	{
		print "Encerrar";
	}
}
class ladrillos extends Materiales 
{
	public function almacenar()
	{
		print"Guardar";
	}
}
$marmol = new ladrillos();
$marmol->nombre = "";
print $marmol->nombre; // Gu
$marmol->almacenar(); // Gua
?> 