<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14</title>
</head>


<header>
        <h1>Ejercicio 14</h1>
</header>


<body>
<?php

if (isset($_GET['altura']) && isset ($_GET['anchura'])) {

    $altura = $_GET['altura'];
    $anchura = $_GET['anchura'];
    $area = $altura * $anchura;


    echo "<h1>Área de un rectángulo</h1>";
    echo "La altura es $altura <br>";
    echo "La anchura es $anchura <br><br>";
    echo "El área del rectángulo es $area";
} else {

    ?>

        <h1>Área de un rectángulo</h1>
        <form action="" method="GET">
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura" required>

            <label for="anchura">Anchura:</label>
            <input type="number" name="anchura" id="anchura" required>
            <input type="submit" value="Calcular">
        </form>
    </body>
    </html>
    <?php
}
?>
</body>