<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volumen</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Calcular volumen cono</h1>
        <form method="get">
            <p>Calcular el volumen de un cono según la fórmula: V = (1/3)πr2h</p>
            <label for="rad">Radio (cm):</label>
            <input type="number" name="rad" id="rad"><br>
            <label for="alt">Altura (cm):</label>
            <input type="number" name="alt" id="alt"><br>

            <br><input type="submit" value="Calcular" name="enviar">
        </form>

        <?php

        // Recoge datos del formulario
        if (isset($_GET['enviar'])) {
            // Verificamos si el usuario ha introducido euros
            if (!empty($_GET['base'])) {
                $base = floatval($_GET['base']);
                $resultado = $base * 1.21;
                echo "<p><strong>El total de la factura es </strong>" . number_format($resultado, 2, ',', '.') . " €.</p>";
            } else {
                echo "<p style='color:red;'>Por favor, introduce una cantidad.</p>";
            }
        }
        ?>
        <br><a href="../index.html">Pagina principal</a>
    </main>
</body>

</html>