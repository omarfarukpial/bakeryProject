<?php
include('connect.php');
$pid = $_POST['pid'];
$pname = $_POST['pname'];
$unit = $_POST['unit'];
$price = $_POST['price'];

$stmt = $conn->prepare("insert into product(pid,pname,unit,price)
                        values(?,?,?,?)");
$stmt->bind_param("sssd",$pid, $pname, $unit, $price);
$stmt->execute();
header("Location: product.php");


?>