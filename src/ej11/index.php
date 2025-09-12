<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Serie de Fibonacci</h1>
        <form method="post">
            <p>Calcula la serie de Fibonacci hasta el número indicado.</p>
            <label for="numero">Introduce el número: </label>
            <br><br><input type="number" name="numero" id="numero" required autofocus>
            <input type="submit" value="Enviar" name="enviar">
        </form>

        <?php
        if (isset($_POST["numero"])) {
            $numero = (int)$_POST["numero"];
            if ($numero < 0) {
                echo "<p>Por favor, introduce un número no negativo.</p>";
            } else {
                $fibonacci = [0, 1];
                while (true) {
                    $next = end($fibonacci) + prev($fibonacci);
                    if ($next > $numero) {
                        break;
                    }
                    $fibonacci[] = $next;
                }
                echo "<p>Serie de Fibonacci hasta el número $numero: <br>" . implode(", ", $fibonacci) . "</p>";
            }
        }

        ?>
        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>

</html>