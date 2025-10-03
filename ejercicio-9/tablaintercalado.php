<?php 
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];

function asignarClase($fila){
    $coloresClases = ['tabla-verde', 'tabla-rojo', 'tabla-amarillo'];
    $claseActual = $coloresClases[$fila%3];
    return "<td class = '$claseActual'>"."</td>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabla-general{
            border-collapse: collapse;
            height: 700px;
        }
        .tabla-rojo{
            background-color: red;
            border: 2px solid black;
            width: 80px;
        }
        .tabla-amarillo{
            background-color: yellow;
            border: 2px solid black;
        }
        .tabla-verde{
            background-color: green;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <table class="tabla-general">
        <?php
        for($i =1; $i<=$filas; $i++){
            ?>
            <tr>
            <?php for($j = 1; $j<=$columnas; $j++){
                echo asignarClase($i);
            }
            ?>
            </tr>
            <?php
        } ?>


    </table>
</body>
</html>