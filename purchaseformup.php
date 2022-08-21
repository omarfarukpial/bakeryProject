<?php
include('connect.php');
$pid = $_POST['pid'];
$pquantity = $_POST['quantity'];

$sql= "SELECT * From stock
        WHERE pid = '$pid' ";
$result = $conn->query($sql);

$sqlcost = "SELECT price as p From product
            WHERE pid = '$pid'";
$cost = $conn->query($sqlcost);



$row = $cost->fetch_assoc();
$pcost = $row['p'];

$totalcost = $pcost*$pquantity;




if ($result -> num_rows == 0) {
    $stmt = $conn->prepare("insert into stock(pid,pquantity,pcost)
                        values(?,?,?)");
    $stmt->bind_param("sdd",$pid, $pquantity, $totalcost);
    $stmt->execute();

}
else {
    $stmt = $conn->prepare("UPDATE stock SET pquantity = pquantity+$pquantity, pcost = pcost+$totalcost WHERE pid = '$pid' ");
    $stmt->execute();

}



header("Location: stock.php");



?>