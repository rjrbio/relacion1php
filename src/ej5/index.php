<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Calcular salario</h1>
        <form method="post">
            <p>Calcular salario semanal según horas trabajadas
                (las primeras 40 horas a 12€/h, a partir de ahí 16€/h).
            </p>
            <label for="horas">Introduce las horas trabajadas: </label></label>
            <input type="number" name="horas" id="horas" required><br>
            <br><input type="submit" value="Calcular" name="enviar">
        </form>

        <?php

        // Recoge datos del formulario
        if (isset($_POST['horas'])) {
            $horas = $_POST["horas"];
            if ($horas >= 1 && $horas <= 40) {
                $horas1 = $horas * 12;
                $resultado1 = $horas1;
                echo "<p>El salario semanal correspondiente es de: $resultado1 €.</p>";
            } elseif ($horas >= 41) {
                $horas2 = ($horas - 40) * 16;
                $resultado2 = 480 + $horas2;
                echo "<p>El salario semanal correspondiente es de: $resultado2 €.</p>";
            } else {
                echo "<p style='color:red;'>Por favor, introduce una cantidad de horas correcta.</p>";
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