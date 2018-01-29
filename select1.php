<?php
error_reporting(0);
header("Access-Control-Allow-Origin: *");   
header("Content-Type: application/json; charset=UTF-8");  
$conn = new PDO("mysql:host=localhost;dbname=iot", "root", "marika");   
$result = $conn->query("SELECT IdImpianto FROM impianto");     
$outp = ""; 
while($rs = $result->fetch()) {     
    if ($outp != "") {$outp .= ",";}     
$outp .= '{"IdImpianto":"'   . $rs["IdImpianto"]  . '"}'; 
    } 
$outp ='{"details":['.$outp.']}'; 
echo($outp); 
?> 
