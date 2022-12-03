<?php
session_start();

include('connect.php');


$fid = $_SESSION['fid'];
$fname = $_SESSION['fname'];
$fcategory = $_SESSION['fcategory'];
$ingradientString = $_SESSION['ingradientString'];
$netcost = $_SESSION['netcost'];
$ingID = $_SESSION['ingID'];


// echo $fname;
// echo $fcategory;
// echo $ingradientString;
// echo $totalcost;

// echo $ingID;




$sql = "INSERT INTO food (fid, fname,  fcategory, fingradient, ingID, fprice) VALUES ('$fid','$fname','$fcategory','$ingradientString', '$ingID', '$netcost')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();


    header("Location: managefood.php");












?>