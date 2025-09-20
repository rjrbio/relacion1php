<?php
// Función para convertir posición de ajedrez (ej: "e4") a coordenadas del array
function posicionAIndices($posicion)
{
    if (strlen($posicion) != 2)
        return false;

    $columna = ord(strtolower($posicion[0])) - ord('a'); // a=0, b=1, ..., h=7
    $fila = intval($posicion[1]) - 1; // 1=0, 2=1, ..., 8=7

    // Validar que esté dentro del tablero
    if ($columna < 0 || $columna > 7 || $fila < 0 || $fila > 7) {
        return false;
    }

    return [$fila, $columna];
}

// Función para calcular los movimientos posibles del alfil
function calcularMovimientosAlfil($posicion)
{
    $indices = posicionAIndices($posicion);
    if (!$indices)
        return [];

    $fila = $indices[0];
    $columna = $indices[1];
    $movimientos = [];

    // Direcciones diagonales: arriba-derecha, arriba-izquierda, abajo-derecha, abajo-izquierda
    $direcciones = [
        [-1, 1],  // arriba-derecha
        [-1, -1], // arriba-izquierda
        [1, 1],   // abajo-derecha
        [1, -1]   // abajo-izquierda
    ];

    foreach ($direcciones as $dir) {
        $nuevaFila = $fila + $dir[0];
        $nuevaColumna = $columna + $dir[1];

        // Continuar en esta dirección hasta salir del tablero
        while ($nuevaFila >= 0 && $nuevaFila < 8 && $nuevaColumna >= 0 && $nuevaColumna < 8) {
            $movimientos[] = [$nuevaFila, $nuevaColumna];
            $nuevaFila += $dir[0];
            $nuevaColumna += $dir[1];
        }
    }

    return $movimientos;
}

// Obtener la posición del alfil del formulario
$posicionAlfil = $_GET['posicion'] ?? 'e4';
$posicionAlfil = strtolower($posicionAlfil);

// Validar la posición
$indicesAlfil = posicionAIndices($posicionAlfil);
$error = "";
if (!$indicesAlfil) {
    $error = "Posición inválida. Use formato como 'e4', 'a1', etc.";
    $posicionAlfil = 'e4'; // posición por defecto
    $indicesAlfil = posicionAIndices($posicionAlfil);
}

// Calcular movimientos posibles
$movimientos = calcularMovimientosAlfil($posicionAlfil);

// Función para verificar si una casilla es un movimiento posible
function esMovimientoPosible($fila, $columna, $movimientos)
{
    foreach ($movimientos as $mov) {
        if ($mov[0] == $fila && $mov[1] == $columna) {
            return true;
        }
    }
    return false;
}

// Función para verificar si es la posición del alfil
function esPosicionAlfil($fila, $columna, $indicesAlfil)
{
    return $indicesAlfil && $indicesAlfil[0] == $fila && $indicesAlfil[1] == $columna;
}
?>
