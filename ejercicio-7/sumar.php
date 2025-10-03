<?php
$n1 = (int)$_GET['numero1'];
$n2 = (int)$_GET['numero2'];
$suma = $n1 +$n2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sumas por pasos:</h1>
    <table style=" border-collapse: collapse;">
        <tr style="background-color: green;" >
            <td style="border: 3px solid black; width: 80px; text-align:center;"><?php echo htmlspecialchars($n1)?></td>
            <td style="border: 3px solid black ; width: 80px; text-align:center;"> + </td>
            <td style="border: 3px solid black; width: 80px; text-align:center;"><?php echo htmlspecialchars($n2)?></td>
            <td style="border: 3px solid black; width: 80px; text-align:center;"> = </td>
            <td style="border: 3px solid black; width: 80px; text-align:center;"><?php echo htmlspecialchars($suma)?></td>
        </tr>
    </table>
</body>
</html>

