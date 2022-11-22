<?php
include('connect.php');
$fid = $_POST['fid'];
$fquantity = $_POST['fquantity'];

$sql= "SELECT * From foodshowcase
        WHERE fid = '$fid' ";
$result = $conn->query($sql);

// $sqlcost = "SELECT price as p, pname as n From product
//             WHERE pid = '$pid'";
// $cost = $conn->query($sqlcost);

// $row = $cost->fetch_assoc();
// $pcost = $row['p'];
// $pname = $row['n'];



// $totalcost = $pcost*$pquantity;




if ($result -> num_rows == 0) {
    $stmt = $conn->prepare("insert into foodshowcase(fid, fquantity)
                        values(?,?)");
    $stmt->bind_param("sd",$fid,$fquantity);
    $stmt->execute();
    

}
else {
    $stmt = $conn->prepare("UPDATE foodshowcase SET fquantity = fquantity+$fquantity  WHERE fid = '$fid' ");
    $stmt->execute();

 

}



header("Location: foodshowcase2.php");



?>