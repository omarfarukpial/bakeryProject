<?php
include('connect.php');
$pid = $_POST['pid'];
$pquantity = $_POST['quantity'];

$sql= "SELECT * From stock
        WHERE pid = '$pid' ";
$result = $conn->query($sql);

$sqlcost = "SELECT price as p, pname as n From product
            WHERE pid = '$pid'";
$cost = $conn->query($sqlcost);

$row = $cost->fetch_assoc();
$pcost = $row['p'];
$pname = $row['n'];



$totalcost = $pcost*$pquantity;




if ($result -> num_rows == 0) {
    $stmt = $conn->prepare("insert into stock(pid,pname, pquantity,punitcost, pcost)
                        values(?,?,?,?,?)");
    $stmt->bind_param("ssddd",$pid,$pname, $pquantity, $pcost, $totalcost);
    $stmt->execute();

}
else {
    $stmt = $conn->prepare("UPDATE stock SET pquantity = pquantity+$pquantity, pcost = pcost+$totalcost WHERE pid = '$pid' ");
    $stmt->execute();

}

$transactionSql = "INSERT INTO transaction(status,amount) VALUES ('buy','$totalcost')";
$conn->query($transactionSql);



header("Location: stock.php");



?>