<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2.2</title>
</head>


<header>
        <h1>Ejercicio 2.2</h1>
</header>


<h1>Suma de dos números</h1>
<form action="" method="GET">

        <label for="num">Radio:</label>
        <input type="decimal" name="radio" id="radio"><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $radio = $_GET['radio'] ?? 0;

    function area($radio) {
        return 3.14*pow($radio, 2);
    }

    echo "El resultado es ". area($radio);


?>

</body>
</html>