<?php
$calificacion = 7.4;

switch ($calificacion) {
    case ($calificacion < 2):
        echo "Suspenso";
        break;
    case ($calificacion < 5):
        echo "Deficiente";
        break;
    case ($calificacion < 6):
        echo "Insuficiente";
        break;
    case  ($calificacion < 7):
        echo  "Suficiente";
        break;
    case ($calificacion < 8):
        echo "Bien";
        break;
    case ($calificacion < 9):
        echo "notable";
        break;
    case ($calificacion <= 10):
        echo "sobresaliente";
}
/**
 * ejemplo 3
 * Calificación de una nota de 0 a  10
 * Mostrará:  deficiente, insuficiente, suficiente, bien, notable o sobresaliente
 */

//$a = 3;
/*
if ($a >= 9  && $a == 10) {
    echo "sobresaliente";
} else if ($a >= 7 &&  $a <= 8) {
    echo "notable";
} else if ($a >= 6 && $a < 7) {
    echo "bien";
} else if ($a >= 5 && $a < 6) {
    echo "suficiente";
} else if ($a >= 3 && $a < 4) {
    echo "insuficiente";
} else if ($a <= 2 && $a == 0) {
    echo "deficiente";
} else if ($a < 0 && $a > 10) {
    echo "calificación no válida";
}
*/
/*
if ($a < 0 || $a > 10) {
    echo "Calificación no válida";
} elseif ($a < 2) {
    echo "Deficiente";
} elseif ($a < 5) {
    echo "Insuficiente";
} elseif ($a < 6) {
    echo  "Suficiente";
} elseif ($a < 7) {
    echo "Bien";
} elseif ($a < 9) {
    echo "notable";
} elseif ($a <= 10) {
    echo "sobresaliente";
}
*/
