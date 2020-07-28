<?php
include("clasedb2.php");
extract($_REQUEST);
$db=new clasedb2();
$conex=$db->conectar();

$registrar= 20; // numero a registrar
$estacionamiento = array('Si', 'No');
$status = array('Ocupado', 'Desocupado', 'Mantenimiento');
$tipo = array('Casa', 'Apartamento', 'Chalet', 'Quinta', 'Otro');
$postal = array('2121', '2103', '2122');

$mds = 0;
$err = array();
$agregar = array();
$o = 0;
for ($i=1; $i <= 20; $i++) { 
	$irand = rand(0,100);
	$erand = rand(0, count($estacionamiento) -1);
	$srand = rand(0, count($status) -1);
	$trand = rand(0, count($tipo) -1);
	$prand = rand(0, count($postal) -1);

$sql = "INSERT INTO inmuebles (idem, estacionamiento, status, tipo, cod_postal) VALUES ('".$irand."','".$estacionamiento[$erand]."','".$status[$srand]."','".$tipo[$trand]."','".$postal[$prand]."')";

if ($conex->query($sql)) {
	$agregar[$mds] = $irand;
	$mds++;
}else{
	$error[$o] = $conex->error;
	$e++;
  }
}

echo "Registro añadido: $mds <br/><br/>";
for ($i=0; $i < count($agregar); $i++) { 
	echo "Si: Apartamento".$agregar[$i]."<br/>";
}

echo "<br/>";
echo "Registro fallido: 0 <br/><br/>";
for ($i=0; $i < count($err); $i++) { 
	echo "Si: ".$err[$i]."<br/>";
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