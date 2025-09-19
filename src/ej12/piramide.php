<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <main>
        <h1>Pirámide de Figuras</h1>

        <?php
        if (isset($_POST["altura"]) && isset($_POST["figura"])) {
            $altura = intval($_POST["altura"]);
            $figura = $_POST["figura"];

            echo "<div class='piramide'>";

            for ($i = 1; $i <= $altura; $i++) {
                echo "<div class='fila'>";
                // 2*i-1 imágenes por fila
                for ($j = 1; $j <= (2 * $i - 1); $j++) {
                    echo "<img src='media/$figura.png' class='figura'>";
                }
                echo "</div>";
            }

            echo "</div>";
        }
        ?>

        <br><a href="reset.php">Volver al formulario</a>
        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>
</html>
