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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

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

                table, tr, td, th {
                    width: 40%;
                    border: 1px solid black;
                    padding: 5px;
                }
                table {
                    border-collapse: collapse;
                }

        </style>
            
    </head>
    
    <body>
        <!--Navbar section starts here--> 
        <?php 
    include('navbar.php');
    ?>
        <!--Navbar section ends here-->


   



<?php 
include('connect.php');
$editid = $_GET['id'];
?>

        

        <div class="inform" >
            <form action="foodshowcaseeditformup.php" method = "post" enctype= "multipart/form-data">
                <!-- <label for="fid">Food ID</label>
                <input type="text" id="fid" name="fid" placeholder="Food ID"> -->

                <label for="fname">Food Name</label>
                <input type="text" id="fname" name="fname" placeholder="Food Name">


                <label for="fcategory">Food Category</label>

                <select name="fcategory" id="fcategory">
                <option  selected disabled hidden>Choose Category</option>
                <option value="cake">Cake</option>
                <option value="dessert">Dessert</option>
                <option value="fastfood">Fast Food</option>
                <option value="cookies">Cookies</option>
                </select>






                <label for="fingradient">Food Ingradients</label> <br>

                

                <ul class="ingradient-ul"> 
                    <div id="inputFormRow">
                        <li class="ingradient-li"  >
                
                        <select name="ingradient_name[]" id = "iname" class="ingradient_name" onchange="showUnit(this.value)">
                        <option disable selected> Select Ingradients</option>
                        <?php
                            $sql = 'select pname from product';
                            $res = $conn->query($sql);
                            while ($row = $res->fetch_assoc()) {
                                printf(
                                    '<option value="%s">%s', $row['pname'], $row['pname']
                                );
                            }

                        ?>
                        </select>

                            <!-- <input type="text"  name="ingradient_name[]" value=""  class="ingradient_name" placeholder="Name" required> -->
                            <input type="text" id = "iamount" name="ingradient_amount[]" value=""  class="ingradient_amount" placeholder="Quantity" required>

                            <input type="text" id="ingradient_unit_0" name="ingradient_unit[]" value=""  class="ingradient_unit" placeholder="unit">
                            
                            <!-- <button class="crossb" id="removeRow"></button> -->
                            
                        </li>
                        
                        
                    </div>
                    
                </ul>
                <div id = "showingradient">
                    

                 </div>
                <button type="button" class="addingradientbutton" onclick="addingradient()" >Add Ingradients</button>
                <br>
                <br>
                <br>
               
                <input type="submit" value="Submit">
            </form>
        </div>

       




       <script>
        getEditData();
            async function getEditData () {
                const res = await fetch ("fetchEditData.php?id="<?php echo $editid ?>"");
                const data = await res.json();
                console.log(data);
            }
       </script>
        
       
       
    </body>

</html>