<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Materiales</title>
</head>
<body>
<form action="MaterialesControlador.php" method="post" name="materiales">
	<br>
		<table>
			<tr>
				<td colspan="2">Registrar Materiales:</td>
			</tr>
			<tr>
				<td>Nombre:</td><td><input type="text" name="nombre" id="nombre" placeholder="Ej: Llave Inglesa" title="Ingrese el nombre" value="<?=$data[1]?>"></td>
			</tr>
			<tr>
				<td>tipo:</td><td><input type="text" name="tipo" id="tipo" placeholder="Ej: Mecanica" title="Ingrese el tipo de material" value="<?=$data[2]?>"></td>
			</tr>
			<tr>
				<td>Peso:</td><td><input type="text/number" name="peso" id="peso" placeholder="Ej: 10 Kilogramos" title="Ingrese el peso" value="<?=$data[3]?>"></td>
			</tr>
			<tr>
				<td>Longitud:</td><td><input type="text/number" name="longitud" id="longitud" placeholder="Ej: 10 Centimentros" title="Ingrese la longitud" value="<?=$data[4]?>"></td>
			</tr>
			<tr>
				<td>Utilidad:</td><td><input type="text" name="utilidad" id="utilidad" placeholder="Ej: Para..." title="Ingrese la utilidad" value="<?=$data[5]?>"></td>
			</tr>
			<tr>
		     <td>
			  <input type="hidden" name="id_materiales" value="<?=$data[0]?>">
			  <input type="hidden" name="operacion" value="actualizar">
			  <input type="submit" name="enviar" value="enviar">
		     </td>
		    </tr>
		</table>
	</form>
</body>
</html>