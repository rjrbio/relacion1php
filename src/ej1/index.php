<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Conversor € a Pesetas</h1>
        <form method="get">
            <p>Convierte la cantidad de Euros que elijas a Pesetas (y viceversa):</p>
            <label for="euro">Euros:</label>
            <input type="number" name="euro" id="euro" min="1"><br>
            <label for="peseta">Pesetas:</label>
            <input type="number" name="peseta" id="peseta" min="1"><br>

            <br><input type="submit" value="Convertir" name="enviar">
        </form>

        <?php

 
        if (isset($_GET['enviar'])) {
   
            if (!empty($_GET['euro'])) {
                $euros = floatval($_GET['euro']);
                $pesetas = $euros * 166.386;
                echo "<p><strong>$euros €</strong> equivalen a <strong>" . number_format($pesetas, 2, ',', '.') . " pesetas</strong>.</p>";
            }
   
            elseif (!empty($_GET['peseta'])) {
                $pesetas = floatval($_GET['peseta']);
                $euros = $pesetas / 166.386;
                echo "<p><strong>$pesetas pesetas</strong> equivalen a <strong>" . number_format($euros, 2, ',', '.') . " €</strong>.</p>";
            } else {
                echo "<p style='color:red;'>Por favor, introduce una cantidad.</p>";
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