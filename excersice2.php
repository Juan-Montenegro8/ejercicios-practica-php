<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 2</title>
    </head>
    <body>
        <?php
        echo "2. leer 3 números determinar cuál es mayor<br>";

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $execirse = '';
        $number1 = 0;
        $number2 = 0;
        $number3 = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = test_input($_POST["number1"]);
            $number2 = test_input($_POST["number2"]);
            $number3 = test_input($_POST["number3"]);
        }
        ?>
       
        <h2>Mayor</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Escriba un numero 1: <input type="number" name="number1">
            Escriba un numero 2: <input type="number" name="number2">
            Escriba un numero 3: <input type="number" name="number3">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
       
        <?php
            $maxNumber = max($number1, $number2, $number3);
            echo "El número mayor es $maxNumber";
        ?>
    </body>
</html>