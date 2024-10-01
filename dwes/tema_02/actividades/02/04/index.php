<?php
/**
 * empty()
 */


// True
var_dump(empty($var));

echo "<br>";

$var1 = null;
var_dump(empty($var1));

echo "<br>";

$var3 = "hola";
unset($var3);
var_dump(empty($var3));

echo "<br>";
echo "<br>";

//False
$var4 = "null";
var_dump(empty($var4));

echo "<br>";

$var5 = 12;
var_dump(empty($var5));

echo "<br>";

$var6 = "Hola";
var_dump(empty($var6));
