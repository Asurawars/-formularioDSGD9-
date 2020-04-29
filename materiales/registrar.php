<!DOCTYPE html>
<html>
<head>
	<title>Materiales</title>
</head>
<body>
	<br>
	<form action="recibir.php" method="post" name="materiales">
		<table>
			<tr>
				<td colspan="2">Registrar Materiales:</td>
			</tr>
			<tr>
				<td>Nombre:</td><td><input type="text" name="nombre" id="nombre" placeholder="Ej: Llave Mecanica" title="Ingrese el nombre"></td>
			</tr>
			<tr>
				<td>tipo:</td><td><input type="text" name="tipo" id="tipo" placeholder="Ej: Mecanica" title="Ingrese el tipo de material"></td>
			</tr>
			<tr>
				<td>Peso:</td><td><input type="text/number" name="peso" id="peso" placeholder="Ej: 10 Kilogramos" title="Ingrese el peso"></td>
			</tr>
			<tr>
				<td>Longitud:</td><td><input type="text/number" name="longitud" id="longitud" placeholder="Ej: 10 Centimentros" title="Ingrese el numero de habitantes"></td>
			</tr>
			<tr>
				<td>Utilidad:</td><td><input type="text" name="utilidad" id="utilidad" placeholder="Ej: Para..." title="Ingrese la utilidad"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id_materiales">
					<input type="hidden" name="operacion" value="actualizar">
					<input type="submit" name="enviar" value="Enviar"></td>		
			</tr>
		</table>
	</form>
</body>
</html>