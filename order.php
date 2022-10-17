<?php 
include('connect.php');
date_default_timezone_set('Asia/Dhaka'); 
$fid = $_POST['fid'];
$date = date('Y-m-d H:i:s');
$orderquantity = $_POST['orderquantity'];


$sql = "INSERT INTO ordertable (fid, fquantity, time) VALUES('$fid', '$orderquantity', '$date')";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();


    header( "refresh:2; url=ordershow.php" );

?>
