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
     
     
     function GetData($conn, $table){
          GetData($conn, "bier");
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchAll (PDO:: FETCH_ASSOC);
    return $result;
     
     }
     function OvzBieren($conn) {
          $result = GetData($conn, "bier");

          echo "<table border=1px>";
          foreach ($result as $data) {
               echo"<tr>";
               echo "<td>";  $data ["naam"]; "</td>";
               echo "<td>";  $data ["alcohol"]; "</td>";
               echo"</tr>";
          }
          echo '<table border="1">';

     }
     ?>
    