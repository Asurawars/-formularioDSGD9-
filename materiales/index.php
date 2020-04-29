<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Categorias</title>
  <script type="text/javascript">
    function eliminar(id) {
      if(confirm("Seguro desea eliminar el registro?")) {
        window.location = "MaterialesControlador.php?operacion=eliminar&id_materiales="+id;
      }
    }
  </script>
</head>
<body>
  <table align="center">
  <a href="../index.php">Inicio</a>
  <center><a href="MaterialesControlador.php?operacion=registrar">Registrar</a></center>
      <tr>
        <th>Nro</th>
        <th>Nombre</th>
        <th>tipo</th>
        <th>peso</th>
        <th>Longitud</th>
        <th>Utilidad</th>
        <th>Opciones</th>
      </tr>
      <?php
        $num=1;
        for ($i=0; $i < $filas; $i++) { 
          echo "<tr>";
      ?>
      <td>
        <?=$num?>
      </td>
      <?php
        for ($j=1; $j < $campos; $j++) { ?> 
          <td><?=$data[$i][$j]?></td>
        <?php } ?>
      <td>
        <a href="MaterialesControlador.php?operacion=modificar&id_materiales=<?=$data[$i][0]?>">Modificar</a>
          <a href="javascript:eliminar(<?=$data[$i][0]?>)">Eliminar</a>
      </td>
      <?php 
      $num++; 
      } 
      ?>
  </table>
</body>
</html>