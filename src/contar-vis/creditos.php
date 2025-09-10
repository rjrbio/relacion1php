<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Esta aplicación ha sido realizada por tu madre.</p>

    <?php
    echo "<br>Número de visitas: ", $_SESSION["visitas"];
    echo "<br>Usuario logueado: ", $_SESSION["nombreUsuario"];
    ?>
    <br><br>
    <a href="./">Volver</a>
</body>

</html>