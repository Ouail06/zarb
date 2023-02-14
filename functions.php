<?php

function ConnectDb(){
     try { $conn = new PDO("mysql:host=localhost;dbname=bieren.sql", "root", "");
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "geslaagd";
     }  


     catch (PDOException $e) 
     { echo "Error: " . $e->getMessage();
    }
    return $conn;
    }
     
     
     function OvzBieren($conn){
    
     }
     ?>
    