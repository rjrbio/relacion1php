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
        <form method="post">
            <p>Calcular el volumen de un cono según la fórmula: V = (1/3)πr2h</p>
            <label for="rad">Radio (cm):</label>
            <input type="number" name="rad" id="rad" required><br>
            <label for="alt">Altura (cm):</label>
            <input type="number" name="alt" id="alt" required><br>

            <br><input type="submit" value="Calcular" name="enviar">
        </form>

        <?php

        // Recoge datos del formulario
        if (isset($_POST['alt']) && isset($_POST["rad"])) {
            $altura = $_POST["alt"];
            $radio = $_POST["rad"];
            if ($volumen = (1 / 3) * pi() * $radio ** 2 * $altura) {
                echo "<p>El volumen del cono es: $volumen m2.</p>";
            } else {
                echo "<p style='color:red;'>Por favor, introduce cantidades correctas.</p>";
            }
        }
        ?>
        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>

</html>