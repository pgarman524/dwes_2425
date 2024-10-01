<?php
/**
 * issetl()
 */


// True
var_dump(isset($var));

echo "<br>";

$var1 = null;
var_dump(isset($var1));

echo "<br>";

$var3 = "hola";
unset($var3);
var_dump(isset($var3));

echo "<br>";
echo "<br>";

//False
$var4 = "null";
var_dump(isset($var4));

echo "<br>";

$var5 = 12;
var_dump(isset($var5));

echo "<br>";

$var6 = "";
var_dump(isset($var6));
