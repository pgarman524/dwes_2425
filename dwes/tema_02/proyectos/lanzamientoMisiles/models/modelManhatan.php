<?php

/**
 * Modelo: modelManhatan.php
 * Descripción: Calcula las fórmulas
 */

//Cargo los datos en variables
$valor1 = $_GET['velocidad'];
$valor2 = $_GET['grados'];
// Transformamos la $g en una constante G
//$g = 9.8;
define("G", 9.8);

$aRadianes = $valor2 * (M_PI / 180);

$velHorizontal = $valor1 * cos($aRadianes);
$velVertical = $valor1 * sin($aRadianes);


$alcanceMax = (($valor1 ** 2) * sin(2 * $aRadianes)) / G;
$altMax = ($velVertical ** 2) / (2 * G);
$tiempoVuelo = (2 * $velVertical) / G;


//Formatos de números. ($la variable a cambiar, num de decimales, cambio de signo, signo que quieres que sea)
$aRadianes = number_format($aRadianes, 5, ',', '.');
$velHorizontal = number_format($velHorizontal, 2, ',', '.');
$velVertical = number_format($velVertical, 2, ',', '.');
$alcanceMax = number_format($alcanceMax, 2, ',', '.');
$tiempoVuelo = number_format($tiempoVuelo, 2, ',', '.');
$altMax = number_format($altMax, 2, ',','.');