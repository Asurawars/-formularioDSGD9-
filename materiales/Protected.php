<?php
class Materiales
{
	protected $nombre;
	protected $tipo;
	protected $peso;
	protected $longitud;
	protected $utilidad;

	protected function almacenar()
	{
		print "Guardar";
	}
}
class ceramicas extends Materiales
{
	public function almacenarceramicas
	//
	return $this->Guardar();
}
{
	public function setNombre($nombre)
	$this->nombre = $nombre;
}
{
	public function getNombre()
	print $this->nombre;
}
?>