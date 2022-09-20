<?php 
include('connect.php');
date_default_timezone_set('Asia/Dhaka'); 
$fid = $_GET['id'];
$date = date('Y-m-d H:i:s');


$sql = "INSERT INTO ordertable (fid, time) VALUES('$fid','$date')";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();


    header( "refresh:2; url=ordershow.php" );

?>
