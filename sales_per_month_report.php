<?php
include('connect.php');


$selectedmonth = $_POST['selectedmonth'];





$reportBuySql = "SELECT * FROM sell_history WHERE DATE_FORMAT(date, '%Y-%m') = '$selectedmonth'";
$reportBuyFetch = $conn->query($reportBuySql);

$total_sell = 0;

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<br>
<br>


                
            <div class="container-xxl" style="width:50%; margin: auto; ">
                    

            <h1 style="text-align: center;" class="">Fahiha's List</h1>
            <h5 style="text-align: center;" class="">Sell list in <?php echo $selectedmonth;?> </h5>


            <table id=""class=" table table-success table-striped table-borderd text-center  table-hover rounded"style="border-radius: 1em;overflow: hidden; ">
                <thead class="thead-dark text-center align-middle">
                    <tr class="text-center">
                        <th>Food Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                    </tr>
                </thead>
            
            
            <?php
               

                if ($reportBuyFetch -> num_rows>0) {
                    while ($row = $reportBuyFetch->fetch_assoc()) {
                        echo"<tr>";
                        echo"<td >".$row["fname"]."</td>".
                        "<td>".$row["fquantity"]."</td>".
                        "<td>".$row["fprice"]."</td>".
                        "<td>".$row["date"]."</td>"
                        ;
                        $total_sell = $total_sell + $row["fprice"];

                    }
                    echo"</tr>";
                    echo "<tr>
                    <td></td>
                    <td>Total sell = </td>
                    <td> ৳ ".number_format($total_sell,2)."</td>
                    <td></td>
                    </tr>";
                }
                else {
                    echo "0 result";
                }




            ?>
            
            </table>
            <div style="margin:auto;">
            <button class="btn btn-primary text-center mx-auto align-middle" onclick="downloadPDF()">Print Sell Report</button>


            </div>


            </div>



        <script>
        function downloadPDF() {
        window.print();
        }
        </script>
</body>
</html>

