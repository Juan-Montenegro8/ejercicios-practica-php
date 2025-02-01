<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 3</title>
    </head>
    <body>
        <?php
        echo "3. leer edades y peso de 50 personas e indicar el mayor y el menor en edad "
        . "edad promedio y mayores mayores de 21 y menores de 31<br><br><br>";
        $personas = array();
        $contadorEdadGeneral = 0;
        $contadorEdadEspecifico = 0;

        for ($i = 0; $i < 50; $i++) {
            $edadAleatorios = rand(15, 100);
            $pesoAleatorio = rand(55, 90 );
            $personas[] = array('edad' => $edadAleatorios, 'peso' => $pesoAleatorio);
        }
       
        echo "Edades y pesos generados:<br>";
        foreach ($personas as $index => $persona) {
            echo "Persona $index - Edad: {$persona['edad']}, Peso: {$persona['peso']} kg<br>";
            if(21<=$persona['edad'] and $persona['edad']<=31){
                $contadorEdadEspecifico++;
            }
            $contadorEdadGeneral += $persona['edad'];
        }
        $contadorEdadGeneral /=50;

        $mayorEdad = max(array_column($personas, 'edad'));
        $personaMayorEdad = array_filter($personas, function($persona) use ($mayorEdad) {
            return $persona['edad'] == $mayorEdad;
        });
        $personaMayorEdad = array_values($personaMayorEdad)[0];

        $menorPeso = min(array_column($personas, 'edad'));
        $personaMenorEdad = array_filter($personas, function($persona) use ($menorPeso) {
            return $persona['edad'] == $menorPeso;
        });
        $personaMenorEdad = array_values($personaMenorEdad)[0];

        echo "<br>La persona con mayor edad tiene {$personaMayorEdad['edad']} años y pesa {$personaMayorEdad['peso']} kg.<br>";
        echo "La persona con menor edad tiene {$personaMenorEdad['edad']} años y pesa {$personaMenorEdad['peso']} kg.<br>";
        echo "La edad promedio fue de: $contadorEdadGeneral<br>";
        echo "El numero de personas que estan entre 21 años y 31 años son: $contadorEdadEspecifico";

        ?>
    </body>
</html>
