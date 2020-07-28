<?php
include("clasedb2.php");
extract($_REQUEST);
$db=new clasedb2();
$conex=$db->conectar();

//Empezando el registro
$rg = 20; // numero a registrar
$estacionamiento = array('Si', 'No');
$status = array('Ocupado', 'Desocupado', 'Mantenimiento');
$tipo = array('Casa', 'Apartamento', 'Chalet', 'Quinta', 'Otro');
$cod_postal = array('2121', '2103', '2122');

$arm = 0;
$error = array();
$agregar = array();
$rm = 0;

for ($i=1; $i <= 20; $i++) { 
	$mrand = rand(1,100);
	$arand = rand(1, count($estacionamiento) - 1);
	$drand = rand(1, count($status) - 1);
	$rrand = rand(1, count($tipo) - 1);
	$irand = rand(1, count($cod_postal) - 1);

	$sql="INSERT INTO inmuebles (idem, estacionamiento, status, tipo, cod_postal) VALUES('".$mrand."','".$estacionamiento[$arand]."','".$status[$drand]."','".$tipo[$rrand]."','".$cod_postal[$irand]."')";

	if ($conex->query($sql)) {
		$agregar[$arm] = $mrand;
		$arm++;
	}else{
		$error[$rm] = $conex->error;
		$rm++;
	}

  echo "registro añadidos: $arm <br/><br/>";
  for ($i=0; $i < count($agregar) ; $i++) { 
  	echo "Si: Apartamento" .$agregar[$i]."<br/>";
  }

  echo "<br/>";
  echo "registro fallidos: <br/> <br/>";
  for ($i=0; $i < count($error) ; $i++) { 
  	echo "Si: " .$error[$i]."<br/>";
  }
}
/*
$sql="CREATE TABLE inmuebles (id INT(11) NOT NULL PRYMARY KEY AUTO_INCREMENT, idem VARCHAR(50) NOT NULL, estacioamiento ENUM('Si','No'), status ENUM('Ocupado', 'Desocupado', 'Mantenimiento'), tipo('Casa', 'Apartamento', 'Chalet', 'Quinta', 'Otro'), cod_postal VARCHAR(5));";

$result=mysqli_query($conex,$sql);
if ($result) {
	echo "La Tabla Creada Exitosamente";
}else{
	echo "Tabla No Creada";
}
*/
?>