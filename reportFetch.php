<?php
include('connect.php');


$stime = $_POST['startdatetime'];
$etime = $_POST['enddatetime'];
$totalBuy = 0;
$totalSell = 0;



$reportBuySql = "SELECT * FROM transaction WHERE date_time BETWEEN '$stime' AND '$etime' AND status = 'buy';";
$reportBuyFetch = $conn->query($reportBuySql);

// echo $reportBuyFetch['amount'];

if ($reportBuyFetch -> num_rows > 0) {
    while($rowBuy = $reportBuyFetch->fetch_assoc()) {
        $totalBuy = $totalBuy + $rowBuy['amount'];
    }    
}



$reportSellSql = "SELECT * FROM transaction WHERE date_time BETWEEN '$stime' AND '$etime' AND status = 'sell';";
$reportSellFetch = $conn->query($reportSellSql);
// echo $reportSellFetch['amount'];

if ($reportSellFetch -> num_rows > 0) {
    while($rowSell = $reportSellFetch->fetch_assoc()) {
        $totalSell = $totalSell + $rowSell['amount'];
    }

}



$totalRevenue = $totalSell - $totalBuy;




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<br>
<br>


        <div class="container-xxl inform" style="width:50%; margin: auto; ">

            <table class="table table-success table-striped table-borderd   table-hover rounded" style="border-radius: 1em;overflow: hidden;">
                    <thead class="thead-dark text-center align-middle">
                        <tr>
                            <td colspan = "2">
                                <h1>Fariha's Bakery</h1>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td class="px-5">
                                Start Date:
                            </td>
                            <td>
                                <?php echo $stime ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">
                                End Date:
                            </td>
                            <td>
                                <?php echo $etime ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">
                                Total Sell:
                            </td>
                            <td>
                                <?php echo $totalSell ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">
                                Total Buy:
                            </td>
                            <td>
                                <?php echo $totalBuy ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">
                                Total Revenue:
                            </td>
                            <td>
                                <?php echo $totalRevenue ?>

                            </td>
                        </tr>

                    </tbody>
                    
                    
            </table>
            <button class="btn btn-primary text-center mx-auto align-middle" onclick="downloadPDF()">Download as PDF</button>
        </div>

        <script>
        function downloadPDF() {
        window.print();
        }
        </script>
</body>
</html>

