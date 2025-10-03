<?php
$numero = $_GET["numero"];
if($numero%2==0){
    echo "<p> El numero: ". htmlspecialchars($numero). " es par";
}else{
    echo "<p> El numero: ". htmlspecialchars($numero). " es impar";
}