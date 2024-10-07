<?php

/**
 * Modelo: modelSumar.php
 * Descripción: suma losvalores del formualario
 */

 //Función para proceso de desarrollo, muestra el valor de un array
//print_r($_GET);

//Cargo los datos en variables
$valor1 = $_GET['num1'];
$valor2 = $_GET['num2'];

$operacion = "Suma";


//Realizo cálculos
$resultado = $valor1 + $valor2;

// echo $resultado;