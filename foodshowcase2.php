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
        <script src="https://kit.fontawesome.com/997101869c.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
 
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
                    height: 310px;
                    padding: 35px;
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

        <?php

            include('navbar.php');
            include('connect.php');

            $username = $_SESSION['username'];

            $sql = "SELECT foodshowcase.fid, foodshowcase.fquantity as fquantity, food.fid as id, food.fname as fname, food.fcategory as fcategory, food.fingradient as fingradient, food.fprice as fprice 
                    FROM foodshowcase
                    INNER JOIN food ON foodshowcase.fid = food.fid";
            $result = $conn->query($sql);

        ?>



        
   
<br>
<br>

     
    <h1>Food Showcase</h1>


    
    <div class="container">
        <div class="row d-flex flex-wrap">
        <?php while($row = $result->fetch_assoc()) {
            if ($row["fquantity"]>0){ ?>
                    <div class="card m-5" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title"><h3><?php echo $row['fname']?></h3></h5>
                            <p class="card-text"><?php echo $row['fcategory']?></p>
                            <p class="card-text"><small><?php echo $row['fingradient']?></small></p>
                            <p class="card-text"><h5>৳ <?php echo $row['fprice']?></h5></p>
                            <p class="card-text">Available: <?php echo $row['fquantity']?></p>
                            <?php
                            if ($username == 'admin') {

                            }
                            else {
                                ?>
                                <a href="orderquantity.php?fid=<?php echo $row['id']?>" class="btn btn-danger">Place Order</a>
                            <?php
                            }

                            ?>
                            
                        </div>
                    </div>
            <?php }
            } ?>
        </div>

    </div>
    


       
        
       
       
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</html>