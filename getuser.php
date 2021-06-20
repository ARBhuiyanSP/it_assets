<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
require_once("config.php");

echo $q =$_GET['q'];


if (!$link) {
    die('Could not connect: ' . mysqli_error($link));
}

mysqli_select_db($link,"ajax_demo");
$sql="SELECT * FROM `sttable` WHERE `vehicleno` = '".$q."'";
$result = mysqli_query($link,$sql);

echo "<table>
<tr>
<th>Vehicle No</th>
<th>Name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['vehicleno'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>
</body>
</html>