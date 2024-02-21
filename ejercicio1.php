<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

    <h1>Calculadora</h1>


    <div>
    <form action="ejercicio1.php" method="post">
        <label>Ingrese el primer número</label><br>
        <input type="text" name="n1" id=""><br><br>

        <label>Ingresar signo</label><br>
        <input type="text" name="signo" id=""><br><br>

        <label>Ingrese el segundo número</label><br>
        <input type="text" name="n2" id=""><br><br>

        <input type="submit" value="Calcular" name="validar">
    </form>
    </div>

<?php

if(isset($_POST['validar'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $signo = $_POST['signo'];

    switch ($signo) {   
        case '+':
            $resultado = $n1 + $n2;
            echo "El resultado de esta operación es: $resultado";
            break;
        case '-':
            $resultado = $n1 - $n2;
            echo "El resultado de esta operación es: $resultado";
            break;

        case '*':
            $resultado = $n1 * $n2;
            echo "El resultado de esta operación es: $resultado";
            break;
        case '/':
            $resultado = $n1 / $n2;
            echo "El resultado de esta operación es: $resultado";
            break;
        
        default:
            echo "Syntax Error";
            break;
    }
}



?>
    
</body>
</html>