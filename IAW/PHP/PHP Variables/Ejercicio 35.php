<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 35</title>
</head>


<header>
        <h1>Ejercicio 35</h1>
</header>


<body>
    <?php
        $nota1 = 8.5;
        $nota2 = 7.0;
        $nota3 = 9.0;

        $porcentaje1 = 0.20;
        $porcentaje2 = 0.50;
        $porcentaje3 = 0.30;

        $notaFinal = ($nota1 * $porcentaje1) + ($nota2 * $porcentaje2) + ($nota3 * $porcentaje3);

        echo "Nota del primer trimestre: $nota1 <br>";
        echo "Nota del segundo trimestre: $nota2 <br>";
        echo "Nota del tercer trmiestre: $nota3 <br><br>";
        echo "La nota final del alumno es $notaFinal";
    ?>
</body>