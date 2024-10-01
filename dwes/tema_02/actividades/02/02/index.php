<?php

/**
 * Ejercicio 2. is_null().
 */

// True
var_dump(is_null($var));

echo "<br>";

$var1 = null;
var_dump(is_null($var1));

echo "<br>";

$var3 = "hola";
unset($var3);
var_dump(is_null($var3));

echo "<br>";
echo "<br>";

//False
$var4 = "null";
var_dump(is_null($var4));

echo "<br>";

$var5 = 12;
var_dump(is_null($var5));

echo "<br>";

$var6 = "";
var_dump(is_null($var6));
