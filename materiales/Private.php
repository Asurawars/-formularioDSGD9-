<?php
class Materiales
{
	private $nombre;
	private $tipo;
	private $peso;
	private $longitud;
	private $utilidad;

	public function almacenar()
	{
		print "Guardar";
	}
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
}
$granito = new Materiales();
$granito->setNombre("Lodo");
echo $granito->getNombre();
?>