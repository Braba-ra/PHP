<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <h1>Resultado da Multiplicação</h1>

    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $num4 = $_GET['num4'];
    $num5 = $_GET['num5'];
    $resultado = $num1 * $num2 * $num3 * $num4 * $num5;
    
    echo "O resultado é: ".$resultado;
    
    ?>

</body>
</html>