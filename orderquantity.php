<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Quantity</title>
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
            include('connect.php');
            $fid = $_GET['fid'];

        ?>
        <!--Navbar section ends here-->

        <div class="container">
            
            <div>
                <button type = "button" class="backbtn" onclick="history.back()"> Back </button>
            </div>

        </div>


        
   
<br>
<br>

     
    <h1>Select Order Quantity</h1>


    <div class="container">
        
        <form action="order.php" method = "post"> 

            <input type="hidden" id="fid" name="fid" value="<?php echo $fid?>" >



            <label for="orderquantity">Choose Order Quantity</label>
            <select id="orderquantity" name="orderquantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                
            </select>
            <input type="submit" value="Submit">
        </form>

    </div>


    
       
        
       
       
    </body>

</html>