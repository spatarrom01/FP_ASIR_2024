<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>


<header>
        <h1>Ejercicio 3</h1>
</header>


<h1>De decimal a entero</h1>
<form action="" method="GET">
        <label for="n1">Número:</label>
        <input type="number" name="n1" id="n1" step="0.1" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $n1 = $_GET['n1'] ?? 0;
    $entero = round($n1);
    echo "El número es $entero";

?>

</body>
</html>