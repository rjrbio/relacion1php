<?php
require 'alfil.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos del Alfil - Ajedrez</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <main>
        <div class="container">
            <h1>🏰 Movimientos del Alfil en Ajedrez</h1>

            <div class="form-container">
                <form method="GET">
                    <label for="posicion">Posición del alfil:</label>
                    <input type="text" id="posicion" name="posicion"
                        value="<?= htmlspecialchars(strtoupper($posicionAlfil)) ?>" maxlength="2" placeholder="Ej: E4">
                    <button type="submit">Calcular movimientos</button>
                </form>
            </div>

            <?php if ($error): ?>
                <div class="error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <div class="info">
                <strong>Alfil en posición: <?= htmlspecialchars(strtoupper($posicionAlfil)) ?></strong><br>
                Movimientos posibles: <?= count($movimientos) ?>
            </div>

            <div class="tablero-container">
                <div class="tablero-wrapper">
                    <!-- Números de filas izquierda -->
                    <div class="numeros-izq">
                        <?php for ($i = 8; $i >= 1; $i--): ?>
                            <div class="numero"><?= $i ?></div>
                        <?php endfor; ?>
                    </div>

                    <!-- Números de filas derecha -->
                    <div class="numeros-der">
                        <?php for ($i = 8; $i >= 1; $i--): ?>
                            <div class="numero"><?= $i ?></div>
                        <?php endfor; ?>
                    </div>

                    <!-- Letras de columnas arriba -->
                    <div class="letras-arriba">
                        <?php for ($i = 0; $i < 8; $i++): ?>
                            <div class="letra"><?= chr(ord('A') + $i) ?></div>
                        <?php endfor; ?>
                    </div>

                    <!-- Letras de columnas abajo -->
                    <div class="letras-abajo">
                        <?php for ($i = 0; $i < 8; $i++): ?>
                            <div class="letra"><?= chr(ord('A') + $i) ?></div>
                        <?php endfor; ?>
                    </div>

                    <!-- Tablero -->
                    <table class="tablero">
                        <?php for ($fila = 0; $fila < 8; $fila++): ?>
                            <tr>
                                <?php for ($columna = 0; $columna < 8; $columna++): ?>
                                    <?php
                                    // Determinar el color base de la casilla (patrón de ajedrez)
                                    $esBlanca = ($fila + $columna) % 2 == 0;
                                    $claseColor = $esBlanca ? 'blanca' : 'negra';

                                    // Determinar si es posición del alfil o movimiento
                                    $claseEspecial = '';
                                    $contenido = '';

                                    if (esPosicionAlfil($fila, $columna, $indicesAlfil)) {
                                        $claseEspecial = 'alfil';
                                        $contenido = '♗'; // Símbolo del alfil
                                    } elseif (esMovimientoPosible($fila, $columna, $movimientos)) {
                                        $claseEspecial = 'movimiento';
                                    }
                                    ?>
                                    <td class="casilla <?= $claseColor ?> <?= $claseEspecial ?>">
                                        <?= $contenido ?>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </div>

            <!-- Leyenda -->
            <div class="leyenda">
                <div class="leyenda-item">
                    <div class="color-muestra color-alfil"></div>
                    <span>Posición del alfil</span>
                </div>
                <div class="leyenda-item">
                    <div class="color-muestra color-movimiento"></div>
                    <span>Movimientos posibles</span>
                </div>
                <div class="leyenda-item">
                    <div class="color-muestra color-normal-blanca"></div>
                    <span>Casilla clara</span>
                </div>
                <div class="leyenda-item">
                    <div class="color-muestra color-normal-negra"></div>
                    <span>Casilla oscura</span>
                </div>
            </div>
            <br><a href="../index.php">Pagina principal</a>
        </div>
    </main>

</body>

</html>