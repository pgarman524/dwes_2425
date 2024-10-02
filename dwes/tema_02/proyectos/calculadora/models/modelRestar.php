<?php

/**
 * Modelo: modelRestar.php
 * Descripción: resta los valores del formualario
 */

//Cargo los datos en variables
$valor1 = $_GET['num1'];
$valor2 = $_GET['num2'];


$operacion = "Resto";


//Realizo cálculos
$resultado = $valor1 - $valor2;