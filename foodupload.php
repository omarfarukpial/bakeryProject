<?php
session_start();

include('connect.php');


$fid = $_SESSION['fid'];
$fname = $_SESSION['fname'];
$fcategory = $_SESSION['fcategory'];
$ingradientString = $_SESSION['ingradientString'];
$totalcost = $_SESSION['totalcost'];


// echo $fname;
// echo $fcategory;
// echo $ingradientString;
// echo $totalcost;




$sql = "INSERT INTO food (fid, fname,  fcategory, fingradient, fprice) VALUES ('$fid','$fname','$fcategory','$ingradientString', '$totalcost')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();


    header("Location: foodshowcase2.php");












?>