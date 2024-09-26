<?php
$var = 3;
var_dump($var);
// Hay distintos transformadores en php
//Conversión mediante funciones

//Transformador a string
echo "<br>";
$var = strval($var);
var_dump($var);

//Transformador a int
echo "<br>";
$var2 = intval($var);
var_dump($var2);

//Transformador a float
echo "<br>";
$var3 = floatval($var);
var_dump($var3);

#Conversión (tipo dato) variable
echo "<br>";
echo "<br>";
$var4 = 7.89;
$var4 = (int) $var4;
var_dump($var4);

echo "<br>";
$var5 = 89;
$var5 = (float) $var5;
var_dump($var5);

echo "<br>";
$var6 = 89;
$var6 = (string) $var6;
var_dump($var6);

echo "<br>";
$var7 = 100;
$var7 = (array) $var7;
var_dump($var7);

#Conversión mediante settype
echo "<br>";
echo "<br>";
$var8 = 45;
settype($var8, "string");
var_dump($var8);
