<?php
include('connect.php');


// $imgname = $_FILES['fimg']['name'];


$fid = $_POST['fid'];
$fname = $_POST['fname'];

$fcategory = $_POST['fcategory'];
$ingradient_name = $_POST['ingradient_name'];
$ingradient_amount = $_POST['ingradient_amount'];
$ingradients = "";

for ($i=0; $i<count($ingradient_name); $i++) {
    $ingradients .= ($ingradient_name[$i]." = ".$ingradient_amount[$i]."<br>");
    
}

$sql = "INSERT INTO food (fid, fname,  fcategory, fingradient) VALUES('$fid','$fname','$fcategory','$ingradients')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();


    header("Location: foodshowcase.php");










?>