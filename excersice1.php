<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 1</title>
    </head>
    <body>
        <?php
        echo "1. leer un determinar si es par o impar, si es positivo o negativo<br>";

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $execirse = '';
        $Numero = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Numero = test_input($_POST["number1"]);
        }
        ?>
       
        <h2>Par o impar</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Escriba un numero: <input type="number" name="number1">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
       
        <?php
        if($Numero%2==0){
            echo "El numero es par";
        }else{
            echo "el numero es impar";
        }        
        ?>
    </body>
</html>