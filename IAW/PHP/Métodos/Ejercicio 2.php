<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>


<header>
        <h1>Ejercicio 2</h1>
</header>


<h1>De decimal a entero</h1>
<form action="" method="GET">
        <label for="n1">Número 1:</label>
        <input type="number" name="n1" id="n1" required><br><br>

        <label for="n1">Número 2:</label>
        <input type="number" name="n2" id="n2" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
    $random = rand($n1,$n2);
    echo "El número es $random";

?>

</body>
</html>