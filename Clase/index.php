<?php
// Cadena Cortada de 5 y 10.
$cadena= "Hola Buenos Dias, Como has estado?";
$cortar=substr($cadena, 5,10);

echo "palabra original: $cadena </b>";
echo "palabra cortada: $cortar </b>";

//cadena Cortada de -10.
$cadena= "Hola Buenos Dias, Como Estas?";
$cortar=substr($cadena, -10);

echo "palabra original: $cadena </b>";
echo "palabra cortada: $cortar </b>";

//La Suma De Dos Valores.
$num1= 7;
$num2= 9;
$numero = $num1 + $num2;

echo "La suma de 7 y 9 es: $numero </br>";
?>