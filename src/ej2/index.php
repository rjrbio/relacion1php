<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Calcular total factura</h1>
        <form method="get">
            <p>Calcular el total de factura a partir de la base imponible:</p>
            <label for="base">Base imponible (IVA del 21%):</label>
            <input type="number" name="base" id="base" min="1"><br>
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
        <br><a href="../index.php">Pagina principal</a>
    </main>
    <footer>
        <p>Jose Francisco Tinoco Fokkelman</p>
    </footer>
</body>

</html>