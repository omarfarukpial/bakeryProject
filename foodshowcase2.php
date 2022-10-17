<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Food Showcase</title>
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

                .clinicliststyle {
                display:flex;
                justify-content: space-evenly;
                
                margin-left: 50px;
                margin-right: 50px;
                margin-bottom: 50px;
                border-radius: 20px;


                }

                .cbody {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    margin: 20px;
                    width: 250px;
                    height: 300px;
                    padding: 20px;
                    transition-duration: .5s;
                    transition-timing-function: ease;
                    transition-delay: .1s;
                    transition-timing-function: ease-in-out;
                    border-radius:15px;

                }

                .cbody:hover {
                    background-image: linear-gradient(to top, red, orange);
                    
                }

        </style>
            
    </head>
    
    <body>
        <!--Navbar section starts here--> 
        <?php

            include('navbar.php');

        ?>
        <!--Navbar section ends here-->

        <div class="container">
            
            <div>
                <button type = "button" class="backbtn" onclick="history.back()"> Back </button>
            </div>

        </div>


        
   
<br>
<br>

     
    <h1>Food Showcase</h1>

    <div class="row row-cols-1 row-cols-md-4 g-4 clinicliststyle">



<?php
    
    include('connect.php');

    $sql = "SELECT * FROM food";
    $result = $conn->query($sql);
    
    
    if ($result->num_rows > 0) {
        // output data of each row
    
        while($row = $result->fetch_assoc()) {
            echo "<div class='col'>
                    <div class='card border rounded h-100 cbody'>
                        <div class='card-body text-center px-5'>
                            <h2 class='p-text'>".$row["fname"]."</h2> <br>
                            <h4 class='p-text'> Food Category: ".$row["fcategory"]."</h4>
                            <h4 class='p-text'> Ingradients: ".$row["fingradient"]."</h4>
                            <h3 class='p-text'> Price: ".$row["fprice"]." taka</h3>
                            <a href = orderquantity.php?fid=".$row["id"]."> 
                            <button type = 'button' style = 'margin-top: 20px; padding:10px; background-color: yellow; border: none;'>Place Order</button>
                            
                            </a>
                            

                        </div>
                    </div>
                </div> ";

        }
    } else {
        echo "0 results";
    }


?>

</div>


        
       
        
       
       
    </body>

</html>