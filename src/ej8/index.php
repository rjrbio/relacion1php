<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Num Order</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Ordenar números</h1>
        <form method="post">
            <p>Calcula y ordena los tres números indicados de mayor a menor.</p>
            <label for="numero1">Primer número: </label></label>
            <input type="number" name="numero1" id="numero1" required><br>
            <label for="numero2">Segundo número: </label></label>
            <input type="number" name="numero2" id="numero2" required><br>
            <label for="numero3">Tercer número: </label></label>
            <input type="number" name="numero3" id="numero3" required><br>
            <br><input type="submit" value="Calcular" name="enviar">
        </form>

        <?php
        if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"])) {
            $numeros = array($_POST["numero1"], $_POST["numero2"], $_POST["numero3"]);
            rsort($numeros);
            echo "El orden de mayor a menor es: " . implode(", ", $numeros);
        }
        ?>
        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>

</html>