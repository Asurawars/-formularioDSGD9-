<?php
	class clasedb2{
		private $db;
		public function conectar(){
			$this->db=new mysqli("localhost","root","","condominios") or die ("No se pudo conectar con Mysql");
			return $this->db;
		}
	}
?>