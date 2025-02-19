<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>


<header>
        <h1>Ejercicio 5</h1>
</header>


<h1>Variable vacia</h1>
<form action="" method="GET">
        <label for="var">Rellena el campo:</label>
        <input type="text" name="var" id="var"><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $var = $_GET['var'];

    if (empty($var)) {
        echo "La variable está vacia.";
    } else {
        echo "La variable es $var.";
    }

?>

</body>
</html>