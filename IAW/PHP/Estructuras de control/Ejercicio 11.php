<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11</title>
</head>


<header>
        <h1>Ejercicio 11</h1>
</header>


<body>
    <?php 
    $resultado = 1;
    for ($i = 1; $i <= 100; $i++) {
        $resultado += $i * $i;
        }
        echo "La suma de los cuadrados de los primeros 100 números naturales es: $resultado"; ?>
</body>