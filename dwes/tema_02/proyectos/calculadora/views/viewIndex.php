<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora Básica</title>

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
            <i class="bi bi-calculator-fill"></i>
            <span class="fs-6">proyecto 2.1 - Calculadora Básica</span>
        </header>

        <!-- Formulario -->
        <legend>Calculadora Básica</legend>

        <!-- Fin del Formulario -->
        <form method="GET">

            <!-- VALOR 1 -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Num1</span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="num1">
            </div>
            <!-- VALOR 2 -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Num2</span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="num2">
            </div>

            <!-- Botones de acción -->
            <div class="btn-group" role="group">
                <button type="reset" class="btn  btn-secondary">Borrar</button>
                <button type="submit" class="btn btn-warning" formaction="sumar.php">Sumar</button>
                <button type="submit" class="btn btn-success" formaction="restar.php">Restar</button>
                <button type="submit" class="btn btn-primary" formaction="multiplicar.php">Multiplicar</button>
                <button type="submit" class="btn btn-danger" formaction="dividir.php">Division</button>
                <button type="submit" class="btn btn-dark" formaction="potencia.php">Potencia</button>

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