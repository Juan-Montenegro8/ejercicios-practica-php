<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    echo "<h2>Ejercicio 3</h2>";
    echo "<p>Leer edades y peso de 50 personas e indicar la mayor y la menor en edad, 
    edad promedio y cuántos tienen entre 21 y 31 años.</p><hr>";

    $personas = [];
    $sumaEdades = 0;
    $contadorEdadEspecifico = 0;
    
    for ($i = 0; $i < 50; $i++) {
        $edad = rand(15, 100);
        $peso = rand(55, 90);
        $personas[] = ['edad' => $edad, 'peso' => $peso];
        
        $sumaEdades += $edad;
        if ($edad >= 21 && $edad <= 31) {
            $contadorEdadEspecifico++;
        }
    }
    
    // Obtener la persona con mayor y menor edad
    $mayorEdad = max(array_column($personas, 'edad'));
    $menorEdad = min(array_column($personas, 'edad'));
    
    $personaMayorEdad = current(array_filter($personas, fn($p) => $p['edad'] == $mayorEdad));
    $personaMenorEdad = current(array_filter($personas, fn($p) => $p['edad'] == $menorEdad));
    
    // Calcular edad promedio
    $edadPromedio = $sumaEdades / count($personas);
    
    // Mostrar resultados
    echo "<h3>Resultados:</h3>";
    echo "<p>La persona con mayor edad tiene <strong>{$personaMayorEdad['edad']} años</strong> y pesa <strong>{$personaMayorEdad['peso']} kg</strong>.</p>";
    echo "<p>La persona con menor edad tiene <strong>{$personaMenorEdad['edad']} años</strong> y pesa <strong>{$personaMenorEdad['peso']} kg</strong>.</p>";
    echo "<p>La edad promedio es de <strong>" . number_format($edadPromedio, 2) . " años</strong>.</p>";
    echo "<p>El número de personas entre 21 y 31 años es: <strong>$contadorEdadEspecifico</strong>.</p>";
    ?>
</body>
</html>
