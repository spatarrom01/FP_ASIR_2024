<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>
</head>


<header>
        <h1>Ejercicio 10</h1>
</header>


<body>
    <?php 
    $resultado = 1;
    for ($i = 1; $i <= 20; $i++) {
        $resultado *= $i;
        }
        echo "La multiplicación de los primeros 20 números naturales es: $resultado"; ?>
</body>