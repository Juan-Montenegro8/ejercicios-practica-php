<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 6</title>
    </head>
    <body>

        <?php
       
       
        $numeros = array();

        for ($i = 0; $i < 20; $i++) {
            do {
                $aleatorio = rand(1, 50);  
            } while (in_array($aleatorio, $numeros));  

            $numeros[] = $aleatorio;  
        }

        echo "Vector de 20 elementos generados (sin repeticiones):<br>";
        foreach ($numeros as $index => $numero) {
            echo "Posición $index: $numero <br>";
        }

        $suma = array_sum($numeros);  
        $promedio = $suma / count($numeros);  

        echo "<br>El promedio de los valores es: $promedio<br>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valorBusqueda = $_POST["valorBusqueda"];

            if (in_array($valorBusqueda, $numeros)) {
                $posicion = array_search($valorBusqueda, $numeros);  // Encontrar la posición del valor
                echo "El valor $valorBusqueda se encuentra en la posición $posicion.<br>";
            } else {
                echo "El valor $valorBusqueda no se encuentra en el vector.<br>";
            }
        }
        ?>

        <h2>Buscar un valor en el vector:</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Escribe un número para buscar: <input type="number" name="valorBusqueda" required>
            <br><br>
            <input type="submit" value="Buscar">
        </form>

    </body>
</html>
