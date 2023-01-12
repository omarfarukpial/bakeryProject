<?php

include('connect.php');

$oid = $_GET['oid'];

// $ingreadientsql= "SELECT food.fingradient
// FROM food
// INNER JOIN ordertable
// ON food.id = ordertable.fid
// WHERE ordertable.id = '$oid'";


// $ingreadientsqlresult = $conn->query($ingreadientsql);
// $ingradientrow = $ingreadientsqlresult->fetch_assoc();
// $ingradient = $ingradientrow['fingradient'];

// echo $ingradient."<br>";


// $ingradient = trim($ingradient);
// $ingradient = explode("<br>",$ingradient);


// for ($i=0; $i<count($ingradient); $i++) {
//     echo $ingradient[$i].",";
// }








// $sql = "";
// if ($conn->query($sql) === TRUE) {
//     echo "Order deleted successfully";
//     } else {
//     echo "Error updating record: " . $conn->error;
//     }

//     $conn->close();


//     header( "refresh:1; url=ordershow.php" );




$fidSql = "SELECT * FROM ordertable WHERE id = '$oid'";
$fidFetch = $conn->query($fidSql)->fetch_assoc();
$fid = $fidFetch['fid'];
$foodQuantity = $fidFetch['fquantity'];

$foodIdSql = "SELECT * FROM food WHERE fid = '$fid'";
$foodIdRow = $conn->query($foodIdSql)->fetch_assoc();
$foodName = $foodIdRow['fname'];
$foodPrice = ($foodIdRow['fprice'])*$foodQuantity;

$removeItemFoodshowcaseSql = "UPDATE foodshowcase SET fquantity = fquantity-$foodQuantity WHERE fid = '$fid'";
$conn->query($removeItemFoodshowcaseSql);

$sell_history_update = "INSERT INTO sell_history(fname,fquantity, fprice) VALUES ('$foodName','$foodQuantity','$foodPrice')";
$conn->query($sell_history_update);

$removeOrderSql = "UPDATE ordertable SET status = 'accept' WHERE id = '$oid'";
$conn->query($removeOrderSql);

echo "<script>alert('Order Confirmed!')</script>";


// header("Location: ordershow.php");
header( "refresh:0; url=ordershow.php" );





?>