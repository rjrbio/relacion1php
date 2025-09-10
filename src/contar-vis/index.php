<?php
session_start();

if (isset($_SESSION["visitas"])) {
    $_SESSION["visitas"] ++;
} else {
    $_SESSION["visitas"] = 1;
}

$_SESSION["nombreUsuario"] = "Pepito frito";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
</head>

<body>
    <h1>Contador de Visitas</h1>

    <h1><?= $_SESSION["visitas"] ?></h1>

    <a href="creditos.php">Créditos</a>
    <a href="reset.php"><button>Resetear visitas</button></a>

</body>

</html>