<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraja</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Cartas al Azar bajara Española</h1>
        <?php
        // Definimos la baraja española (solo los nombres y palos)
        $palos = ["Oros", "Copas", "Espadas", "Bastos"];
        $figuras = [1, 2, 3, 4, 5, 6, 7, "Sota", "Caballo", "Rey"];

        // Puntos según brisca
        $puntos = [
            1 => 11,  // As
            3 => 10,
            7 => 0,
            2 => 0,
            4 => 0,
            5 => 0,
            6 => 0,
            "Sota" => 2,
            "Caballo" => 3,
            "Rey" => 4
        ];

        // Creamos la baraja completa
        $baraja = [];
        foreach ($palos as $palo) {
            foreach ($figuras as $figura) {
                $baraja[] = ["figura" => $figura, "palo" => $palo];
            }
        }

        // Función para seleccionar n cartas aleatorias sin repetir
        function sacarCartas(&$baraja, $cantidad)
        {
            $seleccionadas = [];
            for ($i = 0; $i < $cantidad; $i++) {
                $indice = array_rand($baraja);   // selecciona índice aleatorio
                $seleccionadas[] = $baraja[$indice];
                array_splice($baraja, $indice, 1); // elimina carta para no repetir
            }
            return $seleccionadas;
        }

        $cartas = sacarCartas($baraja, 10);

        // Calculamos los puntos
        $total = 0;
        foreach ($cartas as $carta) {
            $total += $puntos[$carta["figura"]];
        }
        ?>
        <ul>
            <?php foreach ($cartas as $carta): ?>
                <li><?= $carta["figura"] ?> de <?= $carta["palo"] ?> → <?= $puntos[$carta["figura"]] ?> puntos</li>
            <?php endforeach; ?>
        </ul>

        <p><strong>Total de puntos:</strong> <?= $total ?></p>

        <form method="post">
            <button type="submit">Sacar otras 10 cartas</button>
        </form>

        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>

</html>