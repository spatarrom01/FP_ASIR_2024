<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 28</title>
</head>


<header>
        <h1>Ejercicio 28</h1>
</header>


<h1>Tipos de áreas</h1>
        <form action="" method="GET">
        <label for="forma">Elige la forma geométrica:</label>
        <select name="forma" id="forma">
            <option value="Cuadrado">Cuadrado</option>
            <option value="Rectangulo">Rectángulo</option>
            <option value="Triangulo">Triángulo</option>
            <option value="Circulo">Círculo</option>
            <option value="Trapecio">Trapecio</option>
        </select>
        <br><br>

        <label for="num">Lado:</label>
        <input type="number" name="lado" id="lado"><br><br>

        <label for="num">Base:</label>
        <input type="number" name="base" id="base"><br><br>

        <label for="num">Altura:</label>
        <input type="number" name="altura" id="altura"><br><br>

        <label for="num">Radio:</label>
        <input type="number" name="radio" id="radio"><br><br>

        <label for="num">Base mayor:</label>
        <input type="number" name="bmayor" id="bmayor"><br><br>

        <label for="num">Base menor:</label>
        <input type="number" name="bmenor" id="bmenor"><br><br>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $lado = $_GET['lado'] ?? 0;
    $base = $_GET['base'] ?? 0;
    $altura = $_GET['altura'] ?? 0;
    $radio = $_GET['radio'] ?? 0;
    $bmayor = $_GET['bmayor'] ?? 0;
    $bmenor = $_GET['bmenor'] ?? 0;
    $forma = $_GET['forma'];


    switch ($forma) {
        case "Cuadrado": 
            $cuadrado = $lado * $lado;
            echo "El área es $cuadrado";
        break;

        case "Rectángulo": 
            $rectangulo = $base * $altura;
            echo "El área es $rectangulo";
        break;

        case "Triángulo": 
            $triangulo = ($base * $altura) /2;
            echo "El área es $triangulo";
        break;

        case "Círculo": 
            $circulo = 3.14 * pow($radio);
            echo "El área es $circulo";
        break;

        case "Trapecio": 
            $trapecio = ($bmayor + $bmenor * $altura) /2;
            echo "El área es $trapecio";
        break;

        default: echo "No es una figura geométrica válida";
        break;
    }

    ?>

    </body>
    </html>