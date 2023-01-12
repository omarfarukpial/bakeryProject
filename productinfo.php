<!DOCTYPE html>
<html>
<head>
<style>
table {
  
    
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
include('connect.php');
$q = $_GET['q'];



mysqli_select_db($conn,"bakery");
$sql="SELECT * FROM product WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['pname'] . "</td>";
  echo "<td>" . $row['unit'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>