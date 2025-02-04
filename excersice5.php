<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>

        <?php
        echo "5. vector de 20 elementos numericos (los ingresa el usuario), "
        . "calcular el promedio, cuando termine se halla el valor mayor y su posicion <br>";
       
        $numeros = array();
        $promedio = 0;
        $valorMayor = PHP_INT_MIN;  
        $posicionMayor = -1;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 0; $i < 20; $i++) {
                $numeros[] = $_POST["numero" . $i];
            }

            $suma = array_sum($numeros);
            $promedio = $suma / count($numeros);

            foreach ($numeros as $index => $numero) {
                if ($numero > $valorMayor) {
                    $valorMayor = $numero;
                    $posicionMayor = $index;
                }
            }
        }

        ?>

        <h2>Ingrese 20 números</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <?php
            for ($i = 0; $i < 20; $i++) {
                echo "Número " . ($i + 1) . ": <input type='number' name='numero$i' required><br><br>";
            }
            ?>
            <input type="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h3>Los números ingresados son:</h3>";
            foreach ($numeros as $index => $numero) {
                echo "Posición $index: $numero <br>";
            }

            echo "<br>El promedio de los números es: $promedio<br>";

            echo "El valor mayor es: $valorMayor<br>";
            echo "La posición del valor mayor es: $posicionMayor<br>";
        }
        ?>

    </body>
</html>