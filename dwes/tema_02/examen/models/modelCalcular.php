<?php

$frecuencia = $_GET['frecuencia'];
$rotacion = $_GET['rotacion'];
$kg = $_GET['kg'];

$vTangente = 2 * M_PI * $rotacion * $frecuencia;

$aCentripeta = ($vTangente * $vTangente) / $rotacion;

$fCentripeta = $kg * $aCentripeta;

$periodo = 1/ $frecuencia;

$vTangente = number_format($vTangente, 10, ',', '.');
$aCentripeta = number_format($aCentripeta, 10, ',', '.');
$fCentripeta = number_format($fCentripeta, 10, ',', '.');
$periodo = number_format($periodo, 10, ',', '.');


