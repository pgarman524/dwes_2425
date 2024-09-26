<?php

    //variables escalares son las que solo pueden recibir un solo valor
    //Variables de tipo compuestas pueden contener más de un solo valor.
    //Variables especiales
    //Variables pseudotipos.

/***
 * tipos de variables
 *
 */

    $test = false;
    echo  "\$test: ";
    var_dump($test);

    echo"<br>";

    $distancia = 1.70e4;
    echo "\$distancia: ";
    var_dump($distancia);

    echo"<br>";

    #tipo string ''
    $mensaje = 'La distancia recorrida fue de $distancia km';
    echo "\$mensaje: ";
    var_dump($mensaje);

