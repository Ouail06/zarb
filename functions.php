<?php

function ConnectDb() {
  try {
      $conn = new PDO("mysql:host=localhost;dbname=bieren.sql", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;

  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}

function GetData($table) 
{ 
     $conn = Connectdb();
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    return $result;}

function OvzBieren() {
    $conn = ConnectDb();
    echo "<table border='1'>";
    echo "<tr><th>id</th><th>bieren</th><th>Alcoholpercentage</th></tr>";
  
    try {
       $rows = GetData( "bier");
      PrintTable($rows);
  
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    echo "</table>";
    $conn = null;
  }

 
        function PrintTable($result) {

            echo "<table border='1px'>";

            foreach ($result as $row) {
                echo "<tr>";

                foreach($row as $value){
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            
   }

  
    
}
