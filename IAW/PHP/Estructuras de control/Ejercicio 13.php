<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>
</head>


<header>
        <h1>Ejercicio 13</h1>
</header>


<body>
<?php

if (isset($_GET['numero'])) {

    $euro = $_GET['numero'];
    $dolar = 1.03;
    $conversion = $euro * $dolar;


    echo "<h1>De euros a dólares</h1>";
    echo "Euros ingresados: $euro € <br><br>";
    echo "$euro euros son $conversion dólares";
} else {

    ?>

        <h1>Ingrese un número entero:</h1>
        <form action="" method="GET">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" required>
            <input type="submit" value="Calcular">
        </form>
    </body>
    </html>
    <?php
}
?>
</body>