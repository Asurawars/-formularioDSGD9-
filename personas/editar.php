<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Editando Personas</title>
</head>
<body>
 <br>
 <form action="PersonasControlador.php" method="post" name="formulario">
 	<table>
 		<tr>
 			<td colspan="2">Editar Personas:</td>
 		</tr>
 		<tr>
 			<td>First Name:</td><td><input type="text" name="first name" id="first name" placeholder="Ej: Dember Semoy" title="Ingrese sus nombres" value="<?=$data[1]?>"></td>
 		</tr>
 		<tr>
 			<td>Last Name:</td><td><input type="text" name="last name" id="last name" placeholder="Ej: Gonzalez Diaz" title="Ingrese sus apellidos" value="<?=$data[2]?>"></td>
 		</tr>
 		<tr>
 			<td>DNI:</td><td><input type="number" name="dni" id="dni" placeholder="Ej: 28147379" title="Ingrese su dni" value="<?=$data[3]?>"></td>
 		</tr>
 		<tr>
 			<td>
 				<input type="hidden" name="id_persona" value="<?=$data[0]?>">
 				<input type="hidden" name="operacion" value="actualizar">
 				<input type="submit" name="enviar" value="Enviar">
 			</td>
 		</tr>
 	</table>
 </form>
</body>
</html>