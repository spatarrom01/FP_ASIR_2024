<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16</title>
</head>


<header>
        <h1>Ejercicio 16</h1>
</header>


<body>
<?php

if (isset($_GET['num1']) && isset ($_GET['num2'])) && isset ($_GET['num3']) {

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

if ($num1 > $num2) {
    echo "El mayor es $num1 <br>";
    echo "El menor es $num2 <br>";
} elseif ($num1 < $num2) {
    echo "El mayor es $num2 <br>";
    echo "El menor es $num1 <br>";
} else {
    echo "Ambos números son iguales";
} 
} 
else {
    

    ?>

        <h1>Mayor o menor</h1>
        <form action="" method="GET">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" required>
            <input type="submit" value="Calcular">
        </form>
    </body>
    </html>
    <?php
}
?>
</body>