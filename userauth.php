<?php 
 

//include database connection file
require_once 'config.php';
 $us=$_POST['username'];
 $pas=$_POST['password'];
//define database object
global $dbc;
 $q="SELECT Username, Password FROM utente WHERE
Username='".$us."' && Password='".$pas."'";
 
$stmt = $dbc->prepare($q);
 
$stmt->execute();
 
$row = $stmt->rowCount();
 
if ($row > 0){    
    echo 'correct';
} else{ 
    echo 'wrong';
}
 
?>
