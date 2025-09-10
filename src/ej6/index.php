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
            <p>Introduce tu fecha de nacimiento: </p>
            <label for="dia">Día: </label>
            <input type="number" name="dia" id="dia" required min="1" max="31"><br>
            <label for="mes">Mes: </label>
            <input type="number" name="mes" id="mes" required min="1" max="12"><br>
            <br><input type="submit" value="Calcular" name="enviar">
        </form>

        <?php
        if (isset($_POST['dia']) && isset($_POST['mes'])) {
            $dia = (int) $_POST['dia'];
            $mes = (int) $_POST['mes'];

            $horoscopo = getHorosc($dia, $mes);

            if ($horoscopo) {
                echo "<p>Tu horóscopo es: $horoscopo.</p>";
            } else {
                echo "<p style='color:red;'>Por favor, introduce una fecha válida.</p>";
            }
        }
        function getHorosc($dia, $mes)
        {
            $signos = [
                ['Capricornio', [12, 22], [1, 19]],
                ['Acuario', [1, 20], [2, 18]],
                ['Piscis', [2, 19], [3, 20]],
                ['Aries', [3, 21], [4, 19]],
                ['Tauro', [4, 20], [5, 20]],
                ['Géminis', [5, 21], [6, 20]],
                ['Cáncer', [6, 21], [7, 22]],
                ['Leo', [7, 23], [8, 22]],
                ['Virgo', [8, 23], [9, 22]],
                ['Libra', [9, 23], [10, 22]],
                ['Escorpio', [10, 23], [11, 21]],
                ['Sagitario', [11, 22], [12, 21]],
            ];

            foreach ($signos as $signo) {
                [$nombre, $inicio, $fin] = $signo;
                if (
                    ($mes == $inicio[0] && $dia >= $inicio[1]) ||
                    ($mes == $fin[0] && $dia <= $fin[1])
                ) {
                    return $nombre;
                }
            }
            return false;
        }
        ?>
        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>

</html>