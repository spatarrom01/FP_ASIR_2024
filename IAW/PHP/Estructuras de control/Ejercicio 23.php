<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23</title>
</head>


<header>
        <h1>Ejercicio 23</h1>
</header>


<h1>Ingresa los grados Fahrenheit:</h1>
        <form action="" method="GET">
        <label for="grados">Grados:</label>
        <input type="number" name="grados" id="grados" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $grados = $_GET['grados'] ?? 0;

    if ($grados < 999) {
        $cel = 5/9*($grados-32);
        echo "$grados son $cel grados Celsius.";
    } else {
        echo "La temperatura excede el límite.";
    }

    ?>

    </body>
    </html>