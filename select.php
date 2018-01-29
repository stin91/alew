<?php
error_reporting(0);
header('Access-Control-Allow-Origin: *');   
header('Content-Type: application/json; charset=UTF-8');  
$conn = new PDO('mysql:host=localhost;dbname=iot', 'root', '');   
$result = $conn->query('SELECT Username,Password FROM utente');     
$outp = ''; 
while($rs = $result->fetch()) {     
    if ($outp != '') {$outp .= '';}     
    $outp .= "{'Username':'"  . $rs['Username'] . "',"; 
    $outp .= "'Password':'"   . $rs["Password"]  . "'}"; 
    } 
$outp ='{"details":['.$outp.']}'; 
echo($outp); 
?> 
