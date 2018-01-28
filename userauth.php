<?php 
 
/**
 * Description: User authentication
 * @author Prem Tiwari
 */
 
//include database connection file
require_once 'config.php';
  $us=$_POST['username'];
 $pas=$_POST['password'];
//define database object
global $dbc;
 
$stmt = $dbc->prepare("SELECT Username,Password FROM utente WHERE
Username= :usa && Password= :pas");
$stmt->bindParam(':usa', $us, PDO::PARAM_STR, 12);
$stmt->bindParam(':pas', $pas, PDO::PARAM_STR, 12);
 
$stmt->execute();
 
$row = $stmt->rowCount();
 
if ($row > 0){    
    echo 'correct';
} else{ 
    echo 'wrong';
}
 
?>
