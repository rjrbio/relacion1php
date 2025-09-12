<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla multi</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Tabla de multiplicar</h1>
        <form method="post">
            <p>Calcula la tabla de multiplicar del número indicado.</p>
            <label for="numero">Número: </label>
            <input type="number" name="numero" id="numero" required><br>
            <br><input type="submit" value="Calcular" name="enviar">
        </form>

        <?php
        if (isset($_POST["numero"])) {
            $numero = $_POST["numero"];
            echo "<h2>Tabla de multiplicar del $numero</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>Operación</th>
                        <th>Resultado</th>
                    </tr>";
            for ($i = 0; $i <= 10; $i++) {
                echo "<tr><td>$numero x $i</td><td>" . ($numero * $i) . "</td></tr>";
            }
            echo "</table>";
        }
        ?>
        <br><a href="../index.php">Pagina principal</a>
</body>

</html>