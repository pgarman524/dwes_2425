<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lanzamiento de Misiles</title>

    <!-- css bootstrap 533 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrapicons 1.11.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <!-- icono -->
            <i class="bi bi-airplane-engines"></i>
            <span class="fs-6">proyecto 2.1 - Lanzamiento Misiles</span>
        </header>

        <h1>Resultado</h1>
        <br>
        <!-- Columnas -->

        <!-- Valores iniciales columnas -->
        <table class="table">
            <!-- En thead colocamos los índices de la tabla -->
            <thead>
                <tr>
                    <th>
                        Valores iniciales:
                    </th>
                </tr>
            <tbody>

                <tr>
                    <td>Valor Inicial:</td>
                    <td><?= $valor1?> m/s</td>
                </tr>


                <tr>
                    <td>Ángulo de Inclinación:</td>
                    <td><?= $valor2 ?>°</td>
                </tr>

                <tr>

                    <th>
                        Resultados:
                    </th>

                </tr>

                <tr>
                    <td>Ángulo en Radianes:</td>
                    <td><?= $aRadianes?>°</td>
                </tr>

                <tr>
                    <td>Velocidad Inicial X:</td>
                    <td><?= $velHorizontal?> m/s</td>
                </tr>

                <tr>
                    <td>Velocidad Inicial Y:</td>
                    <td><?= $velVertical?> m/s</td>
                </tr>

                <tr>
                    <td>Alcance Máximo del Proyectil:</td>
                    <td><?= $alcanceMax?> m</td>
                </tr>
                <tr>
                    <td>Tiempo de Vuelo del Proyectil:</td>
                    <td><?= $tiempoVuelo?> s</td>
                </tr>
                </tr>
                <tr>
                    <td>Altura Máxima del Proyectil:</td>
                    <td><?= $altMax?> m</td>
                </tr>
            </tbody>
        </table>
        <form action="index.php" method="post">
            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-warning" formaction="index.php">Atrás</button>
            </div>

        </form>
    </div>


    <!-- Pie del documento -->
    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">
                ©2024 Pablo García Mangana - DWES - 2º DAW - Curso 24/25
            </span>
        </div>
    </footer>




    </div>
    <!-- javascript bootstrap 533-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>