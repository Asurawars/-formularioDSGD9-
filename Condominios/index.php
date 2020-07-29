<?php
include('clasedb2.php');
extract($_REQUEST);
$db=new clasedb2();
$conex=$db->conectar();

$sql="CREATE TABLE inmuebles (id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem varchar(50) NOT NULL, estacionamiento enum('Si','No'), status enum('Ocupado','Desocupado','Mantenimiento'), tipo enum('Casa','Apartamento','Chalet','Quinta','Otro'), cod_postal varchar(5))";

$result=mysqli_query($conex,$sql);

if($result)
{
	echo 'Tabla Creada';
	$sql="ALTER TABLE inmuebles ADD UNIQUE (idem)";
	$result=mysqli_query($conex,$sql);
	if($result)
	{
		echo ' Se asingo un atributo UNIQUE al idem';
	}else{
		echo ' No logro asingar el atributo UNIQUE al idem';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla de inmuebles</title>
</head>
<body>
	<button><a href="rmd.php">Ingresar Registros</a></button>
	<br/><br/>
	<button><a href="obtener_datos_inmuebles.php">Ver Registros</a></button>
	<table align="center">
		<tr align="center">
			<th colspan="6" bgcolor="#E30F87">Registros</th>
		</tr>
		<tr align="center">
			<td>ID</td>
			<td>Identificacion</td>
			<td>Estacionamiento</td>
			<td>Estatus</td>
			<td>Tipo</td>
			<td>Codigo Postal</td>
		</tr>
		<?php 
 			$sql="SELECT * FROM inmuebles";
 			$res=mysqli_query($conex,$sql);
 			while($reg=mysqli_fetch_array($res))
 			{
 		?>
 		<tr align="center">
 		<td><?php echo $reg['id']; ?></td>
 		<td><?php echo $reg['idem']; ?></td>
 		<td><?php echo $reg['estacionamiento']; ?></td>
 		<td><?php echo $reg['status']; ?></td>
 		<td><?php echo $reg['tipo']; ?></td>
 		<td><?php echo $reg['cod_postal']; ?></td>
 		</tr>
 		<?php } ?>
 		</tr>
	</table>

</body>
</html>
