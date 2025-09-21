<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Tramo horario</h1>
        <form method="post">
            <p>Lanzar mensaje según la hora indicada.</p>
            <label for="hora">Introduce la hora: </label></label>
            <input type="number" name="hora" id="hora" required><br>
            <br><input type="submit" value="Enviar" name="enviar">
        </form>

        <?php

     
        if (isset($_POST['hora'])) {
            $hora = $_POST["hora"];
            if ($hora >= 6 && $hora <= 12) {
                echo "<p>Buenos días</p>";
            } elseif ($hora >= 13 && $hora <= 20) {
                echo "<p>Buenas tardes</p>";
            } elseif (($hora >= 21 && $hora <= 24) || ($hora >= 1 && $hora <= 5)) {
                echo "<p>Buenas noches</p>";
            } else {
                echo "<p style='color:red;'>Por favor, introduce una hora correcta.</p>";
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