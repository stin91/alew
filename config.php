<?php
 
//connect to MySql database
try {
    $dbc=new PDO('mysql:host=localhost;dbname=iot','root','marika')
     or die("Unable to connect.");
       
    }

catch(PDOException $e)
    {
      echo "Error: " . $e->getMessage();
	   print_r('error');
    }
 
?>