<?php
$a = array("yassin", "Ouail", "Bilal" );
 echo '<table border="1" width="200">';
  for ($i=0; $i < count($a); $i++) {
    echo "<tr><td>{$a[$i]}</td><td>Rotterdam</td></tr>";
}
echo "</table>";"<br>";
echo date("l jS \of F Y h:i:s A") . "<br>";
echo "<p>hello world</p> <br>";
echo $_POST['uname'];
echo "<br>";
echo $_POST['pwd'];?>