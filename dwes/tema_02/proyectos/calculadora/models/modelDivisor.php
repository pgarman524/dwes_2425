<?php

/**
 * Modelo: modelDivisor.php
 * Descripción: resta los valores del formulario
 */

//Cargo los datos en variables
$valor1 = $_GET['num1'];
$valor2 = $_GET['num2'];


$operacion = "División";


//Realizo cálculos
$resultado = $valor1 / $valor2;