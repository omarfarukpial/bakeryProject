<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stock</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <!--link css file-->
        <link rel="stylesheet" href="style.css">

        <style>
            #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 70%;
            margin-left: 200px;
            
            
            }

            #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            }
            .container{
                font-size: x-large;
            }
            h1 {
                text-align: center;
            }
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                }

                input[type=submit] {
                width: 30%;
                background-color: red;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                }

                input[type=submit]:hover {
                background-color: #45a049;
                }

                .inform {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                margin: 30px;
                }
                .container{
                font-size: x-large;
                }

        </style>
            
    </head>
    
    <body>
        <!--Navbar section starts here--> 
        <section class="navbar">
            <div class="container">
                <div class="logo">
                    <img src="logo.jpg" alt="logo" class="img-responsive">
                </div>
                
                <div class="menu text-right">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="product.php">Product</a>
                        </li>
                        <li>
                            <a href="purchaseform.php">Purchase</a>
                        </li>
                        <li>
                            <a href="stock.php">Stock</a>
                        </li>
                        <li>
                            <a href="#">Foods</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
          
            </div>
        </section>
        <!--Navbar section ends here-->


       <div style= "text-align: center">
           

           <h1>Product price</h1>

            <table id="customers"  >
            <tr>
                <th>Poduct</th>
                <th>Quantity</th>
                <th>Price</th>

            </tr>


            <?php
        include('connect.php');
        session_start();
        
        $flourq = $_POST['flourq'];
        $eggq = $_POST['eggq'];
        $oilq = $_POST['oilq'];
        $bpowderq = $_POST['bpowderq'];


        $flourcostdb = ($conn->query("SELECT pcost FROM stock WHERE pid='P001'")->fetch_assoc())['pcost'];
        $flourqdb = ($conn->query("SELECT pquantity FROM stock WHERE pid='P001'")->fetch_assoc())['pquantity'];
        $flourpricedb = (double)$flourcostdb / (double)$flourqdb;
        $flourcost = $flourq * $flourpricedb;



        $eggcostdb = ($conn->query("SELECT pcost FROM stock WHERE pid='P002'")->fetch_assoc())['pcost'];
        $eggqdb = ($conn->query("SELECT pquantity FROM stock WHERE pid='P002'")->fetch_assoc())['pquantity'];
        $eggpricedb = (double)$eggcostdb / (double)$eggqdb;
        $eggcost = $eggq * $eggpricedb;




        $oilcostdb = ($conn->query("SELECT pcost FROM stock WHERE pid='P003'")->fetch_assoc())['pcost'];
        $oilqdb = ($conn->query("SELECT pquantity FROM stock WHERE pid='P003'")->fetch_assoc())['pquantity'];
        $oilpricedb = (double)$oilcostdb / (double)$oilqdb;
        $oilcost = $oilq * $oilpricedb;




        $bpowdercostdb = ($conn->query("SELECT pcost FROM stock WHERE pid='P004'")->fetch_assoc())['pcost'];
        $bpowderqdb = ($conn->query("SELECT pquantity FROM stock WHERE pid='P004'")->fetch_assoc())['pquantity'];
        $bpowderpricedb = (double)$bpowdercostdb / (double)$bpowderqdb;
        $bpowdercost = $bpowderq * $bpowderpricedb;


        $totalcost = $flourcost + $eggcost + $oilcost + $bpowdercost;

        echo "<tr>";
        echo "<td align=left>Flour</td>". "<td align=right>".$flourq."</td>". "<td align=right>".number_format($flourcost,2)."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td align=left>Egg</td>". "<td align=right>".$eggq."</td>". "<td align=right>".number_format($eggcost,2)."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td align=left>Oil</td>". "<td align=right>".$oilq."</td>". "<td align=right>".number_format($oilcost,2)."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td align=left>Baking Powder</td>". "<td align=right>".$bpowderq."</td>". "<td align=right>".number_format($bpowdercost,2)."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td colspan=2> </td>". "<td align=right><b>Total Cost = ".number_format($totalcost,2)."</b></td>";
        echo "</tr>";


        $_SESSION['totalcost'] = $totalcost;
        $_SESSION['flourq'] = $flourq;
        $_SESSION['eggq'] = $eggq;
        $_SESSION['oilq'] = $oilq;
        $_SESSION['bpowderq'] = $bpowderq;

       

        ?>

            
            </table>





        

        <form method="get" action="order.php">
            
            
            
            <input type="submit" value="Place order">
        </form>
        

        
            
       </div>



     
       
        
       
        
       
       
    </body>

</html>