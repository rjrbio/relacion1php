<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Pirámide de Figuras</h1>
        <form action="piramide.php" method="post">
            <p>Genera una pirámide según la altura indicada y elige una figura.</p>
            <label for="altura">Altura: </label>
            <input type="number" name="altura" min="1" max="10" required autofocus>
            <br><label for="figura">Figura: </label>
            
            <select name="figura" id="figura">
                <option value="loro">Loro</option>
                <option value="elefante">Elefante</option>
                <option value="mono">Mono</option>
                <option value="koala">Koala</option>
                <option value="leon">León</option>
            </select>
            <input type="submit" value="Enviar" name="enviar">
        </form>


        <br><a href="../index.php">Pagina principal</a>
    </main>
</body>

</html>