<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 27</title>
</head>


<header>
        <h1>Ejercicio 27</h1>
</header>


<h1>Tipos de áreas</h1>
        <form action="" method="GET">
        <label for="forma">Elige la operación:</label>
        <select name="forma" id="forma">
            <option value="Cuadrado">Cuadrado</option>
            <option value="Rectangulo">Rectángulo</option>
            <option value="Triangulo">Triángulo</option>
            <option value="Circulo">Círculo</option>
            <option value="Trapecio">Trapecio</option>
        </select>

        <label for="num">Número 1:</label>
        <input type="number" name="n1" id="n1" required><br><br>

        <label for="num">Número 2:</label>
        <input type="number" name="n2" id="n2" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
    $op = $_GET['op'];

    $cuadrado = $n1 + $n2;
    $rectangulo = $n1 - $n2;
    $triangulo = $n1 * $n2;
    $circulo = $n1 / $n2;
    $trapecio = 


    switch ($op) {
        case "Sumar": echo "El resultado es $suma";
        break;

        case "Restar": echo "El resultado es $resta";
        break;

        case "Multiplicar": echo "El resultado es $mult";
        break;

        default: echo "El resultado es $div";
        break;
    }

    ?>

    </body>
    </html>