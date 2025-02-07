<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 22</title>
</head>


<header>
        <h1>Ejercicio 22</h1>
</header>


<h1>Ingresa el número:</h1>
        <form action="" method="GET">
        <label for="num">Edad:</label>
        <input type="number" name="num" id="num" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>

<br><br>
<?php

    $num = $_GET['num'] ?? 0;
    $i = 1;
    $prod = 1;

    while ($i <= $num) {
        $prod = $prod * $i;
        $i = $i + 1;
    }
    echo "El factorial de $num es $prod"

    ?>

    </body>
    </html>