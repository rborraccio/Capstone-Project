<?php
        // connection using localhost
          $servername = "localhost"; 
          $dbname 	= "linos"; 
          $dbusername = "root"; 
          $dbpassword = ""; 

        //connection for server
        //$servername = "localhost"; 
        //$dbname     = "rborracc_linos"; 
        //$dbusername = "rborracc_admin"; 
        //$dbpassword = "mich3932"; 

     global $conn;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";     
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


?>
