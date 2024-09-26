<?php

/**
 * Conversiones
 */

$var = null;
var_dump($var);
echo ("<br>");

var_dump((int) $var);
echo ("<br>");
var_dump((bool) $var);
echo ("<br>");
var_dump((string) $var);
echo ("<br>");
var_dump((float) $var);
echo ("<br>");
echo ("<br>");

$var2 = 1;
var_dump($var2);
echo ("<br>");
var_dump((int) $var2);
echo ("<br>");
var_dump((bool) $var2);
echo ("<br>");
var_dump((string) $var2);
echo ("<br>");
var_dump((float) $var2);
echo ("<br>");
echo ("<br>");

//Solo  coge el número si el string lo tiene en el primer hueco
$var3 = "60 metros";
var_dump($var3);
echo ("<br>");
var_dump((int) $var3);
echo ("<br>");
var_dump((bool) $var3);
echo ("<br>");
var_dump((string) $var3);
echo ("<br>");
var_dump((float) $var3);
echo ("<br>");