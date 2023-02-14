<?php
$a = array("ouail", "bilal", "yasine" );
echo '<table border="1" width="200">';
for ($i=0; $i < count($a); $i++) {
   echo "<tr><td>{$a[$i]}</td><td>Rotterdam</td></tr>";}
   echo "</table>";
   echo date("") . "<br>";
   
   echo date("l jS \of F Y h:i:s A") . "<br>";
    echo "<p>hello world</p> <br>";
   
   $Uname = $_POST['Uname'];
   $pwd = $_POST['pwd'];
   
   echo "Username: $Uname<br>";
   echo "Password: $pwd";

   echo '<table border="1" width="200>"';
foreach ($_POST as $name){
  //maak een rij
  echo "<tr>";
  echo "<td>";
  echo $name;
  echo "</td>";
};

  
?>