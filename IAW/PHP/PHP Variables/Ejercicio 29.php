<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 29</title>
</head>


<header>
        <h1>Ejercicio 29</h1>
</header>


<body>
    <?php
        $compra = 75;
        $descuento = $compra * 15 / 100;
        $final =  $compra - $descuento;
 
        echo "Compra: $compra €<br>";
        echo "Descuento: 15% ($descuento €) <br>";
        echo "Cantidad final: $final €";
    ?>
</body>