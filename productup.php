<?php
include('connect.php');
// $pid = $_POST['pid'];
$pname = $_POST['pname'];
$unit = $_POST['unit'];
// $price = $_POST['price'];

$stmt = $conn->prepare("insert into product(pname,unit)
                        values(?,?)");
$stmt->bind_param("ss", $pname, $unit);
$stmt->execute();
header("Location: product.php");


?>