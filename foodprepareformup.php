<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="salert.js"></script>
</head>
<body>



<?php
include('connect.php');
$fid = $_POST['fid'];
$fquantity = $_POST['fquantity'];

$sql= "SELECT * From foodshowcase
        WHERE fid = '$fid' ";
$result = $conn->query($sql);

$foodInfoFetchSql = "SELECT * FROM food 
                    WHERE fid = '$fid' ";

$foodInfoFetch = $conn->query($foodInfoFetchSql)->fetch_assoc();


$flag = 0;
$ing = explode(" ",$foodInfoFetch['ingID']);
// echo count($ing)."<br>";
for ($it=0; $it<count($ing)-1; $it=$it+2) {
    $proid = $ing[$it];
    $proamount = $ing[$it+1];
    $stockCheckSql = "SELECT * FROM stock WHERE pid = '$proid'";
    $stockCheck = $conn->query($stockCheckSql)->fetch_assoc();
    // echo $proid." ".$proamount."<br>";
    if ($proamount*$fquantity> $stockCheck['pquantity']) {
        $flag = 1;
    }
    
}

if ($flag) {
    ?>
    <script>
        
        swal("Sorry!", "Insufficient ingradient to prepare this item!", "error");
    </script>
    <?php
    header("Refresh:5; url= prepareFood.php");
}
else {
        for ($loop=0; $loop<count($ing)-1; $loop=$loop+2) {
            $productID = $ing[$loop];
            $productAmount = $ing[$loop+1];
            $stockUpdateSql = "UPDATE stock SET pquantity = pquantity-($fquantity*$productAmount), tprice = tprice-($fquantity*$productAmount*uprice) WHERE pid = '$productID' ";
            $conn->query($stockUpdateSql);
        }

        if ($result -> num_rows == 0) {
            $stmt = $conn->prepare("insert into foodshowcase(fid, fquantity)
                                values(?,?)");
            $stmt->bind_param("id",$fid,$fquantity);
            $stmt->execute();
            
        
        }
        else {
            $stmt = $conn->prepare("UPDATE foodshowcase SET fquantity = fquantity+$fquantity  WHERE fid = '$fid' ");
            $stmt->execute();
        
         
        
        }
        
        
        
        header("Location: managefood.php");
       
}







?>

    
</body>
</html>
