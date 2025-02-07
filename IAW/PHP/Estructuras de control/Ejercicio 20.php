<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 20</title>
</head>


<header>
        <h1>Ejercicio 20</h1>
</header>


<h1>Ingresa los numeros:</h1>
        <form action="" method="GET">
        <label for="num1">Primer número:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Segundo número:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<?php

    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;


    while ($num2 != 0) { 
        $temp = $num2; 
        $num2 = $num1 % $num2; 
        $num1 = $temp; 
    } 
    echo "El MCD es: $num1\n";
    ?>


    </body>
    </html>