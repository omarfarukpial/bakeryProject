<?php
session_start();

include('connect.php');



$fname = $_SESSION['fname'];
$fcategory = $_SESSION['fcategory'];
$ingradientString = $_SESSION['ingradientString'];
$totalcost = $_SESSION['tcost'];
$ingID = $_SESSION['ingID'];


// echo $fname;
// echo $fcategory;
// echo $ingradientString;
// echo $totalcost;

// echo $ingID;




$sql = "INSERT INTO food (fname,  fcategory, fingradient, ingID, fprice) VALUES ('$fname','$fcategory','$ingradientString', '$ingID', '$totalcost')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();


    header("Location: managefood.php");












?>