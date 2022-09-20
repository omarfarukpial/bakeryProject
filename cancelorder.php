<?php

include('connect.php');

$oid = $_GET['oid'];

$sql = "DELETE FROM ordertable WHERE id='$oid';";
if ($conn->query($sql) === TRUE) {
    echo "Order deleted successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();


    header( "refresh:1; url=ordershow.php" );





?>