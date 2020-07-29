<?php
include("clasedb2.php");
extract($_REQUEST);

$db = new clasedb2();

$conex = $db->conectar();

/*
OBTENER TODOS LOS REGISTROS
*/
?>
<title>Tabla de inquilinos registrados</title>
<h1>Obtener todos los inmuebles</h1>
<table>
	<thead>
		<th>ID</th>
		<th>IDEM</th>
		<th>Estacionamiento</th>
		<th>Estado</th>
		<th>Tipo</th>
		<th>Código postal</th>
	</thead>
	<tbody>
<?php
$sql = "SELECT * FROM inmuebles";

$result = $conex->query($sql);

while ($datos = mysqli_fetch_array($result)) {
	echo "<tr style='text-align: center'>";

	echo "<td>". $datos[0]. "</td>";

	echo "<td>". $datos[1]. "</td>";

	echo "<td>". $datos[2]. "</td>";

	echo "<td>". $datos[3]. "</td>";

	echo "<td>". $datos[4]. "</td>";

	echo "<td>". $datos[5]. "</td>";

	echo "</tr>";
}

?>
	</tbody>
</table>


<h1>Obtener inmuebles con estacionamiento y desocupados</h1>
<table>
	<thead>
		<th>ID</th>
		<th>Idem</th>
		<th>Estacionamiento</th>
		<th>Estado</th>
		<th>Tipo</th>
		<th>Código postal</th>
	</thead>
	<tbody>
<?php
$sql = "SELECT * FROM inmuebles WHERE estacionamiento='Si' AND status='Desocupado'";

$result = $conex->query($sql);

while ($datos = mysqli_fetch_array($result)) {
	echo "<tr style='text-align: center'>";

	echo "<td>". $datos[0]. "</td>";

	echo "<td>". $datos[1]. "</td>";

	echo "<td>". $datos[2]. "</td>";

	echo "<td>". $datos[3]. "</td>";

	echo "<td>". $datos[4]. "</td>";

	echo "<td>". $datos[5]. "</td>";

	echo "</tr>";
}

?>
	</tbody>
</table>

<h1>El total de inmuebles</h1>
<table>
	<thead>
		<th>Con estacionamiento</th>
		<th>Sin estacionamiento</th>
		<th>Ocupados</th>
		<th>Desocupados</th>
	</thead>
	<tbody>
<?php
$sql = "SELECT 
count(case when estacionamiento='Si' then 1 end),
count(case when estacionamiento='No' then 1 end),
count(case when status='Ocupado' then 1 end),
count(case when status='Desocupado' then 1 end)
FROM inmuebles";

$result = $conex->query($sql);

$datos = mysqli_fetch_array($result);

echo "<tr style='text-align: center'>";

echo "<td>". $datos[0]. "</td>";

echo "<td>". $datos[1]. "</td>";

echo "<td>". $datos[2]. "</td>";

echo "<td>". $datos[3]. "</td>";

echo "</tr>";

?>
	</tbody>
</table>
<br>
<button><a href="index.php">Volver</a></button>