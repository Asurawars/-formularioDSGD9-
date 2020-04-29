<?php
include('clasedb.php');

extract($_REQUEST);

$db=new clasedb();
$con=$db->conectar();
$sql="INSERT INTO registrar_materiales VALUES(NULL,'".$nombre."','".$tipo."','".$peso."','".$longitud."','".$utilidad."')";
$resultado=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if ($resultado){
	?>
	<b>Registro ingresado ---> <a href="index.php">Volver</a></b>
	<?php
}else{
	?>
	<b>Registro no ingresado  ---> <a href="index.php">Volver</a></b>
	<?php
}
?>
</body>
</html>