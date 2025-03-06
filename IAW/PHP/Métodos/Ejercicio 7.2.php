<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7.2</title>
</head>


<header>
        <h1>Ejercicio 7.2</h1>
</header>


<h1>¿Es primo?</h1>
        <form action="" method="GET">
        <label for="num">Escriba un número:</label>
        <input type="decimal" name="num" id="num" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $num = $_GET['num'] ?? 0;

    if(esPrimo($num)){
        echo 'Es primo';
    }else{
        echo 'No es primo';
    }
    
    function esPrimo($num)
    {
        if(!is_numeric($num))
            return false;
        
        for ($i = 2; $i < $num; $i++) {
            
            if (($num % $i) == 0) {
                
                return false;
    
            }
    
        }
    
        // Es primo :)
        return true;
    }

?>

    </body>
    </html>