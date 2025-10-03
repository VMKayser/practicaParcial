<?php
    $nombre = $_GET['nombre'];
    $ciudad = $_GET['ciudad'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos</h1>

    <p>Nombre: <span  style="font-weight: bold;"><?php echo htmlspecialchars($nombre)?></span> </p>
    <p >Ciudad: <span style = "color: red;"><?php echo htmlspecialchars($ciudad)?></span> </p>
</body>
</html>
