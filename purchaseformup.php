<?php
include('connect.php');
$pid = $_POST['pid'];
$ptype =$_POST['ptype'];
$pquantity = $_POST['quantity'];
$tprice = $_POST['tprice'];

$sql= "select * from stock where pid = '$pid'";
$result = $conn->query($sql);

$sqlcost = "SELECT pname From product
            WHERE id = '$pid'";
$cost = $conn->query($sqlcost);
$row = $cost->fetch_assoc();
$pname = $row['pname'];




// $totalcost = $pcost*$pquantity;




if ($result -> num_rows == 0) {
    $unitPrice = $tprice / $pquantity;
    $stmt = "insert into stock(pid, pname, pquantity, type, tprice, uprice) values('$pid', '$pname', '$pquantity', '$ptype', '$tprice', '$unitPrice')";
    $conn->query($stmt);

}
else {
    $pdata = $result->fetch_assoc();
    $unitPrice = ($pdata['tprice']+$tprice)/($pdata['pquantity']+$pquantity);
    // echo $unitPrice;
    $stmt = "UPDATE stock SET pquantity = pquantity+$pquantity, tprice = tprice+$tprice, uprice = '$unitPrice' WHERE pid = '$pid' ";
    $conn->query($stmt);

}

$purchase_history_update = "INSERT INTO purchase_history(pname, amount, unit_type, tprice) VALUES ('$pname','$pquantity', '$ptype', '$tprice')";


$conn->query($purchase_history_update);


header("Location: stock.php");



?>