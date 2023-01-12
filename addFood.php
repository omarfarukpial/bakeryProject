<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Food</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <!--link css file-->
        <link rel="stylesheet" href="style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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

        <!-- <div class="container">
            
            <div>
                <button type = "button" class="backbtn" onclick="history.back()"> Back </button>
            </div>

        </div> -->


   



<?php 
include('connect.php');
?>

<script>
    var i = 0;
</script>
        

        <div class="inform" >
            <form action="testingradient.php" method = "post" enctype= "multipart/form-data">
                <!-- <label for="fid">Food ID</label>
                <input type="text" id="fid" name="fid" placeholder="Food ID"> -->

                <label for="fname">Food Name</label>
                <input type="text" id="fname" name="fname" placeholder="Food Name">

                <!-- <br>
                <br> -->
<!-- 
                <label for="fimg">Food image</label> <br> <br>
                <input type="file" id="fimg" name="fimg" accept="image/*">
                <br>
                <br> -->

<!-- 
                <label for="fcategory">Food Category</label>
                <input type="text" id="fcategory" name="fcategory" placeholder="Food Category"> -->

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

                            <input type="text" id="ingradient_unit_0" name="ingradient_unit[]" value=""  class="ingradient_unit" placeholder="unit" readonly>
                            
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

       




        
        <script type="text/javascript">
        $(".addingradientbutton").click(function () { 
            i = i+1;
            
            // let ingradientName = document.getElementsByClassName("ingradient_name")[i].value;
            // let ingradientAmount = document.getElementsByClassName("ingradient_amount")[i].value;
            // let ingradientUnit = document.getElementsByClassName("ingradient_unit")[i].value; 

            
               
            // newRowAdd =
            // '<div id="inputFormRow">'+        
            //     '<li class="ingradient-li"  >'+
            //         '<input type=text name=ingradient_name[i] class=ingradient_name value='+ingradientName+' disabled>'+
            //         '<input type=text name=ingradient_amount[i] class=ingradient_amount value='+ingradientAmount+' disabled>'+
            //         ' <input type=text name=ingradient_unit[i] class=ingradient_unit value='+ingradientUnit+' disabled>'+
            //      '</li>'+
            // '</div>';


            // newRowAdd = document.getElementById('inputFormRowTemplate').innerHTML;
            newselect = document.getElementById('iname').innerHTML;
            newRowAdd =
            '<div id="inputFormRow">'+        
                '<li class="ingradient-li"  >'+
                '<select name="ingradient_name[]" id = "iname" class="ingradient_name" onchange="showUnit(this.value)">'+
                    newselect+
                '</select>'+
                
                    // '<select name="ingradient_name[i]" id = "iname" class="ingradient_name" onchange="showUnit(this.value)">'+
                    //     '<option disable selected> Select Ingradients</option>'+
                    //     // <?php
                    //     //     $sql = "select pid,pname from product";
                    //     //     $res = $conn->query($sql);
                    //     //     while ($row = $res->fetch_assoc()) {
                    //     //         printf(
                    //     //             '<option value="%s">%s', $row['pname'], $row['pname']
                    //     //         );
                    //     //     }

                    //     // ?>
                    //     '</select>'+
                        '<input type="text" id = "iamount" name="ingradient_amount[]" value=""  class="ingradient_amount" placeholder="Quantity" required>'+
                        '<input type="text" id="ingradient_unit_'+i+'" name="ingradient_unit[]" value=""  class="ingradient_unit" placeholder="unit">'+
                        
                 '</li>'+
            '</div>';

            

            // document.getElementById("iname").value = "";
            // document.getElementById("iamount").value = "";
            // document.getElementById("ingradient_unit").value = "";


            





            

        $('#inputFormRow').append(newRowAdd);
     });


     $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
    </script>



    <script>
        function addingradient() {
            // var table = document.getElementById("showingradient");
            // var row = table.insertRow(0);
            // var cell1 = row.insertCell(0);
            // var cell2 = row.insertCell(1);
            // var cell3 = row.insertCell(2);

            // cell2.style.textAlign = "right";

            // let ingradientName = document.getElementsByClassName("ingradient_name")[0].value;
            // let ingradientAmount = document.getElementsByClassName("ingradient_amount")[0].value;
            // let ingradientUnit = document.getElementsByClassName("ingradient_unit")[0].value;



            // cell1.innerHTML = ingradientName;
            // cell2.innerHTML = ingradientAmount;
            // cell3.innerHTML = ingradientUnit;



            // document.getElementsByClassName("ingradient_name")[0].value="";
            // document.getElementsByClassName("ingradient_amount")[0].value="";
            // document.getElementsByClassName("ingradient_unit")[0].value="";


            // document.getElementById("showingradient").innerHTML = "<input type=text id=ingradient_name name=ingradient_name[] class=ingradient_name value="+ingradientName+" disabled>"

          


        }
    </script>




<script>
    function showUnit(pname) {
        
           
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    var myobj = JSON.parse(this.responseText);
                    
                    document.getElementById("ingradient_unit_"+i).value=myobj[0];
                    }
                }

                console.log(i);
                

                    
        
        xmlhttp.open("GET","punitfill.php?pname="+pname,true);
        xmlhttp.send();
        }
</script>




     
       
        
       
        
       
       
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</html>