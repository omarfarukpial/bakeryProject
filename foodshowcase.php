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

        </style>
            
    </head>
    
    <body>
        <!--Navbar section starts here--> 
        <?php

        include('navbar.php');

        ?>
        <!--Navbar section ends here-->


        
    <button class="cfbtn" onclick="window.location.href='createfood.php'" style = "display: flex; align-items: center;">Create Food</button>

       
<br>
<br>

     
    <h1>Food Table</h1>

<table id="customers" >
<tr>
    <th>Food ID</th>
    <th>Food Name</th>
    <th>Food Category</th>
    <th>Ingradients</th>
</tr>
<?php
    include('connect.php');
    $sql= "select * from food";
    $result = $conn->query($sql);

    if ($result -> num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            echo"<tr>";
            echo"<td>".$row["fid"]."</td>".
            "<td>".$row["fname"]."</td>".
            "<td>".$row["fcategory"]."</td>".
            "<td>".$row["fingradient"]."</td>"
            ;

        }
        echo"</tr>";
    }
    else {
        echo "0 result";
    }




?>

</table>
        
       
        
       
       
    </body>

</html>