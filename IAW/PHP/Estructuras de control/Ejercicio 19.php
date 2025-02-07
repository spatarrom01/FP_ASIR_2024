<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 19</title>
</head>


<header>
        <h1>Ejercicio 19</h1>
</header>


<h1>Ingresa los numeros:</h1>
        <form action="" method="GET">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<?php

    $edad = $_GET['edad'] ?? 0;


if ($edad < 14) {
    echo "Infancia";
 } elseif ($edad <= 26) {
    echo "Juventud";
 } elseif ($edad <= 59) {
    echo "Adultez";
 } else {
    echo "Persona mayor";
 }

    ?>


    </body>
    </html>