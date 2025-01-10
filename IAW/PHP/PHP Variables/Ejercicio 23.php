<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23</title>
</head>


<header>
        <h1>Ejercicio 23</h1>
</header>


<body>
    <?php
        $ibuprofeno = 8.99;
        $descuento = ($ibuprofeno * 10) /100;
        $precio = $ibuprofeno - $descuento;
        echo "Precio del ibuprofeno: $ibuprofeno <br>";
        echo "Descuento: 10% <br><br>";
        echo "Precio final: $precio";
    ?>
</body>