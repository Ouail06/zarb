<html>
    <?php
$a = array("yassin", "Ouail", "Bilal" );

echo '<table border="1" width="200">';foreach($a as $name){ echo "<tr><td>$name</td></tr>";}echo "</table>";
"<br>";
echo date("l jS \of F Y h:i:s A") . "<br>";echo "<p>hello world</p> <br>";

echo $_POST['uname'];
echo "<br>";
echo $_POST['pwd'];
?>
</html>