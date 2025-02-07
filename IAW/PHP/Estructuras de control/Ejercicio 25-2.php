<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 25.2</title>
</head>


<header>
        <h1>Ejercicio 25.2</h1>
</header>


<h1>Ingresa una letra:</h1>
        <form action="" method="GET">
        <label for="num">Letra:</label>
        <input type="text" name="letra" id="letra" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $letra = $_GET['letra'] ?? 0;

    switch ($letra) {
        case "I": echo "Corresponde a 1";
        break;

        case "V": echo "Corresponde a 5";
        break;

        case "X": echo "Corresponde a 10";
        break;

        case "L": echo "Corresponde a 50";
        break;

        case "C": echo "Corresponde a 100";
        break;

        case "D": echo "Corresponde a 500";
        break;
        
        case "M": echo "Corresponde a 1000";
        break;

        default: echo "No has introducido una letra adecuada.";
        break;
    }


    ?>

    </body>
    </html>