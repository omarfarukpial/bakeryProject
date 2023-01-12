<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
 
    <title>Document</title>
    
</head>
<body>
    <div class="container-fliud p-4" style="font-size: x-large;">
        <nav class="navbar px-4 navbar-expand-lg navbar-light" style="background-color: azure;" >
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <img style="border-radius:50%;" height="120px" width="120px" src="cuppp.png" alt="logo"  class="img-responsive ">
                </a>

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
           
              <ul class="navbar-nav">
              <?php 
                if ($islogged == 1 && $username == 'admin') {
                  ?>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="manageingradients.php">Manage Ingredients</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="managefood.php">Manage Food</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ordershow.php">Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="report.php">Report</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Log Out</a>
                </li>
                <?php
                else if ($islogged == 1 ) {
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="foodshowcase2.php">Food Showcase</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Log Out</a>
                </li>
                <?php
                    }
                    else {
                    ?>
               <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Log In</a>
                </li>

                <?php
                    }
                  ?>


              </ul>
              
            </div>
          </nav>
          
    </div>
      
   
</body>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>