<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Food</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <!--link css file-->
        <link rel="stylesheet" href="style.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
        

        <div class="inform">
            <form action="createfoodformup.php" method = "post" enctype= "multipart/form-data">
                <label for="fid">Food ID</label>
                <input type="text" id="fid" name="fid" placeholder="Food ID">

                <label for="fname">Food Name</label>
                <input type="text" id="fname" name="fname" placeholder="Food Name">

                <!-- <br>
                <br> -->
<!-- 
                <label for="fimg">Food image</label> <br> <br>
                <input type="file" id="fimg" name="fimg" accept="image/*">
                <br>
                <br> -->


                <label for="fcategory">Food Category</label>
                <input type="text" id="fcategory" name="fcategory" placeholder="Food Category">

                <label for="fingradient">Food Ingradients</label> <br>

                <ul class="ingradient-ul"> 
                    <div id="inputFormRow">
                        <li class="ingradient-li"  >
                            <input type="text"  name="ingradient_name[]" value=""  class="ingradient_name" placeholder="Name" required>
                            <input type="text" name="ingradient_amount[]" value=""  class="ingradient_amount" placeholder="Quantity" required>
                            
                            <button class="crossb" id="removeRow"></button>
                        </li>
                        
                        
                    </div>
                    
                </ul>
                <button type="button" class="addingradientbutton" >Add Ingradients</button>
                <br>
                <br>
                <br>
               
                <input type="submit" value="Submit">
            </form>
        </div>



        <script type="text/javascript">
        $(".addingradientbutton").click(function () {        
            newRowAdd =
            '<div id="inputFormRow">'+
                
                '<li class="ingradient-li"  >'+
                    '<input type="text" name="ingradient_name[]" value=""  class="ingradient_name" placeholder="Name" required>' +
                    '<input type="text" name="ingradient_amount[]" value=""  class="ingradient_amount" placeholder="Quantity" required>'+
                    '<button class="crossb" id="removeRow"></button>'+
                 '</li>'+
            '</div>';

        $('.ingradient-ul').append(newRowAdd);
     });


     $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
    </script>
        

     
       
        
       
        
       
       
    </body>

</html>