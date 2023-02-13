<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <title>Report</title>
        <!--link css file-->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
 
    </head>
    
    <body>
        <?php
        include('navbar.php');
        ?>

       

        <div class="container text-center">
            <h1>Monthly Sales Report</h1>

        </div>
                 

       <div class="container mx-auto">

            <form  action="sales_per_month_report.php" method="post">

            <div class="col-3 mb-5 mx-auto">   
                <label for="selectedmonth" class="form-label">Select a month</label>
                <input type="month" id="selectedmonth" name="selectedmonth" class="form-control">
            </div>
            <div class="col-2 mx-auto">
                <button type="submit" class="btn btn-primary w-100">Get Report</button>
            </div>


            </form>



        </div>





    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>