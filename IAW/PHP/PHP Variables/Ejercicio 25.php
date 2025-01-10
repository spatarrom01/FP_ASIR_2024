<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 25</title>
</head>


<header>
        <h1>Ejercicio 25</h1>
</header>


<body>
    <?php
        $cantidad = 4500000;
        $interes = (4500000 * 20) / 100;
        $final = $cantidad + $interes;
        echo "Cantidad sin aplicar interés: $cantidad <br>";
        echo "Interés: $interes (20%) <br><br>";
        echo "Cantidad con interés aplicado: $final";
    ?>
</body>