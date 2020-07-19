<?php
	echo "Suma de dos numeros<br>";

$a=7;
$b=9;
$suma=$a+$b;
echo $suma;
?>

<?php
	echo "<br><br>Palabras Unidas<br>";

	$lin1="probando";
	$lin2="strig";
	$lin3="php";
	$string=$lin1."-".$lin2."-".$lin3;
	echo "$string";
?>

<?php
	echo "<br><br>Palabras Cortandas (3 letras antes y 6 despues)<br><br>";

	$oracion="strings Probado con php";
	$cortada=substr($oracion,4,-6);

echo "oracion completa es: $oracion<br>";
echo "la oracion cortada es: $cortada<br>";
?>

<?php
	echo "<br><br>Palabras Cortandas(ultimos 10 caracteres)<br><br>";

	$oracion="strings Probado con php";
	$cortada=substr($oracion,-10);

echo "oracion completa es: $oracion<br>";
echo "la oracion cortada es: $cortada<br>";
?>

<?php
	echo "<br><br>Palabras Cortandas(eliminar los 5 primeros y mostrar los 10 caracteres siguientes)<br><br>";

	$oracion="strings Probado con php, y terminada la tarea";
	$cortada=substr($oracion,5,-10);

echo "oracion completa es: $oracion<br>";
echo "la oracion cortada es: $cortada<br>";
?>