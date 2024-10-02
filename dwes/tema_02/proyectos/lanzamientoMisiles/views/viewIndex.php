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

        <h2>Formulario Valores Iniciales</h2>
        <br>
        <form method="GET">
            <h4>Velocidad inicial:</h4>
            <!-- VALOR 1 -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Velocidad Inicial</span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="velocidad">
            </div>
            <p>Velocidad en m/s</p>
            <h4>Ángulo de Lanzamiento:</h4>
            <!-- VALOR 2 -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Ángulode de Lanzamiento</span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="grados">
            </div>
            <p>Ángulo en Grados</p>

            <!-- Botones de acción -->
            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-warning" formaction="index.php">Abortar</button>
                <button type="submit" class="btn btn-danger" formaction="manhatan.php">Lanzar</button>
            </div>
        </form>




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