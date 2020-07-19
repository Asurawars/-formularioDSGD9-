<?php
echo "Funciones con Strings<br>";


$var=1.23456789;
$ejemplo1=(string)round($var,7);
$ejemplo2=(string)round($var,9);
$ejemplo3=(string)round($var,4);
echo "<br>establecer limite en la cantidad de decimales con ROUND, redondea el ultimo numero<br>";
echo "a) $var= <b>$ejemplo1 (7)</b><br>";
echo "b) $var= <b>$ejemplo2 (1)</b><br>";
echo "c) $var= <b>$ejemplo3 (5)</b><br>";


$var1=8.9;
$var2=2.5;
$var3=-30.6;
$ejemplo1=floor($var1);
$ejemplo2=floor($var2);
$ejemplo3=floor($var3);
echo "<br>FLOOR, redondea los valores con decimales hacia el valor exacto menor<br>";
echo "a) $var1= <b>$ejemplo1</b><br>";
echo "b) $var2= <b>$ejemplo2</b><br>";
echo "c) $var3= <b>$ejemplo3</b><br>";


$var1=8.4;
$var2=-7.9;
$var3=2.1;
$ejemplo1=ceil($var1);
$ejemplo2=ceil($var2);
$ejemplo3=ceil($var3);
echo "<br>CEIL, redondea los valores con decimales hacia el valor exacto mayor<br>";
echo "a) $var1= <b>$ejemplo1</b><br>";
echo "b) $var2= <b>$ejemplo2</b><br>";
echo "c) $var3= <b>$ejemplo3</b><br>";


$var1=3;
$var2=17;
$var3=1000;
$ejercicio1=rand($var1,$var3);
$ejercicio2=rand($var1,-$var2);
$ejercicio3=rand(-$var2,$var2);
echo "<br>RAND, genera numeros aleatorios dentro de los valores establecidos<br>";
echo "a) valor entre $var1 y $var3= <b>$ejemplo1</b><br>";
echo "b) valor entre $var1 y -$var2= <b>$ejemplo2</b><br>";
echo "c) valor entre -$var2 y $var2= <b>$ejemplo3</b><br>";


$var1='dember gonzalez';
$var2='minuscula';
$var3='total';
$ejemplo1=strtoupper($var1);
$ejemplo2=strtoupper($var2);
$ejemplo3=strtoupper($var3);
echo "<br>STRTOUPPER,convierte letras a mayuscula<br>";
echo "a) originalmente es $var1 y cambia a <b>$ejemplo1</b><br>";
echo "b) originalmente es $var2 y cambia a <b>$ejemplo2</b><br>";
echo "c) originalmente es $var3 y cambia a <b>$ejemplo3</b><br>";


$var1='EJEMPLOS';
$var2='MINUSCULA';
$var3='PALABROTA';
$ejemplo1=strtolower($var1);
$ejemplo2=strtolower($var2);
$ejemplo3=strtolower($var3);
echo "<br>STRTOLOWER, nos convierte letras a minusculas por el contrario al anterior<br>";
echo "a) originalmente es $var1 y cambia a <b>$ejemplo1</b><br>";
echo "b) originalmente es $var2 y cambia a <b>$ejemplo2</b><br>";
echo "c) originalmente es $var3 y cambia a <b>$ejemplo3</b><br>";


$var1='dember gonzalez';
$var2='atencion';
$var3='prueba';
$ejercicio1=ucfirst($var1);
$ejercicio2=ucfirst($var2);
$ejercicio3=ucfirst($var3);
echo "<br>UCFIRST convertimos solo la primera letra de la cadena en mayuscula<br>";
echo "a) $var1 cambia a <b>$ejemplo1</b><br>";
echo "b) $var2 cambia a <b>$ejemplo2</b><br>";
echo "c) $var2 cambia a <b>$ejemplo3</b><br>";


$var1='dember gonzalez';
$var2='esta atento con esta prueba';
$var3='prueba exitosa';
$ejemplo1=ucwords($var1);
$ejemplo2=ucwords($var2);
$ejemplo3=ucwords($var3);
echo "<br>UCWORDS sirve para hacer mayusculas las iniciales de cada palabra en la cadena<br>";
echo "a) $var1 cambia a <b>$ejemplo1</b><br>";
echo "b) $var2 cambia a <b>$ejemplo2</b><br>";
echo "c) $var3 cambia a <b>$ejemplo3</b><br>";


$var1='dember gonzalez';
$var2='esta atento con esta prueba';
$var3='prueba exitosa';
$ejemplo1=strlen($var1);
$ejemplo2=strlen($var2);
$ejemplo3=strlen($var3);
echo "<br>prosiguiendo con STRLEN, sirve para contar la cantidad de caracteres en la cadena<br>";
echo "a) $var1 tiene: <b>$ejemplo1</b> caracteres en total<br>";
echo "b) $var2 tiene: <b>$ejemplo2</b> caracteres en total<br>";
echo "c) $var3 tiene: <b>$ejemplo3</b> caracteres en total<br>";


$var1='dember';
$var2='100';
$var3=array('a','b','c','d','e');
echo "<br>VAR_DUMP muestra datos de las variables como: arreglo, direccion, contenido, talla y longitud<br>";
var_dump($var1);
var_dump($var2);
var_dump($var3);


$var1=array(0,1,2,3,4,5,6,7,8,9);
$var2=array('oraciones de palabras','segunda','tercera');
$var3=array('a','b','c','d','e');
echo "<br>COUNT se usa para contar el total de elementos/objetos dentro de un array<br>";
echo "a) la cantidad de objetos en el arreglo 2 es: ".count($var1);
echo "<br>b) la cantidad de objetos en el arreglo 4 es: ".count($var2);
echo "<br>c) la cantidad de objetos en el arreglo 1 es: ".count($var3);


echo "<br><br>EXPLODE convierte la cadena en array usando un elemento para separar valores<br>";
$var1='jugos que eh tomado';
$var2="a,b,c,d,e";
$var3="guanabana";
$ejemplo1=explode(' ',$var1);
$ejemplo2=explode(',',$var2);
$ejemplo3=explode('a',$var3);
echo "a) convirtio la cadena <b>$var1</b> en arreglo eliminando los espacios, ejemplo arreglo 0 y 4: ".$ejemplo1[0].$ejer1[4];
echo "<br>b) ahora se separa <b>$var2</b> por las comas: ".$ejemplo2[0].$ejemplo2[1].$ejemplo2[2].$ejemplo2[3].$ejemplo2[4];
echo "<br>c) por ultimo <b>$var3</b> usando las vocales: ".$ejemplo3[0].$ejemplo3[1].$ejemplo3[2];


echo "<br><br>IMPLODE por el caso contrario convierte un array en cadena usando un elemento como separacion entre valores<br>";
$var1=array('jugos','por','tomar');
$var2=array('probando','otros','caracteres','para','el','arreglo');
$var3=array('4','5','6','7');
$ejemplo1=implode(" ",$var1);
$ejemplo2=implode("_",$var2);
$ejemplo3=implode(",",$var3);
echo "a) se convirtio a la cadena: ".$ejemplo1;
echo "<br>b) se convirtio a la cadena: ".$ejemplo2;
echo "<br>c) se convirtio a la cadena: ".$ejemplo3;

?>
