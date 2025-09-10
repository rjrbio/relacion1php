<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopo</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Calcular Horóscopo</h1>
        <form method="post">
            <p>Introduce la hora y los minutos:</p>
            <label for="hora">Hora (0-23): </label>
            <input type="number" name="hora" id="hora" required min="0" max="23"><br>
            <label for="minuto">Minuto (0-59): </label>
            <input type="number" name="minuto" id="minuto" required min="0" max="59"><br>
            <br><input type="submit" value="Calcular segundos hasta medianoche">
        </form>

        <?php
        if (isset($_POST['hora']) && isset($_POST['minuto'])) {
            $hora = (int) $_POST['hora'];
            $minuto = (int) $_POST['minuto'];

            $segundos = ($hora * 3600) + ($minuto * 60);
            $segundosHastaMedianoche = 86400 - $segundos;

            echo "<p>Quedan $segundosHastaMedianoche segundos hasta medianoche.</p>";
        }
        ?>
        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>

</html>