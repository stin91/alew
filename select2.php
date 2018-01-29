<?php
error_reporting(0);
header("Access-Control-Allow-Origin: *");   
header("Content-Type: application/json; charset=UTF-8");  
$conn = new PDO("mysql:host=localhost;dbname=iot", "root", "marika");   
$result = $conn->query("SELECT Marca,Modello,Tipo from sensore");     
$outp = ""; 
while($rs = $result->fetch()) {     
    if ($outp != "") {$outp .= ",";}     
    $outp .= '{"Marca":"'  . $rs["Marca"] . '",'; 
	$outp .= '"Modello":"'  . $rs["Modello"] . '",'; 
    $outp .= '"Tipo":"'   . $rs["Tipo"]  . '"}'; 
    } 
$outp ='{"details":['.$outp.']}'; 
echo($outp); 
?> 
