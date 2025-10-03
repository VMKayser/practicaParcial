<?php
$base = $_GET['base'];
$altura = $_GET['altura'];
$area  = ($base *$altura)/2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>La altura del triangulo es: <?php echo htmlspecialchars($area)?></p>
    <a href="formulario.html" style="border: 4px solid red; background-color: light-gray;text-decoration: none; color:black ">Intentar de nuevo</a>
</body>
</html>