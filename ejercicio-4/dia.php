<?php
$numero = $_GET['numero'];
$dias =['Lunes', 'Martes', 'Miercoles','Jueves','Viernes','Sabado','Domingo'];
if ( $numero < 1 || $numero > 7) {

    header('Location: formulario-dia.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dia Seleccionado</h1>
    <ul style="display:grid; grid-template: repeat(7,30px)/90px 25px;">
    <?php
        
        foreach($dias as $dia){
        ?>
            <li style="list-style: none; border: 2px solid black; display: flex; align-items: center; padding-left:4px; "><?php echo htmlspecialchars($dia)?></li>
            <?php
            if($dia == $dias[$numero-1]){
                ?>
            <li style="border:2px solid black;display:flex;  align-items: center; ">
                <p style="font-size:40px; " >\/</p>
            </li>
            <?php
            }else{
            ?>
            <li style="border:2px solid black;display:flex; align-items: center;"></li>
            <?php
            }?>

        
        <?php
    }
    ?>
    </ul>
    <a href="formulario-dia.html">Volver a seleccionar otro dia</a>
</body>

