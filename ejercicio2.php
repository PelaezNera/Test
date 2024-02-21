<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>

    <h1>Piedra, Pepel o Tijera</h1>

    <form action="ejercicio2.php" method="post">
        <select name="juego" id="">
            <option name="piedra">Piedra</option>
            <option name="papel">Papel</option>
            <option name="tijera">Tijera</option>

            <input type="submit" name="validar" id="">
        </select>
    </form>
 

<?php

if(isset($_POST['validar'])){
    $piedra = $_POST['piedra'];
    $papel = $_POST['papel'];
    $tijera = $_POST['tijera'];

    switch ($juego) {
        case '$piedra':
            
            break;
        
        default:
            # code...
            break;
    }
}

?>

    

</body>
</html>