<?php
include('connect.php');
$fid = $_POST['fid'];
$fquantity = $_POST['fquantity'];

$sql= "SELECT * From foodshowcase
        WHERE fid = '$fid' ";
$result = $conn->query($sql);

// $foodInfoFetchSql = "SELECT * FROM food 
//                 WHERE fid = '$fid' ";

// $foodInfoFetch = $conn->query($foodInfoFetchSql)->fetch_assoc();



// $ing = explode("<br>",$foodInfoFetch['fingradient']);
// foreach ($ing as $p) {
//     echo $p;
//     echo "<br>";
// }



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