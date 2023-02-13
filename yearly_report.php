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
            <h1>Yearly Report</h1>

        </div>
                 

       <div class="container mx-auto">

            <form  action="yearly_report_fetch.php" method="post">

            <div class="col-3 mb-5 mx-auto">   
                <label for="selectedyear" class="form-label">Select a Year</label>
                <select name="selectedyear" class="form-select" aria-label="Default select example">
                    <option selected>Select year</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                </select>
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