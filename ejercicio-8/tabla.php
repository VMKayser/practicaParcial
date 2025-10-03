<?php
    $filas = $_GET['filas'];
    $columnas = $_GET['columnas'];
    $multiplicacion = 0;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla generada</h1>
    <table style="border-collapse: collapse;">
        <?php
        for($i =0; $i<=$filas;$i++){
            ?>
            <tr style="border: 2px solid black; height:30px;">
                <?php
                for($j =0; $j<=$columnas; $j++){
                    $multiplicacion = $i*$j;
                    if($j==0){
                    ?>
                    <th style="width: 30px; border:2px solid black;background-color: gainsboro; font-weight: bold; text-align: center;"><?php if($i!=0){echo htmlspecialchars($i);}?></th>
                    <?php
                    }else{
                        ?>
                    <?php if($i!=0){?>
                    <td style="width: 30px; border:2px solid black"><?php {echo htmlspecialchars($multiplicacion);}?></td> 
                    <?php
                    }else{
                        ?>
                        <th style="width: 30px; border:2px solid black;background-color: gainsboro; font-weight: bold; text-align: center;"><?php echo htmlspecialchars($j);?></th>
                        <?php
                    }
                    }
                }
                ?>
            </tr>
            <?php
        }?>
    </table>
</body>
</html>