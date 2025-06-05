<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Resultado: </h1>

    <?php

    
    $num = $_GET['num'];
    $multiplicacao = $num * 7;

    echo "O número ".$num. " multiplicado por 7 é : ".$multiplicacao. "!";


?>
</body>
</html>