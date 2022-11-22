<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bakery Website</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <!--link css file-->
        <link rel="stylesheet" href="style.css">
            <style>
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
                width: 100%;
                background-color: #4CAF50;
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


        <h3 style = "text-align: center">Ingradients Information</h3>

        <div class="inform">
            <form action="productup.php" method = "post">
                <label for="pid">Ingradients ID</label>
                <input type="text" id="pid" name="pid" placeholder="Product ID">

                <label for="pname">Ingradients Name</label>
                <input type="text" id="pname" name="pname" placeholder="Product Name">

                <label for="unit">Unit</label>
                <select name="unit" id="unit">
                    <option disable seleted>Select Unit type</option>
                    <option value="kg">kg</option>
                    <option value="liter">liter</option>
                    <option value="piece">piece</option>
                    <option value="pound">pound</option>
                    <option value="ounce">ounce</option>
                    
                </select>

                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Price">
               
                <input type="submit" value="Submit">
            </form>
        </div>
        
       
        
       
        
      
        <!-- <section class="footer">
             <div class="container">
                 <p>All rights reserved Designed by <a href="#">Fariha</a></p>
            </div>
        </section>  -->
       
    </body>


</html>