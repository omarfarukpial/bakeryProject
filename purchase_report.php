<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Purchase Report</title>
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
                width: 20%;
                background-color: #4CAF50;
                color: white;
                padding: 8px 10px;
                margin: 8px 10px;
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
      




      
            

        <div class="container-xxl inform" style="width:50%; margin: auto; ">

        <form  action="purchase_report_fetch.php" method="post">

        <div style="margin-top:20px;margin-left:20px;">   
            <label for="datetime">Start Date and Time</label><br>
            <input type="date" id="startdatetime" name="startdatetime"><br>
        </div>
        <div style="margin-top:20px;margin-left:20px;margin-bottom:20px;">  
            <label for="datetime">End Date and Time</label><br>
            <input type="date" id="enddatetime" name="enddatetime"><br>
        </div>



            <input type="submit" value="Get Report">



        </form>


        
            


                
        

               <div id="report">


               </div>
               


        </div>



        <!-- <script>
            function showReport(str) {
            
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("str1").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET","productinfo.php?q="+str,true);
                xmlhttp.send();
        
            }
        </script> -->
           

    </body>
    

    


</html>