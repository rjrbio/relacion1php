<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Calculo Factorial</h1>
        <form method="post">
            <p>Introduzca un número entero positivo: </p>
            <label for="num">Numero: </label>
            <input type="number" name="numero" min="1" required autofocus><br><br>
            <input type="submit" value="Calcular" name="calcular">
            <?php

            if (isset($_POST['numero'])) {
                $numero = $_POST['numero'];
                $factorial = 1;

                for ($i = 1; $i <= $numero; $i++) {
                    $factorial *= $i;
                }
                echo "<br>El factorial de <strong>$numero</strong> es <strong>$factorial</strong>";
            }

            ?>
        </form>
        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>

</html>