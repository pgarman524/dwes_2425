<?php

/**
 * Modelo: modelManhatan.php
 * Descripción: Calcula las fórmulas
 */

//Cargo los datos en variables
$valor1 = $_GET['num1'];
$valor2 = $_GET['num2'];
$g = 9.8;

$velHorizontal = $valor1 * cos($valor2);
$velVertical = $valor1 * sin($valor2);

$aRadianes = $valor2 * (M_PI / 180);
$alcanceMax = (($velHorizontal * $velHorizontal) * sin(2 * $valor2))  / $g;
$altMax = ($velHorizontal * sin($aRadianes))^2 / (2 * $g);
$tiempoVuelo = (2 * $velVertical) / $g;


