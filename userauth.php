<?php 
 
/**
 * Description: User authentication
 * @author Prem Tiwari
 */
 
//include database connection file
require_once 'config.php';
 
//define database object
global $dbc;
 
$stmt = $dbc->prepare("SELECT Username, Password FROM utente WHERE
Username='".$_POST['username']."' && Password='". ($_POST['password'])."'");
 
$stmt->execute();
 
$row = $stmt->rowCount();
 
if ($row > 0){    
    echo 'correct';
} else{ 
    echo 'wrong';
}
 
?>