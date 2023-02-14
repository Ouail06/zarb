<?php

include 'functions.php';

$conn = ConnectDb();
var_dump($conn);

    
OvzBieren($conn){
    $conn = OpenDb();
     echo "<table border='1'>"; 
    echo "<tr>
    <th>id</th>
    <th>bieren</th>
    <th>Alcoholpercentage</th>
    </tr>";
    try { $stmt = $conn->prepare("SELECT * FROM bier"); $stmt->execute(); while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {echo "<tr>";
         echo "<td>" . $row["biercode"] . "</td>";
        echo "<td>" . $row["naam"] . "</td>";
       echo "<td>" . $row["alcohol"] . "</td>";
        echo "</tr>";
     } } catch (PDOException $e) 
     {echo "Error: " . $e->getMessage(); } echo "</table>";
     $conn = null;
    }
?>