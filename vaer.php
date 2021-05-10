<?pHp

    $host = "109.106.246.51";
    $user = "u580154432_kyoto";
    $password = "yoto2021";
    $database = "u580154432_kyoto";
    
$kobling = new mysqli($host, $user, $password, $database);

   $kobling->set_charset ("utf8");

if ($kobling->connect_error) {
die("noe gikk galt: " .$kobling->connect_error);
}
else {
echo"koblingen virker";}

   $sql = "SELECT *
   FROM Vaer";

$resultat = $kobling->query($sql);
//selve tabellen
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
echo "<th>idVaer</th>";
echo "<th>Dato</th>";
echo "<th>Luftfuktighet</th>";
echo "<th>Temperatur</th>";
echo "<th>Trykk</th>";
echo "</tr>";

//info i tabellen
while($rad = $resultat->fetch_assoc()) {
$ID= $rad["idVaer"];
$DATE = $rad["Dato"];
$TEMP = $rad["Temperatur"];
$PRE = $rad["Trykk"];
$HUM = $rad["Luftfuktighet"];

echo "<tr>";
echo "<td>$ID</td>";
echo "<td>$DATE</td>";
echo "<td>$TEMP</td>";
echo "<td>$HUM</td>";
echo "<td>$PRE</td>";
echo "</tr>";
}
echo "</table>"; // Avslutter tabellen

?>