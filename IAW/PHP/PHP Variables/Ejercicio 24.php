<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24</title>
</head>


<header>
        <h1>Ejercicio 24</h1>
</header>


<body>
    <?php
        $total = 18;
        $hombres = 17;
        $mujeres = 1;
        $porcentaje_hombres = (100 * $hombres) / $total;
        $porcentaje_mujeres = (100 * $mujeres) / $total;
        echo "Total de alumnos: $total. <br>";
        echo "Hombres: $hombres <br>";
        echo "Mujeres: $mujeres <br><br>";
        echo "Porcentaje de hombres: $porcentaje_hombres% <br>";
        echo "Porcentaje de mujeres: $porcentaje_mujeres%";
    ?>
</body>