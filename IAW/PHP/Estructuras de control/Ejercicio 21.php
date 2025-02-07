<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 21</title>
</head>


<header>
        <h1>Ejercicio 21</h1>
</header>


<h1>Ingresa los numeros:</h1>
        <form action="" method="GET">
        <label for="a">Cociente A:</label>
        <input type="number" name="a" id="a" required><br><br>

        <label for="b">Cociente B:</label>
        <input type="number" name="b" id="b" required><br><br>

        <label for="c">Cociente C:</label>
        <input type="number" name="c" id="c" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<?php

    $a = $_GET['a'] ?? 0;
    $b = $_GET['b'] ?? 0;
    $c = $_GET['c'] ?? 0;

    
    $sol1 = (-$b+sqrt(pow($b)-4*$a*$c))%2*$a
    $sol2 = (-$b-sqrt(pow($b)-4*$a*$c))%2*$a


    if (){

    }
    ?>


    </body>
    </html>