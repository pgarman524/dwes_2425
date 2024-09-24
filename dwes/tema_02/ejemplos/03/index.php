<!-- Para declarar una variable en php se
usa el símbolo $variable -->

<?php
    $nombre = "Pablo García Mangana";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 03 - Tema 02</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <h3>
<!--Llamamos a la variable dentro del h3 -->
        <?php
        echo $nombre;
        ?>
    </h3>
</body>
</html>