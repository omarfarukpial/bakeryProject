<?php
include('connect.php');
// Get the user id
$pname = $_REQUEST['pname'];




	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($conn, "SELECT unit FROM product WHERE pname='$pname'");

	$row = mysqli_fetch_array($query);

	// Get the first name

	$punit = $row["unit"];



// Store it in a array
$result1 = array("$punit");

// Send in JSON encoded form
$myJSON = json_encode($result1);
echo $myJSON;
?>
