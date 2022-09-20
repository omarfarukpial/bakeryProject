<?php

include('connect.php');

$oid = $_GET['oid'];

$ingreadientsql= "SELECT food.fingradient
FROM food
INNER JOIN ordertable
ON food.id = ordertable.fid
WHERE ordertable.id = '$oid'";


$ingreadientsqlresult = $conn->query($ingreadientsql);
$ingradientrow = $ingreadientsqlresult->fetch_assoc();
$ingradient = $ingradientrow['fingradient'];

// echo $ingradient."<br>";


$ingradient = trim($ingradient);
$ingradient = explode("<br>",$ingradient);


for ($i=0; $i<count($ingradient); $i++) {
    echo $ingradient[$i].",";
}





// $sql = "";
// if ($conn->query($sql) === TRUE) {
//     echo "Order deleted successfully";
//     } else {
//     echo "Error updating record: " . $conn->error;
//     }

//     $conn->close();


//     header( "refresh:1; url=ordershow.php" );





?>