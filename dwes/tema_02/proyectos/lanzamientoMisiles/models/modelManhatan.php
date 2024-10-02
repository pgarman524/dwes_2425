<?php

/**
 * Modelo: modelManhatan.php
 * Descripción: Calcula las fórmulas
 */

//Cargo los datos en variables
$valor1 = $_GET['velocidad'];
$valor2 = $_GET['grados'];
$g = 9.8;

$aRadianes = $valor2 * (M_PI / 180);

$velHorizontal = $valor1 * cos($aRadianes); 
$velVertical = $valor1 * sin($aRadianes); 


$alcanceMax = (($valor1 ** 2) * sin(2 * $aRadianes)) / $g;
$altMax = ($velVertical ** 2) / (2 * $g);
$tiempoVuelo = (2 * $velVertical) / $g;


