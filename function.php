

<?


echo dataBase($_REQUEST["server"],$_REQUEST["db"], $_REQUEST["table"], $_REQUEST["user"], $_REQUEST["pass"]);

function dataBase($server,$db, $table, $user, $pass){

$conn = mysql_connect("$server","$user","$pass");

$db = mysql_select_db("$db", $conn); 

$result = mysql_query("SELECT * FROM $table") or die("<h2>Select Query Problem</h2>");

if (!$result){echo "Sorry! Connection Couldn't Established".mysql_error();}




$fel=mysql_num_fields($result);
$nro=mysql_num_rows($result);



echo "<table border=1>";
echo "<tr>";
	for($i=0;$i<$fel;$i++){  
		echo "<td bgcolor = red scope=col><font color=white size=3><b>" . mysql_field_name($result, $i) . "</b></font></td>"; 

	}

while($row = mysql_fetch_array($result)){
echo "<tr>";
	for($m=0;$m<$fel;$m++){
	echo "<td>" . $row[mysql_field_name($result, $m)] . "</td>";
}echo "</tr>";
}

echo"</table>";

}



?>