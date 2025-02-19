<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>


<header>
        <h1>Ejercicio 4</h1>
</header>


<h1>Raíz cuadrada de un número</h1>
<form action="" method="GET">
        <label for="n1">Número:</label>
        <input type="number" name="n1" id="n1" step="0.1" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $n1 = $_GET['n1'] ?? 0;
    $raiz = bcsqrt($n1);
    echo "La raíz cuadrada de $n1 es $raiz";

?>

</body>
</html>