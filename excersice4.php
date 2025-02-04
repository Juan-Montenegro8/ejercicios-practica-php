<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 1</title>
    </head>
    <body>
        <?php
        echo "4. algoritmo leer una cantidad variable de números e indicar finalmente: "
        . "promedio de todos los pares, promedio de los impares, el impar más grande, "
        . "el par más pequeño<br>";

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $cantidad = 0;
        $contadorPares = 0;
        $cantidadPares = 0;
        $contadorImpares = 0;
        $cantidadImpares = 0;
        $parMasPequeno = PHP_INT_MAX;  
        $imparMasGrande = PHP_INT_MIN;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cantidad = test_input($_POST["name"]);
        }
        ?>
       
        <h2>Promedio</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Escriba la cantidad de numeros: <input type="number" name="name">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
       
        <?php
        $numeroAleatorios = array();
        for ($i = 0; $i < $cantidad; $i++) {
            $numeroAleatorios []= rand(1, 30);
        }
       
        foreach ($numeroAleatorios as $index => $numero) {
            echo "Posicion $index - numero: $numero <br>";
            if ($numero%2==0) {
                $cantidadPares++;
                $contadorPares+=$numero;
                if ($numero < $parMasPequeno) {
                    $parMasPequeno = $numero;
                }
            } else {
                $cantidadImpares++;
                $contadorImpares+=$numero;
                if ($numero > $imparMasGrande) {
                    $imparMasGrande = $numero;
                }
            }
        }
       
        if ($cantidadPares > 0) {
            $promedioPares = $contadorPares / $cantidadPares;
        } else {
            $promedioPares = 0;
        }

        if ($cantidadImpares > 0) {
            $promedioImpares = $contadorImpares / $cantidadImpares;
        } else {
            $promedioImpares = 0;
        }
       
        echo "<br>La cantidad de pares fueros: $cantidadPares<br>";
        echo "La cantidad de impares fueros: $cantidadImpares<br>";
        echo "El promedio de pares es de: $contadorPares<br>";
        echo "El promedio de impares es de: $contadorImpares<br>";
        echo "El par más pequeño es: $parMasPequeno<br>";
        echo "El impar más grande es: $imparMasGrande<br>";
        ?>
    </body>
</html>